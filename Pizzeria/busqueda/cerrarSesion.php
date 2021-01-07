<?php
    $id=$_GET['id'];
    session_start();
    session_destroy();
    header("Location: ../Admin/fpdf/tikect.php?id=$id");
    
?>