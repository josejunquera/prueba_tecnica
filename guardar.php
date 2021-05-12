<?php

if(isset($_POST)){
    
    require_once 'conexion.php';

    if(!$_SESSION){
        session_start();     
    }
    
    $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : false;
    $asunto = isset($_POST['asunto']) ? $_POST['asunto'] : false;
    $texto = isset($_POST['texto']) ? $_POST['texto'] : false;
            
    //Guardar en la base de datos

    $sql= "INSERT INTO mails VALUES(null, '$fecha', '$asunto', '$texto');";
        
    $guardar = mysqli_query($db, $sql);

    if($guardar){
        $_SESSION['guardado'] = "Éxito al enviar y guardar el mail en la BD";
    }else{
        $_SESSION['fallo'] = "Fallo al enviar y guardar el mail en la BD";
    }
    
    //Enviar email 

    $to = "angel@sudespacho.net";
    $headers = "From: info@sudespacho.net";

    mail($to, $asunto, $texto, $headers);


}

header('Location: index.php');

