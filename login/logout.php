<?php
/**
 * Created by:
 * author: @LuisMi
 * Fecha: 2025-07-14
 * Time: 15:48
 */
//terminar sesion
session_start();
// Eliminar todas las variables de sesión
session_unset();
// Destruir la sesión
session_destroy();
// Redirigir al login
header('Location: index.php');
exit();
?>