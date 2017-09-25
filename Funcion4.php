<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Funcion</title>
    <link rel="stylesheet" href="Style.css">
  </head>
  <body>
  <div class="">
    <form action="LLamar4.php" method="post">
      <h2>Numero1:</h2><input type="text" name="Numero1">
      <h2>Numero2:</h2><input type="text" name="Numero2">
      <h2>Que Operacion?</h2><input type="text" name="Ope" value="">
      <input type="submit" name="submit" value="Ver">

    </form>
     <?php
     function SRMD ($Numero1,$Numero2,$ResulOpe){
     $Resultado=NULL;
     if ($ResulOpe=="Suma") { $Resultado=$Numero1+$Numero2;}
     else if ($ResulOpe=="Resta") { $Resultado=$Numero1-$Numero2;}
     else if ($ResulOpe=="Multiplicar") { $Resultado=$Numero1*$Numero2;}
     else if ($ResulOpe=="Dividir") { $Resultado=$Numero1/$Numero2;}
     else if ($ResulOpe=="Raiz") { echo sqrt($Numero1),"<br>";
                                  echo sqrt($Numero2); }
     else if ($ResulOpe=="Potencia") { echo pow($Numero1,$Numero2);}

     return $Resultado ;
}
      ?>
      </div>
  </body>
</html>
