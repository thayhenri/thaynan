<?php 
// abre a conexao com o banco
include("conexao.php"); 

// Recupera o ID do registro para alteração (UPDATE)
$id = $_GET['id']; 
/* $sql = mysqli_query($con, "SELECT * FROM tbalunos WHERE id = ' " . $id . " ' ") or die("Erro."); 
*/

$sql = mysqli_query($con, "SELECT * FROM curriculo WHERE id = $id ") or die("Erro.");

$dados = mysqli_fetch_assoc($sql);


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

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>UPDATE DO REGISTRO</title>
</head>
<body>
<h1>ATUALIZAR REGISTRO NO BANCO DE DADOS</h1>
                                                <form action="" method="post">
                                                    <fieldset class="form-fieldset">
                                                        <div>
                                                            <div
                                                                class="form-input form-text cf wnd-form-field wnd-required">
                                                                <label for="field-wnd_ShortTextField_436002"><span
                                                                        class="inline-text"><span>Nome:</span></span></label><input
                                                                    id="field-wnd_ShortTextField_436002"
                                                                    name="Nome" required
                                                                    type="text" maxlength="150"></div>
                                                            <div
                                                                class="form-input form-date cf wnd-form-field wnd-required">
                                                                <label for="field-wnd_DateField_291836"><span
                                                                        class="inline-text"><span>Data de
                                                                            nascimento:</span></span></label><input
                                                                    id="field-wnd_DateField_291836"
                                                                    name="dat_nasc" required 
                                                                    type="date" placeholder="02/10/2019"></div>
                                                            <div
                                                                class="form-input form-group cf wnd-form-field wnd-required">
                                                                <label><span
                                                                        class="inline-text"><span>Sexo:</span></span></label>
                                                                <div class="form-group-content">
                                                                    <div>
                                                                        <div class="form-input form-radio"><label
                                                                                for="option-wnd_RadioGroupOption_287870"><span
                                                                                    class="inline-text"><span>Masculino</span></span></label><input
                                                                                name="sexo"
                                                                                value="wnd_RadioGroupOption_287870"
                                                                                id="option-wnd_RadioGroupOption_287870"
                                                                                type="radio" required
                                                                                name="sexo"
                                                                                value="wnd_RadioGroupOption_287870"
                                                                                id="option-wnd_RadioGroupOption_287870"
                                                                                type="radio" required>
                                                                            <div class="radio-button"></div>
                                                                        </div>
                                                                        <div class="form-input form-radio"><label
                                                                                for="option-wnd_RadioGroupOption_885712"><span
                                                                                    class="inline-text"><span>Feminino</span></span></label><input
                                                                                name="sexo"
                                                                                value="wnd_RadioGroupOption_885712"
                                                                                id="option-wnd_RadioGroupOption_885712"
                                                                                type="radio" required
                                                                                name="sexo"
                                                                                value="wnd_RadioGroupOption_885712"
                                                                                id="sexo"
                                                                                type="radio" required>
                                                                            <div class="radio-button"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                            <div class="text b b-text cf design-01">
                                                <div class="text-content">
                                                    <h1><strong>
                                                            <font class="wsw-02">Localização</font>
                                                        </strong></h1>
                                                </div>
                                            </div>
                                            <div class="form block b cf design-01">
                                                <form action="" method="post">
                                                    <fieldset class="form-fieldset">
                                                        <div>
                                                            <div
                                                                class="form-input form-text cf wnd-form-field wnd-required">
                                                                <label for="field-wnd_ShortTextField_400561"><span
                                                                        class="inline-text"><span>Município/Estado:</span></span></label><input
                                                                    id="field-wnd_ShortTextField_400561"
                                                                    name="mun_est" required 
                                                                    type="text" maxlength="150"></div>
                                                            <div
                                                                class="form-input form-text cf wnd-form-field wnd-required">
                                                                <label for="field-wnd_ShortTextField_441735"><span
                                                                        class="inline-text"><span>CEP:</span></span></label><input
                                                                    id="field-wnd_ShortTextField_441735"
                                                                    name="cep" required 
                                                                    type="text" maxlength="150"></div>
                                                            <div
                                                                class="form-input form-text cf wnd-form-field wnd-required">
                                                                <label for="field-wnd_ShortTextField_750286"><span
                                                                        class="inline-text"><span>Rua:</span></span></label><input
                                                                    id="field-wnd_ShortTextField_750286"
                                                                    name="rua" required 
                                                                    type="text" maxlength="150"></div>
                                                            <div
                                                                class="form-input form-text cf wnd-form-field wnd-required">
                                                                <label for="field-wnd_ShortTextField_387821"><span
                                                                        class="inline-text"><span>Número:</span></span></label><input
                                                                    id="field-wnd_ShortTextField_387821"
                                                                    name="numero" required 
                                                                    type="text" maxlength="150"></div>
                                                            <div
                                                                class="form-input form-text cf wnd-form-field wnd-required">
                                                                <label for="field-wnd_ShortTextField_571504"><span
                                                                        class="inline-text"><span>Bairro</span></span></label><input
                                                                    id="field-wnd_ShortTextField_571504"
                                                                    name="bairro" required 
                                                                    type="text" maxlength="150"></div>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                            <div class="text b b-text cf design-01">
                                                <div class="text-content">
                                                    <p class="wnd-align-center"><strong>
                                                            <font class="wnd-font-size-200">Cursos</font>
                                                        </strong></p>
                                                </div>
                                            </div>
                                            <div class="form block b cf design-01">
                                                <form action="" method="post">
                                                    <fieldset class="form-fieldset">
                                                        <div>
                                                            <div
                                                                class="form-input form-text cf wnd-form-field wnd-required">
                                                                <label for="field-wnd_ShortTextField_420460"><span
                                                                        class="inline-text"><span>Curso
                                                                            1:</span></span></label><input
                                                                    id="field-wnd_ShortTextField_420460"
                                                                    name="curso_1" required 
                                                                    type="text" maxlength="150">
                                                            </div>
                                                            <div
                                                                class="form-input form-text cf wnd-form-field wnd-required">
                                                                <label for="field-wnd_ShortTextField_42778"><span
                                                                        class="inline-text"><span>Curso
                                                                            2:</span></span></label><input
                                                                    id="field-wnd_ShortTextField_42778"
                                                                    name="curso_2" required 
                                                                    type="text" maxlength="150"></div>
                                                            <div
                                                                class="form-input form-text cf wnd-form-field wnd-required">
                                                                <label for="field-wnd_ShortTextField_695801"><span
                                                                        class="inline-text"><span>Curso
                                                                            3:</span></span></label><input
                                                                    id="field-wnd_ShortTextField_695801"
                                                                    name="curso_3" required 
                                                                    type="text" maxlength="150"></div>
                                                            <div
                                                                class="form-input form-text cf wnd-form-field wnd-required">
                                                                <label for="field-wnd_ShortTextField_740422"><span
                                                                        class="inline-text"><span>Curso
                                                                            4:</span></span></label><input
                                                                    id="field-wnd_ShortTextField_740422"
                                                                    name="curso_4" required 
                                                                    type="text" maxlength="150"></div>
                                                            <div
                                                                class="form-input form-text cf wnd-form-field wnd-required">
                                                                <label for="field-wnd_ShortTextField_746980"><span
                                                                        class="inline-text"><span>Curso
                                                                            5:</span></span></label><input
                                                                    id="field-wnd_ShortTextField_74680"
                                                                    name="curso_5" required 
                                                                    type="text" maxlength="150"></div>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                            <div class="text b b-text cf design-01">
                                                <div class="text-content">
                                                    <p class="wnd-align-center"><strong>
                                                            <font class="wnd-font-size-200">Experiências profissionais
                                                            </font>
                                                        </strong></p>
                                                </div>
                                            </div>
                                            <div class="form block b cf design-01">
                                                <form action="" method="post">
                                                    <fieldset class="form-fieldset">
                                                        <div>
                                                            <div
                                                                class="form-input form-text cf wnd-form-field wnd-required">
                                                                <label for="field-wnd_ShortTextField_666143"><span
                                                                        class="inline-text"><span>Experiência profissional
                                                                            1:</span></span></label><input
                                                                    id="field-wnd_ShortTextField_666143"
                                                                    name="exp_1" required 
                                                                    type="text" maxlength="150"></div>
                                                            <div
                                                                class="form-input form-text cf wnd-form-field wnd-required">
                                                                <label for="field-wnd_ShortTextField_696697"><span
                                                                        class="inline-text"><span>Experiência profissional
                                                                            2:</span></span></label><input
                                                                    id="field-wnd_ShortTextField_696697"
                                                                    name="exp_2" required 
                                                                    type="text" maxlength="150"></div>
                                                            <div
                                                                class="form-input form-text cf wnd-form-field wnd-required">
                                                                <label for="field-wnd_ShortTextField_510231"><span
                                                                        class="inline-text"><span>Experiência profissional
                                                                            3:</span></span></label><input
                                                                    id="field-wnd_ShortTextField_510231"
                                                                    name="exp_3" required 
                                                                    type="text" maxlength="150"></div>
                                                            <div
                                                                class="form-input form-text cf wnd-form-field wnd-required">
                                                                <label for="field-wnd_ShortTextField_789082"><span
                                                                        class="inline-text"><span>Experiência profissional
                                                                            4:</span></span></label><input
                                                                    id="field-wnd_ShortTextField_789082"
                                                                    name="exp_4" required 
                                                                    type="text" maxlength="150"></div>
                                                            <div
                                                                class="form-input form-text cf wnd-form-field wnd-required">
                                                                <label for="field-wnd_ShortTextField_224066"><span
                                                                        class="inline-text"><span>Experiência profissional
                                                                            5:</span></span></label><input
                                                                    id="field-wnd_ShortTextField_224066"
                                                                    name="exp_5" required 
                                                                    type="text" maxlength="150"></div>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                            <div class="text b b-text cf design-01">
                                                <div class="text-content">
                                                    <p class="wnd-align-center"><strong>
                                                            <font class="wnd-font-size-200">Formações acadêmicas</font>
                                                        </strong></p>
                                                </div>
                                            </div>
                                            <div class="form block b cf design-01">
                                                <form action="" method="post">
                                                    <fieldset class="form-fieldset">
                                                        <div>
                                                            <div
                                                                class="form-input form-group cf wnd-form-field wnd-required">
                                                                <label><span class="inline-text"><span>Ensino
                                                                            fundamental:</span></span></label>
                                                                <div class="form-group-content">
                                                                    <div>
                                                                        <div class="form-input form-radio"><label
                                                                                for="option-wnd_RadioGroupOption_250419"><span
                                                                                    class="inline-text"><span>Completo;</span></span></label><input
                                                                                name="ens_fund"
                                                                                value="wnd_RadioGroupOption_250419"
                                                                                id="option-wnd_RadioGroupOption_250419"
                                                                                type="radio" required
                                                                                name="ens_fund"
                                                                                value="wnd_RadioGroupOption_250419"
                                                                                id="option-wnd_RadioGroupOption_250419"
                                                                                type="radio" required>
                                                                            <div class="radio-button"></div>
                                                                        </div>
                                                                        <div class="form-input form-radio"><label
                                                                                for="option-wnd_RadioGroupOption_248117"><span
                                                                                    class="inline-text"><span>Cursando;</span></span></label><input
                                                                                name="ens_fund"
                                                                                value="wnd_RadioGroupOption_248117"
                                                                                id="option-wnd_RadioGroupOption_248117"
                                                                                type="radio" required
                                                                                name="ens_fund"
                                                                                value="wnd_RadioGroupOption_248117"
                                                                                id="option-wnd_RadioGroupOption_248117"
                                                                                type="radio" required>
                                                                            <div class="radio-button"></div>
                                                                        </div>
                                                                        <div class="form-input form-radio"><label
                                                                                for="option-wnd_RadioGroupOption_920230"><span
                                                                                    class="inline-text"><span>Incompleto;</span></span></label><input
                                                                                name="ens_fund"
                                                                                value="wnd_RadioGroupOption_920230"
                                                                                id="option-wnd_RadioGroupOption_920230"
                                                                                type="radio" required
                                                                                name="ens_fund"
                                                                                value="wnd_RadioGroupOption_920230"
                                                                                id="option-wnd_RadioGroupOption_920230"
                                                                                type="radio" required>
                                                                            <div class="radio-button"></div>
                                                                        </div>
                                                                        <div class="form-input form-radio"><label
                                                                                for="option-wnd_RadioGroupOption_4731"><span
                                                                                    class="inline-text"><span>Não
                                                                                        possuo.</span></span></label><input
                                                                                name="ens_fund"
                                                                                value="wnd_RadioGroupOption_4731"
                                                                                id="option-wnd_RadioGroupOption_4731"
                                                                                type="radio" required
                                                                                name="ens_fund"
                                                                                value="wnd_RadioGroupOption_4731"
                                                                                id="option-wnd_RadioGroupOption_4731"
                                                                                type="radio" required>
                                                                            <div class="radio-button"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="form-input form-group cf wnd-form-field wnd-required">
                                                                <label><span class="inline-text"><span>Ensino
                                                                            médio:</span></span></label>
                                                                <div class="form-group-content">
                                                                    <div>
                                                                        <div class="form-input form-radio"><label
                                                                                for="option-wnd_RadioGroupOption_258560"><span
                                                                                    class="inline-text"><span>Completo;</span></span></label><input
                                                                                name="ens_med"
                                                                                value="wnd_RadioGroupOption_258560"
                                                                                id="option-wnd_RadioGroupOption_258560"
                                                                                type="radio" required
                                                                                name="ens_med"
                                                                                value="wnd_RadioGroupOption_258560"
                                                                                id="option-wnd_RadioGroupOption_258560"
                                                                                type="radio" required>
                                                                            <div class="radio-button"></div>
                                                                        </div>
                                                                        <div class="form-input form-radio"><label
                                                                                for="option-wnd_RadioGroupOption_874179"><span
                                                                                    class="inline-text"><span>Cursando;</span></span></label><input
                                                                                name="ens_med"
                                                                                value="wnd_RadioGroupOption_874179"
                                                                                id="option-wnd_RadioGroupOption_874179"
                                                                                type="radio" required
                                                                                name="ens_med"
                                                                                value="wnd_RadioGroupOption_874179"
                                                                                id="option-wnd_RadioGroupOption_874179"
                                                                                type="radio" required>
                                                                            <div class="radio-button"></div>
                                                                        </div>
                                                                        <div class="form-input form-radio"><label
                                                                                for="option-wnd_RadioGroupOption_98014"><span
                                                                                    class="inline-text"><span>Incompleto;</span></span></label><input
                                                                                name="ens_med"
                                                                                value="wnd_RadioGroupOption_98014"
                                                                                id="option-wnd_RadioGroupOption_98014"
                                                                                type="radio" required
                                                                                name="ens_med"
                                                                                value="wnd_RadioGroupOption_98014"
                                                                                id="option-wnd_RadioGroupOption_98014"
                                                                                type="radio" required>
                                                                            <div class="radio-button"></div>
                                                                        </div>
                                                                        <div class="form-input form-radio"><label
                                                                                for="option-wnd_RadioGroupOption_9530"><span
                                                                                    class="inline-text"><span>Não
                                                                                        possuo.</span></span></label><input
                                                                                name="ens_med"
                                                                                value="wnd_RadioGroupOption_9530"
                                                                                id="option-wnd_RadioGroupOption_9530"
                                                                                type="radio" required
                                                                                name="ens_med"
                                                                                value="wnd_RadioGroupOption_9530"
                                                                                id="option-wnd_RadioGroupOption_9530"
                                                                                type="radio" required>
                                                                            <div class="radio-button"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="form-input form-group cf wnd-form-field wnd-required">
                                                                <label><span class="inline-text"><span>Ensino
                                                                            superior:</span></span></label>
                                                                <div class="form-group-content">
                                                                    <div>
                                                                        <div class="form-input form-radio"><label
                                                                                for="option-wnd_RadioGroupOption_819163"><span
                                                                                    class="inline-text"><span>Completo;</span></span></label><input
                                                                                name="ens_sup"
                                                                                value="wnd_RadioGroupOption_819163"
                                                                                id="option-wnd_RadioGroupOption_819163"
                                                                                type="radio" required
                                                                                name="ens_sup"
                                                                                value="wnd_RadioGroupOption_819163"
                                                                                id="option-wnd_RadioGroupOption_819163"
                                                                                type="radio" required>
                                                                            <div class="radio-button"></div>
                                                                        </div>
                                                                        <div class="form-input form-radio"><label
                                                                                for="option-wnd_RadioGroupOption_376204"><span
                                                                                    class="inline-text"><span>Cursando;</span></span></label><input
                                                                                name="ens_sup"
                                                                                value="wnd_RadioGroupOption_376204"
                                                                                id="option-wnd_RadioGroupOption_376204"
                                                                                type="radio" required
                                                                                name="ens_sup"
                                                                                value="wnd_RadioGroupOption_376204"
                                                                                id="option-wnd_RadioGroupOption_376204"
                                                                                type="radio" required>
                                                                            <div class="radio-button"></div>
                                                                        </div>
                                                                        <div class="form-input form-radio"><label
                                                                                for="option-wnd_RadioGroupOption_671813"><span
                                                                                    class="inline-text"><span>Incompleto;</span></span></label><input
                                                                                name="ens_sup"
                                                                                value="wnd_RadioGroupOption_671813"
                                                                                id="option-wnd_RadioGroupOption_671813"
                                                                                type="radio" required
                                                                                name="ens_sup"
                                                                                value="wnd_RadioGroupOption_671813"
                                                                                id="option-wnd_RadioGroupOption_671813"
                                                                                type="radio" required>
                                                                            <div class="radio-button"></div>
                                                                        </div>
                                                                        <div class="form-input form-radio"><label
                                                                                for="option-wnd_RadioGroupOption_73249"><span
                                                                                    class="inline-text"><span>Não
                                                                                        possuo.</span></span></label><input
                                                                                name="ens_sup"
                                                                                value="wnd_RadioGroupOption_73249"
                                                                                id="option-wnd_RadioGroupOption_73249"
                                                                                type="radio" required
                                                                                name="ens_sup"
                                                                                value="wnd_RadioGroupOption_73249"
                                                                                id="option-wnd_RadioGroupOption_73249"
                                                                                type="radio" required>
                                                                            <div class="radio-button"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="form-input form-text cf wnd-form-field wnd-required">
                                                                <label for="field-wnd_ShortTextField_547222"><span
                                                                        class="inline-text"><span>Se possuir ensino superior
                                                                            especifique:</span></span></label><input
                                                                    id="field-wnd_ShortTextField_547222"
                                                                    name="sup_esp" required 
                                                                    type="text" maxlength="150"></div>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                            <div class="text b b-text cf design-01">
                                                <div class="text-content">
                                                    <p class="wnd-align-center"><strong>
                                                            <font class="wnd-font-size-200">Responda o questionário a</font>
                                                        </strong><strong style="font-size: 1.075rem;">
                                                            <font class="wnd-font-size-200">&nbsp;seguir:</font>
                                                        </strong></p>
                                                </div>
                                            </div>
                                            <div class="form block b cf design-01">
                                                <form action="" method="post">
                                                    <fieldset class="form-fieldset">
                                                        <div>
                                                            <div
                                                                class="form-input form-text cf wnd-form-field wnd-required">
                                                                <label for="field-wnd_ShortTextField_10102"><span
                                                                        class="inline-text"><span>Qual cargo você almeja
                                                                            dentro da empresa, caso for
                                                                            convocado?</span></span></label><input
                                                                    id="field-wnd_ShortTextField_10102"
                                                                    name="quest_1" required value=""
                                                                    type="text" maxlength="150"></div>
                                                            <div
                                                                class="form-input form-group cf wnd-form-field wnd-required">
                                                                <label><span class="inline-text"><span>Você está disposto a
                                                                            realizar novos desafios que a empresa
                                                                            propor?</span></span></label>
                                                                <div class="form-group-content">
                                                                    <div>
                                                                        <div class="form-input form-radio"><label
                                                                                for="option-wnd_RadioGroupOption_804575"><span
                                                                                    class="inline-text"><span>Sim</span></span></label><input
                                                                                name="quest_2"
                                                                                value="wnd_RadioGroupOption_804575"
                                                                                id="option-wnd_RadioGroupOption_804575"
                                                                                type="radio" required
                                                                                name="quest_2"
                                                                                value="wnd_RadioGroupOption_804575"
                                                                                id="option-wnd_RadioGroupOption_804575"
                                                                                type="radio" required>
                                                                            <div class="radio-button"></div>
                                                                        </div>
                                                                        <div class="form-input form-radio"><label
                                                                                for="option-wnd_RadioGroupOption_63746"><span
                                                                                    class="inline-text"><span>Não</span></span></label><input
                                                                                name="quest_2"
                                                                                value="wnd_RadioGroupOption_63746"
                                                                                id="option-wnd_RadioGroupOption_63746"
                                                                                type="radio" required
                                                                                name="quest_2"
                                                                                value="wnd_RadioGroupOption_63746"
                                                                                id="option-wnd_RadioGroupOption_63746"
                                                                                type="radio" required>
                                                                            <div class="radio-button"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="form-input form-group cf wnd-form-field wnd-required">
                                                                <label><span class="inline-text"><span>Quais desses
                                                                            elementos você considera
                                                                            ter?</span></span></label>
                                                                <div class="form-group-content">
                                                                    <div>
                                                                        <div class="form-input form-checkbox"><label
                                                                                for="option-wnd_CheckboxGroupOption_357329"><span
                                                                                    class="inline-text"><span>&nbsp;Responsabilidade;</span></span></label><input
                                                                                name="quest_3"
                                                                                value="wnd_CheckboxGroupOption_357329"
                                                                                id="option-wnd_CheckboxGroupOption_357329"
                                                                                type="checkbox" data-required
                                                                                name="quest_3"
                                                                                value="wnd_CheckboxGroupOption_357329"
                                                                                id="option-wnd_CheckboxGroupOption_357329"
                                                                                type="checkbox" data-required>
                                                                            <div class="checkbox"></div>
                                                                        </div>
                                                                        <div class="form-input form-checkbox"><label
                                                                                for="option-wnd_CheckboxGroupOption_665746"><span
                                                                                    class="inline-text"><span>Comprometimento;</span></span></label><input
                                                                                name="quest_3"
                                                                                value="wnd_CheckboxGroupOption_665746"
                                                                                id="option-wnd_CheckboxGroupOption_665746"
                                                                                type="checkbox" data-required
                                                                                name="quest_3"
                                                                                value="wnd_CheckboxGroupOption_665746"
                                                                                id="option-wnd_CheckboxGroupOption_665746"
                                                                                type="checkbox" data-required>
                                                                            <div class="checkbox"></div>
                                                                        </div>
                                                                        <div class="form-input form-checkbox"><label
                                                                                for="option-wnd_CheckboxGroupOption_55101"><span
                                                                                    class="inline-text"><span>Proatividade;</span></span></label><input
                                                                                name="quest_3"
                                                                                value="wnd_CheckboxGroupOption_55101"
                                                                                id="option-wnd_CheckboxGroupOption_55101"
                                                                                type="checkbox" data-required
                                                                                name="quest_3"
                                                                                value="wnd_CheckboxGroupOption_55101"
                                                                                id="option-wnd_CheckboxGroupOption_55101"
                                                                                type="checkbox" data-required>
                                                                            <div class="checkbox"></div>
                                                                        </div>
                                                                        <div class="form-input form-checkbox"><label
                                                                                for="option-wnd_CheckboxGroupOption_37441"><span
                                                                                    class="inline-text"><span>Fácil
                                                                                        aprendizado;</span></span></label><input
                                                                                name="quest_3"
                                                                                value="wnd_CheckboxGroupOption_37441"
                                                                                id="option-wnd_CheckboxGroupOption_37441"
                                                                                type="checkbox" data-required
                                                                                name="quest_3"
                                                                                value="wnd_CheckboxGroupOption_37441"
                                                                                id="option-wnd_CheckboxGroupOption_37441"
                                                                                type="checkbox" data-required>
                                                                            <div class="checkbox"></div>
                                                                        </div>
                                                                        <div class="form-input form-checkbox"><label
                                                                                for="option-wnd_CheckboxGroupOption_91204"><span
                                                                                    class="inline-text"><span>Criatividade;</span></span></label><input
                                                                                name="quest_3"
                                                                                value="wnd_CheckboxGroupOption_91204"
                                                                                id="option-wnd_CheckboxGroupOption_91204"
                                                                                type="checkbox" data-required
                                                                                name="quest_3"
                                                                                value="wnd_CheckboxGroupOption_91204"
                                                                                id="option-wnd_CheckboxGroupOption_91204"
                                                                                type="checkbox" data-required>
                                                                            <div class="checkbox"></div>
                                                                        </div>
                                                                        <div class="form-input form-checkbox"><label
                                                                                for="option-wnd_CheckboxGroupOption_55755"><span
                                                                                    class="inline-text"><span>Atenção;</span></span></label><input
                                                                                name="quest_3"
                                                                                value="wnd_CheckboxGroupOption_55755"
                                                                                id="option-wnd_CheckboxGroupOption_55755"
                                                                                type="checkbox" data-required
                                                                                name="quest_3"
                                                                                value="wnd_CheckboxGroupOption_55755"
                                                                                id="option-wnd_CheckboxGroupOption_55755"
                                                                                type="checkbox" data-required>
                                                                            <div class="checkbox"></div>
                                                                        </div>
                                                                        <div class="form-input form-checkbox"><label
                                                                                for="option-wnd_CheckboxGroupOption_77231"><span
                                                                                    class="inline-text"><span>Disponibilidade;</span></span></label><input
                                                                                name="quest_3"
                                                                                value="wnd_CheckboxGroupOption_77231"
                                                                                id="option-wnd_CheckboxGroupOption_77231"
                                                                                type="checkbox" data-required
                                                                                name="quest_3"
                                                                                value="wnd_CheckboxGroupOption_77231"
                                                                                id="option-wnd_CheckboxGroupOption_77231"
                                                                                type="checkbox" data-required>
                                                                            <div class="checkbox"></div>
                                                                        </div>
                                                                        <div class="form-input form-checkbox"><label
                                                                                for="option-wnd_CheckboxGroupOption_59615"><span
                                                                                    class="inline-text"><span>Flexibilidade;</span></span></label><input
                                                                                name="quest_3"
                                                                                value="wnd_CheckboxGroupOption_59615"
                                                                                id="option-wnd_CheckboxGroupOption_59615"
                                                                                type="checkbox" data-required
                                                                                name="quest_3"
                                                                                value="wnd_CheckboxGroupOption_59615"
                                                                                id="option-wnd_CheckboxGroupOption_59615"
                                                                                type="checkbox" data-required>
                                                                            <div class="checkbox"></div>
                                                                        </div>
                                                                        <div class="form-input form-checkbox"><label
                                                                                for="option-wnd_CheckboxGroupOption_10056"><span
                                                                                    class="inline-text"><span>Liderança;</span></span></label><input
                                                                                name="quest_3"
                                                                                value="wnd_CheckboxGroupOption_10056"
                                                                                id="option-wnd_CheckboxGroupOption_10056"
                                                                                type="checkbox" data-required
                                                                                name="quest_3"
                                                                                value="wnd_CheckboxGroupOption_10056"
                                                                                id="option-wnd_CheckboxGroupOption_10056"
                                                                                type="checkbox" data-required>
                                                                            <div class="checkbox"></div>
                                                                        </div>
                                                                        <div class="form-input form-checkbox"><label
                                                                                for="option-wnd_CheckboxGroupOption_12273"><span
                                                                                    class="inline-text"><span>Capacidade de
                                                                                        trabalhar em
                                                                                        equipe;</span></span></label><input
                                                                                name="quest_3"
                                                                                value="wnd_CheckboxGroupOption_12273"
                                                                                id="option-wnd_CheckboxGroupOption_12273"
                                                                                type="checkbox" data-required
                                                                                name="quest_3"
                                                                                value="wnd_CheckboxGroupOption_12273"
                                                                                id="option-wnd_CheckboxGroupOption_12273"
                                                                                type="checkbox" data-required>
                                                                            <div class="checkbox"></div>
                                                                        </div>
                                                                        <div class="form-input form-checkbox"><label
                                                                                for="option-wnd_CheckboxGroupOption_36268"><span
                                                                                    class="inline-text"><span>Comunicação.</span></span></label><input
                                                                                name="quest_3"
                                                                                value="wnd_CheckboxGroupOption_36268"
                                                                                id="option-wnd_CheckboxGroupOption_36268"
                                                                                type="checkbox" data-required
                                                                                name="quest_3"
                                                                                value="wnd_CheckboxGroupOption_36268"
                                                                                id="option-wnd_CheckboxGroupOption_36268"
                                                                                type="checkbox" data-required>
                                                                            <div class="checkbox"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="form-input form-text cf wnd-form-field wnd-required">
                                                                <label for="field-wnd_ShortTextField_918803"><span
                                                                        class="inline-text"><span>Por que você deseja
                                                                            trabalhar?</span></span></label><input
                                                                    id="field-wnd_ShortTextField_918803"
                                                                    name="quest_4" required value=""
                                                                    type="text" maxlength="150"></div>
                                                            <div
                                                                class="form-input form-textarea cf wnd-form-field wnd-required">
                                                                <label for="field-wnd_LongTextField_155295"><span
                                                                        class="inline-text"><span>Fale sobre
                                                                            você:</span></span></label><textarea rows="5"
                                                                    id="field-wnd_LongTextField_155295"
                                                                    name="quest_5" required></textarea>
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
</html