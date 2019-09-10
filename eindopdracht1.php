<?php


  class Huis {

      public $straatnaam;
      public $huisnummer;
      public $plaats;
      public $oppervlakte;
      public $kamers;
      public $toiletten;
      public $verwarming;
      public $type;
      public $woz;
      public $belasting;


      public function __construct($straatnaam, $huisnummer, $plaats, $oppervlakte, $kamers, $toiletten, $verwarming, $type, $woz){
        $this->straatnaam = $straatnaam;
        $this->huisnummer = $huisnummer;
        $this->plaats = $plaats;
        $this->oppervlakte = $oppervlakte;
        $this->kamers = $kamers;
        $this->toiletten = $toiletten;
        $this->verwarming = $verwarming;
        $this->type = $type;
        $this->woz = $woz;
      }

      public function getInfo(){
        return "Straatnaam: ".$this->straatnaam."<br>Huisnummer: ".$this->huisnummer."<br>Plaats: ".$this->plaats."<br>Oppervlakte: ".$this->oppervlakte.
        "<br> Aantal kamers: ".$this->kamers."<br>Aantal toiletten: ".$this->toiletten."<br> Verwarming: ".$this->verwarming."<br> Type verwarming: ".
        $this->type."<br> WOZ-waarde: ".$this->woz;
      }

      public function calcBelasting(){
        if ($this->woz < 100000) {
          $belasting + 600;
        } elseif ($this->woz > 200000) {
          $belasting + 6000;
        } else {
          $belasting + 2000;
        }
        return $this->belasting = $belasting;
      }

  }

  $huis = new Huis("Rijksweg", 56, "Dieverbrug", "526m²", 8, 2, "ja", "CV-ketel", 387000);
  echo $huis->getInfo();
  echo $huis->calcBelasting();






 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Jeppie zijn huis</title>
   </head>
   <body>
     <img style="float: right;" src="jeppiehome.png" alt="">
   </body>
 </html>
