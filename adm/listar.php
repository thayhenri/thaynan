<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="bootstrap.css">
	<link rel="stylesheet" href="meuEstilo.css">
	<title>LISTAR OS REGISTROS NO BANCO DA TABELA USUÁRIOS</title>
</head>
<body>
	<div id="container">
<h1>LISTAR OS REGISTROS DO BANCO DE DADOS DA TABELA USUÁRIOS</h1>

<table class="table table-hover">
<tr>
<th>ID</th>
<th>NOME / EMPRESA</th>
<th>CPF / CNPJ</th>
<th>TELEFONE</th>
<th>E-MAIL</th>
<th>SENHA</th>
<th>FOTO</th>
<th>UPDATE</th>
<th>DELETE</th>
</tr>

<?php
// ABRE A CONEXÃO COM O MYSQL E BANCO DE DADOS
include("conexao.php"); 

$sql = mysqli_query($con, "SELECT * FROM usuarios") or die("Erro.");
while ($dados = mysqli_fetch_assoc($sql))
{
		$id = $dados["id"];
		$nome = $dados["nome"];
		$cpf_cnpj = $dados["cpf_cnpj"];	
		$telefone = $dados["telefone"];	
		$email = $dados["email"];	
		$senha = $dados["senha"];	
		$foto = $dados["foto"];	

	?>
	<tr>
	<td><?php print $id ?></td>
	<td><?php print $nome ?></td>
	<td><?php print $cpf_cnpj ?></td>
	<td><?php print $telefone ?></td>
	<td><?php print $email ?></td>
	<td><?php print $senha ?></td>
	<td><?php print $foto ?><img width="100" height="100" src="
	<?php print $foto ?>"></td>
	
	<td><a href="update_form.php?id=<?php print $id; ?>">ALTERAR</a></td>
	<td><a href="delete.php?id=<?php print $id; ?>">APAGAR</a></td>
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