<?php
    session_start();
    if(!isset($_SESSION['id_usuario']))
    {
    	header("location: telalogin.php");
    	exit;
    }
?>



SEJA BEEEEEEEM VINDOOOOO!!
<a href="sair.php"> Sair </a>