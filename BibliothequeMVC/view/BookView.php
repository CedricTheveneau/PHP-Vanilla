<?php

class BookView
{

    public function displayBooks($books)
    {

        echo "<h1>Listing</h1>";
        echo "<table width='80%' style='margin:auto;'><tr>
            <th width='20%' style='padding:15px; text-align:center;'>Title</th>
            <th width='20%' style='padding:15px; text-align:center;'>Author</th>
            <th width='20%' style='padding:15px; text-align:center;'>ISBN</th>
            <th width='20%' style='padding:15px; text-align:center;'>Number fo pages</th>
            <th width='20%' style='padding:15px; text-align:center;'>Actions</th>
                </tr>";
        foreach ($books as $id => $book) {
            echo "<tr>
            <td style='padding:15px; text-align:center;'>{$book['title']}</td>
            <td style='padding:15px; text-align:center;'>{$book['author']}</td>
            <td style='padding:15px; text-align:center;'>{$book['isbn']}</td>
            <td style='padding:15px; text-align:center;'>{$book['pageCount']}</td>";
            echo "<td style='padding:15px; text-align:center;'>{$this->displayRemoveBookForm($book)}</td>
                </tr>";
        }
        echo "</table>";
    }

    public function displayBorrowedBooks($books)
    {

        echo "<h1>Listing</h1>";
        echo "<table width='80%' style='margin:auto;'><tr>
            <th width='20%' style='padding:15px; text-align:center;'>Title</th>
            <th width='20%' style='padding:15px; text-align:center;'>Author</th>
            <th width='20%' style='padding:15px; text-align:center;'>ISBN</th>
            <th width='20%' style='padding:15px; text-align:center;'>Number fo pages</th>
            <th width='20%' style='padding:15px; text-align:center;'>Actions</th>
                </tr>";
        foreach ($books as $id => $book) {
            echo "<tr>
            <td style='padding:15px; text-align:center;'>{$book['title']}</td>
            <td style='padding:15px; text-align:center;'>{$book['author']}</td>
            <td style='padding:15px; text-align:center;'>{$book['isbn']}</td>
            <td style='padding:15px; text-align:center;'>{$book['pageCount']}</td>";
            echo "<td style='padding:15px; text-align:center;'>{$this->displayGiveBackBookForm($book)}</td>
                </tr>";
        }
        echo "</table>";
    }

    public function displayAddBookForm()
    {
        echo "<form method='post' action='add-book-action'>
                <input type='text' name='title' placeholder='SHY'>
                <input type='text' name='author' placeholder='Bukimi Miki'>
                <input type='number' name='isbn' placeholder='12345'>
                <input type='number' name='pageCount' placeholder='254'>
                <input type='submit' name='add_book' value='Add'>
            </form>";
    }

    public function displayBorrowBookForm()
    {
        echo "<form method='post' action='add-book-action'>
                <input type='text' name='title' placeholder='SHY'>
                <input type='text' name='author' placeholder='Bukimi Miki'>
                <input type='number' name='isbn' placeholder='12345'>
                <input type='number' name='pageCount' placeholder='254'>
                <input type='submit' name='add_book' value='Add'>
            </form>";
    }

    public function displayRemoveBookForm($book)
    {
        echo "<td>
        <form action='remove-book' method='post'>
            <input type='hidden' name='isbn' value='{$book['isbn']}'>
            <button type='submit' name='delete' class='btn btn-danger'>Delete</button>
        </form>
    </td>";
    }

    public function displayGiveBackBookForm($book)
    {
        echo "<td>
        <form action='give-back-book' method='post'>
            <input type='hidden' name='isbn' value='{$book['isbn']}'>
            <button type='submit' name='giveBack' class='btn btn-info'>Give back</button>
        </form>
    </td>";
    }
}
