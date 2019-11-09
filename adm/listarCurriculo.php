<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="meuEstilo.css">
	<title>LISTAR OS REGISTROS NO BANCO DA TABELA CURRICULO</title>
</head>
<body>
	<div id="container">
<h1>LISTAR OS REGISTROS DO BANCO DE DADOS DA TABELA CURRICULO</h1>

<table class="table table-hover">
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Data de Nascimento</th>
    <th>Sexo</th>
    <th>Telefone</th>
    <th>Município / Estado</th>
    <th>CEP</th>
    <th>Rua</th>
    <th>Número</th>
    <th>Bairro</th>
    <th>Cursos</th>
    <th>Experiências</th>
    <th>Formações</th>
    <th>Questionário 1</th>
    <th>Questionário 2</th>
    <th>Questionário 3</th>
    <th>Questionário 4</th>

    <th>UPDATE</th>
    <th>DELETE</th>
</tr>

<?php
// ABRE A CONEXÃO COM O MYSQL E BANCO DE DADOS
include("conexao.php"); 

$sql = mysqli_query($con, "SELECT * FROM curriculo") or die("Erro.");
while ($dados = mysqli_fetch_assoc($sql))
{
        $id_pessoa = $_POST["id_pessoa"];
        $nome = $dados["nome"];	
        $dat_nasc = $dados["dat_nasc"];	
        $sexo = $dados["sexo"];
        $tel = $dados["tel"];	
        $mun_est = $dados["mun_est"];	
        $cep = $dados["cep"];	
        $rua = $dados["rua"];
        $numero = $dados["numero"];
        $bairro = $dados["bairro"];
        $curso = $dados["curso"];	
        $exp_P = $dados["exp_P"];	
        $acad = $dados["acad"];	
        $quest_1 = $dados["quest_1"];	
        $quest_2 = $dados["quest_2"];	
        $quest_3 = $dados["quest_3"];	
        $quest_4 = $dados["quest_4"];	
        

    ?>
    
    <tr>
        <td><?php print $id_pessoa ?></td>
        <td><?php print $dat_nasc ?></td>
        <td><?php print $sexo ?></td>
        <td><?php print $mun_est ?></td>
        <td><?php print $cep ?></td>
        <td><?php print $rua ?></td>
        <td><?php print $numero ?></td>
        <td><?php print $bairro ?></td>
        <td><?php print $curso ?></td>
        <td><?php print $exp_P ?></td>
        <td><?php print $acad ?></td>
        <td><?php print $quest_1 ?></td>
        <td><?php print $quest_2 ?></td>
        <td><?php print $quest_3 ?></td>
        <td><?php print $quest_4 ?></td>
        
        <td><a href="update_formCurriculo.php?id=<?php print $id; ?>">ALTERAR</a></td>
        <td><a href="deleteCurriculo.php?id=<?php print $id; ?>">APAGAR</a></td>
    </tr>

    <?php 
} // fechando o laço do WHILE

// FECHA A CONEXÃO COM O MYSQL
mysqli_close($con);
?>


</table>
</div>
</body>
</html>