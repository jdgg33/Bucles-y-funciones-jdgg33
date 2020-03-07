<?php
//Se adiciona el include para llamar informacion de otro archivo php, en este caso funciones

include("funciones.php");


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
echo("<br><br>................................<br><br>");

//ARREGLOS MULTIDIMENSIONALES
//Los arreglos multidimensionales son una estructura de datos que reúnen conjuntos de arreglos convencionales o unidimensionales
//Es una matriz con filas y columnas.
//Estructura

$usuario=array('usuario1'=>array('Nombre'=>"Juan",'Edad'=>20,'Genero'=>"Masculino"),
                'usuario2'=>array('Nombre'=>"Maria",'Edad'=>22,'Genero'=>"Femenino"),
                'usuario3'=>array('Nombre'=>"James",'Edad'=>24,'Genero'=>"Masculino"),
                'usuario4'=>array('Nombre'=>"Sandra",'Edad'=>26,'Genero'=>"Femenino"),
                'usuario5'=>array('Nombre'=>"David",'Edad'=>28,'Genero'=>"Masculino"));


echo("<br><br>................................<br><br>");
print_r($usuario);

echo("<br><br>................................<br><br>");

//Ciclo foreach para acceder a los elementos del arreglo multidimensional

// foreach($usuario as $clavemayorunidimensionales=>$usuario){    
//     echo ("<br>La clave mayor unidimensional es : ".$clavemayorunidimensionales."<br>");
//     foreach ($usuario as $clave=>$valor){
//     echo($clave." es : ".$valor."<br>");
//     }
// }
// echo("<br><br>................................<br><br>");


foreach($usuario as $clavemayorunidimensional=>$arregloUnidimensional){    
    echo ("<br>La clave mayor unidimensional es : ".$clavemayorunidimensional."<br>");
    print_r($arregloUnidimensional);
    echo("<br>");
    foreach ($arregloUnidimensional as $claves=>$valores){
    echo($claves." es : ".$valores."<br>");
    }
}

echo("<br><br>................................<br><br>");

//Funciones
//Calcular la edad de dos personas
//para llamar la funcion
//funcion con un parametro fijo en la misma funcion, donde solo ingreso un argumento

calcularedad(1981);

echo("<br><br>................................<br><br>");

//funcion donde se ingresan dos o mas argumentos

calcularedad2(1981,2020);

echo("<br><br>................................<br><br>");

$edad3=calcularedad3(1981,2020);
echo("La edad de la persona es: ".$edad3);

echo("<br><br>................................<br><br>");

//Arreglo que se llena con una funcion

$edades=array('Edad1'=>calcularedad3(1990,2020), 'Edad2'=>calcularedad3(1991,2020));
print_r ($edades);

echo("<br><br>................................<br><br>");


?>