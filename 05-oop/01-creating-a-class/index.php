<?php

class User
{
    // Properties
    public $name;
    public $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    // Methods
    public function login()
    {
        echo $this->name . 'logged in';
    }
}

// Instantiate a new object 
$user1 = new User('John Doe', 'Johndoe@gmail.com');

// $user1->name = 'John Doe';
// $user1->email = 'Johndoe@gmail.com';

$user1->login();

$user2 = new User('Marry jane', 'Marryjane@gmail.com');
// $user2->name = 'Marry jane';
echo '<br>';
$user2->login();
// var_dump($user2);

$user3 = new User('shara', 'lona@gmail,com');

echo '<br>';
$user3->login();


class Books
{
    public $title;
    public $category;

    public function __construct($title, $category)
    {
        $this->title = $title;
        $this->category = $category;
    }

    public function addBook($title, $category)
    {

        echo 'title of the book is' . $title . 'under the category of:' . $category . '';
    }
}

$store1 = new Books('Old Age Tie', 'John Ekri');
$store1->addBook();

// $ViewBooks->addBook();