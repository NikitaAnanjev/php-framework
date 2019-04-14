<?php
/**
 * Created by PhpStorm.
 * User: Nikita A
 * Date: 12/04/2019
 * Time: 20:12
 */
        //namespace user;
        //Define a class
class User
{
        //Properties (attributes)
//public $name = 'Brad';
public $name;
        //Methods (functions)



    public function sayHello(){
        return $this->name . ' Says Hello';
    }
}



function debug($str)
{
    echo '<pre>';
    var_dump($str);
    echo '</pre>';
    exit;
}

//debug($name);
        //instetiate a user object from the user class
$user1 = new User();
$user1->name = 'Bradly';
echo $user1->name;
echo '<br>';
echo $user1->sayHello();


echo '<br>';
// Create new user

$user2 = new User();
$user2->name = 'Viktor';
echo $user2->name;
echo '<br>';
echo $user2->sayHello();
