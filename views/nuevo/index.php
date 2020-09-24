<?php require 'views/header.php' ?>
    <div id="main">
        <h1 class="center">La seccion de Nuevo</h1>
        <div class="center"><?php echo $this->mensaje; ?></div>
        <form class="center" action="<?php echo constant('URL');?>nuevo/registrarAlumno" method="post">
            <p>
                <label for="matricula">Matricula</label><br>
                <input type="text" name="matricula" id="matricula"required>
            </p>
            <p>
                <label for="nombre">nombre</label><br>
                <input type="text" name="nombre" id="nombre" required>
            </p>
            <p>
                <label for="apellido">apellido</label><br>
                <input type="text" name="apellido" id="apellido" required>
            </p>
            <p>
                <input type="submit" value="Registrar">
            </p>
        </form>


    </div>
<?php require 'views/footer.php'?>