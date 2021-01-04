<?php

$user = 'root';
$pass = '';
$dsn='mysql:host=localhost; dbname=civagri';
try {
$cnx = new PDO($dsn,$user,$pass);
} catch (Exception $e) {
	die('Erreur '.$e->getMessage());
}

?>