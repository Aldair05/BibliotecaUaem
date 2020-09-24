<?php require 'views/header.php' ?>
    <div id="main">
        <h1 class="center">Editar Usuario</h1>
        <div class="center"><?php echo $this->mensaje; ?></div>
        <form class="center" action="<?php echo constant('URL');?>consulta/actualizarUsuario" method="post">
            <p>|
                <label for="matricula">Matricula</label><br>
                <input type="text" name="matricula" disabled value="<?php echo $this->usuario->matricula ?>" required>
            </p>
            <p>
                <label for="nombre">nombre</label><br>
                <input type="text" name="nombre" value="<?php echo $this->usuario->nombre ?>" required>
            </p>
            <p>
                <label for="apellido">apellido</label><br>
                <input type="text" name="apellido" value="<?php echo $this->usuario->apellido ?>" required>
            </p>
            <p>
                <input type="submit" value="Registrar">
            </p>
        </form>


    </div>
<?php require 'views/footer.php'?>