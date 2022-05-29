<?php
session_start();
if (($_SESSION["estado"]!="1") || ($_SESSION["idRol"]!="admin"))
{
	header ("location: login_error.html");
}

?>