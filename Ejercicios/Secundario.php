<?php
    session_start();
    if(isset($_POST['user'])){
       $_POST['user'];
    }else{
        $_POST['user']="nada";
    }
    $_SESSION['name'] = $_POST['user'];
    if(isset($_POST['pass'])){
        echo $_POST['pass'];
    }else{
        $_POST['pass'] = "nada";
    }
    $_SESSION['pass'] = $_POST['pass'];
    $_SESSION['authuser'] = 0;
    
    if(($_SESSION['name'] == 'Edgar') and ($_SESSION['pass'] == '12345')){
        $_SESSION['authuser'] = 1;
    }else{
        echo "You don\'t have permissions to watch the page\'s results";
        exit();
    }
    echo "hola" . " ";
    
   

?>