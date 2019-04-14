<?php
/**
 * Created by PhpStorm.
 * User: Nikita A
 * Date: 14/04/2019
 * Time: 00:01
 */

class User
{


    public $name;
    public $age;
    public static $minPassLength = 6;

    public static function validatePass($pass)
    {
        if (strlen($pass) >= self::$minPassLength) {
            return true;
        } else {
            return false;
        }
    }
}
$password = 'hello1';
if (User::validatePass($password)){
    echo 'Password Valid';
}else {
    echo ' password not valid';
}