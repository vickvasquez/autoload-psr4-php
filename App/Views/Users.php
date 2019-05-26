<?php

namespace App\Views;

class Users
{

    public function renderDetail($data) {
        echo "<h1>Datos del usuario:</h1>";
        echo sprintf("Nombre: %s<br/>", $data['name']);
        echo sprintf("Apellidos: %s<br/>", $data['lastName']);

        echo sprintf("Nombre de usuario: %s<br/>", $data['username']);
        echo sprintf("Id: %s<br/>", $data['id']);

    }
}