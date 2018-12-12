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
      <div class="subs-container row">
        <div class="col-lg-6">
          <h2>Lorem ipsum dolor sit amet</h2>
          <p class="big">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        </div>
        <div class="col-lg-5 offset-lg-1 align-self-center">
          <div class="row no-gutters">
            <div class="col-sm-8 pr-1">
              <input type="text" class="form-control" name="" placeholder="E-mail">
            </div>
            <div class="col-sm-4">
              <a href="#" class="btn-base btn-blue" title="">Increver-se</a>
            </div>
          </div>
        </div>
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
</div>
<?php get_footer(); ?>
