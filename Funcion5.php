<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Convertir</title>
    <link rel="stylesheet" href="Style.css">
  </head>
  <body>
  <h2>Temperatura de Grados Celsius</h2>
    <div class="Container">
    <form class="" action="LLamar5.php" method="POST">
      <h2>Numero : </h2><input type="text" name="Numero">
      <h2>Convertir a : </h2><input type="text" name="Numero2">
        <input type="submit" name="submit" value="Ver">
    </form>
    <?php
    function Covertir ($Numero1,$fahrenhei){
    $Resultado=NULL;
    if ($fahrenhei=="Fahrenheit") { $Resultado=($Numero1*9/5)+32;}
    if ($fahrenhei=="Kelvin") { $Resultado=273+$Numero1;}
    return $Resultado ;
}
     ?>


  </div>
  </body>
</html>
