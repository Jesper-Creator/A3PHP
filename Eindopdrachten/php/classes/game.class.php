<?php
class Game {

  private $cards = array();

  function __construct(){
    for($i=1;$i<9;$i++){
      array_push($this->cards, new Card($i));
      array_push($this->cards, new Card($i));
    }
  }

  public function getCards(){
    return $this->cards;
  }

  public function getCard($index){
    return $this->cards[$index];
  }
}

 ?>
