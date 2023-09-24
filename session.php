<?php
	session_start();
	include_once "session.php";
	if(!isset($_SESSION['user']))
	{
		header("location:login.php");
	}
?>