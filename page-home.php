<?php
get_header(); ?>
<div id="banner">
  <div class="wrap-title wow animated fadeInUp banner-home">
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
          <h2 class="wow animated fadeInUp">Qual é a nossa causa?</h2>
          <p class="subtitle text-center wow animated fadeInUp" data-wow-delay="0.25s">Nós acreditamos que se apoiarmos os governos a fazer uma gestão mais inteligente das políticas voltadas às crianças e adolescentes e as populações em situação de vulnerabilidade social conseguiremos construir o país que sonhamos.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 offset-lg-1 col-sm-6 mb-4 mb-sm-0 wow animated zoomIn">
          <img width="300" class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/home-educacao.jpg"; ?>" />
        </div>
        <div class="col-lg-4 offset-lg-2 col-sm-6 align-self-center wow animated fadeInRight" data-wow-delay="0.25s">
          <h3>Na educação</h3>
          <p>Guiamos os gestores através de dados reais, superando a falta de informação, facilitando a tomada de decisão e viabilizando que as metas pedagógicas sejam cada vez mais alcançáveis e possíveis.</p>
          <a href="<?php echo home_url( '/ieducar' ); ?>" class="btn-baseb btn-blue" title="">Saiba mais</a>
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
          <p>Auxiliamos os profissionais do SUAS a modernizar e qualificar a oferta dos serviços socioassistenciais à população em situação de vulnerabilidade e risco social por meio de fluxos de atendimento e acompanhamento fáceis de usar, diagnóstico socioterritorial com mapas e dados confiáveis para orientar as decisões.</p>
          <a href="<?php echo home_url( '/sas' ); ?>" class="btn-baseb btn-blue" title="">Saiba mais</a>
        </div>
        <div class="col-lg-4 offset-lg-2 col-sm-6 mb-4 mb-sm-0 order-sm-2 order-1 wow animated zoomIn" data-wow-delay="0.25s">
          <img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/home-assistencia-social.png"; ?>" />
        </div>
      </div>
    </div>
  </div>
  <div class="section-b section-padding section-margin">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 offset-lg-1 col-sm-6 pr-lg-3 align-self-center wow animated fadeInLeft">
          <h2>Educação e Assistência Social</h2>
        </div>
        <div class="col-lg-6 col-sm-6  wow animated fadeInRight" data-wow-delay="0.25s">
          <p>
<strong>Nosso sonho é um país mais justo, com menos desigualdade e com educação pública de qualidade para todos.</strong> Por isso, investimos primordialmente nossa energia na solução dos problemas de gestão de uma política que é transformada do cidadão,<strong> a Educação,</strong> mas sem perder de vista a gestão e superação dos desafios de outra política garantidora de direitos, a <strong>Assistência Social,</strong> que articula uma rede de proteção social às crianças, adolescentes e famílias, buscando o enfrentamento de vulnerabilidades, violência e violação de direitos desta população.
</p>
        </div>
      </div>
    </div>
  </div>
  <div class="section-a">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-1 col-sm-6 mb-4 mb-sm-0 wow animated zoomIn align-self-center">
          <img width="380" class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/home-intersetorialidade.jpg"; ?>" />
        </div>
        <div class="col-lg-4 offset-lg-2 col-sm-6 wow animated fadeInRight" data-wow-delay="0.25s">
          <h3>Onde queremos chegar?</h3>
          <p>Nós já ajudamos os municípios a atender e acompanhar as famílias em situação de vulnerabilidade e risco social, bem como gerir o desempenho dos alunos destas mesmas famílias na escola. Agora, estamos dedicados a provar nossa visão, apoiando os governos a integrarem saberes e esforços de diferentes setores para fazer enfrentamentos coletivos frente aos problemas sociais dos núcleos familiares.</p>
          <a href="http://portabil.is/intersetorialidade" class="btn-baseb btn-blue" title="">Saiba mais</a>
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
          <a href="<?php echo home_url( '/fale-conosco' ); ?>" class="btn-basec btn-white" title="mande uma mensagem para gente">MANDE UMA MENSAGEM PRA GENTE</a>
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
      <div class="row wow animated fadeIn">
        <div class="col-lg-8 col-sm-6">
          <h2>Conteúdos incríveis</h2>
          <p class="subtitle">Acesse gratuitamente nossos materiais sobre educação e assistência social no nosso blog.</p>
        </div>
        <div class="col-lg-4 col-sm-6 txt-right">
          <br>
          <a href="<?php echo home_url( '/blog' ); ?>" class="btn-baseb btn-blue" title="Conheça os nossos materiais">Conheça os nossos materiais <i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
      </div>
      <div class="row wow animated fadeIn blog-posts-ajax">

      </div>
    </div>
  </div>
</div>
<script>
$.ajax({
    type:'POST',
    url: '<?php echo "https://blog.portabilis.com.br/wp-admin/admin-ajax.php"; ?>',
    data: {
    action: 'portabilisBlogMais',
    id: '0'
    },
    success: function(data){
      page = parseInt(data[0].id)+1;
      var article = '';
      for(var i = 0; i < data.length; i++){
        article = '<div class="col-lg-3 col-sm-6"><article><span style="margin-bottom:15px" class="category">'+data[i].category+'</span>'+data[i].img+'<p style="margin-top:15px">'+data[i].excerpt+'</p><a href="'+data[i].url+'" class="btn-base btn-whitec" title="Saiba mais">Saiba mais</a></article></div>';
        $('.blog-posts-ajax').append(article);
      }
    }
});
</script>
<?php get_footer(); ?>
