<?php



    class User{

      public $voornaam;
      public $achternaam;
      public $geboortedatum;

        public function setUserinfo($name, $surname, $birthDate)
        {
          $this->voornaam = $name;
          $this->achternaam = $surname;
          $this->geboortedatum = $birthDate;
        }

        public function getUserinfo()
        {
          return $this->voornaam;
          return $this->achternaam;
          return $this->geboortedatum;
        }

    }


          //de waarden meegeven aan de set
          $user = new User();
          $user->setUserinfo("Kevin", "Koster", "7 oktober 2001");

          echo $user->getUserinfo();







 ?>
