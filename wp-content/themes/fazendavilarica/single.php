<?php /* Template Name: Single */ ?>
<?php get_header(); ?>
<?php the_post();
    $categs     = wp_get_post_categories(get_the_ID()); // get obj of IDs categories of post
    $cat        = get_category( $categs[0] ); // getting data of category with base in cat_ID above
    $cat_link   = get_category_link($cat->cat_ID); // getting link of post current
    $cat_name   = $cat->cat_name;
    $dt_post    = explode("/", get_the_date());
    if( count($dt_post) == 3 ){
        $new_data   = $dt_post[0].".".$dt_post[1].".".$dt_post[2];
    }else{
        $new_data = get_the_date();
    }
?>

<section class="fdez-blog page-blog single">
    <div class="bg-topo">
          <h1>blog</h1>
      </div>

  <div class="box-content-blog">
      <div class="container">
         
              <div class="row">
                  <div class="col-md-8 col-12 bg-color">
                      <figure>
                         <?php the_post_thumbnail() ?>
                      </figure>
                      <div class="row">
                          <div class="col-12">
                          <div class="legenda">
                                          <span><a href="<?php echo $cat_link ?>" title="<?php echo $cat_name ?>"><i class="fas fa-calendar-alt"></i> <?php echo $new_data ?> | <?php echo $cat_name ?></a></span>
                                      </div>
                              <div class="box-titulo">
                                  <h2> <?php the_title(); ?> </h2>
                              </div>
                              
                                <?php the_content(); ?>
    
                          </div>
                      </div>
                  </div>
  
                  <div class="col-md-4 col-12">
                       <?php include ( 'template-parts/part-sidebar.php') ?>  
                  </div>
              </div>
 
      </div>
  </div>





</section><!-- /fdez-blog //-->

<?php include ( 'template-parts/part-footer.php') ?>
<?php get_footer(); ?>