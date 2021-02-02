<?php
    include('./phpfunctions.php');
    $cookiePage = $_SERVER['REQUEST_URI'];
    addVisitor($cookiePage);
    
?>