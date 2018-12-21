<div id="footer">
  <div class="container">
    <div class="row no-gutters wow animated fadeIn">
      <div class="col-sm-4 col-lg-2">
        <div class="footer-title">PORTABILIS</div>
        <?php
        wp_nav_menu(array(
        'menu'            => 'primary_f',
        'theme_location'  => 'primary_f',
        'container'       => 'div',
        'menu_id'         => false,
        'depth'           => 1
        ));
        ?>
      </div>
      <div class="col-sm-4 col-lg-2">
        <div class="footer-title">PRODUTOS</div>
        <?php
        wp_nav_menu(array(
        'menu'            => 'secondary_f',
        'theme_location'  => 'secondary_f',
        'container'       => 'div',
        'menu_id'         => false,
        'depth'           => 1
        ));
        ?>
      </div>
      <div class="col-sm-4 col-lg-3">
        <div class="footer-title">AJUDA E SUPORTE</div>
        <ul>
          <li><svg class='svg-icon' xmlns="http://www.w3.org/2000/svg" width="18" height="17" fill="#666"><path fill-rule="evenodd" d="M15.503 10.908V8.665c0-.41.33-.748.749-.748.41 0 .75.339.75.748v2.243c0 .409-.34.748-.75.748a.747.747 0 0 1-.75-.748m-4.914 5.095H9.92a.747.747 0 0 1-.75-.748c0-.419.33-.748.75-.748h.67a.747.747 0 1 1 0 1.496M1.75 7.917c.409 0 .748.339.748.748v2.243c0 .409-.34.748-.749.748a.747.747 0 0 1-.75-.748V8.665c0-.41.33-.748.75-.748m15.862-.34C17.081 3.24 13.415 0 9.01 0 4.615 0 .959 3.22.42 7.548.15 7.847 0 8.246 0 8.665v2.243c0 .957.78 1.745 1.748 1.745.959 0 1.748-.788 1.748-1.745V8.665c0-.958-.789-1.745-1.748-1.745-.08 0-.15 0-.22.02C2.308 3.49 5.364.997 9.01.997a7.624 7.624 0 0 1 7.472 5.953.853.853 0 0 0-.23-.03c-.969 0-1.748.787-1.748 1.745v2.243c0 .877.66 1.615 1.518 1.715v1.107c0 .468-.38.857-.859.857h-2.967a1.726 1.726 0 0 0-1.608-1.077H9.92c-.969 0-1.748.778-1.748 1.745 0 .957.78 1.745 1.748 1.745h.67c.858 0 1.558-.608 1.707-1.416h2.867a1.86 1.86 0 0 0 1.858-1.854v-1.267c.58-.279.979-.877.979-1.555V8.665c0-.41-.15-.788-.39-1.087"></path></svg> <span class="footer-span"> (48) 3082-9085</span></li>
          <li>
            <svg class='svg-icon' xmlns="http://www.w3.org/2000/svg" width="18" height="17" fill="#666"><path fill-rule="evenodd" d="M17 5.56l-.96.75V4.73l.96.5v.33zm0 9.26l-5.89-3.35L17 6.84v7.98zm-16 .3V6.88l14.51 8.24H1zm0-9.88l1-.51V6.3l-1-.57v-.49zm13.69-1.86c.19 0 .35.15.35.35V7.1l-4.87 3.84L3 6.86V3.73c0-.2.16-.35.35-.35h11.34zM9.04 1.12l2.44 1.26h-4.9l2.46-1.26zm6.99 2.48a1.34 1.34 0 0 0-1.34-1.22h-1.03L9.04 0 4.38 2.38H3.35c-.7 0-1.27.52-1.33 1.21L0 4.62v10.65c0 .47.38.85.85.85h16.3c.47 0 .85-.38.85-.85V4.62L16.03 3.6z"></path></svg> <span class="footer-span">suporte@portabilis.com.br</span></li>
        </ul>
      </div>
      <div class="col-sm-12 col-lg-5">
        <div class="row">
          <div class="col-lg-12 mb-lg-4 ccol-sm-4">
            <div class="footer-title">REDES SOCIAIS</div>
            <ul class="redes">
              <li><a target="_blank" href="https://www.facebook.com/portabilis" title=""><i class="fab fa-facebook-f"></i></a></li>
              <li><a target="_blank" href="https://www.instagram.com/portabilis/" title=""><i class="fab fa-instagram"></i></a></li>
              <li><a target="_blank" href="https://twitter.com/portabilis" title=""><i class="fab fa-twitter"></i></a></li>
            </ul>
          </div>
          <div class="col-lg-12 col-sm-8">
            <div class="footer-title">NEWSLETTER</div>
            <?php
            $page = get_page_by_path( 'home' );
            echo do_shortcode(get_field('footer_newsletter', $page->ID));
            ?>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="row copy wow animated fadeIn">
      <div class="col-sm-6 text-left align-self-center">
        <span>
          &copy; <?php echo date('Y') ?> Portabilis Tecnologia Ltda.  - Todos os direitos reservados
        </span>
      </div>
      <div class="ml-sm-auto col-sm-2 text-right"><img class="img-fluid" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/assets/img/logo-footer.jpg"; ?>" /></div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>