<?php
ob_start();

use Psidevs\Entity\Cliente;
use Psidevs\Entity\ControleDeAcesso;
use Psidevs\Entity\Profissional;
use Psidevs\Entity\Usuario;
use Psidevs\Entity\Utilitarios;
use Psidevs\Helper\EntityManagerCreator;
use Psidevs\Repository\QueryBuilderConsulta;

require_once "../../vendor/autoload.php";

$verificaLogin = new ControleDeAcesso();
$verificaLogin->verificaAcesso();
if(isset($_GET["sair"])) $verificaLogin-> logout();

$usuario = new Usuario();
$usuario->setTipoUsuario($_SESSION['tipo_usuario']);
$usuario->setNome($_SESSION['nome']);

$entityManager   = EntityManagerCreator::createEntityManager();
$objetoClienteConsulta   = new QueryBuilderConsulta($entityManager, $entityManager->getClassMetadata(Cliente::class));
$objetoProfissinalConsulta   = new QueryBuilderConsulta($entityManager, $entityManager->getClassMetadata(Profissional::class));
?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../../css/dist/build.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Ubuntu:wght@400;500;600;700&display=swap" rel="stylesheet">
  <title>Psidevs | Minha Conta</title>
</head>
<body class="bg-secondary">
<header class="container_header">
  <div class="container_header_desktop">
    <div class="header_logo py-2">
      <h1><a href="index.php"><img src="../../assets/logo-branca.svg" class="w-11/12 ps-2 sm:ps-0" alt="Logo Psidevs, Plataforma Online"></a></h1>
    </div>
    <div class="header_perfil hidden lg:flex">
      <div class="header_perfil_nome pe-5 text-neutral-100 font-ubuntu">
        <p><?=$usuario->getNome()?></p>
        <p class="font-medium">Perfil</p>
      </div>
      <div class="header_perfil_avatar">
        <img src="../../assets/cliente-avatar.svg" alt="Avatar cliente">
      </div>
    </div>
    <div class="container_header_mobile lg:hidden z-10">
        <span class=" cursor-pointer" onclick="Openbar()">
          <img src="../../assets/icone-menu.svg" class="pe-2 sm:pe-0" alt="menu">
        </span>
      <div class="sidebar">
        <div class="text-gray-100 text-xl">
          <div class="header_sidebar p-2.5 rounded-md">
            <div class="container_header_mobile_avatar text-lg font-medium text-neutral-700">
              <img src="../../assets/cliente-avatar.svg" class="pe-4" alt="Avatar cliente">
              <p class="">Minha conta</p>
            </div>
            <i class="bi bi-x cursor-pointer bg-tertiary py-2 px-3 rounded-md text-primary text-2xl" onclick="Openbar()"></i>
          </div>
          <hr class="my-2 text-gray-600">
          <ul>
            <li>
              <a href="index.php" class="linkMenuMobile">
                <img src="../../assets/icone-home.svg" alt="Casa">
                <span class="textMenuMobile">Início</span>
              </a>
            </li>
            <li>
              <a href="consultas.php" class="linkMenuMobile">
                <img src="../../assets/icone-calendario.svg" alt="Calendário">
                <span class="textMenuMobile">Minhas consultas</span>
              </a>
            </li>
            <li>
              <a href="historico.php" class="linkMenuMobile">
                <img src="../../assets/icone-historico.svg" alt="Relógio">
                <span class="textMenuMobile">Histórico de consultas</span>
              </a>
            </li>
            <li>
              <a href="perfil.php" class="linkMenuMobile">
                <img src="../../assets/icone-perfil.svg" alt="Boneco">
                <span class="textMenuMobile">Meu perfil</span>
              </a>
            </li>
            <li class="my-4 text-gray-600"></li>
          </ul>
          <ul class="pt-5 space-y-2 border-t border-gray-200">
            <li>
              <a href="?sair" class="linkMenuMobile mt-0">
                <img src="../../assets/icone-sair.svg" alt="Porta">
                <span class="textMenuMobile">Sair</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</header>

<main class="container">
  <div class="container_bg">
    <div class="container_sub_header_bg">
      <div class="container_sub_header">
        <h2 class="container_sub_header_saudacao"> <span id="saudacao"></span>, <?=$usuario->getNome()?></h2>
        <div class="container_header_marcar_consulta_botao_bg">
          <a href="../../agendamento.php" class="container_header_marcar_consulta_botao"><img src="../../assets/icone-plus.svg" class="pe-2" alt="Sinal de adição">Marcar consulta</a>
        </div>
      </div>
    </div>
    <div class="container_principal">
      <div class="container_navbar">
        <div class="container_navbar_conteudo lg:sticky lg:top-5">
          <div class="container_navbar_conteudo_avatar text-xl font-medium text-neutral-700 pt-3">
            <img src="../../assets/cliente-avatar.svg" class="pe-4" alt="Avatar cliente">
            <p>Minha conta</p>
          </div>
          <nav class="text-primary text-lg font-medium mt-4">
            <ul>
              <li>
                <a href="index.php" class="linkSidebar"><img src="../../assets/icone-home.svg" class="pe-3.5" alt="Casa">Início</a>
              </li>
              <li>
                <a href="consultas.php" class="linkSidebar"><img src="../../assets/icone-calendario.svg" class="pe-3.5" alt="Calendário">Minhas consultas</a>
              </li>
              <li>
                <a href="historico.php" class="linkSidebar"><img src="../../assets/icone-historico.svg" class="pe-3.5" alt="Relógio">Histórico de consultas</a>
              </li>
              <li>
                <a href="perfil.php" class="linkSidebar"><img src="../../assets/icone-perfil.svg" class="pe-3.5" alt="Boneco">Meu perfil</a>
              </li>
              <li>
                <a href="?sair" class="linkSidebar border-t border-gray-900/20"><img src="../../assets/icone-sair.svg" class="pe-3.5" alt="Porta">Sair</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>

      <?php

      if ($usuario->getTipoUsuario() === 'cliente') {
          $historicoConsultaCliente = $objetoClienteConsulta->historicoConsultasCliente();
      ?>
      <div class="container_conteudo">
          <?php if(!empty($historicoConsultaCliente)) { ?>
        <div class="container_conteudo_historico_consulta_bg_pagina_consultas card_bg">
          <div class="container_conteudo_historico_consulta_pagina_consultas">
            <div class="container_conteudo_historico_consulta_sessao">
              <div class="container_conteudo_historico_consulta_titulo_pagina_consultas">
                <h2 class="consultaTitulo individual mb-0">Minhas de consultas</h2>
              </div>
              <div class="divisor historicos_consulta">
                  <?php foreach ($historicoConsultaCliente as $consulta) : ?>
                    <div class="container_conteudo_historico_consulta_profissional_bg">
                      <div class="container_conteudo_historico_consulta_profissional">
                        <div class="container_conteudo_historico_consulta_profissional_avatar">
                          <img src="../../assets/foto_perfil/<?=$consulta['foto']?>" class="avatar" alt="foto do profissional">
                        </div>
                        <div class="container_conteudo_historico_consulta_profissional_texto">
                          <h3 class="font-inter text-neutral-600 mb-1 text-lg"><?=$consulta['nome']?></h3>
                          <span class="dataConsulta mb-1"><img src="../../assets/icone-horario.svg" class="me-2" alt="Calendário"><span><?=Utilitarios::formataData($consulta['data'])?></span><span class="dot"><?=Utilitarios::formataHora($consulta['data'])?></span><span>Meet</span></span>
                          <span class="dataConsulta_status_badge <?php $estilizacaoStatus = $consulta['status'] === 'realizada' ? 'text-green-800 bg-green-100' : 'text-red-800 bg-red-100';  echo $estilizacaoStatus ?> me-2"><?=Utilitarios::primeriaLetraMaiscula($consulta['status'])?></span>
                          <span class="dataConsulta_status_badge text-gray-800 bg-tertiary"><?=Utilitarios::formataPreco($consulta['valor'])?></span>
                        </div>
                      </div>
                      <div class="container_conteudo_historico_consulta_profissional_botao">
                          <a href="../../agendamento.php"  class="botaoReagendar">Reagendar</a>
                      </div>
                    </div>
                  <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
        <?php } else { ?>
          <div class="container_flor_bg container_flor_maior">
            <div class="container_flor">
              <img src="../../assets/flor-historico-consultas.svg" alt="flor com uma mensagem de 'Sem hitórico consultas'.">
            </div>
          </div>
        <?php } }

      if ($usuario->getTipoUsuario() === 'profissional') {
          $historicoConsultaProfissional = $objetoProfissinalConsulta->historicoConsultasProfissional();
          ?>
        <div class="container_conteudo">
          <?php if(!empty($historicoConsultaProfissional)) { ?>
          <div class="container_conteudo_historico_consulta_bg_pagina_consultas card_bg">
            <div class="container_conteudo_historico_consulta_pagina_consultas">
              <div class="container_conteudo_historico_consulta_sessao">
                <div class="container_conteudo_historico_consulta_titulo_pagina_consultas">
                  <h2 class="consultaTitulo individual mb-0">Minhas de consultas</h2>
                </div>
                <div class="divisor historicos_consulta">
                    <?php foreach ($historicoConsultaProfissional as $consulta) : ?>
                      <div class="container_conteudo_historico_consulta_profissional_bg">
                        <div class="container_conteudo_historico_consulta_profissional">
                          <div class="container_conteudo_historico_consulta_profissional_avatar">
                            <img src="../../assets/foto_perfil/<?=$consulta['foto']?>" class="avatar" alt="foto do profissional">
                          </div>
                          <div class="container_conteudo_historico_consulta_profissional_texto">
                            <h3 class="font-inter text-neutral-600 mb-1 text-lg"><?=$consulta['nome']?></h3>
                            <span class="dataConsulta mb-1"><img src="../../assets/icone-horario.svg" class="me-2" alt="Calendário"><span><?=Utilitarios::formataData($consulta['data'])?></span><span class="dot"><?=Utilitarios::formataHora($consulta['data'])?></span><span>Meet</span></span>
                            <span class="dataConsulta_status_badge <?php $estilizacaoStatus = $consulta['status'] === 'realizada' ? 'text-green-800 bg-green-100' : 'text-red-800 bg-red-100';  echo $estilizacaoStatus ?> me-2"><?=Utilitarios::primeriaLetraMaiscula($consulta['status'])?></span>
                            <span class="dataConsulta_status_badge text-gray-800 bg-tertiary"><?=Utilitarios::formataPreco($consulta['valor'])?></span>
                          </div>
                        </div>
                      </div>
                    <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
          </div>
          <?php } else { ?>
          <div class="container_flor_bg container_flor_maior">
            <div class="container_flor">
              <img src="../../assets/flor-historico-consultas.svg" alt="flor com uma mensagem de 'Sem hitórico consultas'.">
            </div>
          </div>
          <?php } } ?>
    </div>
  </div>
  <div class="backdrop" onclick="Openbar()"></div>
</main>

<script>
  function Openbar() {
    document.querySelector('.sidebar').classList.toggle('right-[0px]');
    document.querySelector('.backdrop').classList.toggle('drawer-backdrop');
  }
</script>
<script src="../../js/saudacao.js"></script>
</body>
</html>
<?php
ob_end_flush();
?>