<?php
require_once ROOT . 'model/BookModel.php';
require_once 'Controller.php';

class BookController extends Controller
{

    private $model;

    public function __construct()
    {
        $this->model = new BookModel();
    }

    // /book-list
    public function bookListAction()
    {
        $books = $this->model->getBooks();
        $this->render('list-book-view', [
            'books' => $books
        ]);
    }

    // /borrowed-books
    public function borrowedBookListAction()
    {
        $books = $this->model->getBorrowedBooks();
        $this->render('list-borrowed-book-view', [
            'books' => $books
        ]);
    }

    // /add-book
    public function formAddBookAction()
    {
        $this->render('borrow-book-view');
    }

    // /add-book-action
    public function addBookAction()
    {
        $this->model->addBook($_POST['title'], $_POST['author'], $_POST['isbn'], $_POST['pageCount'], $_POST['borrowed']);
        header("Location: books");
    }

    // /borrow-book
    public function formBorrowBookAction()
    {
        $this->render('add-book-view');
    }

    // /add-borrowed-action
    public function addBorrowedBookAction()
    {
        $this->model->addBook($_POST['title'], $_POST['author'], $_POST['isbn'], $_POST['pageCount'], $_POST['borrowed']);
        header("Location: borrowed-books");
    }

    // remove-book
    public function removeBookAction()
    {
        $this->model->removeBook($_POST['index']);
        header("Location: books");
    }

    // modify-book
    public function formModifyBookAction()
    {
        $livreAModifier = $this->model->getBookToModify($_POST['index']);
        $this->render('modify-book-view', [
            'livreAModifier' => $livreAModifier
        ]);
    }

    // modify-book-action
    public function modifyBookAction()
    {
        $livreAModifier = $this->model->modifyBook($_POST['index'], $_POST['title'], $_POST['author'], $_POST['isbn'], $_POST['pageCount'], $_POST['borrowed']);
        $this->render('modify-book-view', [
            'livreAModifier' => $livreAModifier
        ]);
    }

    // give-back-book
    public function giveBackBookAction()
    {
        $this->model->giveBackBook($_POST['index']);
        header("Location: borrowed-books");
    }
}
