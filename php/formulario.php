<!DOCTYPE html>
<html lang="pt-br">

  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css" />
    <script language="JavaScript" src="../javascript/script.js"></script>
    <title>Formulário</title>
  </head>

  <body>
    <div class="content-wrap">

      <div class="jumbotron text-center bg-primary text-white">
        <div class="container">
          <h1 class="display-4">Cadastro</h1>
        </div>
      </div>

      <form class="container">
        <div class="form-row">
          <div class="col">
            <label for="nome">
              Nome:
            </label>
            <input type="text" class="form-control" id="nome">
          </div>
          <div class="col">
            <label for="data">
              Data:
            </label>
            <input type="date" class="form-control" id="data"></p>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="idade">
              Idade:
            </label>
            <input type="number" id="idade" min="1" max="200" class="form-control" oninput="idadeInvalida()">
            <div id="invalido" class="invalid-feedback">
              Digite uma idade válida.
            </div>
          </div>
        </div>

        <fieldset id="sexo" class="form-group">
          <legend>
            Sexo
          </legend>
          <div class="form-check">
            <input type="radio" name="cSexo" id="masc" class="form-check-input" checked>
            <label for="masc">
              Masculino
            </label>
            <br>
            <input type="radio" name="cSexo" id="fem" class="form-check-input">
            <label for="fem">
              Feminino
            </label>
          </div>
        </fieldset>

        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="segPainel" onclick="habilitarSegundoPainel()">
          <label class="form-check-label" for="segPainel">
            Habilitar Segundo Painel
          </label>
        </div> <br>

        <label class="form-check-label" for="msg" id="contador">
            Contador de palavras:
        </label>
        <textarea maxlength="10000" class="form-control" id="msg" rows="5"></textarea> <br>

        <input class="btn btn-primary float-right" type="button" onclick="apresentar()" value="Apresentar" id="submit"> <br><br><br>

        <div class="card" style="width: 38.3rem;" id="apresentacao">
          <div class="card-header">
            Dados
          </div>
          <ul class="list-group list-group-flush" id="lista">
            <li class="list-group-item" id="aprNome"></li>
            <li class="list-group-item" id="aprIdade"></li>
            <li class="list-group-item" id="aprSexo"></li>
            <li class="list-group-item" id="aprData"></li>
            <li class="list-group-item" id="aprQtd"></li>
          </ul>
        </div>
      </form>
      <br>
    </div>

    <script src="script.js"></script>
  </body>

</html>