<?php

  class User{

    public $username;

    public function setUsername($name) {
      $this->$username = $name;
    }

    public function getUsername() {
      return $this->$username;
    }
  }

// code om de username te 'setten'
$user = new User();
$user->setUsername("Kevin");

echo $user->getUsername();

 ?>
