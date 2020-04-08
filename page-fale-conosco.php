<?php
get_header(); ?>
<div id="page">
  <div class="contato">
    <div class="container">
      <div class="row wow animated fadeIn">
        <div class="col-sm-6">
          <h1 class="mb-4">Fale com a gente!</h1>
          <p class="subtitle mb-4">Informações de contato</p>
          <p><strong>Telefone</strong><br>
            (48) 3082-9085
          </p>
          <p><strong>E-mail</strong><br>
            contato@portabilis.com.br
          </p>
          <p><strong>Endereço</strong><br>
            Rua Vitória, 538 Edifício Dionísio Pavei 2º piso - Centro, Içara - SC, 88820-000
          </p>
          <p class="mb-1"><strong>Redes Sociais</strong></p>
          <ul class="redes">
            <li><a target="_blank" href="https://www.facebook.com/portabilis/"><i class="fab fa-facebook-f"></i></a></li>
            <li><a target="_blank" href="https://twitter.com/portabilis"><i class="fab fa-twitter"></i></a></li>
            <li><a target="_blank" href="https://www.instagram.com/portabilis/"><i class="fab fa-instagram"></i></a></li>
            <li><a target="_blank" href="https://www.linkedin.com/company/portabilis-tecnologia/"><i class="fab fa-linkedin-in"></i></a></li>
          </ul>
            <br><br>
        </div>
        <div class="col-sm-6 align-self-center">
          <?php
          echo do_shortcode(get_field('fale_conosco_formulario', false, false));
          ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
