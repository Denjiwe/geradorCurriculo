<?php
$nome = $_POST['nome'];
$dateNasc = $_POST['dateNasc'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];

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
    $deFormacao = $_POST['deFormacao'];
    $ateFormacao = $_POST['ateFormacao'];

    $totalInstituicao = count($instituicao);
}

if (isset($_POST['empresa'])){
    $empresa = $_POST['empresa'];
    $cargo = $_POST['cargo'];
    $deProfissoes = $_POST['deProfissoes'];
    $ateProfissoes = $_POST['ateProfissoes'];

    $totalProfissoes = count($empresa);
}

/*for($i = 1; $i <= $totalInstituicao; $i++)
{
    printf("Título : %s <br />", $instituicao[$i]);
    printf("Descrição : %s <br />", $categoria[$i]);
    echo '<br /><hr />';
}*/


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/stylesCurriculo.css">

    <script type="text/javascript">
        $.ajax({
            url: 'geraCurriculo.php'
            success: function (data) {
                $('#nome').html(data);
            }
        })
    </script>

</head>
<body>
    <div class="conteudo">
        <div id="dadosPessoais" class="row"> 
            <div class="col-4">
                <img src="./images/<?= $new_name ?>" class="img img-responsive" width="200">
            </div>
            <div class="col-8 infos">
                <h2 id="nome"><?= $nome ?></h2>
                <span id="email">E-mail: <?= $email ?></span><br>
                <span id="telefone">Telefone: <?= $telefone ?> </span><br>
                <span id="dateNasc">Data de Nascimento: <?= $dateNasc ?> </span>
            </div>
        </div>

        <div id="formacao">
            <h2 id="formacaoTitle">Formações Acadêmicas</h2>
            <?php
                for($i = 1; $i <= $totalInstituicao; $i++)
                {
                    echo '<span class="spanFormacao">';
                    printf(" • %s -", $instituicao[$i]);
                    printf(" %s ", $categoria[$i]);
                    printf(" ( %s ", $deFormacao[$i]);
                    printf(" - %s )", $ateFormacao[$i]);
                    echo '</span><br>';

                }
            ?>
        </div>

        <div id="profissoes">
            <h2 id="profissoesTitle">Experiências Profissionais</h2>
            <?php
                    for($x = 1; $x <= $totalProfissoes; $x++)
                    {
                        echo '<span class="spanProfissoes">';
                        printf(" • %s -", $empresa[$x]);
                        printf(" %s ", $cargo[$x]);
                        printf(" ( %s ", $deProfissoes[$x]);
                        printf(" - %s )", $ateProfissoes[$x]);
                        echo '</span><br>';

                    }
                ?>
        </div>

    </div>
    
</body>


</html>