<?php
ob_start();
session_start();
//sambungan ke database
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','lks');
$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//setting zona waktu
date_default_timezone_set('Asia/Jakarta');
//memproses class yang sudah ada
function __autoload($class) {
    $class=strtolower($class);
    $classpath='classes/class.'.$class .'.php';
    if(file_exists($classpath)){
        require_once $classpath;
    }
    $classpath='../classes/class.'.$class .'.php';
    if(file_exists($classpath)){
        require_once $classpath;
    }
    $classpath='../../classes/class.'.$class .'.php';
    if(file_exists($classpath)){
        require_once $classpath;
    }
}
?>