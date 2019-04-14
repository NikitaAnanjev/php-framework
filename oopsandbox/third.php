<?php
/**
 * Created by PhpStorm.
 * User: Nikita A
 * Date: 13/04/2019
 * Time: 23:24
 */

class User
{
//Private only accessable inside of the class
    private $name;
    private $age;


    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;

    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
      $this->name = $name;
    }

// __get MAGIC METHOD


public function __get($property){
        if(property_exists($this, $property)){
            return $this->$property;
        }
}


// __set MAGIC METHOD
    public function __set($property, $value){

        if(property_exists($this, $property)){
          $this->$property = $value;
        }
            return $this;
    }


}


$user1 = new User('John', 40);

//$user1->name = 'JEff';
//echo $user1->name;


echo $user1->setName('jecy');
echo $user1->getName();

$user1->__set('age', 43);
echo $user1->__get('name');
echo $user1->__get('age');


//class Customer extends User{
//
//}