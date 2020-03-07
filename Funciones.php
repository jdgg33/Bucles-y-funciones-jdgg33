<?php

//Funcion para calcular la edad de una persona

function calcularEdad($fechanacimiento){
    $edad=2020-$fechanacimiento;
    echo("<br> Su edad es : ".$edad."<br>");
}

function calcularedad2($fechanacimiento,$actual){
    $edad=$actual-$fechanacimiento;
    echo("<br> Su edad es : ".$edad."<br>");
}

function calcularedad3($fechanacimiento,$actual){
    $edad=$actual-$fechanacimiento;
    return($edad);
}

?>