<?php
$mysqli = false;
function connectBD(){
    global $mysqli;
    $mysqli = new $mysqli ("localhost","root","","valerabase");
    $mysqli->query("SET NAMES 'utf-8'");
}
function closeDB(){
    global $mysqli;
    $mysqli->close();
}
fuction 
?>