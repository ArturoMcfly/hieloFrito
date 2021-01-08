<?php
    session_start();

    if(isset($_SESSION['usr'])){

    }else{
        header("location: ../login2.php");
    }
?>