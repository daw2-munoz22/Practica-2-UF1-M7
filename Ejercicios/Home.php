<?php
    session_unset();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form method="post" action="Secundario.php">
        <p>Enter your username: 
         <input type="text" name="user"/>
        </p>
        <p>Enter your password: 
         <input type="password" name="pass"/>
        </p>
        <p>
         <input type="submit" name="submit" value="Submit"/>
        </p>
    </form>
    <p>Si quieres acceder a 2 páginas web externas, aquí hay dos enlaces: 
    <br>
    <?php echo '<a href="https://fpllefia.com/">'?> Página web de clase <br>
    <?php echo '<a href="https://www.sport.es/es/">'?> Página web periódico SPORT
    </p>
</body>
</html>