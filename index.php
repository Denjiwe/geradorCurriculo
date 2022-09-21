<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículos</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link href="styles/styles.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar bg-light">

        <div class="container">
            <span id="brand" class="navbar-brand ">Gerador de Currículos</span>
        </div>
    </nav>

    <main class="mt-5 pt-4 container">
        <form method="post" action="" id="formCurriculo">
            <div class="mb-5 col-6">
                <label for="nome" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome" required>
            </div>
            
            <div class="mb-5 col-6">
                <label for="foto" class="form-label">Faça o upload de uma foto sua</label>
                <input type="file" accept="image/*" class="form-control" name="foto" id="foto">
            </div>

            <div class="row"> 
                <div class="mb-5 col-3">
                    <label for="dateNasc" class="form-label">Data de Nascimento</label>
                    <input type="date" class="form-control" name="dateNasc" id="dateNasc" required>
                </div>

                <div class="mb-5 col-3">
                    <label for="idade" class="form-label">Idade</label>
                    <input type="number" class="form-control" name="idade" id="idade" placeholder="Digite sua idade" required>
                </div>
            </div>

            <div class="row">
                <div class="mb-5 col-4">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="exemplo@outlook.com" required>
                </div>

                <div class="mb-5 col-2">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="tel" class="form-control" name="telefone" id="telefone" required>
                </div>
            </div>


            <button type="submit" class="btn btn-primary">Enviar</button>

        </form>
    </main>
    
</body>
</html>