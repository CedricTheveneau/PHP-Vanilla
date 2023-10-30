<?php

class BookModel
{

    public function __construct()
    {
        if (!isset($_SESSION['books'])) {
            $_SESSION['books'] = [];
        }
    }

    public function getBooks()
    {
        return $_SESSION['books'];
    }

    public function getBorrowedBooks()
    {
        $borrowedBooks = [];
        foreach ($_SESSION['books'] as $key => $book) {
            if ($book['borrowed'] !== null) {
                $borrowedBooks[] = $book;
            }
        }
        return $borrowedBooks;
    }

    public function addBook($title, $author, $isbn, $pageCount, $borrowed = null)
    {
        $_SESSION['books'][] = ['title' => $title, 'author' => $author, 'isbn' => $isbn, 'pageCount' => $pageCount, 'borrowed' => $borrowed];
    }

    public function removeBook($id)
    {
        foreach ($_SESSION['books'] as $id => $book) {
            if ($id == $_POST['index']) {
                unset($_SESSION['books'][$id]);
            }
        }
    }

    public function getBookToModify($id)
    {
        foreach ($_SESSION['books'] as $id => $book) {
            if ($id == $_POST['index']) {
                return $book;
            }
        }
    }

    public function modifyBook($id, $title, $author, $isbn, $pageCount, $borrowed = null)
    {
        $_SESSION['books'][$id] = ['title' => $title, 'author' => $author, 'isbn' => $isbn, 'pageCount' => $pageCount, 'borrowed' => $borrowed];
    }

    public function giveBackBook($id)
    {
        foreach ($_SESSION['books'] as $id => $book) {
            if ($id == $_POST['index']) {
                $book['borrowed'] = null;
            }
        }
    }
}
