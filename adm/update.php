<?php 
# ABRE A CONEXÃO COM O BANCO
include("conexao.php"); 

# RECUPERA OS VALORES DOS CAMPOS PASSADOS PELA PÁGINA UPDATE_FORM.PHP

$id = $_POST["id"];
$nome = $_POST["nome"];
$cpf_cnpj = $_POST["cpf_cnpj"];	
$telefone = $_POST["telefone"];	
$email = $_POST["email"];	
$senha = $_POST["senha"];	
$foto = $_POST["foto"];	

# SENTENÇA SQL PARA EXECUÇÃO DA ALTERAÇÃO DOS DADOS PELA INSTRUÇÃO UPDATE
$sql="UPDATE usuarios SET nome='$nome', cpf_cnpj='$cpf_cnpj', telefone='$telefone', email='$email', senha='$senha', foto='$foto'  WHERE id = '" . $id . "'";

// CASO ESTEJA TUDO OK ATUALIZA OS DADOS, SENÃO MOSTRA O ERRO
if (!mysqli_query($con,$sql))
{
    die('Error: ' . mysqli_error($con));
}

// MOSTRA A MENSAGEM DE SUCESSO
echo "1 registro ALTERADO.";

# APÓS A ALTERAÇÃO, VOLTA PARA A LISTA DOS REGISTROS DEPOIS DE 1 SEGUNDO
print "<meta http-equiv='refresh' content='1; url=listar.php'>";

// FECHA A CONEXÃO COM O MYSQL
mysqli_close($con);
?>