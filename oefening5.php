<?php

  class User{

    public $name;
    public $surname;
    public $birthDate;

      public function __construct($name, $surname, $birthDate) {

        $this->name = $name;
        $this->surname = $surname;
        $this->birthDate = $birthDate;

      }


  }

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Oefening 5</title>
  </head>
  <body>

    <?php

      $user1 = new User("Kevin", "Koster", "7 oktober 2001");
      echo $user1->name;
      echo " ". $user1->surname . ",";
      echo " ". $user1->birthDate;

     ?>

  </body>
</html>
