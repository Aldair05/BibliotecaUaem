
    <?php  require 'views/header.php'; ?>

    <section class="contenedor-seccion">
        <div class="container titulo-biblioteca">
            <h1 class="text-center">Biblioteca <span>UAEM</span></h1>
        </div>
        <div class="container banner">
            <div id="carousel-banner" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="<?php echo constant('URL');?>/public/img/banners/caballeroaguila.png" class="d-block w-100" alt="Uaem">
                    </div>
                    <div class="carousel-item">
                      <img src="<?php echo constant('URL');?>/public/img/banners/b5.jpg" class="d-block w-100" alt="uaem">
                    </div>
                    <div class="carousel-item">
                      <img src="<?php echo constant('URL');?>/public/img/banners/b3.png" class="d-block w-100" alt="uaem">
                    </div>
                    <div class="carousel-item">
                      <img src="<?php echo constant('URL');?>/public/img/banners/b2.jpg" class="d-block w-100" alt="uaem">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div><!--.carouselExampleIndicators -->
        </div><!--.banner -->
        <div class="container">
            <h2 class="text-center"> Recursos en linea </h2>
            <div class="container-recursos">
                <div class="row fila-imagenes">
                    <div class="col-md-3">
                        <img src="<?php echo constant('URL');?>/public/img/recursos/recurso1.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="<?php echo constant('URL');?>/public/img/recursos/recurso2.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="<?php echo constant('URL');?>/public/img/recursos/recurso3.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="<?php echo constant('URL');?>/public/img/recursos/recurso4.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>    
        </div>
    </section>


    <?php  require 'views/footer.php'; ?>
