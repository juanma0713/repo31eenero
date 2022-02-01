<?php

define("num1","14");
$num2=rand(1,20);

if (constant('num1')==$num2){
    echo "El número constante es : ".constant('num1') ;
    echo "<br>";
    echo "El número rand es : ".$num2;
    echo "<br>";
    echo "¡¡¡Excelente adivinaste el numero!!!";
    echo "<br>";

}else{
    echo "El número constante es : ".constant('num1') ;
    echo "<br>";
    echo "El número rand es : ".$num2;
    echo "<br>";
    echo " ¡¡¡upss!!  sigue intentando >:-----(";
    echo "<br>";
}

