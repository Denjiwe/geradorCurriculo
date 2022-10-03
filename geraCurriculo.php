<?php
$nome = $_POST['nome'];
$foto = $_POST['foto'];
$dateNasc = $_POST['dateNasc'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];


if (isset($_POST['instituicao'])){
    $instituicao = $_POST['instituicao'];
    $categoria = $_POST['categoria'];
    $deFormacao = $_POST['deFormacao'];
    $ateFormacao = $_POST['ateFormacao'];
}

if (isset($_POST['empresa'])){
    $empresa = $_POST['empresa'];
    $cargo = $_POST['cargo'];
    $deProfissoes = $_POST['deProfissoes'];
    $ateProfissoes = $_POST['ateProfissoes'];
}

/*for($i = 1; $i <= $totalInstituicao; $i++)
{
    printf("Título : %s <br />", $instituicao[$i]);
    printf("Descrição : %s <br />", $categoria[$i]);
    echo '<br /><hr />';
}*/



?>