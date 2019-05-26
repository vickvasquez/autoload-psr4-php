<?php

namespace App\Controllers;

use App\Models;
use App\Views;

class Users
{
    private $model;
    private $view;

    public function __construct()
    {
        if (!$this->model) {
            $this->model = new Models\Users();
        }

        if (!$this->view) {
            $this->view = new Views\Users();
        }
    }

    public function getUser() {
        $data = $this->model->findById(3);
        $this->view->renderDetail($data);

    }
}