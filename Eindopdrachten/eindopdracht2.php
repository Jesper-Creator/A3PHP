<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="eindopdr2.css">
    <title>Eindopdracht 2</title>
  </head>
  <body>

    <h1>Memory Game</h1>

    <div class="game">
      <div class="card">
        <a href="?number=1"><img class="front-face" src="img/one.svg" alt="One"></a>
      </div>
      <?php
        if(isset($_GET['number'])) {
          if($_GET['number'] ==  1){
            ?>
            <div class="card">
              <img class="front-face" src="img/one.svg" alt="One">
            </div>
            <?php
            }
        }
       ?>
       <div class="card">
         <a href="?number=2"><img class="front-face" src="img/two.svg" alt="One"></a>
       </div>
       <?php
         if(isset($_GET['number'])) {
           if($_GET['number'] ==  2){
             ?>
             <div class="card">
               <img class="front-face" src="img/two.svg" alt="One">
             </div>
             <?php
             }
         }
        ?>
        <div class="card">
          <a href="?number=3"><img class="front-face" src="img/three.svg" alt="One"></a>
        </div>
        <?php
          if(isset($_GET['number'])) {
            if($_GET['number'] ==  3){
              ?>
              <div class="card">
                <img class="front-face" src="img/three.svg" alt="One">
              </div>
              <?php
              }
          }
         ?>
    </div>


  </body>
</html>
