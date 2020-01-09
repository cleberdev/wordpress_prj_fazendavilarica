<?php /* Template Name: Contato */ ?>
<?php get_header(); ?>
<?php the_post(); ?>

<section class="fdez-contato page-contato">
    <div class="bg-topo">
           <h1><?php the_title() ?></h1>
    </div>

  <div class="box-content-contato">
      <div class="container">
        <div class="box-contatos">
            <div class="row">
            <?php
                if( have_rows('contatos-sec-1',109) ): ?>
                    <?php while( have_rows('contatos-sec-1',109) ): the_row();  ?>
                            <!-- HEADER -->
                      <div class="col-md-4 col-12">
                        <div class="item">
                            <div class="box-titulo">
                                <h2> <?php the_sub_field('tipo') ?></h2>
                            </div>
                            <div class="box-body">
                                <p class="nome"><?php the_sub_field('nome') ?></p>
                                <p class="email"><i class="far fa-envelope"></i><?php the_sub_field('e-mail') ?></p>
                                <p class="telefone"><i class="fas fa-phone-alt"></i><?php the_sub_field('telefone') ?></p>
                            </div>
                        </div>
                    </div>
                            
                    <?php endwhile ?>
                <?php endif ?>
    

                <!-- Endereço -->
                <div class="col-md-4 col-12">
                    <div class="item">
                        <div class="box-titulo">
                            <h2>Administração</h2>
                        </div>
                        <div class="box-body">
                            <address>
                                <div class="row">
                                    <div class="col-md-2 col-12">
                                         <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="col-md-10 col-12">
                                       <p> <?php the_field('endereco-sec-2-contato_copiar' ,109); ?> </p>    
                                    </div>
                                </div>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="como-chegar">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="box-titulo">
                        <h2>Como chegar na Fazenda</h2>
                    </div>
                        <div class="box-content-item">
                            <h3>Google Maps:</h3>
                            <p>Colocar FAZENDA VILA RICA – Itatiba – SP.</p>
                        </div>

                        <div class="box-content-item">
                            <h3>GPS:</h3>
                            <p>Coordenadas -23.010944 e -46.800000</p>
                        </div>

                        <div class="box-content-item">
                            <h3>Endereço:</h3>
                            <p>
                                Rua Sandra Piovesana, s/n - Cep 13.254-390 Bairro Serrinha - Itatiba - SP Apenas 80 km de São Paulo.
                            </p>
                        </div>

                        <div class="box-content-item">
                            <h3>Acesso pelas principais rodovias:</h3>
                            <p>
                            Bandeirantes, Anhaguera e D. Pedro I.
                            </p>
                        </div>

                        <div class="box-content-item">
                            <h3>Horários de funcionamento:</h3>
                            <p>
                            3ª a 6ª – das 8h as 17h00
                            </p>
                        </div>

                        <div class="box-content-aviso">
                            <p>* Necessário agendamento prévio de visita, mediante envio de ficha cadastral.</p>
                        </div>
                </div>


                <div class="col-md-6 col-12 align-self-center">
                    <div class="box-download">
                        <div class="box-titulo">
                            <h2>Downloads</h2>
                        </div>
                            <a href="#" class="btn-down" title="link download">Mapa Ilustrado</a>
                            <a href="#" class="btn-down" title="link download">Perspectiva Ilustrada</a>
                            <a href="#" class="btn-down" title="link download">Planta Espaço Cerimônia</a>
                            <a href="#" class="btn-down" title="link download">Planta Espaço Eventos</a>

                    </div>
                </div>
            </div>
        </div>
       
       
      </div>
  </div>

</section><!-- /fdez-contato //-->

<?php get_footer(); ?>