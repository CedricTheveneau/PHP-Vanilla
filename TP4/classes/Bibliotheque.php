<?php

require_once 'Livre.php';

class Bibliotheque
{
    public static function addBook($content)
    {
        $_SESSION['books'][] = $content;
    }

    public static function getBooks()
    {
        return isset($_SESSION['books']) ? $_SESSION['books'] : array();
    }

    public static function deleteBook($isbn)
    {
        if (isset($_SESSION['books'])) {
            foreach ($_SESSION['books'] as $arrayKey => $book) {
                if ($book->getISBN() === $isbn) {
                    unset($_SESSION['books'][$arrayKey]);
                    return;
                }
            }
        }
    }
}
