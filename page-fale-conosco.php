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
          <form>
            <div class="row">
              <div class="col-12 form-group">
                <input type="text" class="form-control" placeholder="Nome" name="">
              </div>
              <div class="col-12 form-group">
                <input type="text" class="form-control" placeholder="E-mail" name="">
              </div>
              <div class="col-12 form-group">
                <input type="text" class="form-control" placeholder="Telefone" name="">
              </div>
              <div class="col-8 form-group">
                <input type="text" class="form-control" placeholder="Cidade" name="">
              </div>
              <div class="col-4 form-group">
                <input type="text" class="form-control" placeholder="UF" name="">
              </div>
              <div class="col-12 form-group">
                <textarea class="form-control" placeholder="Mensagem"></textarea>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
