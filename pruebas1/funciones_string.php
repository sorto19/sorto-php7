<?php 

//funciones para strings
$mensaje = "sere tu esposos karina blanco seras mi mujer ";
//longitud
echo strlen($mensaje);
echo "<br>";
echo str_word_count($mensaje);//numero de palabars
echo "<br>";
echo strrev($mensaje);//sirve para revertir el string
echo "<br>";
echo strpos($mensaje, "amar"); //reemplaza texto
echo "<br>";
echo str_replace("te voy a dar","amor", $mensaje); //funcion para reemplazar palabtras
echo "<br>";
echo strtolower($mensaje); //pasar aminisculas
echo "<br>";
echo strtoupper($mensaje);//pasar a mayusculas
echo "<br>";
echo strcmp("a","b");//funcion de comparar cadenas a nivel d byte
echo "<br>";
echo substr($mensaje,10,7);//funcion sustraer cadena 
echo "<br>";
echo trim("   hola          soy                       tu                   marido");
echo "<br>";




?>