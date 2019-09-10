<?php

  //probeer alle code uit inheritance uit.


  class User {
    protected $_username;

      public function __construct($name) {
        $this->_username = $name;
      }

      public function getUsername() {
        return $this->_username;
      }
  }

  class Customer extends User {
    private $_customerId;

    public function __construct($username, $customerId) {
      $this->_username = $username;
      $this->_customerId = $customerId;
    }

    public function getUsername() {
      return "De gebruikersnaam is:" .$this->_username;
    }
  }

  $customer = new Customer('Pieter', 1);
  echo $customer->getUsername();
 ?>
