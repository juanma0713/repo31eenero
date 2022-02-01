<?php
$num1=rand(-5,5);
$num2=rand(-4,4);


if($num1>0 & $num2>0){
    echo "Primer cuadrante ";
    echo "<br>";
    echo "la posocion en el eje X: ".$num1;
    echo "<br>";
    echo "la posocion en el eje Y: ".$num2;
    echo "<br>";
} else if($num1<0 & $num2>0){
    echo "Segundo cuadrante ";
    echo "<br>";
    echo "la posocion en el eje X: ".$num1;
    echo "<br>";
    echo "la posocion en el eje Y: ".$num2;
    echo "<br>";
}else if($num1<0 & $num2<0){
    echo "tercer cuadrante ";
    echo "<br>";
    echo "la posocion en el eje X: ".$num1;
    echo "<br>";
    echo "la posocion en el eje Y: ".$num2;
    echo "<br>";
}else if($num1>0 & $num2<0){
    echo "Cuarto cuadrante ";
    echo "<br>";
    echo "la posocion en el eje X: ".$num1;
    echo "<br>";
    echo "la posocion en el eje Y: ".$num2;
    echo "<br>";
}