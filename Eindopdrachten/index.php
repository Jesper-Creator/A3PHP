<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/master.css">
    <title></title>
  </head>
  <body>
    <?php
      //Deze require verwijst naar de autoload.
      require_once("php/inc/default.inc.php");

      //Start een nieuwe Game
      //Start nieuw spel als end is aangeklikt
      if(isset($_GET['end'])){
        $game = new Game(true);
      } else {
        $game = new Game(false);
      }
      //klikken kaart verwerken
      if(isset($_GET['card'])){
        $game->turnCard($_GET['card']);
      }
      //zet kaarten op pagina
      for($c=0; $c < $game->countCards(); $c++){
        echo "<a href=\"?card=$c\">" . $game->getCard($c)->getHTML() . "</a>";
      }
      //sla huidige game op
      $game->saveState();
    ?>

    <a href="?end"><button type="button" name="button">New</button></a>

  </body>
</html>
