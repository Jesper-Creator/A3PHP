<?php

  class User{

    public $username;
    public $achternaam;
    public $geboortedatum;

    public function setUserinfo($name, $surname, $birth) {
      $this->$username = $name;
      $this->$achternaam = $surname;
      $this->$geboortedatum = $birth;
    }

    public function getUsernameinfo() {
      return $this->$username;
      return $this->$achternaam;
      return $this->$geboortedatum;
    }
  }

// code om de username te 'setten'
$user = new User();
$user->setUserinfo("Kevin", "Koster", "7 oktober 2001");

echo $user->getUsernameinfo();

 ?>
