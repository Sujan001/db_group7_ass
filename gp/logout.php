<!--
	Un_id:17437365;
	Name: Sujan Adhikari;
	Module: Web-development
-->
<?php
	session_start();
	session_unset();
	session_destroy();
	header('location:index.php');
?>