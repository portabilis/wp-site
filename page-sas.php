<?php
get_header(); ?>
<div id="banner-sas">
  <div class="wrap-title wow animated fadeInUp">
    <h1><?php the_field('sas_banner_titulo'); ?></h1>
    <div class="big subtitle"><?php the_field('sas_banner_subtitulo'); ?></div>
  </div>
</div>
<div id="page">
  <div class="div-banner-sas">
  </div>
  <div class="section-l pad-sas">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-12">
          <h2 class="wow animated fadeInUp">Conheça os principais recursos do Portabilis SAS</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="row">
            <div class="col-12 wow animated zoomIn">
              <div class="resource-b">
                <div class="row no-gutters">
                  <div class="col-3">
                    <div class="circle">
                      <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/icon_19.jpg"; ?>" />
                    </div>
                  </div>
                  <div class="col-9">
                    <h3>Mais agilidade e menos burocrácia</h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 wow animated zoomIn">
              <div class="resource">
                <h4>Atividades em grupos e benefícios</h4>
                <p>Gestão completa de concessão de benefícios eventuais, projetos e atividades coletivas organizadas e monitoradas.</p>
              </div>
            </div>
            <div class="col-12 wow animated zoomIn">
              <div class="resource">
                <h4>Integração de dados entre equipamentos</h4>
                <p>Tratamento seguro de dados e criação de formulários personalizados com instrumentos técnico-operativos.</p>
              </div>
            </div>
            <div class="col-12 wow animated zoomIn">
              <div class="resource">
                <h4>Integração com sistemas do MDS</h4>
                <p>Gestão da informação, importação e exportação de dados dos equipamentos para os sistemas do MDS.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="row">
            <div class="col-12 wow animated zoomIn">
              <div class="resource-b">
                <div class="row no-gutters">
                  <div class="col-3">
                    <div class="circle">
                      <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/icon_20.jpg"; ?>" />
                    </div>
                  </div>
                  <div class="col-9">
                    <h3>Atendimento e acompanhamento</h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 wow animated zoomIn">
              <div class="resource">
                <h4>Agendamento e atendimento aos usuários</h4>
                <p>Controle total do cadastro de famílias e indivíduos, gerenciando as vulnerabilidades, programas e serviços.</p>
              </div>
            </div>
            <div class="col-12 wow animated zoomIn">
              <div class="resource">
                <h4>Encaminhentos e contrareferência</h4>
                <p>Integralidade no atendimento e com avisos para os técnicos para acompanhamento da contrarreferência.</p>
              </div>
            </div>
            <div class="col-12 wow animated zoomIn">
              <div class="resource">
                <h4>Inclusão nos serviços e planos de metas</h4>
                <p>Identifique potencialidades, vulnerabilidades e necessidades dos usuários, defina objetivos e metas de intervenção.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="row">
            <div class="col-12 wow animated zoomIn">
              <div class="resource-b">
                <div class="row no-gutters">
                  <div class="col-3">
                    <div class="circle">
                      <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/icon_21.jpg"; ?>" />
                    </div>
                  </div>
                  <div class="col-9">
                    <h3>Dados para tomada de decisão</h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 wow animated zoomIn">
              <div class="resource">
                <h4>Indicadores e gráficos em tempo real</h4>
                <p>Os gestores podem tomar melhores decisões baseadas em dados reais e diretos dos equipamentos do seu município.</p>
              </div>
            </div>
            <div class="col-12 wow animated zoomIn">
              <div class="resource">
                <h4>Indicadores de produção técnica</h4>
                <p>Dados que vêm de relatórios e indicadores para acompanhar a produção técnica com eficiência.</p>
              </div>
            </div>
            <div class="col-12 wow animated zoomIn">
              <div class="resource">
                <h4>Consulta e emissão do RMA</h4>
                <p>Desburocratização e facilidade no preenchimento e emissão do RMA, economia de tempo e informações uniformizadas.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-m section-padding">
    <div class="container wrap-container">
      <div class="row">
        <div class="col-sm-5 col-lg-4 align-self-center">
          <div class="sas-text">
            <h2 class="wow animated fadeInUp">Diagnóstico socioterritorial por mapas</h2>
            <p class="wow animated fadeInUp">
              Análise de incidência das vulnerabilidades sociais por bairro. O gestor pode verificar a posição de cada unidade de referência e localização das famílias com perfil para as políticas de habitação, produzindo diagnósticos socioterritoriais por mapas. 
            </p>
          </div>
        </div>
        <div class="col-sm-6 offset-sm-1 col-lg-7 offset-lg-1">
          <div class="wrap-screen">
            <img class="sas-screen" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/sas-screen.png"; ?>" />
          </div>
        </div>
        <img class="sas-maps img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/sas-maps.jpg"; ?>" />
      </div>
    </div>
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
            <a href="#" style="display: none"  class="btn-base btn-blue btn-resp" data-toggle="modal" data-target="#desc-a" title="">+ Detalhes</a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="title-version-b">
            <strong>Portabilis</strong>Pro
          </div>
          <div class="desc-version-b">
            Redes de médio e grande porte que buscam atendimento especializado.
            <a href="#" style="display: none"  class="btn-base btn-white btn-resp" data-toggle="modal" data-target="#desc-b" title="">+ Detalhes</a>
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
            <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/icon_22.jpg"; ?>" />
            <h4>Embarque bem sucedido Portabilis</h4>
            <p>Nossa equipe elimina toda a complexidade da adoção, entregando a solução adaptada e configurada de acordo com a sua realidade.</p>
          </div>
        </div>
        <div class="col-sm-4 wow animated zoomIn" data-wow-delay="0.25s">
          <div class="resource">
            <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/icon_23.jpg"; ?>" />
            <h4>Sua voz tem poder aqui</h4>
            <p>Você terá a chance de direcionar o desenvolvimento do maior software livre de gestão escolar do Brasil!</p>
          </div>
        </div>
        <div class="col-sm-4 wow animated zoomIn" data-wow-delay="0.5s">
          <div class="resource">
            <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/icon_24.jpg"; ?>" />
            <h4>Atualizações mais confiáveis</h4>
            <p>Somos os mantenedores oficiais do i-Educar e ofere-cemos atualizações mais rápidas para o seu ambiente.</p>
          </div>
        </div>
        <div class="col-sm-4 wow animated zoomIn">
          <div class="resource">
            <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/icon_25.jpg"; ?>" />
            <h4>Consultoria de sucesso Portabilis</h4>
            <p>No dia a dia, vamos te ajudar com os obstáculos e contribuir para que você extraia o máximo de potencial da solução.</p>
          </div>
        </div>
        <div class="col-sm-4 wow animated zoomIn" data-wow-delay="0.25s">
          <div class="resource">
            <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/icon_26.jpg"; ?>" />
            <h4>Você investindo na educação do País</h4>
            <p>Quando você nos contrata, investimos estes recursos para melhorar o software que beneficia milhares de pessoas no país.</p>
          </div>
        </div>
        <div class="col-sm-4 wow animated zoomIn" data-wow-delay="0.5s">
          <div class="resource">
            <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/icon_27.jpg"; ?>" />
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
        <div class="col-lg-12">
          <div class="row">
            <div class="col-sm-4 col-lg-4 wow animated fadeInLeft">
              <img class="img-fluid"  src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/dep4.png"; ?>" alt="">
            </div>
            <div class="col-sm-8 col-lg-7 offset-lg-1 wow animated zoomIn">
              <div class="row no-gutters">
                <div class="col-sm-12">
                  <h3>O software nos permitiu informatizar todos os processos da Secretaria, CRAS e CREAS, na gestão dos programas, concessão dos benefícios, atendimento e acompanhamento dos usuários bem como a Diretoria de Habitação, agilizando o trabalho das equipes e consequentemente melhorando o atendimento ao cidadão.</h3>
                  <div class="test-div"></div>
                  <p class="test-name">João Carlos Martins dos Santos</p>
                  <p class="test-desc">Secretário de Ação Social e Habitação - Curitibanos/SC</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="row">
            <div class="col-sm-4 col-lg-12 wow animated zoomIn">
              <img class="img-fluid p" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/dep5.png"; ?>" alt="">
            </div>
            <div class="col-sm-8 col-lg-12 wow animated fadeInRight">
              <div class="row no-gutters">
                <div class="col-sm-12">
                  <h4>O trabalho foi organizado e agora emitimos relatórios de forma simples e rápida. Os relatórios gráficos e os recursos de mapa também nos permitem uma visão mais ampla das áreas em situação de vulnerabilidade do território, beneficiários de programas e localização georreferenciada das famílias. </h4>
                  <div class="test-div"></div>
                  <p class="test-name">Bruno Simon</p>
                  <p class="test-desc">Diretor de Desenvolvimento e Cidadania CRAS – Cesário Lange/SP</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="row">
            <div class="col-sm-4 col-lg-12 wow animated zoomIn">
              <img class="img-fluid p" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/dep6.png"; ?>" alt="">
            </div>
            <div class="col-sm-8 col-lg-12 wow animated fadeInRight">
              <div class="row no-gutters">
                <div class="col-sm-12">
                  <h4>O software da Portabilis é uma ferramenta de extrema importância para a gestão da Assistência Social pois facilita muito nosso cotidiano profissional! Ajuda a manter o registro de atendimentos, cadastros dos usuários, dentre outras funcionalidades imprescindíveis para a atuação na área social.</h4>
                  <div class="test-div"></div>
                  <p class="test-name">Adevilson Pires</p>
                  <p class="test-desc">Assistente Social - Lebon Régis/SC</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="row">
            <div class="col-sm-4 col-lg-12 wow animated zoomIn">
              <img class="img-fluid p" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/dep7.png"; ?>" alt="">
            </div>
            <div class="col-sm-8 col-lg-12 wow animated fadeInRight">
              <div class="row no-gutters">
                <div class="col-sm-12">
                  <h4>Além de contar com capacitação para o uso adequado, temos à disposição um bom suporte da empresa. Como gestora, recomendo a Portabilis como exemplo de software eficaz para a gestão da política municipal de assistência social. </h4>
                  <div class="test-div"></div>
                  <p class="test-name">Lilian Arns</p>
                  <p class="test-desc">Secretária de Assistência Social - Forquilhinha/SC</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-k green section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h2 class="wow animated fadeInUp">Materiais educations</h2>
          <p class="big subtitle">Baixe Gratuitamente nossos materiais ricos sobre as áreas de educação e assistência social.</p>
        </div>
        <div class="col-lg-4">
          <br>
          <a href="#" class="btn-baseb btn-whited" title="botao">Acesse todos os materiais ricos <i class="fas fa-long-arrow-alt-right"></i></a>
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
<!-- Modal -->
<div class="modal fade" id="desc-a" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelb" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabelb">DESC 1</h5>
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
<div class="modal fade" id="desc-b" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelb" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabelb">DESC 2</h5>
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
