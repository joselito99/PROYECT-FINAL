<?php
session_start();
if (($_SESSION["estado"]!="1") || ($_SESSION["idRol"]!="mesero"))
{
	header ("location: login_error.html");
}

?>