<?php

class ListingView
{

    public function displayListing($listings)
    {

        echo "<h1>Listing</h1>";
        foreach ($listings as $id => $listing) {
            echo "<tr>
            <td><img src='{$listing['image']}' alt='{$listing['make']} {$listing['model']}' width='100'></td>
            <td>{$listing['make']}</td>
            <td>{$listing['model']}</td>
                </tr>";
            $this->displayRemoveTaskForm($listing);
            echo "<br>";
        }
        echo "<button><a href='add-listing'>Add a car to the listing</a></button>";
    }

    public function displayAddListingForm()
    {
        echo "<form method='post' action='add-listing-action'>
                <input type='text' name='make' placeholder='Toyota'>
                <input type='text' name='model' placeholder='Supra'>
                <input type='text' name='image' placeholder='https://i.ebayimg.com/images/g/OroAAOSwTFxdd1hf/s-l1200.jpg'>
                <input type='submit' name='add_listing' value='Add'>
            </form>";
    }

    public function displayRemoveTaskForm($listing)
    {
        echo "<td>
        <form action='remove-listing' method='post'>
            <input type='hidden' name='model' value='{$listing['model']}'>
            <button type='submit' name='delete' class='btn btn-danger'>Delete</button>
        </form>
    </td>";
    }
}
