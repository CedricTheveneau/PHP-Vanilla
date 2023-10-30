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
        $borrowed = [];
        foreach ($_SESSION['books'] as $key => $book) {
            if ($book['borrowed'] !== null) {
                $borrowed[] = $book;
            }
        }
        return $_SESSION['books'];
    }

    public function addBook($title, $author, $isbn, $pageCount)
    {
        $_SESSION['books'][] = ['title' => $title, 'author' => $author, 'isbn' => $isbn, 'pageCount' => $pageCount, 'borrowed' => 'yes'];
    }

    public function borrowBook($title, $author, $isbn, $pageCount)
    {
        $_SESSION['books'][] = ['title' => $title, 'author' => $author, 'isbn' => $isbn, 'pageCount' => $pageCount, 'borrowed' => 'yes'];
    }

    public function removeBook($isbn)
    {
        foreach ($_SESSION['books'] as $id => $element) {
            if ($element['isbn'] == $isbn) {
                unset($_SESSION['books'][$id]);
            }
        }
    }

    public function giveBackBook($isbn)
    {
        foreach ($_SESSION['books'] as $id => $element) {
            if ($element['isbn'] == $isbn && $element['borrowed'] !== null) {
                $element['borrowed'] = null;
            }
        }
    }
}
