<?php
session_start();
?>

<!DOCTYPE html>
<html LANG="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Tudo sobre Google glass</title>
  <link rel="stylesheet" href="../css/estilo.css"/>
</head>
<script language="JavaScript" src="../javascript/funcoes.js"></script>
<body>
<div id="interface">

  <header id="cabecalho">
    <hgroup>
    <h1>Google Glass</h1>
    <h2>A revolução do Google está chegando</h2>
    </hgroup>

    <img id="icone" src="../imagens/glass-oculos-preto-peq.png"/>

    <nav id="menu">
      <h1>Menu Principal</h1>
      <ul>
        <li onmouseover="mudaFoto('../imagens/home.png')" onmouseout="mudaFoto('../imagens/glass-oculos-preto-peq.png')"><a href="index.php">Home</a></li>

        <li onmouseover="mudaFoto('../imagens/especificacoes.png')" onmouseout="mudaFoto('../imagens/glass-oculos-preto-peq.png')"><a href="specs.php">Especificações</a></li>

        <li onmouseover="mudaFoto('../imagens/fotos.png')" onmouseout="mudaFoto('../imagens/glass-oculos-preto-peq.png')"><a href="fotos.php">Fotos</a></li>

        <li onmouseover="mudaFoto('../imagens/multimidia.png')" onmouseout="mudaFoto('../imagens/glass-oculos-preto-peq.png')"><a href="multimidia.php">Multimídia</a></li>

        <?php
          if (!isset($_SESSION['logado'])):
        ?>

        <li onmouseover="mudaFoto('../imagens/perfil.png')" onmouseout="mudaFoto('../imagens/glass-oculos-preto-peq.png')"><a href="index2.php">Login</a></li>
        
        <li onmouseover="mudaFoto('../imagens/perfil.png')" onmouseout="mudaFoto('../imagens/glass-oculos-preto-peq.png')"><a href="cadastro.php">Sign in</a></li>

        <?php
          endif;
        ?>

        <?php
          if (isset($_SESSION['logado'])):
        ?>

        <li onmouseover="mudaFoto('../imagens/perfil.png')" onmouseout="mudaFoto('../imagens/glass-oculos-preto-peq.png')"><a href="fale-conosco.php">Fale conosco</a></li>

        <li>Olá, <?php echo $_SESSION['nome'];?></li>

        <li><a href="logout.php">Sair</a></li>

        <?php
          endif;
        ?>
      </ul>
    </nav>
  </header>

  <section id="corpo">
    <article id="noticia-principal">
      <header id="cabecalho-artigo">
        <hgroup>
        <h3>Tecnologia > Inovações</h3>
        <h1>Saiba tudo sobre o Google Glass</h1>
        <h2>por Luís Felipe Monteiro</h2>
        <h3 class="direita">Atualizado em 08/Maio/2020</h3>
        </hgroup>
      </header>

      <h2>O que é</h2>
      <p>O Google Glass é um acessório em de óculos que possibilita a interação dos usuários com diversos conteúdos em realidade aumentada. Também chamado de <a href="https://www.google.com/glass/start/" target="_blank" class="links">Project Glass</a>, o eletrônico é capaz de tirar fotos a partir de comandos de voz, enviar mensagens instantâneas e realizar vídeoconferências. Seu lançamento está previsto para 2014, e seu preço deve ser de US$ 1,5 mil. Atualmente o <em>Google Glass</em> encontra-se em fase de testes e já possui um vídeo totalmente gravado com o dispositivo. Além disso, a companhia de buscas registrou novas patentes anti-furto e de desbloqueio de tela para o acessório.</p>

      <figure class="foto-legenda">
        <img src="../imagens/glass-quadro-homem-mulher.jpg"/>
        <figcaption>
          <h3>Google Glass</h3>
          <p>Uma nova maneira de ver o mundo</p>
        </figcaption>
      </figure>

      <h2>Data de lançamento</h2>
      <p>Não há uma data específica e oficial para o dispositivo ser lançado, ainda. Pode ser que ele esteja disponível em demonstrações a partir de 2013, mas seu lançamento para as lojas fica para, pelo menos, 2014.</p>

      <h2>Especificações Técnicas</h2>
      <table id="tabelaspec">
        <caption>Tabela Técnica do Google Glass <span>Mar/2013</span></caption>
        <tr><td class="ce">Tela</td><td class="cd">Resolução equivalente a tela de 25"</td></tr>
        <tr><td rowspan="2" class="ce">Camera</td><td class="cd">5MP para fotos</td></tr>
        <tr><td class="cd">720p para vídeos</td></tr>
        <tr><td rowspan="2" class="ce">Conectividade</td><td class="cd">Wi-Fi</td></tr>
        <tr><td class="cd">Bluetooth</td></tr>
        <tr><td class="ce">Memória Interna</td><td class="cd">12GB</td></tr>
      </table>

      <h2>Como funciona</h2>
      <p>De acordo com fontes próximas do Google, os óculos vão contar com uma pequena tela de LCD ou AMOLED na parte superior e em frente aos olhos do usuário. Com o uso de uma câmera e GPS, você pode se situar, assim como selecionar opções com o movimento da cabeça</p>

      <h2>O que você pode fazer com o Google Glasses</h2>
      <p>O vídeo de divulgação do Google mostra que você pode se transformar em uma espécie de “super-<wbr/>humano”, já que o aparelho pode indicar a quantos metros você está de seu destino, se o metrô está aberto ou fechado, mostrar o clima, agenda e até mesmo permitir que você marque encontros apenas com comandos de voz.</p>

      <iframe width="500" height="310" src="https://www.youtube.com/embed/ky-ZV8e3YyM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </article>
  </section>

  <aside id="lateral">

    <h1>Outras Notícias</h1>
    <h2>Vídeo mais recente</h2>

      <iframe width="350" height="200" src="https://www.youtube.com/embed/zKNv505sYAM?start=7" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    <h2>Novidades no Glass</h2>
    <p>O Google enfim revelou as especificações completas do Google Glass, e com ele uma surpresa ainda inédita no mercado: a gigante das buscas usará um sistema de áudio baseado na transdução por condução. Através das hastes dos óculos, o som será transmitido para o ouvido do usuário por meio de microvibrações em determinados ossos de sua cabeça, sem usar nenhum tipo de alto-falante.</p>

    <p>Além da surpresa do áudio, a tela montada a frente do olho do usuário também chamou atenção. Serão 640 x 360 pixels de resolução que, em proporção, equivaleria a um monitor de 25 polegadas de alta definição colocado a 2,5 metros de distância do espectador.</p>
  </aside>
  <footer id="rodape">
    <p>Copyright &copy; 2020 - by Luís Felipe Monteiro<br>
      <a href="https://www.linkedin.com/in/luís-felipe-monteiro-86276a174" target="_blank">Linkedin</a> |
      <a href="https://github.com/Montfel" target="_blank">Github</a></p>
  </footer>
</div>
</body>
</html>
