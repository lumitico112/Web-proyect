<?php
/**
 * Created by:
 * author: @LuisMi
 * Fecha: 2025-07-14
 * Time: 10:51
 */
define ('SERVIDOR', 'localhost');
define ('USUARIO', 'root');
define ('PASSWORD', 'DataBase_1.');
define ('BD', 'sisgestionescolar');

define ('APP_NAME', 'SISTEMA DE GESTIÓN ESCOLAR');
define ('APP_URL', 'http://localhost/sisgestionescolar');
define ('kEY_API_MAPS', '');

$servidor = "mysql:dbname=" .BD."; host=".SERVIDOR;

try{
    $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    //echo "Conexión exitosa a la base de datos.";
}catch (PDOException $e) {
    echo "Error no se pudo conectar a la base de datos";
}

date_default_timezone_set('America/Lima'); // Establecer la zona horaria a Lima, Perú
$fechaHora = date('Y-m-d H:i:s'); // Obtener la fecha y hora actual

$fecha_actual = date('Y-m-d'); // Obtener la fecha actual
$hora_actual = date('H:i:s'); // Obtener la hora actual
$dia_actual = date('d'); // Obtener el día actual
$mes_actual = date('m'); // Obtener el mes actual  
$anio_actual = date('Y'); // Obtener el año actual
