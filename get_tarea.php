<?php

    if(isset($_GET['palabra1']) && isset($_GET['palabra2'])){
        echo "No me abra los ['".$_GET['palabra1']."'] que no le voy a echar ['".$_GET['palabra2']."']";
    }else{
        echo "No se han recibido las palabras.";
    }
?>