<?php
session_start();
if ($_SESSION["estado"]!="1")
{
	header ("location: login_error.html");
}

?>