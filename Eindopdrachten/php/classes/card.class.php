<?php
  //???????????????????????????????????
  class Card {
    private $number;
    private $state = "closed";
    //?????????????????????????????????
    public function __construct($number){
      $this->number = $number;
    }
    //?????????????????????????????????
    public function getHTML(){
      if($this->state == "open" || $this->state == "guessed" ){
        return "<img src=\"img/card" . $this->number . ".svg" . "\" height=\"30px\">";
      } else {
        return "<img src=\"img/card_back.jpg" . "\" height=\"30px\">";
      }
    }

    public function turn(){
      if($this->state == "closed"){
        $this->state = "open";
      } else {
        $this->state = "closed";
      }
    }

  }
 ?>
