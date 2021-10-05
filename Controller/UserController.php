<?php

use App\Model\Entity\User;
use App\Model\Manager\UserManager;

require_once "../View/require.php";

if(isset($_GET['action'])) {

    if($_GET['action'] === "create") {

        if(isset($_POST['userName'], $_POST['password'])) {
            $username = $_POST['userName'];
            $password = password_hash(strip_tags($_POST['password']), PASSWORD_BCRYPT);

            UserManager::add((new User(null, $username, $password)));
            header("Location: /index.php?error=0");
        }
    }
}

/*if(isset($_GET['action'])) {
    if($_GET['action'] === "login") {
        if(isset($_POST['username'], $_POST['password'])) {

        }
    }
}*/