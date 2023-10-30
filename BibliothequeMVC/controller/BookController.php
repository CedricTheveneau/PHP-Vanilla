<?php

require_once $dir . 'model/BookModel.php';
require_once $dir . 'view/BookView.php';

class BookController
{

    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new BookModel();
        $this->view = new BookView();
    }

    // /add-book-action
    public function addBookAction()
    { // Ajout d'un livre
        $this->model->addBook($_POST['title'], $_POST['author'], $_POST['isbn'], $_POST['pageCount']);
        header("Location: books");
        die;
    }

    public function removeBookAction()
    { // Supprimer un livre
        $this->model->removeBook($_POST['isbn']);
        header("Location: books");
    }

    public function giveBackBookAction()
    { // Rendre un livre
        $this->model->giveBackBook($_POST['isbn']);
        header("Location: borrowed-books");
    }

    // public function modifyBookAction()
    // { // Modifier un livre
    //     $this->model->removeBook($_POST['model']);
    //     header("Location: books");
    // }

    // /books
    public function bookListAction()
    { // Permet de lister nos livres

        $books = $this->model->getBooks();
        $this->view->displayBooks($books);
    }

    // /borrowed-books
    public function borrowedBookListAction()
    { // Permet de lister nos livres empruntés

        $borrowedBooks = $this->model->getBorrowedBooks();
        $this->view->displayBorrowedBooks($borrowedBooks);
    }

    // /add-book
    public function formAddBookAction()
    {
        $this->view->displayAddBookForm();
    }

    public function formBorrowBookAction()
    {
        $this->view->displayBorrowBookForm();
    }

    public function borrowBookAction()
    { // Ajout d'un livre
        $this->model->borrowBook($_POST['title'], $_POST['author'], $_POST['isbn'], $_POST['pageCount']);
        header("Location: books");
        die;
    }

    // /modify-book
    // public function formModifyBookAction()
    // {
    //     $this->view->displayAddBookForm();
    // }
}
