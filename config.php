<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "agendar_se";

$conexao = new mysqli($servername, $username, $password,$dbname);

if ($conexao->connect_errno) {
    echo "ERRO";
}else{
    echo "Sucesso";
}