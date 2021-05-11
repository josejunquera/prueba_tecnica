<?php require_once 'conexion.php';?>

<head>
    <title>Busqueda mails</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/styles.css" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

	<?php
		if(($_POST['busqueda'] == "")){
			header("Location: index.php");
		} 
		
	?>

	<h3>Busqueda de emails que contengan: <?=$_POST['busqueda']?></h3>

	<?php

    $busqueda = $_POST['busqueda'];

	$sql = "SELECT * from mails where id like '%$busqueda%' || fecha like '%$busqueda%' || asunto like '%$busqueda%' || texto like '%$busqueda%'";


    $mails = $db->query($sql);

    if(!empty($mails) && mysqli_num_rows($mails) >= 1){  

        echo "<table>";
        echo "<tr>
                <th>Id</th>
                <th>Fecha</th>
                <th>Asunto</th>
                <th>Texto</th>
            </tr>";
        while ($col = $mails->fetch_assoc()) {
            echo "<tr> 
                    <td>".$col['id']."</td> 
                    <td>".$col['fecha']."</td> 
                    <td>".$col['asunto']."</td> 
                    <td>".$col['texto']."</td>     
                </tr>";
        }  
            echo "</table>";

        }else{
            echo "<h4>-No se han encontrado resultados para la búsqueda $busqueda </h4>";
        }
                
	?>

</body>


</html>









