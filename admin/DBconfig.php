<?php

session_start();

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "lks";

try
{
     $DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
     $DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
     echo $e->getMessage();
}

include_once 'classes/class.php';
$user = new USER($DB_con);

include_once 'classes/classes.pendaftar.php';
$pendaftar = new pendaftar($DB_con);

include_once 'classes/class.crud.php';
$crud = new crud($DB_con);

include_once 'classes/class.deskripsi.php';
$deskripsi = new deskripsi($DB_con);

include_once 'classes/class.pembeli.php';
$pembeli = new pembeli($DB_con);
?>s