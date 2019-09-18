<?php
get_header(); ?>
<div id="page">
  <div class="contato">
    <div class="container">
      <div class="row wow animated fadeIn">
        <div class="col-sm-6">
          <h1>Fale com a gente!</h2>
          <p class="subtitle mb-6">Informações de contato</p>
          <p>
            <strong>Endereço</strong><br>
Portabilis Tecnologia Ltda – CNPJ: 11.258.607/0001-92<br>
Rua Vitória, 538, Edif. Dionísio Pavei<br> Centro, Içara – SC – CEP: 88820-000
          </p>
          <p><strong>Telefone</strong><br>
            (48) 3082-9085
          </p>
          <p><strong>E-mail</strong><br>
            contato@portabilis.com.br
          </p>
          <p class="mb-1"><strong>Redes sociais</strong></p>
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
