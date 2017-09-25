<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cuadrado de Un Numero</title>
    <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    <div class="Container">
    <h2>Cuadrado De un Numero</h2>
    <form action="LLamar2.php" method="POST">
      <h2>Numero</h2><input type="text" name="Numero">
      <input type="submit" name="submit" value="Ver"><br>
    </form>
    <?php
       function Cuadrado($Num){
         $Respuesta=pow($Num, 2);
         return $Respuesta;
         }
     ?>

</div>
  </body>
</html>
