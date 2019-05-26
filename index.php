<?php

use App\Controllers\Users;
use Crons\Email;

require 'vendor/autoload.php';

$email = new Email();
$user = new Users();

$user->getUser();

$email->sendEmail();
