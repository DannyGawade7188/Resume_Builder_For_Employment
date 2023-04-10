<?php
try
{
	$con=new PDO("mysql:host=localhost; dbname=project","root","123");
}

catch(PDOException $e)
{
		echo $e->getMessage();
		die();
}

?>