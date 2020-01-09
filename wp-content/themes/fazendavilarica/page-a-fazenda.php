<?php /* Template Name: A Fazenda */ ?>
<?php get_header(); ?>
<?php  the_post(); ?>

<section class="fdez-afazenda page-afazenda">
    <div class="bg-topo">
          <h1><?php the_title(); ?></h1>
    </div>

  <div class="box-content">
    <div class="container">
        <div class="row">
         <?php the_content(); ?>
        </div>
    </div>
  </div>


  <div class="box-galeria">
      <div class="container">
        <div class="box-titulo">
            <h2> <?php the_field( 'titulo-sec1-afazenda' )  ?></h2>
                 <?php the_field( 'texto-sec-1-afazenda' ) ?>
        </div>

      <!-- Grid row -->
    <div class="row">

            <!-- Grid column -->
            <div class="col-md-12 justify-content-center mb-5">
              <div class="nav-galery">
                  <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="all">Todos</button>
                      <!-- listando as categorias -->
                        <?php
                            $category = get_category_by_slug( 'galeria_categ' );
                            $args = array(
                            'type'                     => 'post',
                            'child_of'                 => $category->term_id,
                            'orderby'                  => 'name',
                            'order'                    => 'ASC',
                            'hide_empty'               => TRUE,
                            'hierarchical'             => 1,
                            'taxonomy'                 => 'galeria_categ',
                            ); 
                            $child_categories = get_categories($args );

                            // print("<pre>");
                            // print_r( $child_categories );
                            // print("</pre>");

                            if ( !empty ( $child_categories ) ){
                                foreach ( $child_categories as $child_category ){
                                     $nome = $child_category->name;
                                     $category_id = $child_category->term_id;
                                     // Get link category
                                    // $category_link = get_category_link( $category_id );
                                ?>

                                <button type="button" class="btn btn-outline-black waves-effect filter" data-rel="<?=$category_id?>"><?php echo $nome; ?></button>

                             <?php } } ?>
                           
              </div>  
            </div>
            <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="gallery" id="gallery" >
                <?php
                    $feature = new WP_Query(  array('post_type' => 'galeria_de_fotos') );
                    $cats =  array();
                    if( $feature->have_posts()){
                        while($feature->have_posts()){
                            $feature->the_post(); 
                            $categs   = get_the_terms( get_the_ID(), 'galeria_categ' ); // get obj of IDs categories of post
                            $cat      = get_category( $categs[0] ); // getting data of category with base in cat_ID above
                            $cat_id   = $cat->cat_ID;
                          ?>
                    <!-- content -->

                    <div class="mb-3 pics animation all <?=$cat_id?>">
                        <a href="<?php get_the_post_thumbnail(); ?>" title="Link para o post" data-fancybox="gallery">
                            <?php the_post_thumbnail( 'medium_large', ["class"=>"img-fluid"] ); ?>
                        </a>
                    </div>

                    <?php } wp_reset_postdata();  } ?>

            </div>
            <!-- Grid row -->

    </div></div>


</section><!-- /fdez-galeria //-->


<?php include( 'template-parts/part-footer.php'); ?>

<?php get_footer(); ?>