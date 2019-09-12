<?php
class Game {
  //Hier wordt de array aangemaakt.
  private $cards = array();
  private $score = 0;
  //Hier worden de kaarten (2x8 kaarten), in de array gepushed.
  function __construct($new){
    session_start();
    if(isset($_SESSION['game']) && !$new){
      $this->cards = $_SESSION['game'];
    } else {
      for($i=1;$i<9;$i++){
        array_push($this->cards, new Card($i));
        array_push($this->cards, new Card($i));
      }
    }
  }
  public function getCard($index){
    return $this->cards[$index];
  }

  public function countCards(){
    return count($this->cards);
  }

  public function saveState(){
    $_SESSION['game'] = $this->cards;
  }

  public function turnCard($index){
    $firstopen = null;
    $this->cards[$index]->turn();
    for ($i=0; $i < $this->countCards(); $i++) {
      if ($this->cards[$i]->getState()=="open") {
        if (is_null($firstopen)) {
          $firstopen = $this->cards[$i];
        } else {
          if ($this->cards[$i]->getNumber()==$firstopen->getNumber()) {
            $this->cards[$i]->setState("guessed");
            $firstopen->setState("guessed");
          } else {
            $this->cards[$i]->turn();
            $firstopen->turn();
          }
        }
      }
    }
  }




}

 ?>
