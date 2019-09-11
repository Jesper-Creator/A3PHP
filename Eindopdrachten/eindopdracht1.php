<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="master.css">
    <title>Eindopdracht 1 PHP</title>
  </head>
  <body>

<img src="jeppiehome.png" alt="">

<h1>Kenmerken:</h1>

<?php


  class Huis {

      private $straatnaam;
      private $huisnummer;
      private $plaats;
      private $oppervlakte;
      private $kamers;
      private $toiletten;
      private $verwarming;
      private $type;
      private $woz;
      private $belasting = 0;
      private $kamerbelasting = 0;


      private function __construct($straatnaam, $huisnummer, $plaats, $oppervlakte, $kamers, $toiletten, $verwarming, $type, $woz){
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

      private function getInfo(){
        return "Straatnaam: ".$this->straatnaam."<br>Huisnummer: ".$this->huisnummer."<br>Plaats: ".$this->plaats."<br>Oppervlakte: ".$this->oppervlakte.
        "<br> Aantal kamers: ".$this->kamers."<br>Aantal toiletten: ".$this->toiletten."<br> Verwarming: ".$this->verwarming."<br> Type verwarming: ".
        $this->type."<br> WOZ-waarde: ".$this->woz;
      }

      private function wozBelasting(){
        if ($this->woz < 100000) {
          return $this->belasting = 600;
        } elseif ($this->woz > 200000) {
          return $this->belasting = 6000;
        } else {
          return $this->belasting = 2000;
        }
      }

      private function kamerBelasting(){
        if ($this->kamers < 2) {
          return $this->kamerbelasting = 100;
        } elseif ($this->kamers > 3) {
          return $this->kamerbelasting = 800;
        } else {
          return $this->kamerbelasting = 300;
        }
      }

      private function totaalBelasting(){
        return $this->wozBelasting()+$this->kamerBelasting();
      }

  }

  $huis = new Huis("Rijksweg", 56, "Dieverbrug", "526m²", 8, 2, "ja", "CV-ketel", 387000);
  echo $huis->getInfo();
  echo "<br>";
  echo "Te betalen belasting: ". $huis->totaalBelasting();






 ?>

   </body>
 </html>
