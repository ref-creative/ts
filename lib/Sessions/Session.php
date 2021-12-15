<?php

class Session {

    static $session;

    public static function start($user){
        if($user != "")
        {
            $_SESSION["user"] = $user;
            $_SESSION["login"] = true;
        }
        return static::$session;
    }


}

$_SESSION["user"] = $_SESSION["user"] == "" ? rand(1000,9999) : $_SESSION["user"];

