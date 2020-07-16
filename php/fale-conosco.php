<?php
include('verifica_login.php');
?>
<!DOCTYPE html>
<html LANG="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Tudo sobre Google glass</title>
  <link rel="stylesheet" href="../css/estilo.css"/>
  <link rel="stylesheet" href="../css/form.css">
  <script language="JavaScript" src="../javascript/funcoes.js"></script>
  <script>
    function calc_total() {
      var qtd = parseInt(document.getElementById('cQtd').value);
      tot = qtd * 1500;
      document.getElementById('cTot').value = tot;
    }
  </script>
</head>
<body>
<div id="interface">

  <header id="cabecalho">
    
    <hgroup>
    <h1>Google Glass</h1>
    <h2>A revolução do Google está chegando</h2>
    <h3>Olá, <?php echo $_SESSION['usuario'];?></h3>
<h2><a href="logout.php">Sair</a></h2>
    </hgroup>

    <img id="icone" src="../imagens/perfil.png"/>

    <nav id="menu">
      <h1>Menu Principal</h1>
      <ul>
        <li onmouseover="mudaFoto('../imagens/home.png')" onmouseout="mudaFoto('../imagens/perfil.png')"><a href="../html/index.html">Home</a></li>
        <li onmouseover="mudaFoto('../imagens/especificacoes.png')" onmouseout="mudaFoto('../imagens/perfil.png')"><a href="../html/specs.html">Especificações</a></li>
        <li onmouseover="mudaFoto('../imagens/fotos.png')" onmouseout="mudaFoto('../imagens/perfil.png')"><a href="../html/fotos.html">Fotos</a></li>
        <li onmouseover="mudaFoto('../imagens/multimidia.png')" onmouseout="mudaFoto('../imagens/perfil.png')"><a href="../html/multimidia.html">Multimídia</a></li>
        <li onmouseover="mudaFoto('../imagens/perfil.png')" onmouseout="mudaFoto('../imagens/perfil.png')"><a href="index2.php">Login</a></li>
        <li onmouseover="mudaFoto('../imagens/perfil.png')" onmouseout="mudaFoto('../imagens/perfil.png')"><a href="formulario.php">Sign in</a></li>
      </ul>
    </nav>
  </header>

  <section id="corpo-full">
    <article id="noticia-principal">
      <header id="cabecalho-artigo">
        <hgroup>
        <h3>Fale Conosco > Contato</h3>
        <h1>Formulário de Contato</h1>
        <h2>por Luís Felipe Monteiro</h2>
        <h3 class="direita">Atualizado em 08/Maio/2020</h3>
        </hgroup>
      </header>

      <form method="post" id="fContato" oninput="calc_total();">

        <fieldset id="usuario"><legend>Identificação do Usuário</legend>
          <p><label for="cNome">Nome:</label> <input type="text" name="tNome" id="cNome" size="37" maxlength="35" placeholder="Nome Completo"></p>
          <p><label for="cSenha">Senha:</label> <input type="password" name="tSenha" id="cSenha" size="8" maxlength="8" placeholder="8 dígitos"></p>
          <p><label for="cMail">E-mail:</label> <input type="email" name="tMail" id="cMail" size="20" maxlength="40"></p>
          <fieldset id="sexo"><legend>Sexo:</legend>
            <input type="radio" name="tSexo" id="cMasc" checked><label for="cMasc">Masculino</label><br>
            <input type="radio" name="tSexo" id="cFem"><label for="cFem">Feminino</label>
          </fieldset>
          <p><label for="cNasc">Data de Nascimento:</label><input type="date" name="tNasc" id="cNasc"></p>
        </fieldset>

        <fieldset id="endereço"><legend>Endereço do Usuário</legend>
          <p><label for="cRua">Logradouro:</label> <input type="text" name="tRua" id="cRua" size="13" maxlength="80" placeholder="Rua, Av, Trav, ..."></p>
          <p><label for="cNum">Número:</label> <input type="number" name="tNum" id="cNum" min="0" max="99999"></p>
          <p><label for="cEst">Estado:</label>
            <select name="tEst" id="cEst">
              <option value="SE" selected>Sergipe</option>
              <optgroup label="Região Sudeste">
                <option value="RJ">Rio de Janeiro</option>
                <option value="SP">São Paulo</option>
                <option value="MG">Minas Gerais</option>
              </optgroup>
              <optgroup label="Região Sul">
                <option value="PR">Paraná</option>
                <option value="SC">Santa Catarina</option>
                <option value="RS">Rio Grande do Sul</option>
              </optgroup>
            </select></p>
          <p><label for="cCid">Cidade:</label> <input type="text" name="tCid" id="cCid" maxlength="40" size="20" placeholder="Sua Cidade" list="cidades"></p>
          <datalist id="cidades">
            <option value="Rio de Janeiro"></option>
            <option value="Nova Iguaçu"></option>
            <option value="Niterói"></option>
            <option value="Belford Roxo"></option>
          </datalist>
        </fieldset>

        <fieldset id="mensagem">
          <legend>Mensagem do Usuário</legend>
          <p><label for="cUrg">Grau de Urgência:</label>
          Mín<input type="range" name="tUrg" id="cUrg" min="0" max="10" step="2">Máx</p>
          <p><label for="cMsg">Mensagem:</label><textarea name="tMsg" id="cMsg" cols="35" rows="5" placeholder="Deixe aqui sua mensagem"></textarea></p>
        </fieldset>

        <fieldset id="pedido">
          <legend>Quero um Google Glass</legend>
          <p><input type="checkbox" name="tPed" id="cPed" checked><label for="cPed">Gostaria de adquirir um Google Glass quando disponível</label></p>
          <p><label for="cCor">Cor:</label><input type="color" name="tCor" id="cCor" value="#0000ff"></p>
          <p><label for="cQtd">Quantidade:</label><input type="number" name="tQtd" id="cQtd" min="0" max="5" value="0"></p>
          <p><label for="cTot">Preço Total: R$</label><input type="text" name="tTot" id="cTot" placeholder="Total a pagar" readonly></p>
        </fieldset>

        <input type="image" name="tEnviar" id="cEnviar" src="imagens/botao-enviar.png">
      </form>
    </article>
  </section>
<footer id="rodape">
    <p>Copyright &copy; 2020 - by Luís Felipe Monteiro<br>
    <a href="https://www.facebook.com/luisfelipe.monteiro.334" target="_blank">Facebook</a> |
    <a href="https://twitter.com/montfel_" target="_blank">Twitter</a></p>
  </footer>
</div>
</body>
</html>