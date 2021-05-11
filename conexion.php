<?php

//Conexión

$servidor= 'localhost';
$usuario='administrador';
$password = 'administrador';
$basededatos = 'sudespacho_db';

$db= mysqli_connect($servidor,$usuario,$password,$basededatos);

mysqli_query($db, "SET NAMES 'utf8'");

//Iniciar la sesión

if(!isset($_SESSION)){
session_start();    
}
