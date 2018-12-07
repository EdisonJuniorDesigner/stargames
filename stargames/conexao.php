<?php
	try
	{
		$pdo = new PDO("mysql:dbname=star;host=localhost;charset=utf8", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e)
	{
		echo "Falha na conexão: " . $e->getMessage();
		exit();
	}
?>