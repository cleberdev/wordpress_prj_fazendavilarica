<div class="sidebar">
                        <div class="sidebar-card">
                            <div class="box-titulo">
                                <h2>Categoria</h2>
                            </div>
                        <ul>
                        <!-- listando as categorias -->
                        <?php
                            $category = get_category_by_slug( 'category' );
                            $args = array(
                            'type'                     => 'post',
                            'child_of'                 => $category->term_id,
                            'orderby'                  => 'name',
                            'order'                    => 'ASC',
                            'hide_empty'               => TRUE,
                            'hierarchical'             => 1,
                            'taxonomy'                 => 'category',
                            ); 
                            $child_categories = get_categories($args );
                            
                            if ( !empty ( $child_categories ) ){
                                foreach ( $child_categories as $child_category ){
                                     $nome = $child_category->name;
                                     $category_id = $child_category->term_id;
                                     // Get link category
                                     $category_link = get_category_link( $category_id ); ?>
                                   <li> <a href="<?php echo $category_link ?>"><?php echo $nome; ?></a></li>
                              <?php } } ?>

                            </ul>

                        </div>

                        <div class="sidebar-card">
                            <div class="box-titulo">
                                <h2>Mais Recentes</h2>
                            </div>
                              <div class="last-posts">
                                <?php
                                    $recent_posts = wp_get_recent_posts(array(
                                        'numberposts' => 4, // Number of recent posts thumbnails to display
                                        'post_status' => 'publish' // Show only the published posts
                                    ));
                                    foreach($recent_posts as $post) : 
                                          
                                        $dt_post_clear = explode(" ",  $post['post_date'] );
                                        $dt_post       = array_reverse( explode("-", $dt_post_clear[0] ) );
                                       
                                        if( count($dt_post) == 3 ){
                                            $new_data   = $dt_post[0].".".$dt_post[1].".".$dt_post[2];
                                        }else{
                                            $new_data = $post['post_date'] ;
                                        }
                                        ?>
                                        <div class="row pb-4 mb-1">
                                            <div class="col-md-5 col-12">
                                            <?php echo get_the_post_thumbnail($post['ID'], 'full'); ?>
                                            </div>
                                            <div class="col-md-7 col-12">
                                            <a href="<?php echo get_permalink($post['ID']) ?>">
                                                    <span><i class="fas fa-calendar-alt"></i><?php echo $new_data ?></span>
                                                    <p><?php echo get_the_title( $post['ID'] ) ?></p>
                                                </a>
                                                </div>
                                        </div>
                                                
                                <?php endforeach; wp_reset_query(); ?>

                                </div>
                           
                        </div>


                    </div>