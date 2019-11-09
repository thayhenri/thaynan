<?php 
// abre a conexao com o banco
include("conexao.php"); 

// Recupera o ID do registro para alteração (UPDATE)
$id = $_GET['id']; 
/* $sql = mysqli_query($con, "SELECT * FROM tbalunos WHERE id = ' " . $id . " ' ") or die("Erro."); 
*/

$sql = mysqli_query($con, "SELECT * FROM usuarios WHERE id = $id ") or die("Erro.");

$dados = mysqli_fetch_assoc($sql);
	$id = $dados["id"];
	$nome = $dados["nome"];
	$cpf_cnpj = $dados["cpf_cnpj"];	
	$telefone = $dados["telefone"];	
	$email = $dados["email"];	
	$senha = $dados["senha"];	
	$foto = $dados["foto"];	
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>UPDATE DO REGISTRO</title>
</head>
<body>
<h1>ATUALIZAR REGISTRO NO BANCO DE DADOS</h1>

<form action="update.php" method="post">
	<fieldset class="form-fieldset">

	
		<div class="form-input form-text cf wnd-form-field wnd-required">
			<label for="field-wnd_ShortTextField_103684">
				<span class="inline-text">
					<span>&nbsp;ID:</span>
				</span>
			</label>
			<input id="field-wnd_ShortTextField_103684" name="id" required type="text" maxlength="150" value="<?php print $id; ?>">
		</div>

		<div class="form-input form-text cf wnd-form-field wnd-required">
			<label for="field-wnd_ShortTextField_103684">
				<span class="inline-text">
					<span>&nbsp;Nome:</span>
				</span>
			</label>

			<input id="field-wnd_ShortTextField_103684" name="nome" required type="text" maxlength="150" value="<?php print $nome; ?>">
		</div>


		<div class="form-input form-text cf wnd-form-field wnd-required">
			<label for="field-wnd_ShortTextField_103684">
				<span class="inline-text">
					<span>&nbsp;CPF/CNPJ:</span>
				</span>
			</label>

			<input id="field-wnd_ShortTextField_103684" name="cpf_cnpj" required type="text" maxlength="150" value="<?php print $cpf_cnpj; ?>">
		</div>

		<div class="form-input form-text cf wnd-form-field wnd-required">
			<label for="field-wnd_ShortTextField_859978">
				<span class="inline-text">
					<span>Telefone:</span>
				</span>
			</label>

			<input id="field-wnd_ShortTextField_859978" name="telefone" required type="text" maxlength="150" value="<?php print $telefone; ?>">
		</div>

		<div class="form-input form-text cf wnd-form-field wnd-required">
			<label for="field-wnd_ShortTextField_842013">
				<span class="inline-text">
					<span>Email:</span>
				</span>
			</label>

			<input id="field-wnd_ShortTextField_842013" name="email" required type="email" maxlength="150" value="<?php print $email; ?>">
		</div>

		<div class="form-input form-text cf wnd-form-field wnd-required">
			<label for="field-wnd_ShortTextField_842013">
				<span class="inline-text">
					<span>Senha:</span>
				</span>
			</label>

			<input id="field-wnd_ShortTextField_842013" name="senha" required type="password" maxlength="150" value="<?php print $senha; ?>">
		</div>

		<div class="form-input form-text cf wnd-form-field wnd-required">
			<label for="field-wnd_ShortTextField_842013">
				<span class="inline-text">
					<span>Foto:</span>
				</span>
			</label>

			<input id="field-wnd_ShortTextField_842013" name="foto" required type="file" maxlength="150" value="<?php print $foto; ?>">
		</div>


	</div>
</fieldset>

<div class="form-submit cf button-01">
	<button type="submit" name="send" value="wnd_FormBlock_174807">
		<span class="text">ATUALIZAR</span>
	</button>
</div>

</form>
</body>
</html>