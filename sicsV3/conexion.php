<?php
$db = new mysqli('localhost', 'root', '', 'syschicken_final');
$acentos=$db->query("SET NAMES 'utf8'");
if ($db->connect_error > 0)
{
		die ('Error de conexion [' . $db->connect_error . ']');
}

?>