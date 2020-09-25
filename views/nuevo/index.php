<?php require 'views/header.php' ?>

<div class="contenedor-seccion">
        <div id="main">
            <h1 class="center">La seccion de Nuevo</h1>
            <div class="center"><?php echo $this->mensaje; ?></div>
            
            <div class="container ">
                <div class="row justify-content-center">
                    <form class="center" action="<?php echo constant('URL');?>nuevo/registrarAlumno" method="post">
                        <div class="col-md-12 form-group">
                            <label for="matricula">Matricula:</label>
                            <input type="text" class="form-control" name="matricula" placeholder="Matricula" required>
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
                        </div>

                        <div class="col-md-12 form-group">
                            <label for="nombre">Apellido:</label>
                            <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido" required>
                        </div>

                        <div class="col-md-12 form-group">
                            <input type="submit" class="btn-registrar" value="Registrar">
                        </div>
                    </form>
            
                </div>
            </div>
        </div>
</div>


<?php require 'views/footer.php'?>