<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Funcion</title>
  </head>
  <body>
     <?php
     function SRMD ($Numero1,$Numero2,$ResulOpe){
     $Resultado=0;
     if ($ResulOpe=="Suma") { $Resultado=$Numero1+$Numero2;}
     else if ($ResulOpe=="Resta") { $Resultado=$Numero1-$Numero2;}
     else if ($ResulOpe=="Multiplicar") { $Resultado=$Numero1*$Numero2;}

     return $Resultado ;
}
      ?>
  </body>
</html>
