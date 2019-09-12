<?php
  class Card {
    private $number;
    private $state = "closed";
    public function __construct($number){
      $this->number = $number;
    }
    public function getHTML(){
      switch ($this->state) {
        case 'open':
          return "<img src=\"img/card" . $this->number . ".svg" . "\" height=\"30px\">";
          break;
        case 'guessed':
          return "<img class=\"guessed\" src=\"img/card" . $this->number . ".svg" . "\" height=\"30px\">";
          break;

        default:
          return "<img src=\"img/card_back.jpg" . "\" height=\"30px\">";
          break;
      }
      // if($this->state == "open" || $this->state == "guessed" ){
      //   return "<img src=\"img/card" . $this->number . ".svg" . "\" height=\"30px\">";
      // } else {
      //   return "<img src=\"img/card_back.jpg" . "\" height=\"30px\">";
      // }
    }

    public function turn(){
      if($this->state == "closed"){
        $this->state = "open";
      } else {
        $this->state = "closed";
      }
    }

    public function getState(){
      return $this->state;
    }

    public function setState($state){
      $this->state = $state;
    }

    public function getNumber(){
      return $this->number;
    }
  }
 ?>
