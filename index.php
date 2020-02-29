<?php

echo("Clase 4 Bucles, Arreglos y Funciones <br><br>");

//Array

//Array indexado, asigna por defecto el identificador o clave del valor ingresado.
$arreglo=array("Juan","Maria","James","Sandra","David");
echo("<br>");
print_r($arreglo);
echo("<br><br>................................<br>");

//array asociativo

$arreglo=array('usuario1'=>"Juan,",'usuario2'=>"Maria,",'usuario3'=>"James,",'usuario4'=>"Sandra,",'usuario5'=>"David,");
echo("<br>");
print_r($arreglo);
echo("<br><br>................................<br>");

//Tamaño del arreglo, para saber cual es el tamaño de una variable, 
//se almacena en una variable para poderla imprimir.
$tamano=count($arreglo);
echo("<br>");
echo("El tamaño del arreglo es ".$tamano);
echo("<br><br>................................<br><br>");

//BUCLES 
//Estructura de control for:
//for (asignación inicial variable de control; condición de continuación; incremento) {instrucciones…….}

for($centinela=0; $centinela<=10; $centinela++){
    echo("El valor de centinela es : ".$centinela."<br>");

}

//Bucle for para recorrer arreglos
echo("<br>");
$arreglo=array("Juan","Maria","James","Sandra","David");
for($centinela=0; $centinela<count($arreglo); $centinela++){
    echo("El nombre de los usuario es : ".$arreglo[$centinela]."<br>");
}
echo("<br><br>................................<br><br>");


//bucle foreach para recorrer arreglos indexados o asociados, trae el dato de la clave o posicion del valor del array

//foreach (nombreArreglo as valor) {instrucciones…….}
//foreach (nombreArreglo as clave=>valor) {instrucciones…….}

$arreglo=array('usuario1'=>"Juan,",'usuario2'=>"Maria,",'usuario3'=>"James,",'usuario4'=>"Sandra,",'usuario5'=>"David,");
foreach($arreglo as $clave=>$valor){    
    echo ("<br>La clave es : ".$clave."<br>");
    echo("El Nombre es : ".$valor."<br>");
}
echo("<br><br>................................<br><br>");

//bucle Foreach para arreglo indexado
$arreglo=array("Juan","Maria","James","Sandra","David");
foreach($arreglo as $valor){    
    echo("El Nombre es : ".$valor."<br>");
}

?>