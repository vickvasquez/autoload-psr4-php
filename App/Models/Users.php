<?php

namespace App\Models;

class Users
{

    public function findById($id) {
        $data = [];
        $data["name"] = "Vick";
        $data["lastName"] = "Vasquez";
        $data["age"] = 28;
        $data["username"] = "_vick";
        $data["id"] = $id;
        return $data;
    }

}