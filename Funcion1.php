<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Saludo</title>
    <link rel="stylesheet" href="Style.css">
  </head>
  <body>
    <div class="Container">

    <h2>Ingrese culaquier de los dos saludos 1 - 2 </h2>
    <form action="LLamar1.php" method="POST">
     <h2>Numero</h2><input type="text" name="Numero">
     <input type="submit" name="submit" value="Ver">
    </form>
    <?php
      function Saludo ($Nombre){
      if ($Nombre=="1") {
        echo "Hola , Que tal ?";
      }
      if ($Nombre=="2") {
        echo "Hola , Como has estado?";
      }
}
     ?>
         </div>
  </body>
</html>
