<?php
get_header(); ?>
<div id="banner-ieducar">
  <img class="bubble wow animated fadeInDown" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/bubble.png"; ?>" />
  <div class="wrap-title wow animated fadeInUp">
    <h1><?php the_field('ieducar_banner_titulo'); ?></h1>
    <div class="big subtitle"><?php the_field('ieducar_banner_subtitulo'); ?></div>
  </div>
</div>
<div id="page" class="pad-ieducar">
  <div class="div-banner-ieducar">
  </div>
  <div class="section-e pb-8">
    <div class="container">
      <div class="row justify-content-center title-home">
        <div class="col-lg-7 col-sm-12">
          <h2 class="wow animated fadeInUp">Conheça os principais benefícios do maior software livre do Brasil</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6 wow animated zoomIn">
          <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/ieducar-p1.jpg"; ?>" />
          <h6 class="small">PARA O</h6>
          <h3>Professor</h3>
          <p>O diário eletrônico no bolso do professor.</p>
          <ul>
            <li>Apoio à gestão da sala de aula</li>
            <li>Acompanhamento da vida escolar do aluno</li>
            <li>Ferramentas para controle de frequência e diário de classe</li>
          </ul>
        </div>
        <div class="col-lg-3 col-sm-6 wow animated zoomIn" data-wow-delay="0.25s">
          <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/ieducar-p2.jpg"; ?>" />
          <h6 class="small">PARA A</h6>
          <h3>Secretária da escola</h3>
          <p>Acesso fácil e rápido às informações.</p>
          <ul>
            <li>Fácil acesso das informações do dia a dia escolar</li>
            <li>Emissão de documentos com mais agilidade</li>
            <li>Integração em um clique com o Censo Escolar</li>
          </ul>
        </div>
        <div class="col-lg-3 col-sm-6 wow animated zoomIn" data-wow-delay="0.5s">
          <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/ieducar-p3.jpg"; ?>" />
          <h6 class="small">PARA A</h6>
          <h3>Secretária de Educação</h3>
          <p>Tecnologia que descomplica a gestão.</p>
          <ul>
            <li>Transparência na gestão escolar</li>
            <li>Tempo de gerenciamento dos processos otimizados</li>
            <li>Gestão guiada por dados pedagógicos</li>
          </ul>
        </div>
        <div class="col-lg-3 col-sm-6 wow animated zoomIn" data-wow-delay="0.75s">
          <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/ieducar-p4.jpg"; ?>" />
          <h6 class="small">PARA O</h6>
          <h3>Ténico de TI</h3>
          <p>O Software Livre para a Gestão Escolar.</p>
          <ul>
            <li>Solução de baixo custo com time de especialistas</li>
            <li>Autonomia para desenvolvimento e manutenção</li>
            <li>Dados armazenados com segurança e backups diários</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="section-f section-padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 col-sm-12">
          <h2 class="wow animated fadeInUp">Recursos principais</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 col-lg-4 wow animated zoomIn">
          <div class="resource">
            <img width="24" height="24" class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/icon1.jpg"; ?>" />
            <h4>Totalmente on-line</h4>
            <p>Acessível de qualquer lugar e cadastro único do aluno para toda a rede de ensino.</p>
          </div>
        </div>
        <div class="col-sm-4 col-lg-4 wow animated zoomIn" data-wow-delay="0.25s">
          <div class="resource">
            <img width="24" height="24" class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/icon2.jpg"; ?>" />
            <h4>Informações em tempo real</h4>
            <p>Dados quantitativos e estatísticos atualizados de todos os processos.</p>
          </div>
        </div>
        <div class="col-sm-4 col-lg-4 wow animated zoomIn" data-wow-delay="0.5s">
          <div class="resource">
            <div class="spacer"></div>
            <h4>Educacenso/INEP</h4>
            <p>Importação e exportação automatizadas dos dados Censo Escolar em poucos cliques.</p>
          </div>
        </div>
        <div class="col-sm-4 col-lg-4 wow animated zoomIn">
          <div class="resource">
            <img width="24" height="24" class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/icon3.jpg"; ?>" />
            <h4>Sistema de avaliação flexível</h4>
            <p>Avaliação e relatórios adaptados com notas numéricas, conceituais ou avaliação descritiva.</p>
          </div>
        </div>
        <div class="col-sm-4 col-lg-4 wow animated zoomIn" data-wow-delay="0.25s">
          <div class="resource">
            <div class="spacer"></div>
            <h4>Gestão de servidores</h4>
            <p>Gerenciamento de alocações, afastamentos, substituições, faltas e atrasos.</p>
          </div>
        </div>
        <div class="col-sm-4 col-lg-4 wow animated zoomIn" data-wow-delay="0.5s">
          <div class="resource">
            <div class="spacer"></div>
            <h4>Quadro de horários</h4>
            <p>Dados  para análise de demandas e disponibilidade de profissionais.</p>
          </div>
        </div>
        <div class="col-sm-4 col-lg-4 wow animated zoomIn">
          <div class="resource">
            <img width="24" height="24" class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/icon4.jpg"; ?>" />
            <h4>Transporte escolar</h4>
            <p>Controle de veículos, motoristas, rotas, itinerários e emissão de carteirinha.</p>
          </div>
        </div>
        <div class="col-sm-4 col-lg-4 wow animated zoomIn" data-wow-delay="0.25s">
          <div class="resource">
            <img width="24" height="24" class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/icon5.jpg"; ?>" />
            <h4>Biblioteca</h4>
            <p>Gestão completa de acervo com controle de reservas, empréstimos e devoluções. </p>
          </div>
        </div>
        <div class="col-sm-4 col-lg-4 wow animated zoomIn" data-wow-delay="0.5s">
          <div class="resource">
            <div class="spacer"></div>
            <h4>Relatórios e indicadores</h4>
            <p>Disponibilização de mais de 150 relatórios e indicadores.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-g section-padding">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-8 col-lg-6">
          <h2 class="wow animated fadeInUp">Diário do Professor</h2>
          <p class="subtitle wow animated fadeInUp">Ajuda os professores a focarem nos alunos ao invés de se preocuparem com a burocracia.</p>
          <h3 class="wow animated fadeInUp">Recursos principais</h3>
          <ul>
            <li class="row wow animated zoomIn">
              <div class="col-3">
                <div class="icon">
                icon
                </div>
              </div>
              <div class="col-9">
                <p class="title">Planejamento e avaliação</p>
                <p class="desc">Planejamento das aulas, metodologias e estratégias desenvolvidas em sala de aula.</p>
              </div>
            </li>
            <li class="row wow animated zoomIn">
              <div class="col-3">
                <div class="icon">
                icon
                </div>
              </div>
              <div class="col-9">
                <p class="title">Registro de conteúdos e observações</p>
                <p class="desc">Controle dos conteúdos aplicados e registro de observações para acompanhamento pedagógico.</p>
              </div>
            </li>
            <li class="row wow animated zoomIn">
              <div class="col-3">
                <div class="icon">
                icon
                </div>
              </div>
              <div class="col-9">
                <p class="title">Frequência com aplicativo móvel</p>
                <p class="desc">Controle de presença dos alunos em aplicativo para celular sem necessidade de internet.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="row wow animated fadeIn">
        <div class="col-sm-12">
          <p class="download">Faça o download do aplicativo:</p>
          <a href="#" class="btn-base btn-whiteb" title="">
            Available on the App Store
          </a>
          <a href="#" class="btn-base btn-whiteb" title="">
            Google
          </a>
        </div>
      </div>
    </div>
    <img class="background wow animated fadeInRight" data-wow-delay="0.25s" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/ieducar-background.jpg"; ?>" />
  </div>
  <div class="section-h section-padding">
    <div class="container">
      <div class="row no-gutters wow animated fadeIn">
        <div class="col-sm-4 align-self-center">
          <h3 class="wow animated fadeInUp">Conheça nossos planos</h3>
        </div>
        <div class="col-sm-4">
          <div class="title-version">
            <strong>Versão</strong>Comunidade
          </div>
          <div class="desc-version">
            Pensado para pequenas redes de ensino e escolas particulares.
          </div>
        </div>
        <div class="col-sm-4">
          <div class="title-version-b">
            <strong>Portabilis</strong>Pro
          </div>
          <div class="desc-version-b">
            Redes de médio e grande porte que buscam atendimento especializado.
          </div>
        </div>
      </div>
      <div class="detail">
        <div class="row no-gutters wow animated fadeInUp">
          <div class="col-sm-4">
            Incluso i-Educar Comunidade
          </div>
          <div class="col-sm-4 check">
            <i class="fas fa-check"></i>
          </div>
          <div class="col-sm-4 check">
            <i class="fas fa-check"></i>
          </div>
        </div>
        <div class="row no-gutters wow animated fadeInUp">
          <div class="col-sm-4">
            Pacote de relatórios Comunidade
          </div>
          <div class="col-sm-4 check">
            <i class="fas fa-check"></i>
          </div>
          <div class="col-sm-4 check">
            <i class="fas fa-check"></i>
          </div>
        </div>
        <div class="row no-gutters wow animated fadeInUp">
          <div class="col-sm-4">
            Implantação e treinamento on-line
          </div>
          <div class="col-sm-4 check">
            <i class="fas fa-check"></i>
          </div>
          <div class="col-sm-4 check">
            <i class="fas fa-check"></i>
          </div>
        </div>
        <div class="row no-gutters wow animated fadeInUp">
          <div class="col-sm-4">
            Importação e exportação do Censo Escolar/INEP
          </div>
          <div class="col-sm-4 check">
            <i class="fas fa-check"></i>
          </div>
          <div class="col-sm-4 check">
            <i class="fas fa-check"></i>
          </div>
        </div>
        <div class="row no-gutters wow animated fadeInUp">
          <div class="col-sm-4">
            Suporte por e-mail
          </div>
          <div class="col-sm-4 check">
            <i class="fas fa-check"></i>
          </div>
          <div class="col-sm-4 check">
            <i class="fas fa-check"></i>
          </div>
        </div>
        <div class="row no-gutters wow animated fadeInUp">
          <div class="col-sm-4">
            Sem limites de escolar e usuários
          </div>
          <div class="col-sm-4 check">
            <i class="fas fa-check"></i>
          </div>
          <div class="col-sm-4 check">
            <i class="fas fa-check"></i>
          </div>
        </div>
        <div class="row no-gutters wow animated fadeInUp">
          <div class="col-sm-4">
            Suporte por e-mail, chat e telefone <span class="pro">PRO</span>
          </div>
          <div class="col-sm-4 check">
          </div>
          <div class="col-sm-4 check">
            <i class="fas fa-check"></i>
          </div>
        </div>
        <div class="row no-gutters wow animated fadeInUp">
          <div class="col-sm-4">
            Diário Eletrônico do Professor <span class="pro">PRO</span>
          </div>
          <div class="col-sm-4 check">
          </div>
          <div class="col-sm-4 check">
            <i class="fas fa-check"></i>
          </div>
        </div>
        <div class="row no-gutters wow animated fadeInUp">
          <div class="col-sm-4">
            Pré-matrícula on-line <span class="pro">PRO</span>
          </div>
          <div class="col-sm-4 check">
          </div>
          <div class="col-sm-4 check">
            <i class="fas fa-check"></i>
          </div>
        </div>
        <div class="row no-gutters wow animated fadeInUp">
          <div class="col-sm-4">
            Pacote de relatórios Portabilis <span class="pro">PRO</span>
          </div>
          <div class="col-sm-4 check">
          </div>
          <div class="col-sm-4 check">
            <i class="fas fa-check"></i>
          </div>
        </div>
        <div class="row no-gutters wow animated fadeInUp">
          <div class="col-sm-4">
          </div>
          <div class="col-sm-4 check">
            <a href="#"  class="btn-base btn-blue" data-toggle="modal" data-target="#cta-a" title="">CTA - POP UP - Conversão</a>
          </div>
          <div class="col-sm-4 check">
            <a href="#" class="btn-base btn-blue" data-toggle="modal" data-target="#cta-b" title="">CTA - POP UP - Conversão</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-i">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 col-sm-12">
          <h2 class="wow animated fadeInUp">Incluso em todos os planos</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4 wow animated zoomIn">
          <div class="resource">
            <img width="24" height="24" class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/icon1.jpg"; ?>" />
            <h4>Embarque bem sucedido Portabilis</h4>
            <p>Nossa equipe elimina toda a complexidade da adoção, entregando a solução adaptada e configurada de acordo com a sua realidade.</p>
          </div>
        </div>
        <div class="col-sm-4 wow animated zoomIn" data-wow-delay="0.25s">
          <div class="resource">
            <img width="24" height="24" class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/icon2.jpg"; ?>" />
            <h4>Sua voz tem poder aqui</h4>
            <p>Você terá a chance de direcionar o desenvolvimento do maior software livre de gestão escolar do Brasil!</p>
          </div>
        </div>
        <div class="col-sm-4 wow animated zoomIn" data-wow-delay="0.5s">
          <div class="resource">
            <div class="spacer"></div>
            <h4>Atualizações mais confiáveis</h4>
            <p>Somos os mantenedores oficiais do i-Educar e ofere-cemos atualizações mais rápidas para o seu ambiente.</p>
          </div>
        </div>
        <div class="col-sm-4 wow animated zoomIn">
          <div class="resource">
            <img width="24" height="24" class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/icon3.jpg"; ?>" />
            <h4>Consultoria de sucesso Portabilis</h4>
            <p>No dia a dia, vamos te ajudar com os obstáculos e contribuir para que você extraia o máximo de potencial da solução.</p>
          </div>
        </div>
        <div class="col-sm-4 wow animated zoomIn" data-wow-delay="0.25s">
          <div class="resource">
            <div class="spacer"></div>
            <h4>Você investindo na educação do País</h4>
            <p>Quando você nos contrata, investimos estes recursos para melhorar o software que beneficia milhares de pessoas no país.</p>
          </div>
        </div>
        <div class="col-sm-4 wow animated zoomIn" data-wow-delay="0.5s">
          <div class="resource">
            <div class="spacer"></div>
            <h4>Garantia de disponibilidade e segurança</h4>
            <p>Você se preocupa com o sucesso da sua rede ou escola e nós a responsabilidade pela disponibilidade e segurança dos dados.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-j section-padding">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-7 col-sm-12">
          <h2 class="wow animated fadeInUp">Saiba o que falam de nós</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-sm-4 wow animated fadeInLeft">
              <img class="img-fluid"  src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/igreja.png"; ?>" alt="">
            </div>
            <div class="col-sm-8 wow animated zoomIn">
              <div class="row no-gutters">
                <div class="col-sm-12">
                  <h3>“Gostaria de <strong>parabenizar</strong> a Portabilis pela liberdade que nos é dada para <strong>interagir com a equipe</strong>, bem como a agilidade com que são respondidos nossos e-mails com as solicitações de <strong>suporte</strong> e de <strong>melhorias</strong>.”</h3>
                  <div class="test-div"></div>
                  <p class="test-name">Alan Votri</p>
                  <p class="test-desc">Secretário de Educação de Sombrio, SC</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="row">
            <div class="col-sm-4 wow animated zoomIn">
              <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/igreja.png"; ?>" alt="">
            </div>
            <div class="col-sm-8 wow animated fadeInRight">
              <div class="row no-gutters">
                <div class="col-sm-12">
                  <h4>“Estamos <strong>totalmente satisfeitos</strong> com os serviços da Portabilis”</h4>
                  <div class="test-div"></div>
                  <p class="test-name">Fábio Gualberto</p>
                  <p class="test-desc">Secretário de Educação de Dom Elisei, PA</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 wow animated zoomIn">
              <img class="img-fluid"  src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/igreja.png"; ?>" alt="">
            </div>
            <div class="col-sm-8 wow animated fadeInRight">
              <div class="row no-gutters">
                <div class="col-sm-12">
                  <h4>“Após a implantação do i-Educar a Secretaria passou a ter uma visão integrada de toda a rede”</h4>
                  <div class="test-div"></div>
                  <p class="test-name">Andréia Custódio</p>
                  <p class="test-desc">Secretário de Educação de Içara, SC</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-k blue section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="wow animated fadeInUp">Materiais educations</h2>
          <p class="big subtitle">Baixe Gratuitamente nossos materiais ricos sobre as áreas de educação e assistência social.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="cta-a" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CTA POP UP 1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="cta-b" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelb" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabelb">CTA POP UP 2</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
