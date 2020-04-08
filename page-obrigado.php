<?php
get_header('obrigado'); ?>

<div class="container-fluid bg-blue" id="obrigado">
  <div class="container">
    <div class="row">
      <div class="col-12 d-flex flex-column justify-content-center align-center">
        <img class="img-responsive img-fluid" src="/wp-content/themes/portabilis-master/assets/img/logo-single.png" alt="Logotipo Portabilis">
        <h1>Obrigado pelo contato!<br>
        Entraremos em contato em breve :)</h1>
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  jQuery(document).ready( () => {
    setTimeout( () => {
      window.location.href = "https://portabilis.com.br/"
    }, 10000)
  })
</script>


