<?php get_header(); ?>
<?php 
    the_post(); 
    $the_id_post = 8;
       
    //Seção topo
    $titulo_sec1   = get_field('sec1-titulo-home' , $the_id_post);
    $texto_sec1    = get_field('sec1-texto-home' , $the_id_post);
    $data_link_1   = get_field('sec1-link-home', $the_id_post);
    $data_imagem_1 = get_field('sec1-imagem-home', $the_id_post);

    // Seção dois - Nossos eventos
    $titulo_sec_2   = get_field('sec2-titulo-home_copiar', $the_id_post);
    $texto_sec_2    = get_field('sec2-texto-home_copiar', $the_id_post);
    $data_link_2    = get_field('sec2-link-home_copiar', $the_id_post);
    $data_imagem_2  = get_field('sec2-imagem-home_copiar', $the_id_post);

    // Seção três - Blog
    $titulo_sec_3   = get_field('sec3-titulo-home', $the_id_post);
    $texto_sec_3    = get_field('sec-3-texto-home', $the_id_post);

    // Seção quatro - Nossos eventos
    $titulo_sec_4   = get_field('sec4-titulo-home_copiar', $the_id_post);
    $texto_sec_4    = get_field('sec-4-texto-home_copiar', $the_id_post);
    $data_imagem_4  = get_field('sec4-imagem-home_copiar2', $the_id_post);


?>

<section class="fdez-banner page-home">
    <div class="container-fluid p-0">
        <div class="row no-gutters fdez-column-reverse">
            <div class="col-md-12 col-lg-3">
                <div class="box-text-top">
                    <h2> <?php echo $titulo_sec1;  ?></h2>
                      <?php echo $texto_sec1; ?>
                    <?php $mont_element( "link", $data_link_1, array('btn-saiba-mais') ); ?>
                </div>
            </div>
            <div class="col-md-12 col-lg-9">
                <figure>
                    <?php $mont_element("img", $data_imagem_1 ); ?>
                </figure>
            </div>
        </div>
    </div>
</section>

<section class="fdez-nossos-eventos page-home">
    <div class="container">
        <div class="box-content">
            <h2><?php echo $titulo_sec_2; ?></h2>
                <?php echo $texto_sec_2; ?>
            <?php $mont_element( 'link', $data_link_2, array('btn-saiba-mais' ) ) ?>
            <figure>
                <?php $mont_element( "img", $data_imagem_2 ); ?>
            </figure>
        </div>
    </div>
</section>

<section class="fdez-blog page-home">
    <div class="container">
        <div class="box-content">
            <h2> <?php echo $titulo_sec_3; ?></h2>
            <?php echo $texto_sec1; ?>
        </div>
   
        <div class="row">
            <div class="col-md-4 col-12">
                <a href="page-single.php">
                    <div class="box-bady eq-height">
                        <img src="<?php bloginfo('template_url')?>/assets/img/midia/img_blog.jpg" alt="imagem">
                        <div class="box-txt">
                            <h4>Título Notícia</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad!</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-12">
                <a href="page-single.php">
                    <div class="box-bady eq-height">
                        <img src="<?php bloginfo('template_url')?>/assets/img/midia/img_blog.jpg" alt="imagem">
                        <div class="box-txt">
                            <h4>Título Notícia</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad!</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 col-12">
                <a href="page-single.php">
                    <div class="box-bady eq-height">
                        <img src="<?php bloginfo('template_url')?>/assets/img/midia/img_blog.jpg" alt="imagem">
                        <div class="box-txt">
                            <h4>Título Notícia</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsa deserunt, provident placeat.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        
    </div>
</section>


<?php include ( 'template-parts/part-footer.php') ?>
<?php include ("footer.php"); ?>