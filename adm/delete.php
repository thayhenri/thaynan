<?php 
# ABRE A CONEXÃO COM O BANCO
include("conexao.php"); 

// Recupera o ID do registro para apagar (DELETE)
$id = $_GET['id']; 

# SENTENÇA SQL PARA EXECUÇÃO DA EXCLUSÃO DOS DADOS PELA INSTRUÇÃO DELETE
$sql="DELETE FROM usuarios WHERE id = '" . $id . "'";

// CASO ESTEJA TUDO OK APAGA O REGISTRO, SENÃO MOSTRA O ERRO
if (!mysqli_query($con,$sql))
{
    die('Error: ' . mysqli_error($con));
}

// MOSTRA A MENSAGEM DE SUCESSO
echo "1 registro APAGADO.";

# APÓS A ALTERAÇÃO, VOLTA PARA A LISTA DOS REGISTROS DEPOIOS DE 1 SEGUNDO
print "<meta http-equiv='refresh' content='1; url=listar.php'>";

// FECHA A CONEXÃO COM O MYSQL
mysqli_close($con);
?>