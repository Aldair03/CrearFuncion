<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Promedio</title>
    <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    <div class="Container">
      <h2>Precio de el Aceite</h2>
      <form action="LLamar3.php" method="post">
        <h2>Olimpica</h2><input type="text" name="OLIM">
        <h2>Exito</h2><input type="text" name="EX">
        <h2>Ara</h2><input type="text" name="ARA">
        <h2>Funcion</h2><input type="text" name="Funcion">
        <input type="submit" name="submit" value="Ver">
      </form>
    <?php
    function Numero($OLIM,$EX,$ARA,$Prom){
    $Resultado=NULL;
    if ($Funcion=="Promedio"){
      $Prom=($OLIM+$EX+$ARA)/3;
    }
   return $Respuesta;
  }
     ?>
        </div>
  </body>
</html>
