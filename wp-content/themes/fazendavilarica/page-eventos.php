<?php /* Template Name: Eventos */ ?>
<?php get_header(); ?>
<?php the_post(); ?>

<section class="fdez-eventos page-eventos">
    <div class="bg-topo">
          <h1><?php the_title(); ?></h1>
    </div>


  <div class="box-content">
        <div class="container">


        <?php
            if( have_rows('itens_de_eventos') ): $idx = 0; ?>
                <?php while( have_rows('itens_de_eventos') ): the_row(); 
                     
                    $getClass = "";
                    $titulo   = get_sub_field('titulo'); 
                    $texto    = get_sub_field('texto'); 
                    $link     = get_sub_field('link'); 
                    $img_data = get_sub_field('imagem'); 
                    if($idx % 2 == 0): ?>
                        <!-- CONTENT -->
                        <div class="box-item">
                            <div class="row <?=$getClass; ?>">
                                <div class="col-md-6 col-12">
                                    <div class="box-img">
                                        <?php $mont_element("img", $img_data ); ?>
                                    </div>
                                </div>
                
                                <div class="col-md-6 col-12">
                                    <div class="box-context">
                                        <h2><?php echo $titulo  ?></h2>
                                        <?php echo $texto; ?>
                                        <a class="btn-saiba-mais" href="#" data-toggle="modal" data-target=".bd-example-modal-lg" >Saiba mais ></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php else: ?>
                            <div class="box-item">
                                    <div class="row img-aling-top">
                                        <div class="col-md-6 col-12">
                                            <div class="box-context-diff">
                                                <h2><?php echo $titulo  ?></h2>
                                                <?php echo $texto; ?>
                                                <a class="btn-saiba-mais" href="#">Saiba mais ></a>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12">
                                            <div class="box-img">
                                                <?php $mont_element("img", $img_data ); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        <?php endif ?> 

                <?php $idx++ ; endwhile ?>
            <?php endif ?>



           

        

<!-- 

            <div class="box-item">
                <?php 
                    /**
                     * img-aling-top :: controle da direção da imagem. 
                     * Controlar a entrada dessa classe  com PHP usando função PAR ou IMPAR
                     */
                 ?>
                <div class="row img-aling-top">
                    <div class="col-md-6 col-12">
                        <div class="box-context-diff">
                            <h2>Eventos Corporativos</h2>
                            <p>
                            Fazenda Vila Rica é o local perfeito para o seu evento! Aqui sua empresa pode encontrar sofisticação, tranqüilidade e privacidade para os encontros de trabalho.
                            </p>
                            <a class="btn-saiba-mais" href="#">Saiba mais ></a>
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="box-img">
                            <img src="<?php bloginfo('template_url')?>/assets/img/midia/img-eventos-02.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            
            
                 <div class="box-item">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box-img">
                                <img src="<?php bloginfo('template_url')?>/assets/img/midia/img-eventos-03.jpg" alt="">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="box-context">
                                <h2>Comemorações</h2>
                                <p>
                                    Aqui mantemos a tradição familiar de se reunir para os preparativos do casamento. No estilo Destination Weeding, aliando seu casamento a um fim de semana inesquecível, tanto para os noivos quanto para os convidados.
                                </p>
                                <a class="btn-saiba-mais" href="#">Saiba mais ></a>
                            </div>
                        </div>
                    </div>
                </div>
                

 -->
        </div>
               
        
    </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
    <div class="container-fluid">
                <h2>Casamento</h2>       
                    <ul>
                            <li>Uso exclusivo do espaço.</li>
                            <li>Área coberta com 1000m², vão livre e pé direito de 7 metros.</li>
                            <li>Estrutura metálica recoberta de cristal.</li>
                            <li>Jardim externo em forma de nave rodeado de palmeiras e pinheiros para realização da cerimonia religiosa </li>
                            <li>Espaço para cozinha/Buffet.</li>
                            <li>Toilettes femininos no salão com 06 banheiros privativos.</li>
                            <li>Toilettes masculinos na cerimonia com 04 banheiros privativos.</li>
                            <li>Estrutura para instalação de som, imagem e iluminação aéreos.</li>
                            <li>Dependências da casa sede como apoio para noivos e familia no dia no seu evento.</i>
                            <li>Estacionamento para 500 carros.</li>
                            <li>Capela.</li>
                            <li>Casa de apoio para prestadores de serviço.</li>
                            <li>Rede Wi-Fi.</li>
                            <li>Cortesia: dia para ensaio fotográfico Pre-wedding na Fazenda para noivos com contratos fechados. (3º a 5ª- mediante agendamento prévio).</li>
                    </ul>


                    
                        <h2>Equipe de apoio</h2>
                    <ul>
                        <li>1 gerente coordenador da Fazenda e dos serviços de hospedagem.</li>
                        <li>1 auxiliar limpeza toilette feminino.</li>
                        <li>1 auxiliar limpeza toilette masculino.</li>
                    </ul>
    </div>
    </div>
  </div>
</div>


<!-- Modal Casamento -->


</section><!-- /fdez-eventos //-->
<?php include( 'template-parts/part-footer.php') ?>
<?php get_footer(); ?>