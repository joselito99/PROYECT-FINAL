<?php
session_start();
if (($_SESSION["estado"]!="1") || ($_SESSION["idRol"]!="bodeguero"))
{
	header ("location: login_error.html");
}

?>