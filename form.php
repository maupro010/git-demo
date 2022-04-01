<?php

class User
{
    private $username;
    private $password;
    private static $passwordLength = 5;

    public static function getPasswordLength()
    {
        return self::$passwordLength;
    }
}

echo User::getPasswordLength();
//git -demo
