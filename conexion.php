<?php

DEFINE('DB_USUARIO', 'root');
DEFINE('DB_CLAVE', 'root');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NOMBRE', 'app_comerciales');
$con = mysqli_connect(DB_HOST, DB_USUARIO, DB_CLAVE, DB_NOMBRE);
mysqli_set_charset($con, "utf8");

$con = mysqli_connect(DB_HOST, DB_USUARIO, DB_CLAVE, DB_NOMBRE);
mysqli_set_charset($con, "utf8");

print_r("hola");
?>