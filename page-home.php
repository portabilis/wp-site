<?php
get_header(); ?>
<div id="banner">
  <div class="wrap-title wow animated fadeInUp banner-home">
    <h1><?php the_field('home_banner_titulo'); ?></h1>
    <div class="big subtitle"><?php the_field('home_banner_subtitulo'); ?></div>
    <div class="action">
      <a href="#cta" class="btn-base btn-azul" data-toggle="modal" data-target="#cta" title="Quero conhecer">Quero conhecer</a>
    </div>
    <img class="img-fluid d-none" src="/wp-content/uploads/2019/07/banner-principal-home-1.png" alt="Conheça a Portabilis">
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
        <div class="col-lg-4 offset-lg-1 col-sm-6 mb-4 mb-sm-0 wow animated zoomIn">
          <img width="300" class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/home-educacao.jpg"; ?>" />
        </div>
        <div class="col-lg-4 offset-lg-2 col-sm-6 align-self-center wow animated fadeInRight" data-wow-delay="0.25s">
          <h3>Na educação</h3>
          <p>Guiamos os gestores através de dados reais, superando a falta de informação, facilitando a tomada de decisão e viabilizando que as metas pedagógicas sejam cada vez mais alcançáveis e possíveis.</p>
          <a href="<?php echo home_url( '/ieducar' ); ?>" class="btn-baseb btn-blue" title="">Saiba mais</a>
        </div>
      </div>
    </div>
  </div>
  <div class="section-b section-padding section-margin">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-2 col-sm-6 mb-4 mb-sm-0 wow animated zoomIn" data-wow-delay="0.25s">
          <h3>Ensino remoto, sem deixar ninguém pra trás</h3>
          <p>Nós te ajudamos a estabelecer uma estratégia de ensino remoto equitativa e eficiente.</p>
          <a href="https://conteudos.portabilis.com.br/ensino-remoto" target="_blank"  class="btn-baseb btn-blue" title="">Quero conhecer</a>
        </div>
        <div class="col-lg-4 offset-lg-1 col-sm-6 wow animated fadeInLeft">
          <img class="img-fluid" src="/wp-content/themes/portabilis-master/assets/img/publicacoes.png" />
        </div>
      </div>
    </div>
  </div>
  <div class="section-a">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-1 col-sm-6 order-sm-1 order-2 wow animated fadeInLeft">
          <img class="img-fluid" src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/07/assistencia-social.png" />
        </div>
        <div class="col-lg-4 offset-lg-2 col-sm-6 mb-4 mb-sm-0 order-sm-2 order-1 wow animated zoomIn" data-wow-delay="0.25s">
          <h3>Na assistência social</h3>
          <p>Auxiliamos os gestores do SUAS no acompanhamento da evolução e emancipação das famílias atendidas nos serviços socioassistenciais, gerando dados para otimizar os fluxos e projetos da secretaria.</p>
          <a href="<?php echo home_url( '/sas' ); ?>" class="btn-baseb btn-blue" title="">Saiba mais</a>
        </div>
      </div>
    </div>
  </div>
  <div class="section-b section-padding section-margin">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 offset-lg-1 col-sm-6 pr-lg-3 align-self-center wow animated fadeInLeft">
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
        <div class="col-lg-4 offset-lg-1 col-sm-6 mb-4 mb-sm-0 wow animated zoomIn align-self-center">
          <img width="380" class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/home-intersetorialidade.jpg"; ?>" />
        </div>
        <div class="col-lg-4 offset-lg-2 col-sm-6 wow animated fadeInRight" data-wow-delay="0.25s">
          <h3>Intersetorialidade</h3>
          <p>Sabemos da importância da visão socioassistencial e que a intersetorialidade pode ajudar a direcionar e adaptar os processos pedagógicos, sob os aspectos das populações em situação de vulnerabilidade e risco social, que estão quase  em sua totalidade nas redes públicas de ensino.</p>
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
          <a href="<?php echo home_url( '/fale-conosco' ); ?>" class="btn-basec btn-white" title="mande uma mensagem para gente">Mande uma mensagem pra gente</a>
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
        article = '<div class="col-lg-3 col-sm-6"><article><span style="margin-bottom:15px" class="category">'+data[i].category+'</span>'+data[i].img+'<p style="margin-top:15px">'+data[i].excerpt+'</p><a href="'+data[i].url+'" class="btn-base btn-whitec" title="Saiba mais">Leia mais sobre</a></article></div>';
        $('.blog-posts-ajax').append(article);
      }
    }
});
</script>
<!-- Modal -->
<div class="modal fade" id="cta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <?php
        echo do_shortcode(get_field('fale_conosco_formulario', false, false));
        ?>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="cta-ensino-remoto" tabindex="-1">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="d-flex align-items-stretch justify-content-center position-relative">
        <div style="padding: 40px">
          <h3 style="text-align: left;">Ensino remoto, sem deixar ninguém pra trás</h3>
          <p style="padding: 30px 0">
            Nós te ajudamos a estabelecer uma estratégia de ensino remoto
            equitativa: organizamos e integramos os dados da sua rede, treinamos
            todos os envolvidos e fornecemos a plataforma que conecta a escola e
            a família de maneira simples e rápida.
          </p>
          <div style="padding: 10px 0 20px;">
            <a href="https://conteudos.portabilis.com.br/ensino-remoto" target="_blank" class="btn-yellow" title="Saiba mais">
              Saiba mais
            </a>
          </div>
        </div>
        <div class="ensino-remoto-bg">
          <a href="#" class="close" data-dismiss="modal" aria-label="Close">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin: 18px;">
              <g clip-path="url(#clip0)">
                <path d="M12 24C18.6274 24 24 18.6274 24 12C24 5.37259 18.6274 0 12 0C5.37259 0 0 5.37259 0 12C0 18.6274 5.37259 24 12 24Z" fill="#F07281"/>
                <path d="M24 12C24 18.6 18.6 24 12 24C8.17503 24 4.80003 22.275 2.625 19.5C4.65 21.15 7.27501 22.125 10.125 22.125C16.725 22.125 22.125 16.725 22.125 10.125C22.125 7.27501 21.15 4.65 19.5 2.625C22.275 4.79992 24 8.17493 24 12Z" fill="#EB5569"/>
                <path d="M17.475 17.475C17.025 17.925 16.2749 17.925 15.825 17.475L12 13.65L8.17499 17.475C7.72501 17.925 6.97497 17.925 6.52499 17.475C6.075 17.025 6.075 16.2749 6.52499 15.825L10.35 12L6.52499 8.17499C6.075 7.72501 6.075 6.97497 6.52499 6.52499C6.97497 6.075 7.72501 6.075 8.17499 6.52499L12 10.35L15.825 6.52499C16.2749 6.075 17.025 6.075 17.475 6.52499C17.925 6.97497 17.925 7.72501 17.475 8.17499L13.65 12L17.475 15.825C17.925 16.2749 17.925 17.0249 17.475 17.475Z" fill="white"/>
              </g>
              <defs>
              <clipPath id="clip0">
              <rect width="24" height="24" fill="white"/>
              </clipPath>
              </defs>
            </svg>
          </a>
        </div>
        <div class="position-absolute" style="right: 30px; bottom: 20px; width: 190px; height: 150px;">
          <img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/ensino-remoto.png"; ?>" />
        </div>
      </div>
    </div>
  </div>
</div>

<style>
.btn-ensino-remoto {
  padding: 10px 20px;
  margin-right: 10px;
  background: #0072ff;
  color: white;
  border-radius: 15px;
  border: 1px solid #0072ff;
}
.btn-ensino-remoto:hover {
  background: white;
  color: #0072ff;
}
.btn-yellow {
  display: flex;
  flex-direction: column;
  padding: 8px 32px;
  width: 179px;
  height: 48px;
  font-family: Hind, sans-serif;
  color: white;
  background: linear-gradient(90deg, #DE9D34 0%, #FFC95C 100%);
  border-radius: 100px;
  font-size: 24px;
  font-weight: bold;
  text-align: center;
}
.btn-yellow:hover {
  color: white;
  opacity: 0.7;
  text-decoration: none;
}
#cta-ensino-remoto p, #cta-ensino-remoto h3 {
  font-family: Muli, sans-serif;
  color: #003473;
}
#cta-ensino-remoto .ensino-remoto-bg {
  background: #0072FF;
  width: 87px;
  flex-shrink: 0;
  border-radius: 0 14px 14px 0;
}
.modal-content {
  border-radius: 15px;
}
</style>
<script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
<script>
jQuery(document).ready(function () {
  if (!Cookies.get('ensino-remoto')) {
    jQuery("#cta-ensino-remoto").modal();
  }

  jQuery('#ensino-remoto-hide').change(function () {
    if (jQuery('#ensino-remoto-hide').prop('checked')) {
      Cookies.set('ensino-remoto', 'hide');
    } else {
      Cookies.remove('ensino-remoto');
    }
  });

  jQuery(document).click(function(event) {
    if (!$(event.target).closest("#ensino-remoto-modal").length) {
      $("body").find("#ensino-remoto-modal").removeClass("show");
    }
  });
})
</script>

<?php get_footer(); ?>
