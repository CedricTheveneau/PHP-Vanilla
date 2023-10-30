<?php

class AdherentView
{

    public function displayAdherents($adherents)
    {

        echo "<h1>Listing</h1>";
        echo "<table width='80%' style='margin:auto;'><tr>
            <th width='25%' style='padding:15px; text-align:center;'>Title</th>
            <th width='25%' style='padding:15px; text-align:center;'>Author</th>
            <th width='25%' style='padding:15px; text-align:center;'>ISBN</th>
            <th width='25%' style='padding:15px; text-align:center;'>Actions</th>
                </tr>";
        foreach ($adherents as $id => $adherent) {
            echo "<tr>
            <td style='padding:15px; text-align:center;'>{$adherent['lastName']}</td>
            <td style='padding:15px; text-align:center;'>{$adherent['name']}</td>
            <td style='padding:15px; text-align:center;'>{$adherent['id']}</td>";
            echo "<td style='padding:15px; text-align:center;'>{$this->displayRemoveAdherentForm($adherent)}</td>
                </tr>";
        }
        echo "</table>";
    }

    public function displayAddAdherentForm()
    {
        echo "<form method='post' action='add-adherent-action'>
                <input type='text' name='lastName' placeholder='T.'>
                <input type='text' name='name' placeholder='Cédric'>
                <input type='number' name='id' placeholder='1'>
                <input type='submit' name='add_adherent' value='Add'>
            </form>";
    }

    public function displayRemoveAdherentForm($adherent)
    {
        echo "<td>
        <form action='remove-adherent' method='post'>
            <input type='hidden' name='id' value='{$adherent['id']}'>
            <button type='submit' name='delete' class='btn btn-danger'>Delete</button>
        </form>
    </td>";
    }
}
