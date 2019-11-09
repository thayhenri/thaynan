<?php

# CONEXÃO NO MYSQL E NA BASE DE DADOS
$con=mysqli_connect("localhost","root","etec","tcc");

// VERIFICA A LIGAÇÃO NÃO TEM ERROS
if (mysqli_connect_error())
{
    // CASO TENHA ERROS MOSTRA O ERRO DE LIGAÇÃO À BASE DE DADOS
    echo "Falhou a conexão no MySQL: " . mysqli_connect_error();
} 

?>