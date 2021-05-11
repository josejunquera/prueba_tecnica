<!DOCTYPE html>

<html>
    <head>
        <title>Formulario mail</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/styles.css" />
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>

    <body>

        <div class="guardar">

            <h3>Guardar en BD/Enviar mail</h3>

            <form action="guardar.php" method="POST">

                Fecha:<br />
                <input type="date" name="fecha" /><br/>

                Asunto:<br />
                <input type="text" name="asunto"></input><br/>

                Texto:<br />
                <textarea name="texto"></textarea><br/>

                <input id="guardar"type="submit" value="Enviar" />

            </form>

            <!--Mostrar estado guardado en base de datos-->
            <?php session_start();?>

            <?php if(isset($_SESSION['guardado'])):?>

                <div class="alerta">
                    <?= $_SESSION['guardado']?>
                </div>

            <?php elseif(isset($_SESSION['fallo'])):?>

                <div class="alerta alerta-error">
                    <?= $_SESSION['fallo']?>
                </div>

            <?php endif;?>

            <?php session_destroy(); ?>

        </div>

        <div class="buscar">

            <h3>Buscar mails</h3>

            <form action="buscar.php" method="POST">

                <input type="text" name="busqueda" placeholder="Introduzca término de búsqueda...">

                <input id="buscar" type="submit" value="Buscar">

            </form>

        </div>

    </body>

</html>


