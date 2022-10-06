<?php
$nome = $_POST['nome'];
$dateNasc = $_POST['dateNasc'];
$dateNascOk = new DateTime($dateNasc);
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$vaga = $_POST['vaga'];
$empresaVaga = $_POST['empresaVaga'];
$descricao = $_POST['descricao'];

if(isset($_FILES['foto']))
{
   $ext = strtolower(substr($_FILES['foto']['name'],-4)); //Pegando extensão do arquivo
   $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
   $dir = './images/'; //Diretório para uploads 
   move_uploaded_file($_FILES['foto']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
}


if (isset($_POST['instituicao'])){
    $instituicao = $_POST['instituicao'];
    $categoria = $_POST['categoria'];

    $totalInstituicao = count($instituicao);

    $deFormacao = $_POST['deFormacao'];
    for($i = 1; $i <= $totalInstituicao; $i++) { $deFormacaoOk[$i] = new DateTime($deFormacao[$i]); }
    $ateFormacao = $_POST['ateFormacao'];
    for($i = 1; $i <= $totalInstituicao; $i++) { $ateFormacaoOk[$i] = new DateTime($ateFormacao[$i]); }
}

if (isset($_POST['empresa'])){
    $empresa = $_POST['empresa'];
    $cargo = $_POST['cargo'];

    $totalProfissoes = count($empresa);

    $deProfissoes = $_POST['deProfissoes'];
    for($x = 1; $x <= $totalProfissoes; $x++) { $deProfissoesOk[$x] = new DateTime($deProfissoes[$x]); }
    $ateProfissoes = $_POST['ateProfissoes'];
    for($x = 1; $x <= $totalProfissoes; $x++) { $ateProfissoesOk[$x] = new DateTime($ateProfissoes[$x]); }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <title>Currículo</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/stylesCurriculo.css">

</head>
<body>
    <div class="conteudo printable">
        <div id="dadosPessoais" class="row"> 
            <div class="col-4">
                <img src="./images/<?= $new_name ?>" class="img img-responsive" width="200">
            </div>
            <div class="col-8 infos">
                <h2 id="nome"><?= $nome ?></h2>
                <span id="email">E-mail: <?= $email ?></span><br>
                <span id="telefone">Telefone: <?= $telefone ?> </span><br>
                <span id="dateNasc">Data de Nascimento: <?= $dateNascOk->format('d/m/Y'); ?> </span>
            </div>
        </div>

        <div id="vaga">
            <h3> <?= $vaga." - ".$empresaVaga."<br>" ?> </h3>
        </div>

        <div class="container"> 
            <span id="descricao"><?=  $descricao ?> </span>
        </div>

        <div id="formacao">
            <h2 id="formacaoTitle">Formações Acadêmicas</h2>
            <?php
                if (isset($_POST['empresa'])){
                    for($i = 1; $i <= $totalInstituicao; $i++)
                    {
                        echo '<span class="spanFormacao">';
                        printf(" • %s -", $instituicao[$i]);
                        printf(" %s ", $categoria[$i]);
                        echo "( ".$deFormacaoOk[$i]->format('d/m/Y');
                        echo " - ".$ateFormacaoOk[$i]->format('d/m/Y')." )";
                        echo '</span><br>';
                    }
                } else echo '<span class="spanFormacao"> • Nenhuma </span>';
            ?>
        </div>

        <div id="profissoes">
            <h2 id="profissoesTitle">Experiências Profissionais</h2>
            <?php
                if (isset($_POST['empresa'])){
                    for($x = 1; $x <= $totalProfissoes; $x++)
                    {
                        echo '<span class="spanProfissoes">';
                        printf(" • %s -", $empresa[$x]);
                        printf(" %s ", $cargo[$x]);
                        echo "( ".$deProfissoesOk[$x]->format('d/m/Y');
                        echo " - ".$ateProfissoesOk[$x]->format('d/m/Y')." )";
                        echo '</span><br>';

                    }
                } else echo '<span class="spanFormacao"> • Nenhuma </span>';
            ?>
        </div>
        <button type="button" class="btn btn-primary nPrintable" onclick=window.print()>Baixar</button>
    </div>
    
</body>


</html>