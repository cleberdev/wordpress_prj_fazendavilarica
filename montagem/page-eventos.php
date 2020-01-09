<?php include ("header.php"); ?>

<section class="fdez-eventos page-eventos">
    <div class="bg-topo">
          <h1>Eventos</h1>
    </div>


  <div class="box-content">
        <div class="container">
            <div class="box-item">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="box-img">
                            <img src="assets/img/midia/img-eventos-01.jpg" alt="">
                        </div>
                    </div>
    
                    <div class="col-md-6 col-12">
                        <div class="box-context">
                            <h2>Casamento</h2>
                            <p>
                                Aqui mantemos a tradição familiar de se reunir para os preparativos do casamento. No estilo Destination Weeding, aliando seu casamento a um fim de semana inesquecível, tanto para os noivos quanto para os convidados.
                            </p>
                            <a class="btn-saiba-mais" href="#" data-toggle="modal" data-target="#item-casamento" >Saiba mais ></a>
                        </div>
                    </div>
                </div>
            </div>

        
            <div class="box-item">
            <!-- 
                img-aling-top :: controle da direção da imagem. 
                Controlar a entrada dessa classe  com PHP usando função PAR ou IMPAR -->
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
                            <img src="assets/img/midia/img-eventos-02.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="box-item">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box-img">
                                <img src="assets/img/midia/img-eventos-03.jpg" alt="">
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

        </div>
               
        
    </div>


<!-- Modal Casamento -->
<div class="modal fade" id="item-casamento" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="item-casamentoLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="item-casamentoLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>

</section><!-- /fdez-eventos //-->
<?php include ( 'template-parts/part-footer.php') ?>
<?php include ("footer.php"); ?>