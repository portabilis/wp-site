<?php
get_header('blog'); ?>
<div id="banner-blog">
  <div class="container">
    <?php
    $i = 1;
    $args = array(
      'posts_per_page' => 4,
      'orderby' => 'post_date',
      'order' => 'DESC',
      'category_name' => 'destaque');
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) : ?>
      <div class="row">
      <?php while ( $query->have_posts() ) : $query->the_post(); 
        if($i == 1):
        ?>
          <div class="col-lg-6 align-self-center">
            <article>
              <span class="cat">
                <?php
                $categories = get_the_category();
                $category = $categories[0]->name;
                echo $category;
                ?>
              </span>
              <h1><?php the_title(); ?></h1>
              <div class="big subtitle">
                <?php the_excerpt(); ?>
              </div>
              <a href="<?php the_permalink(); ?>" class="btn-base btn-white" title="">
                Saiba mais
              </a>
            </article>
          </div>
          <div class="col-lg-4 offset-lg-2">
            <div class="row">
        <?php
        else:
        ?>
          <div class="col-12">
            <article>
              <a href="<?php the_permalink(); ?>" title="">
                <h5><?php the_title(); ?></h5>
                <p> <?php the_excerpt(); ?></p>
              </a>
            </article>
          </div>
        <?php
        endif;
      $i++;
      endwhile;
      ?>
        </div>
      </div>
      </div>
    <?php
    endif;
    ?>
  </div>
  <div class="subs-box">
    <div class="container">
      <div class="subs-container">
        <?php
        $page = get_page_by_path( 'blog' );
        echo do_shortcode(get_field('blog_newsletter', $page->ID));
        ?>
      </div>
    </div>
  </div>
</div>
<div id="page" class="blog">
  <div class="blog-category">
    <div class="container">
      <div class="row">
        <?php
        $categories = get_categories();
        foreach($categories as $category) {
          if($category->name != 'Sem categoria'):
            echo '<div class="col-auto"><a class="post-cat" data-id='.$category->cat_ID.' href="#">' . $category->name . '</a></div>';
          endif;
        }
        ?>
      </div>
    </div>
  </div>
  <div class="blog-posts">
    <div class="container">
      <div class="row blog-posts-list">
      </div>
      <div class="row btn-mais"></div>
    </div>
  </div>
  <div class="blog-materiais wow animated fadeIn">
    <div class="container">
      <h2>Materiais educativos</h2>
      <?php
      $args = array(
        'posts_per_page' => 6,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'category_name' => 'ebooks');
      $query = new WP_Query( $args );
      if ( $query->have_posts() ) : ?>
      <div class="row">
        <?php while ( $query->have_posts() ) : $query->the_post(); ?>
        <article class="col-lg-4 col-sm-6">
          <a href="<?php the_permalink(); ?>" title="">
            <div class="row">
              <div class="col-sm-4 mb-4 mb-sm-0">
                <?php 
                the_post_thumbnail('blog-thumb', array(
                  'class' => "img-fluid",
                ))
                ?>
              </div>
              <div class="col-sm-8 align-self-center">
                <h5><?php the_title(); ?></h5>
                <p><?php the_excerpt_custom(20); ?></p>
              </div>
            </div>
          </a>
        </article>
        <?php endwhile; ?>
      </div>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
