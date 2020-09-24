<?php require 'views/header.php' ?>
    <div id="main">
        <h1 class="center"><?php echo $this->mensaje; ?></h1>
        <div id= "respuesta" class="center"></div>
        <table width="100%">
            <thead>
                <tr>
                    <th>Matricula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                </tr>
            </thead>
            <tbody class="center " id="tbody-usuarios">              
                <?php
                 
                foreach ($this->usuarios as $usuario ) {
                        // $usuario = new Usuario();
                        // $usuario= $row;

                  ?>
                <tr id="fila-<?php echo $usuario->matricula ?>">
                    <td><?php echo $usuario->matricula ?></td>
                    <td><?php echo $usuario->nombre ?></td>
                    <td><?php echo $usuario->apellido ?></td>
                    <td><a href="<?php echo constant('URL'). 'consulta/verUsuario/' . $usuario->matricula ?>">Actualizar</a></td>
                    <!-- <td><a href="<?php echo constant('URL') . 'consulta/eliminarUsuario/'.$usuario->matricula ?>">Eliminar</a></td> -->
                    <td><button class="bEliminar" data-matricula= "<?php echo $usuario->matricula         ?>">Eliminar</button></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
<?php require 'views/footer.php' ?>


