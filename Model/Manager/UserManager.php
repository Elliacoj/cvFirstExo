<?php

namespace App\Model\Manager;

use App\Model\Classes\DB;
use App\Model\Entity\User;
use App\Model\Traits\TraitsManager;

require_once $_SERVER['DOCUMENT_ROOT'] . "/View/require.php";

class UserManager {
    use TraitsManager;

    /**
     * Add a value into Dl table
     * @param User $user
     * @return bool
     */
    public static function add(User $user):bool {
        $username = $user->getUsername();
        $password = $user->getPassword();

        $stmt = DB::getInstance()->prepare("INSERT INTO ellia_user (username, password) VALUES(:username, :password)");

        $stmt->bindValue("username", $username);
        $stmt->bindValue("password", $password);
        return $stmt->execute();
    }

    /**
     * Return an array of all data Dl
     * @param $username
     * @return User|null
     */
    public static function search($username):?User {
        $stmt = DB::getInstance()->prepare("SELECT * FROM ellia_user WHERE username = '$username'");
        $user = null;
        if($stmt->execute() && $userData = $stmt->fetch()){
            $user = new User($userData['id'], $userData['username'], $userData['password'], $userData['role']);
        }
        return $user;
    }
}