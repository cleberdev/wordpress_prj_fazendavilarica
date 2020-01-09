<?php 
  $the_id_post = 8;

 // Seção quatro - Nossos eventos
 $titulo_sec_4   = get_field('sec4-titulo-home_copiar', $the_id_post);
 $texto_sec_4    = get_field('sec-4-texto-home_copiar', $the_id_post);
 $data_imagem_4  = get_field('sec4-imagem-home_copiar2', $the_id_post);
?>

<section class="fdez-agende page-footer">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
            <div class="col-md-6">
                <?php $mont_element( "img",  $data_imagem_4 ); ?>
            </div>
            <div class="col-md-6 col-12">
                <div class="box-content-txt">
                    <h2><?php echo $titulo_sec_4 ?></h2>
                    <?php echo $texto_sec_4 ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="fdez-newsletter page-footer">
    <div class="box-content-txt">
        <h2>Cadastre-se</h2>
        <p>Cadastre seu e-mail e receba novidades sobre a Fazenda Vila Rica!</p>

<form action="" method="post">
<div class="form-newsletter">

<input class="form-control" type="text" name="emai" placeholder="E-mail">
                
<a class="btn btn-enviar" href="#">
    <img src="<?php bloginfo('template_url')?>/assets/img/midia/img-news-send.jpg" alt="send">
</a>

</div>
</form>

    </div>
</section>