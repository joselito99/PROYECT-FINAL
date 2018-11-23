<?php
session_start();
if (($_SESSION["estado"]!="1") || ($_SESSION["rol_idRol"]!="9"))
{
	header ("location: login_error.html");
}

?>