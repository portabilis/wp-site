<?php
get_header(); ?>
<div id="banner">
  <div class="wrap-title wow animated fadeInUp">
    <h1><?php the_field('home_banner_titulo'); ?></h1>
    <div class="big subtitle"><?php the_field('home_banner_subtitulo'); ?></div>
  </div>
</div>
<div id="page" class="pad-home">
  <div class="div-banner">
  </div>
  <div class="section-a">
    <div class="container">
      <div class="row no-gutters justify-content-center title-home">
        <div class="col-lg-7 col-sm-12">
          <h2 class="wow animated fadeInUp">O que a Portabilis faz?</h2>
          <p class="subtitle text-center wow animated fadeInUp" data-wow-delay="0.25s">A Portabilis ajuda que os municípios tenham uma gestão mais precisa e eficiente através do uso de tecnologia e dados nas áreas da educação e da assistência social.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 offset-lg-1 col-sm-6 wow animated zoomIn">
          <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/home-ilustracao1.png"; ?>" />
        </div>
        <div class="col-lg-4 offset-lg-2 col-sm-6 wow animated fadeInRight" data-wow-delay="0.25s">
          <h3>Na educação</h3>
          <p>Guiamos os gestores através de dados reais, superando a falta de informação, facilitando a tomada de decisão e viabilizando que as metas pedagógicas sejam cada vez mais alcançáveis e possíveis.</p>
          <a href="#" class="btn-baseb btn-blue" title="">Saiba mais</a>
        </div>
      </div>
      <div class="row">
        <div class="col">
        <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 offset-lg-1 col-sm-6 order-sm-1 order-2 wow animated fadeInLeft">
          <h3>Na assistência social</h3>
          <p>Auxiliamos os gestores do SUAS no acompanhamento da evolução e emancipação das famílias atendidas nos serviços socioassistenciais, gerando dados para otimizar os fluxos e projetos da secretaria.</p>
          <a href="#" class="btn-baseb btn-blue" title="">Saiba mais</a>
        </div>
        <div class="col-lg-4 offset-lg-2 col-sm-6 order-sm-2 order-1 wow animated zoomIn" data-wow-delay="0.25s">
          <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/home-ilustracao2.png"; ?>" />
        </div>
      </div>
    </div>
  </div>
  <div class="section-b section-padding section-margin">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 offset-lg-1 col-sm-6 align-self-center wow animated fadeInLeft">
          <h2>Por que educação e assistência social? </h2>
        </div>
        <div class="col-lg-6 col-sm-6  wow animated fadeInRight" data-wow-delay="0.25s">
          <p>Ao longo dos anos, descobrimos que aspectos socioassistenciais impactam e interferem na aprendizagem dos alunos em sala de aula. Por isso investimos nessas duas áreas, para produzir, sistematizar e usar os dados destas duas áreas para orientar ambas políticas públicas.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="section-a">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-1 col-sm-6 wow animated zoomIn align-self-center">
          <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/home-ilustracao3.png"; ?>" />
        </div>
        <div class="col-lg-4 offset-lg-2 col-sm-6 wow animated fadeInRight" data-wow-delay="0.25s">
          <h3>Intersetorialidade</h3>
          <p>Sabemos da importância da visão socioassistencial e que a intersetorialidade pode ajudar a direcionar e adaptar os processos pedagógicos, sob os aspectos das populações em situação de vulnerabilidade e risco social, que estão quase  em sua totalidade nas redes públicas de ensino.</p>
          <a href="#" class="btn-baseb btn-blue" title="">Saiba mais</a>
        </div>
      </div>
    </div>
  </div>
  <div class="section-c section-padding">
    <div class="container">
      <div class="row justify-content-center wow animated fadeInUp"">
        <div class="col-lg-9">
          <h2>Vamos bater um papo sobre as suas dificuldades?</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-sm-6 offset-lg-2 txt-right wow animated fadeInLeft" data-wow-delay="0.25s">
          <a href="#" class="btn-basec btn-white" title="mande uma mensagem para gente">MANDE UMA MENSAGEM PRA GENTE</a>
        </div>
        <div class="col-lg-4 col-sm-6 text-left txt-left  wow animated fadeInRight" data-wow-delay="0.5s">
          <ul>
            <li>sem compromisso</li>
            <li>gratuito</li>
            <li>personalizado para seu município</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="section-d section-padding">
    <div class="container">
      <div class="row wow animated fadeInUp">
        <div class="col-lg-8 col-sm-6">
          <h2 class="wow animated fadeInUp">Conteúdos incríveis</h2>
          <p class="subtitle wow animated fadeInUp" data-wow-delay="0.25s">Acesse gratuitamente nossos materiais sobre educação e assistência social no nosso blog.</p>
        </div>
        <div class="col-lg-4 col-sm-6 txt-right">
          <br>
          <a href="#" class="btn-baseb btn-blue" title="botao">Conheça os nossos materiais <i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
      </div>
      <div class="row wow animated fadeIn">
        <div class="col-lg-3 col-sm-6">
          <article>
            <span class="category">
              Educação
            </span>
            <img class="img-fluid thumb" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/thumb.jpg"; ?>">
            <p>E-book: tudo que você precisa saber sobre alimentação escolar.</p>
            <a href="#" class="btn-base btn-whitec" title="botao">Baixar apresentação <i class="fas fa-long-arrow-alt-down"></i></a>
          </article>
        </div>
        <div class="col-lg-3 col-sm-6">
          <article>
            <span class="category">
              Educação
            </span>
            <img class="img-fluid thumb" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/thumb.jpg"; ?>">
            <p>E-book: tudo que você precisa saber sobre alimentação escolar.</p>
            <a href="#" class="btn-base btn-whitec" title="botao">Baixar apresentação <i class="fas fa-long-arrow-alt-down"></i></a>
          </article>
        </div>
        <div class="col-lg-3 col-sm-6">
          <article>
            <span class="category">
              Educação
            </span>
            <img class="img-fluid thumb" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/thumb.jpg"; ?>">
            <p>Apresentação: tudo que você precisa saber sobre alimentação escolar.</p>
            <a href="#" class="btn-base btn-whitec" title="botao">Baixar apresentação <i class="fas fa-long-arrow-alt-down"></i></a>
          </article>
        </div>
        <div class="col-lg-3 col-sm-6">
          <article>
            <span class="category">
              Educação
            </span>
            <img class="img-fluid thumb" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/thumb.jpg"; ?>">
            <p>Apresentação: tudo que você precisa saber sobre alimentação escolar.</p>
            <a href="#" class="btn-base btn-whitec" title="botao">Baixar apresentação <i class="fas fa-long-arrow-alt-down"></i></a>
          </article>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
