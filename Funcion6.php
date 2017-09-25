<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Primo</title>
    <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    <form action="LLamar6.php" method="POST">
      <h2>Numero : </h2><input type="text" name="Numero">
                     <input type="submit" name="submit" value="Ver">
    </form>
    <div class="Container">

      <?php
      function Par($Numero1){
      $Resultado=NULL;
      if (($Numero1%2)==0) { echo "Par";}
 else {
   echo "In Par";
 }
      return $Resultado ;
 }
       ?>

    </div>

  </body>
</html>
