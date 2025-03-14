<?php

class User
{
  // Properties
  public $name;
  public $email;

  // using private 
  //private $status = 'active'; 

  // using protected 
  protected $status = 'active';

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  // Methods
  public function login()
  {
    echo $this->name . ' logged in <br>';
  }

  // show private in public
  public function getStatus()
  {
    echo $this->status;
  }
  // show private in public
  public function setStatus($status)
  {
    $this->status = $status;
  }
}

// Instantiate a new object
$user1 = new User('John Doe', 'john@gmail.com');

$user1->login();

$user2 = new User('Jane Doe', 'jane@gmail.com');

$user2->login();

$user2->setStatus('inactive');
$user2->getStatus();
$user1->status;

// var_dump($user2);   