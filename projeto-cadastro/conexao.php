<?php 
//Conexão com banco, alterar as variáveis depois
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'usuarios';
$dbHost = 'localhost';

$mysqli = new mysqli($dbHost, $dbName, $dbUsername, $dbPassword);
if($mysqli -> error){
    die("Falha na conexão com o banco de dados " . $mysqli->error);
}
?>