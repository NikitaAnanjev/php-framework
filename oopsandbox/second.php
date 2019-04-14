<?php
/**
 * Created by PhpStorm.
 * User: Nikita A
 * Date: 13/04/2019
 * Time: 23:08
 */

class User
{

    public $name;
    public $age;
//COnstructor runs when an object is intentiated
    public function __construct($name, $age)
    {

        echo __CLASS__ . ' instantiated <br>';
//        echo ' constructor run ...';
        $this->name = $name;
        $this->age = $age;

    }

    public function sayHello(){
        return $this->name . ' Says Hello';
    }

//Called when no other references to a certain object
//user for cleanup, closing connections, etc
    public function __destruct()
    {
        // TODO: Implement __destruct() method.

        echo ' distructor runs';
    }

}
$user1 = new User( 'Brad',36);
echo $user1->name . ' is ' . $user1->age . ' years old';
echo '<br>';
echo $user1->sayHello();

echo '<br>';
$user2 = new User('Val', 22);
echo $user2->name . ' is ' . $user2->age . ' years old';
echo '<br>';
echo $user2->sayHello();