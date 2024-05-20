<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskManager CRUD con PHP y MySQL</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php //Se requiere incluir la conexion para que este disponible 
include('conexiondb.php') 
?>
<div class="caja1">
    <form action="guardar_info.php" method="POST">
        <p class="shadow text1">Gestor de tareas diarias</p>
        <div class="form-txt">
            <a href="#">Instrucciones de uso</a>
            <a href="#">Propiedad intelectual</a>
        </div>
        <div class="input-group">
            <label for="titulo">TAREA DEL DIA</label><br>
            <input type="text" name="titulo" row="2" placeholder="Titulo"><br>
            <textarea name="descripcion" cols="30" rows='2' placeholder="Mensaje"></textarea><br>
            <label for="fecha">Fecha (YYYY-MM-DD H:M:S)</label><br>
            <input type="date" name="fecha"><br><br>
            <button class=button name="bt_guardar_tarea" type="submit" value="Guardar tarea">
                <strong>Guardar tarea</strong>
            </button><br>
        </div>
    </form>
</div>
<!-- Tabla de bases de datos -->
<div class='caja2'>
    <table border="2" cellpadding="10">
        <thead>
            <tr class="header">
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>Fechas</th>
                <th>Id</th>
                <th>Opcion</th>

            </tr>
        </thead>
        <tbody class="tbody">
            <?php   
                // asigna la consulta en una variable 
                $query = "SELECT * FROM tarea";
                $resultado = mysqli_query($conn, $query);

                while ($fila = mysqli_fetch_array($resultado))
            {?>
            <tr>
                <td><?php echo $fila['titulo']?></td>
                <td><?php echo $fila['descripcion']?></td>
                <td><?php echo $fila['fecha']?></td>
                <td><?php echo $fila['id_tarea']?></td>
                <td>
                    <a href="editar_tarea.php?id  = <?php echo $fila['id_tarea']?>">Editar</a><br>
                    <a href="eliminar_tarea.php?id = <?php echo $fila['id_tarea']?>">Eliminar</a>
                </td>

            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</body>

</html>