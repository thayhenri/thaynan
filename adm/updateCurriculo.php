<?php 
# ABRE A CONEXÃO COM O BANCO
include("conexao.php"); 

# RECUPERA OS VALORES DOS CAMPOS PASSADOS PELA PÁGINA UPDATE_FORM.PHP


$nome = $_POST["nome"];
$dat_nasc = $_POST["dat_nasc"];
$sexo = $_POST["sexo"];
$tel = $_POST["tel"];
$mun_est = $_POST["mun_est"];	
$cep = $_POST["cep"];	
$rua = $_POST["rua"];	
$numero = $_POST["numero"];
$bairro = $_POST["bairro"];
$curso = $_POST["curso"];
$exp_P = $_POST["exp_P"];
$acad = $_POST["acad"];
$quest_1 = $_POST["quest_1"];
$quest_2 = $_POST["quest_2"];
$quest_3 = $_POST["quest_3"];
$quest_4 = $_POST["quest_4"];


# SENTENÇA SQL PARA EXECUÇÃO DA ALTERAÇÃO DOS DADOS PELA INSTRUÇÃO UPDATE
$sql="UPDATE curriculo SET nome='$nome', dat_nasc='$dat_nasc', sexo='$sexo', tel='$tel' mun_est='$mun_est', cep='$cep', rua='$rua' numero='$numero', bairro='$bairro', curso='$curso', exp_P='$exp_P', acad='$acad', quest_1='$quest_1', quest_2='$quest_2' quest_3='$quest_3' quest_4='$quest_4' WHERE id = '" . $id . "'";

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