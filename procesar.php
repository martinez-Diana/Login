<?php
$user="valor";
$password="valor";
$edad="valor";
    if($_SERVER["REQUEST_METHOD"]=="POST"){

        $user=!empty($_POST['user']) ? $_POST['user'] : "requerido";
        $password = !empty($_POST['password']) ? $_POST['passsword'] : "requerido";
        $edad = !empty($_POST['edad']) ? $_POST['edad'] : "requerido";

        if($name=="requerido" || $email=="requerido" || $mensaje=="requerido"){
            echo "Algunos campos son requeridos verifique su formulario";
        }else{
            if($user !=="luis" || $password !=="mendoza") {
                echo "usuario o contraseña incorrectos";
        }elseif(!is_numeric($edad)|| $edad>18){
            echo "Debe ser mayor de edad";
        }else{
            echo "Login Exitoso";
        }
        
        }
    }

    // Caracateristicas de PHP
    // private int x=0; C#
    // var x=0 js //manejamos un tipado dinamico x="hola" x es string
    //en php la declaracion de variables $x = 0; numerico 
    //tipos de datos en php "string" int float bool tipos de datos escalares
    //tipos de datos compuestos array, object 
    //tipo de dato especial null
    //operadores en php aritmeticos +-*/%
    //operadores logicos && || !
    //operadores relacionales ==, !=, >,<,>=,<=
    // $_  ///instruccion mas basica de phpt echo
?>

    // Caracateristicas de PHP
    // private int x=0; C#
    // var x=0 js //manejamos un tipado dinamico x="hola" x es string
    //en php la declaracion de variables $x = 0; numerico 
    //tipos de datos en php "string" int float bool tipos de datos escalares
    //tipos de datos compuestos array, object 
    //tipo de dato especial null
    //operadores en php aritmeticos +-*/%
    //operadores logicos && || !
    //operadores relacionales ==, !=, >,<,>=,<=
    // $_  ///instruccion mas basica de phpt echo
?>