<?php

  class Card {
    private $number;

    public function __construct($number){
      $this->number = $number;
    }

    public function getCard(){
      return "<img src=\"img/card" . $this->number . ".svg" . "\" height=\"30px\">";
    }

  }
 ?>
