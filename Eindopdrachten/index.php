<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      //Deze require verwijst naar de autoload.
      require_once("php/inc/default.inc.php");

      //Start een nieuwe Game
      $game = new Game();
      //???????????????????????????????????????????????
      for($c=0; $c < count($game->getCards()); $c++){
        echo $game->getCard($c)->getCard() . "<br>";
      }
    ?>

  </body>
</html>