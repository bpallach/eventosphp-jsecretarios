<?php

require_once('../models/user_model.php');

$data = [
    'username' => trim($_POST["username"]),
    'password' => trim($_POST["password"]),
    // 'password' => md5(trim($_POST["password"])),
];

$user = new user_model;
$login = $user->userAuthentication($data);
