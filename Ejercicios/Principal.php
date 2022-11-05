<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sports <?php echo $_GET['sport1']." "; echo $_GET['sport2'] ;?></title>
</head>
<body>
    <?php
        session_start();
        echo "My first favourite sport is: ";
        if(isset($_GET['sport1'])){
            echo $_GET['sport1'];
        }
        echo "<br>";
        echo "My second favourite sport is: ";
        if(isset($_GET['sport2'])){
           echo $_GET['sport2'];
        }
        echo "<br>";
    ?>
    <?php
        $hoy = date("F j, Y, g:i a");
        echo $hoy;  
        echo "<br>";
        $myTeam = urlencode("FC Barcelona");
        echo "<a href='Secundario.php?myteam=$myTeam'>";
        echo "Click here to see information about my favorite movie!"; 
        echo "</a>";
        echo "<br>";

    ?>
    <?php
        $nombre = 'usuario';
        $valor = 'Homer';
        // El tiempo de expiración es en 30 minutos. PHP traduce la fecha al formato adecuado
        $expiracion = time() + 60;
        setcookie($nombre, $valor, $expiracion);
        echo $nombre. " " . $valor. " ". $expiracion;
        echo "<br>";

        $name = 'username';
        $price = 'Manolo';
        // El tiempo de expiración es en 30 minutos. PHP traduce la fecha al formato adecuado
        $expirates = time() + 60;
        setcookie($name, $price,$expirates);
        echo $name. " " . $price. " ". $expirates;
    ?>
</body>
</html>