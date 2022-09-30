var idFormacao = 0;
var idProfissoes = 0;
$("#addCampoFormacao").click(function () {
    idFormacao++;    
    $("#formFormacao")
    .append(`<div class="col-8 mb-3" id="input-group"> <div class="input-group p-3"> <span class="input-group-text ">Nome da Instituição</span> <input type="text" class="form-control" name='instituicao${idFormacao}' id='instituicao${idFormacao}' aria-label="Instituicao"> </div> <div class="input-group p-3"> <span class="input-group-text ">Categoria de Ensino</span> <input type="text" class="form-control" name='categoria${idFormacao}' id='categoria${idFormacao}' aria-label="Categoria"> </div> <div class="input-group p-3 col-4"> <span class="input-group-text ">De</span> <input type="date" class="form-control" name='deFormacao${idFormacao}' id='deFormacao${idFormacao}' aria-label="De"> <span class="input-group-text ">Até</span> <input type="date" class="form-control" name='ateFormacao${idFormacao}' id='ateFormacao${idFormacao}' aria-label="Até"> </div> </div>`);
});

$("#addCampoProfissoes").click(function () {
    idProfissoes++;     
    $("#formProfissoes")
    .append(`<div class="col-8 mb-3" id="input-group"> <div class="input-group p-3"> <span class="input-group-text ">Nome da Empresa</span> <input type="text" class="form-control" name='empresa${idProfissoes}' id='empresa${idProfissoes}' aria-label="Empresa"> </div> <div class="input-group p-3"> <span class="input-group-text ">Cargo</span> <input type="text" class="form-control" name='cargo${idProfissoes}' id='cargo${idProfissoes}' aria-label="Cargo"> </div> <div class="input-group p-3 col-4"> <span class="input-group-text ">De</span> <input type="date" class="form-control"  name='deProfissoes${idProfissoes}' id='deProfissoes${idProfissoes}' aria-label="De"> <span class="input-group-text ">Até</span> <input type="date" class="form-control" name='ateProfissoes${idProfissoes}' id='ateProfissoes${idProfissoes}' aria-label="Até"> </div> </div>`);
});

/* código formFormacao
<div class="col-8 mb-3" id="input-group">
    <div class="input-group p-3">
            <span class="input-group-text ">Nome da Instituição</span>
            <input type="text" class="form-control" name='instituicao${idFormacao}' id='instituicao${idFormacao}' aria-label="Instituicao">
    </div>

    <div class="input-group p-3">
            <span class="input-group-text ">Categoria de Ensino</span>
            <input type="text" class="form-control" name='categoria${idFormacao}' id='categoria${idFormacao}' aria-label="Categoria">
    </div>

        <div class="input-group p-3 col-4">
                <span class="input-group-text ">De</span>
                <input type="date" class="form-control" name='deFormacao${idFormacao}' id='deFormacao${idFormacao}' aria-label="De">

                <span class="input-group-text ">Até</span>
                <input type="date" class="form-control" name='ateFormacao${idFormacao}' id='ateFormacao${idFormacao}' aria-label="Até">
        </div>
</div>*/

/* código formProfissoes
<div class="col-8 mb-3" id="input-group">
    <div class="input-group p-3">
            <span class="input-group-text ">Nome da Empresa</span>
            <input type="text" class="form-control" name='empresa${idProfissoes}' id='empresa${idProfissoes}' aria-label="Empresa">
    </div>

    <div class="input-group p-3">
            <span class="input-group-text ">Cargo</span>
            <input type="text" class="form-control" name='cargo${idProfissoes}' id='cargo${idProfissoes}' aria-label="Cargo">
    </div>

        <div class="input-group p-3 col-4">
                <span class="input-group-text ">De</span>
                <input type="date" class="form-control"  name='deProfissoes${idProfissoes}' id='deProfissoes${idProfissoes}' aria-label="De">

                <span class="input-group-text ">Até</span>
                <input type="date" class="form-control" name='ateProfissoes${idProfissoes}' id='ateProfissoes${idProfissoes}' aria-label="Até">
        </div>
</div>*/
