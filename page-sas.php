<?php
get_header('sas'); ?>
<div id="banner-sas" class="bg-banner-sas">
  <div class="wrap-title wow animated fadeInUp">
    <h1><?php the_field('sas_banner_titulo'); ?></h1>
    <div class="big subtitle"><?php the_field('sas_banner_subtitulo'); ?></div>
    <div class="action">
      <a href="#quero-conhecer" data-toggle="modal" data-target="#quero-conhecer" class="btn-base btn-azul" title="Quero conhecer">Quero conhecer</a>
    </div>
    <img class="img-fluid d-none" src="https://portabilis.com.br/wp-content/uploads/2020/04/Group-79.png" alt="Conheça o Portabilis SAS">
  </div>
</div>
<div id="page" class="page-sas">
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
                    <img width='60' height="60" src="<?php echo get_site_url();?>/wp-content/uploads/2019/07/icon-decisao.png" />
                  </div>
                  <div class="col-9">
                    <h3>Mais agilidade e menos burocracia</h3>
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
                    <img width='60' height="60" src="<?php echo get_site_url();?>/wp-content/uploads/2019/07/icon-acompanhamento.png" />
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
                <h4>Encaminhentos e contrarreferência</h4>
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
                    <img width='60' height="60" src="<?php echo get_site_url();?>/wp-content/uploads/2019/07/icon-decisao.png" />
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
  <div class="section-k bg-white section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <h2 class="wow animated fadeInUp">Entre em contato para saber mais</h2>
          <p class="big subtitle">Preencha o formulário que entraremos em contato para mais informações.</p>
        </div>
        <div class="col-lg-4">
          <br>
          <a href="#quero-conhecer" data-toggle="modal" data-target="#quero-conhecer" class="btn-base btn-azul" title="Entre em contato para saber mais">Entre em contato para saber mais</a>
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
        <div class="col-lg-4 mb-6 mb-sm-0">
          <div class="row">
            <div class="col-sm-4 col-lg-12 wow animated zoomIn">
              <img class="img-fluid p"  src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/dep4.png"; ?>" alt="">
            </div>
            <div class="col-sm-8 col-lg-12 wow animated fadeInUp">
              <div class="row no-gutters">
                <div class="col-sm-12">
                  <h4>O software nos permitiu informatizar todos os processos da Secretaria, CRAS e CREAS, na gestão dos programas, concessão dos benefícios, atendimento e acompanhamento dos usuários bem como a Diretoria de Habitação, agilizando o trabalho das equipes e consequentemente melhorando o atendimento ao cidadão.</h4>
                  <div class="test-div"></div>
                  <p class="test-name">João Carlos Martins dos Santos</p>
                  <p class="test-desc">Secretário de Ação Social e Habitação - Curitibanos/SC</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-6 mb-sm-0">
          <div class="row">
            <div class="col-sm-4 col-lg-12 wow animated zoomIn">
              <img class="img-fluid p" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/dep6.png"; ?>" alt="">
            </div>
            <div class="col-sm-8 col-lg-12 wow animated fadeInUp">
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
            <div class="col-sm-8 col-lg-12 wow animated fadeInUp">
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
          <h2 class="wow animated fadeInUp">Materiais educativos</h2>
          <p class="big subtitle">Baixe gratuitamente nossos materiais ricos sobre as áreas de educação e assistência social.</p>
        </div>
        <div class="col-lg-4">
          <br>
          <a href="https://blog.portabilis.com.br/categoria/assistencia-social/" class="btn-baseb btn-whited" title="Conheça os nossos materiais">Acesse todos os materiais ricos <i class="fas fa-long-arrow-alt-right pl-2"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="quero-conhecer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Quero conhecer o Portabilis SAS!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="modal-subtitle" id="exampleModalLabel">Preencha o formulário abaixo para conhecer mais sobre nosso sistema para Assistência Social, Portabilis SAS.</h5>
        <?php
        echo do_shortcode(get_field('quero_conhecer_sas', false, false));
        ?>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="cta-a" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Quero conhecer o Portabilis SAS!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="modal-subtitle" id="exampleModalLabel">Preencha o formulário abaixo para conhecer mais sobre o maior software livre de gestão escolar do Brasil!</h5>
        <?php
        echo do_shortcode(get_field('sas_comu', false, false));
        ?>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="cta-b" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelb" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Quero conhecer o Portabilis SAS!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h5 class="modal-subtitle" id="exampleModalLabel">Preencha o formulário abaixo para conhecer mais sobre o maior software livre de gestão escolar do Brasil!</h5>
        <?php
        echo do_shortcode(get_field('sas_pro', false, false));
        ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
