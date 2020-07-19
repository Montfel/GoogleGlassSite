<?php
session_start();
?>

<!DOCTYPE html>
<html LANG="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Tudo sobre Google glass</title>
  <link rel="stylesheet" href="../css/estilo.css"/>
  <link rel="stylesheet" href="../css/specs.css">
</head>
<script language="JavaScript" src="../javascript/funcoes.js"></script>
<body>
<div id="interface">

  <header id="cabecalho">
    <hgroup>
    <h1>Google Glass</h1>
    <h2>A revolução do Google está chegando</h2>
    </hgroup>

    <img id="icone" src="../imagens/especificacoes.png"/>

    <nav id="menu">
      <h1>Menu Principal</h1>
      <ul>
        <li onmouseover="mudaFoto('../imagens/home.png')" onmouseout="mudaFoto('../imagens/especificacoes.png')"><a href="index.php">Home</a></li>
        <li onmouseover="mudaFoto('../imagens/especificacoes.png')" onmouseout="mudaFoto('../imagens/especificacoes.png')"><a href="specs.php">Especificações</a></li>
        <li onmouseover="mudaFoto('../imagens/fotos.png')" onmouseout="mudaFoto('../imagens/especificacoes.png')"><a href="fotos.php">Fotos</a></li>
        <li onmouseover="mudaFoto('../imagens/multimidia.png')" onmouseout="mudaFoto('../imagens/especificacoes.png')"><a href="multimidia.php">Multimídia</a></li>

        <?php
          if (!isset($_SESSION['logado'])):
        ?>

        <li onmouseover="mudaFoto('../imagens/perfil.png')" onmouseout="mudaFoto('../imagens/especificacoes.png')"><a href="index2.php">Login</a></li>
        
        <li onmouseover="mudaFoto('../imagens/perfil.png')" onmouseout="mudaFoto('../imagens/especificacoes.png')"><a href="cadastro.php">Sign in</a></li>

        <?php
          endif;
        ?>

        <?php
          if (isset($_SESSION['logado'])):
        ?>

        <li onmouseover="mudaFoto('../imagens/perfil.png')" onmouseout="mudaFoto('../imagens/especificacoes.png')"><a href="fale-conosco.php">Fale conosco</a></li>

        <li>Olá, <?php echo $_SESSION['nome'];?></li>

        <li><a href="logout.php">Sair</a></li>

        <?php
          endif;
        ?>
      </ul>
    </nav>
  </header>

  <section id="corpo-full">
    <article id="noticia-principal">
      <header id="cabecalho-artigo">
        <hgroup>
        <h3>Glass > Especificações</h3>
        <h1>Raio-X no Google Glass</h1>
        <h2>por Luís Felipe Monteiro</h2>
        <h3 class="direita">Atualizado em 08/Maio/2020</h3>
        </hgroup>
      </header>

      <p>Clique em qualquer área destacada da imagem para ter mais informações sobre os recursos do Google Glass. Qualquer
      ponto vermelho vai te levar a um lugar cheio de novas informações.</p>
      <section id="conteudo">
        <img src="../imagens/glass-esquema-marcado.jpg" usemap="#meumapa">
        <map name="meumapa">
          <area shape="poly" coords="184,219,185,256,267,244,266,208" href="google-glass.php#tela" target="janela">
          <area shape="circle" coords="158,244,11" href="google-glass.php#camera" target="janela">
          <area shape="circle" coords="76,51,11" href="google-glass.php#gadgets" target="janela">
          <area shape="poly" coords="27,143,27,170,83,251,82,216" href="google-glass.php#sensores" target="janela">
        </map>
        <iframe src="google-glass.php" name="janela" id="frame-spec" scrolling="no"></iframe>
      </section>

    </article>
  </section>

<footer id="rodape">
    <p>Copyright &copy; 2020 - by Luís Felipe Monteiro<br>
      <a href="https://www.linkedin.com/in/luís-felipe-monteiro-86276a174" target="_blank">Linkedin</a> |
      <a href="https://github.com/Montfel" target="_blank">Github</a></p>
  </footer>
</div>
</body>
</html>
