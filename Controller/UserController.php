<?php

use App\Model\Entity\User;
use App\Model\Manager\UserManager;

require_once "../View/require.php";

if(isset($_GET['action'])) {

    if($_GET['action'] === "create") {

        if(isset($_POST['userName'], $_POST['password'])) {
            $username = filter_var($_POST['userName'], FILTER_SANITIZE_STRING);
            $password = password_hash(strip_tags($_POST['password']), PASSWORD_BCRYPT);

            if(UserManager::search($username) === null) {
                UserManager::add((new User(null, $username, $password)));
                header("Location: /index.php?error=0");
            }
            else {
                header("Location: /index.php?error=1");
            }
        }
    }
}

if(isset($_GET['action'])) {
    if($_GET['action'] === "connection") {
        if(isset($_POST['userName'], $_POST['password'])) {
            $username = filter_var($_POST['userName'], FILTER_SANITIZE_STRING);
            $password = strip_tags($_POST['password']);

            if(($user = UserManager::search($username)) !== null) {
                if(password_verify($password, $user->getPassword())) {
                    $_SESSION['id'] = $user->getId();
                    $_SESSION['role'] = $user->getRole();
                    header("Location: /index.php?error=2");
                }
            }
        }
    }
}

if(isset($_GET['action'])) {
    if($_GET['action'] === "disconnected") {
        if(isset($_SESSION['id'], $_SESSION['role'])) {
            session_get_cookie_params();
            $_SESSION['id'] = '';
            $_SESSION['role'] = '';
            session_destroy();
            header("Location: /index.php?error=3");
        }
    }
}