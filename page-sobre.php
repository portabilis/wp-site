<?php
get_header(); ?>
<div id="banner-sobre">
  <div class="wrap-title wow animated fadeInUp">
    <div class="big subtitle"><?php the_field('sobre_banner_subtitulo'); ?></div><br>
    <h1><?php the_field('sobre_banner_titulo'); ?></h1> 
  </div>
</div>
<div id="page" class="pad-sobre">
  <div class="div-banner-sobre">
  </div>
  <div class="section-n">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-sm-6">
          <h2 class="wow animated fadeInUp">Quem é a Portabilis?</h2>
          <p class="wow animated fadeInUp">
            A startup de tecnologia que ajuda os governos municipais a superarem a falta de informação através de soluções inteligentes, para aumentar o impacto das políticas públicas de educação e assistência social, focando em transformações sociais e a garantia do acesso de todos os brasileiros aos seus direitos.
          </p>
        </div>
        <div class="col-lg-5 offset-lg-2 col-sm-6">
          <h2 class="wow animated fadeInUp light">Quase meio milhão de alunos do Brasil estão conosco</h2>
          <p class="wow animated fadeInUp">
            <strong> Há quase 10 anos</strong>, nossos 30 funcionários transformam a vida de milhões de pessoas em mais de <strong>100 cidades</strong>, com mais de <strong>300 mil alunos, 20 mil professores</strong>, e impactam positivamente mais de <strong>50 mil</strong> famílias em situação de vulnerabilidade e risco social no País por meio do nosso trabalho
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <h2 class="text-center mt-7 mb-5 wow animated fadeInUp">Municípios que confiam na Portabilis</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-2 offset-lg-2 col-sm-4">
          <div class="mun mun1 wow animated zoomIn">
            <div class="mun-text">Ipiranga do Piauí(PI)</div>
          </div>
        </div>
        <div class="col-lg-2 col-sm-4">
          <div class="mun mun2 wow animated zoomIn" data-wow-delay="0.125s">
            <div class="mun-text">Paragominas (PA)</div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-4">
          <div class="mun mun3 wow animated zoomIn" data-wow-delay="0.25s">
            <div class="mun-text">São Pedro da Água Branca (MA)</div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-4">
          <div class="mun mun4 wow animated zoomIn" data-wow-delay="0.375s">
            <div class="mun-text">Parauapebas (PA)</div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-4">
          <div class="mun mun5 wow animated zoomIn">
            <div class="mun-text">Lucas do Rio Verde (MT)</div>
          </div>
        </div>
        <div class="col-lg-2 col-sm-4">
          <div class="mun mun6 wow animated zoomIn" data-wow-delay="0.125s">
            <div class="mun-text">Balneário Camboriú / SC</div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-4">
          <div class="mun mun7 wow animated zoomIn" data-wow-delay="0.25s">
            <div class="mun-text">Monte Alegre (RN)</div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-4">
          <div class="mun mun8 wow animated zoomIn" data-wow-delay="0.375s">
            <div class="mun-text">Presidente Kennedy (ES)</div>
          </div>
        </div>
        <div class="col-lg-2 offset-lg-2 col-sm-4">
          <div class="mun mun9 wow animated zoomIn">
            <div class="mun-text">Resende (RJ)</div>
          </div>
        </div>
        <div class="col-lg-2 col-sm-4">
          <div class="mun mun10 wow animated zoomIn" data-wow-delay="0.125s">
            <div class="mun-text">Criciúma (SC)</div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-4">
          <div class="mun mun11 wow animated zoomIn" data-wow-delay="0.25s">
            <div class="mun-text">São Miguel dos Campos (AL)</div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <h2 class="text-center mt-8 wow animated fadeInUp">Apoiando quem também transforma</h2>
           <p class="wow animated fadeInUp text-center mb-6">
           Organizações que implantamos nossa tecnologia sem nenhum custo.
          </p>
        </div>
      </div>
      <div class="row mb-sm-6 mb-6">
        <div class="col-lg-5 col-sm-6 wow animated fadeInLeft">
          <img class="img-fluid mb-4" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/apoiando1.png"; ?>" />
        </div>
        <div class="col-lg-6 ml-lg-auto col-sm-6 align-self-center wow animated fadeInRight">
          <h3>Fundação Negro Amor</h3>
          <p>Promovendo educação infantil de qualidade, inclusão digital e protagonismo juvenil, a Fundação Negro Amor busca que populações afrodescendentes historicamente excluídas conquistem direitos políticos, sociais e culturais e assim construam cada vez mais cidadania.</p>
          <span><img width="20" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/flag1.png"; ?>" /> Bahia</span>
        </div>
      </div>
      <div class="row mb-sm-6 mb-6">
        <div class="col-lg-5 ml-lg-auto col-sm-6 order-sm-2 wow animated fadeInRight">
          <img class="img-fluid mb-3" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/apoiando2.png"; ?>" />
        </div>
        <div class="col-lg-6 col-sm-6 align-self-center order-sm-1 wow animated fadeInLeft">
          <h3>AMA-REC</h3>
          <p>A associação de Pais e Amigos de Autistas da Região Carbonífera é uma associação sem fins lucrativos, que busca proteger os direitos das pessoas autistas.  A AMA-REC é mantenedora da <strong>Escola Especial Meu Mundo</strong>, que fornece um atendimento pedagógico e específico para a causa autística, buscando a inclusão e o acolhimento de todas as pessoas.</p>
          <span><img width="20" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/flag2.png"; ?>" /> Santa Catarina</span>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-5 col-sm-6 wow animated fadeInLeft">
          <img class="img-fluid mb-3" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/apoiando3.jpg"; ?>" />
        </div>
        <div class="col-lg-6 col-sm-6 ml-lg-auto align-self-center wow animated fadeInRight">
          <h3>Bairro da Juventude</h3>
          <p>
            O Bairro da Juventude oferece para a comunidade uma política inclusiva voltada à responsabilidade social, defesa, proteção e promoção dos direitos da criança e dos jovens do sul catarinense.
          </p>
          <span><img width="20" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/flag2.png"; ?>" /> Santa Catarina</span>
        </div>
      </div>
    </div>
  </div>
  <div class="section-p">
    <div class="row no-gutters">
      <div class="col-lg-6 wow animated fadeInLeft">
        <div class="background-color pt-lg-7 px-lg-8 pt-xl-11 px-xl-12">
          <h2>Além de destaque em gestão, 
a Portabilis também é destaque na imprensa</h2>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="background-img pt-lg-5 px-lg-8 pt-xl-7 px-xl-12 wow animated fadeInRight">
          <h2 class="white">“Monte Alegre (RN) economiza <br>
<strong>R$2,4 milhões</strong> por ano com 
uso do i-Educar”</h2>
          <span>Fonte: Mec</span><br>
          <a class="descubra" target="_blank" href="http://www.planejamento.gov.br/assuntos/programa-de-investimento-em-logistica-pil/noticias/monte-alegre-rn-economiza-r-2-4-milhoes-por-ano-com-uso-de-software-publico" title="">Descubra como <i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
      </div>
    </div>
  </div>
  <div class="section-q py-8">
    <div class="div-sobre wow animated fadeInUp">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="wow animated fadeInUp text-center mb-6">Leia mais sobre os nossos cases de sucesso :)</h2>
        </div>
      </div>
      <div class="row">
        <?php
          $args = array(
            'post_type' => 'cases',
            'posts_per_page' => 9,
            'orderby' => 'post_date',
            'order' => 'DESC');
          $query = new WP_Query( $args );
          while ( $query->have_posts() ) : $query->the_post();
        ?>
        <div class="col-lg-4 col-sm-6">
          <article class="wow animated zoomIn">
            <a target="_blank" href="<?php the_field('cases_url'); ?>">
              <div class="row">
                <div class="col-2 pt-3">
                  <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/cases-link.jpg"; ?>" />
                </div>
                <div class="col-10">
                  <p><?php the_title(); ?></p>
                  <span class="font">Fonte: <?php the_field('cases_fonte'); ?></span>
                </div>
              </div>
            </a>
          </article>
        </div>
        <?php
        endwhile;
        wp_reset_query();
        ?>
      </div>
    </div>
  </div>
  <div class="section-k dblue section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2 class="wow animated fadeInUp text-center mb-6">Materiais para imprensa</h2>
        </div>
      </div>
      <div class="row wow animated fadeInUp">
        <div class="col-lg-4">
          <?php if(!empty(get_field('material_para_imprensa_1'))): ?>
          <a target="_blank" class="archive" href="<?php the_field('material_para_imprensa_1'); ?>">
            Arquivo 1
          </a>
          <?php endif; ?>
        </div>
        <div class="col-lg-4">
          <?php if(!empty(get_field('material_para_imprensa_2'))): ?>
          <a target="_blank" class="archive" href="<?php the_field('material_para_imprensa_2'); ?>">
            Arquivo 2
          </a>
          <?php endif; ?>
        </div>
        <div class="col-lg-4">
          <?php if(!empty(get_field('material_para_imprensa_3'))): ?>
          <a target="_blank" class="archive" href="<?php the_field('material_para_imprensa_3'); ?>">
            Arquivo 3
          </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
