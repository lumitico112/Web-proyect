<?php 
/**
 * Created by:
 * author: @LuisMi
 * Fecha: 2025-07-14
 * Time: 18:03
 */

$sql_roles = "SELECT * FROM roles WHERE estado = '1'";
$query_roles = $pdo->prepare($sql_roles);
$query_roles->execute();
$roles = $query_roles->fetchAll(PDO::FETCH_ASSOC);
