<?php
// ABRE A CONEXÃO COM O MYSQL E BANCO DE DADOS
include("conexao.php"); 

// CASO TUDO ESTEJA OK INSERE DADOS NA BASE DE DADOS
$sql= "INSERT INTO curriculo (nome, data_nasc, sexo, tel, mun_est, cep, rua, numero, bairro, curso, exp_P, acad, quest_1, quest_2, quest_3, quest_4) VALUES ('$_POST[nome]','$_POST[data_nasc]','$_POST[sexo]','$_POST[tel]','$_POST[mun_est]','$_POST[cep]','$_POST[rua]','$_POST[numero]','$_POST[bairro]','$_POST[curso]','$_POST[exp_P]','$_POST[acad]','$_POST[quest_1]','$_POST[quest_2]','$_POST[quest_3]','$_POST[quest_4]')";



// CASO ESTEJA TUDO OK ADICIONA OS DADOS, SENÃO MOSTRA O ERRO
if (!mysqli_query($con,$sql))
{
    die('Error: ' . mysqli_error($con));
}

// MOSTRA A MENSAGEM DE SUCESSO
echo "1 registro inserido.";

// FECHA A CONEXÃO COM O MYSQL
mysqli_close($con);

?>