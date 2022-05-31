<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/
class User {
  //Properties are attributes that belongs to a class

  // Access Modifiers: public, private, protected
  // public - can be accessed from anywhere
  // private - can only be accessed from inside the class
  // protected - can only be accessed from inside the class and by inheriting classes

  public $name;
  public $email;
  public $password;

  // A constructor is a methodnythat runs automatically when an bject is created
public function __construct($name, $email, $password){
  $this -> name = $name;
  $this -> email = $email;
  $this -> password = $password;
}
  //Method iw a function that belongs to a class
  function reset_name($name){
    $this->name = $name;
  }
 // Get all names
  function get_name(){
    return $this->name;
  }
}

//Initiates user objects
// $user1 = new User();
// $user2 = new User();

// $user1 -> reset_name("Egbetayo");
// $user2 -> reset_name("Braddy");
// $user1 -> email = "damilolaegbetayo12@gmail.com";
// $user1 -> password = "123456";
// var_dump($user1);

// It fetches all names that has the attributes of name
// echo $user1 -> name;
// echo $user2 -> name;

$user1 = new User('Egbetayo', 'damilolaegbetayo12@gmail.com', '123456');
$user2 = new User('Braddy', 'braddy@gmail.com', '13567456');

// echo $user1 ->email;
// echo $user2 ->name;

// Inheritance

class Employee extends User {
  public function __construct($name, $email, $password, $title)
  {
    parent::__construct($name, $email, $password);
    $this -> title = $title;
  }
  public function get_title(){
    return $this->title;
  }
}

$employee1 = new Employee('Sara','sara@gmail.com', '35799', 'Manager');

echo $employee1->get_title();

// class User {
  // Properties are just variables that belong to a class.
  
  // private $name;
  // public $email;
  // public $password;

  // The constructor is called whenever an object is created from the class.
  // We pass in properties to the constructor from the outside.
  // public function __construct($name, $email, $password) {
  //   // We assign the properties passed in from the outside to the properties we created inside the class.
  //   $this->name = $name;
  //   $this->email = $email;
  //   $this->password = $password;
  // }

  // Methods are functions that belong to a class.
  // function setName() {
  //   $this->name = $name;
  // }

  // function getName() {
  //   return $this->name;
  // }

  // function login() {
  //   return "User $this->name is logged in.";
  // }

  // Destructor is called when an object is destroyed or the end of the script.
//   function __destruct() {
//     echo "The user name is {$this->name}.";
//   }
// }

// Instantiate a new user
// $user1 = new User('Brad', 'brad@gmail.com', '123456');
// echo $user1->getName();
// echo $user1->login();

// Add a value to a property
// $user1->name = 'Brad';

// var_dump($user1);
// echo $user1->name;

/* ----------- Inheritence ---------- */

/*
  Inheritence is the ability to create a new class from an existing class.
  It is achieved by creating a new class that extends an existing class.
*/

// class employee extends User {
//   public function __construct($name, $email, $password, $title) {
//     parent::__construct($name, $email, $password);
//     $this->title = $title;
//   }

//   public function getTitle() {
//     return $this->title;
//   }
// }

// $employee1 = new employee('John','johndoe@gmail.com','123456','Manager');
// echo $employee1->getTitle();