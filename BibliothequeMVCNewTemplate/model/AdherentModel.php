<?php

class AdherentModel
{

    public function __construct()
    {
        if (!isset($_SESSION['adherents'])) {
            $_SESSION['adherents'] = [];
        }
    }

    public function getAdherents()
    {
        return $_SESSION['adherents'];
    }

    public function addAdherent($lastName, $name, $id)
    {
        $_SESSION['adherents'][] = ['lastName' => $lastName, 'name' => $name, 'id' => $id];
    }

    public function removeAdherent($id)
    {
        foreach ($_SESSION['adherents'] as $id => $adherent) {
            if ($id == $_POST['index']) {
                unset($_SESSION['adherents'][$id]);
            }
        }
    }
}
