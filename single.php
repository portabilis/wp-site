<?php
/**
 * The template for displaying all single posts.
 *
 * @package site
 */

get_header('blog-single'); ?>
<?php while ( have_posts() ) : the_post(); ?>
<style>
  #blog-single-header{
    background-image: url("<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>");
  }
</style>
<div id="blog-single-header"></div>
<div id="page" class="blog-single">
	<div class="container">
    <div class="row">
      <div class="blog-content col-12">
        <p class="etime"><?php echo estimated_reading(get_the_content()); ?></p>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
      </div>
      <div class="subs-box col-lg-10 offset-lg-1">
        <div class="row">
          <div class="col-lg-6">
            <h2>Lorem ipsum dolor sit amet</h2>
            <p class="big">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
          </div>
          <div class="col-lg-6 align-self-center">
            <div class="row no-gutters">
              <div class="col-lg-12">
                <input type="text" class="form-control" name="" placeholder="E-mail">
              </div>
              <div class="col-lg-12">
                <a href="#" class="btn-base btn-blue" title="">Increver-se</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-10 offset-lg-1">
        <hr>
      </div>
      <div class="tags col-lg-10 offset-lg-1">
        <div class="row">
          <div class="col-lg-5">
            <div class="row">
              <div class="col-lg-3 self-align-center">
                <?php echo get_avatar( get_the_author_meta( 'ID' ) , '','','', array('class' => 'img-fluid img-avatar') ); ?>
              </div>
              <div class="col-lg-9">
                <h5><?php the_author(); ?></h5>
                <p><?php  the_author_meta('description'); ?></p>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <?php the_tags_custom() ?>
          </div>
        </div>
      </div>
      <div class="comments col-lg-10 offset-lg-1">
        <?php
        if ( comments_open() || get_comments_number() ) :
          comments_template();
        endif;
        ?>
      </div>
    </div>
  </div>
  <div class="related">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>Publicações Relacionadas</h2>
        </div>
      </div>
      <div class="row blog-related-list"></div>
      <div class="row">
        <div class="col-12 text-center">
          <a data-id="2" href="#" class="btn-mais" title="">ver mais publicações</a>
        </div>
      </div>
    </div>
  </div>
</div><!-- #content -->
<?php endwhile; ?>
<?php get_footer(); ?>
