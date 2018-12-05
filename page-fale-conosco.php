<?php
get_header(); ?>
<div id="page">
  <div class="contato">
    <div class="container">
      <div class="row wow animated fadeIn">
        <div class="col-sm-6">
          <h1>Fale com a a gente!</h2>
          <p class="subtitle mb-6">Informações de contato</p>
          <p><strong>Telefone</strong><br>
            (48) 3082-9085
          </p>
          <p><strong>E-mail</strong><br>
            contato@portabilis.com.br
          </p>
          <p class="mb-1"><strong>Redes Sociais</strong></p>
          <ul class="redes">
            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
            <li><a href=""><i class="fab fa-twitter"></i></a></li>
            <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
          </ul>
            <br><br>
        </div>
        <div class="col-sm-6">
          <?php
          echo do_shortcode(get_field('fale_conosco_formulario', false, false));
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
