<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Numero o No Numero</title>
    <link rel="stylesheet" href="Style.css">
  </head>
  <body>
  <div class="Container">
    <form action="LLamar7.php" method="POST">
     <h2>Ingresar :</h2><input type="text" name="Numero" >
     <input type="submit" name="submit" value="Ver">
    </form>
    <?php
    function Numero($Numero){
    $Resultado=NULL;
    if ( $Numero=='0' or $Numero=='1' or $Numero=='2' or $Numero=='3' or $Numero=='4' or $Numero=='5' or $Numero=='6' or $Numero=='7' or $Numero=='8' or $Numero=='9') { echo "Es Un Numero";}
else {
echo "No es un Numero";
}
    return $Resultado ;
}
     ?>

  </div>

  </body>
</html>
