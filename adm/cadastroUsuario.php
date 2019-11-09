<?php
// ABRE A CONEXÃO COM O MYSQL E BANCO DE DADOS
include("conexao.php");

$target_path = "uploads/";

$target_path = $target_path . basename($_FILES['foto']['name']);

move_uploaded_file($_FILES['foto']['tmp_name'], $target_path);

$foto = $_FILES['foto']['name'];

// CASO TUDO ESTEJA OK INSERE DADOS NA BASE DE DADOS
$sql = "INSERT INTO usuarios (nome, cpf_cnpj, telefone, email, senha, foto) 
VALUES ('$_POST[nome]','$_POST[cpf_cnpj]','$_POST[telefone]','$_POST[email]','$_POST[senha]','$foto')";

// CASO ESTEJA TUDO OK ADICIONA OS DADOS, SENÃO MOSTRA O ERRO
if (!mysqli_query($con, $sql)) {
    die('Error: ' . mysqli_error($con));
}

// FECHA A CONEXÃO COM O MYSQL
mysqli_close($con);

header("Location:login.php");
