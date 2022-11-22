<?php

    include_once "./queries.php";

    //Si se ha pulsado el boton de login
    if($_POST['btn_login']== "Login"){
       

        //Si hay valores en usuario y contraseña
        if(!empty(trim($_POST['user'])) && !empty(trim($_POST['pass']))){
            comprobar_usuario($_POST['user'], $_POST['pass']);
        }

    }else{
        echo "FAIL!";
    }
?>