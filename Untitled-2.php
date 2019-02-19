<?php
session_start();

$host="localhost";
$user="root";
$pass="pass";
$dbnama="lks";
try{
$DB_con = new PDO("mysql:host={$host};dbname={dbnama}",$user,$pass);
$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERMODE_EXCEPTION);
} catch(PDOException $e){
    echo $e->getMessage();
}

include_once 'classes/class.crud.php';
$crud = new crud($DB_con);

include_once 'classes/class.deskripsi.php';
$deskripsi = new deskripsi($DB_con);

include_once 'classes/class.php';
$user = new USER($DB_con);

include_once 'classes/class.pembeli.php';
$pembeli = new pembeli($DB_con);

include_once 'classes/class.ticket.php';
$ticket = new ticket($DB_con);
?>