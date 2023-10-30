<?php

class Livre
{

    public $name;
    public $author;
    protected $isbn;
    public $pageCount;

    public function __construct($name, $author, $isbn, $pageCount)
    {
        $this->name = $name;
        $this->author = $author;
        $this->isbn = $isbn;
        $this->pageCount = $pageCount;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        return $this->name = $name;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        return $this->author = $author;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }

    public function setIsbn($isbn)
    {
        return $this->isbn = $isbn;
    }

    public function getPageCount()
    {
        return $this->pageCount;
    }

    public function setPageCount($pageCount)
    {
        return $this->pageCount = $pageCount;
    }
}
