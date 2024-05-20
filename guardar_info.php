<?php
    include("conexiondb.php");
    //Verificacion de envio de informacion al precionar el boton
    if(isset($_POST['bt_guardar_tarea'])){
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $fecha = $_POST['fecha'];
    //realizar la insercion de datos en la base de datos
    
        $query = 'INSERT INTO tarea (titulo, descripcion, fecha) VALUES 
        (\''.$titulo.'\',\''.$descripcion.'\',\''.$fecha.'\')';
        //se utilizan  la sintaxis \' '\ para poder utilizar  las comillas simples e insertar datos
        mysqli_query($conn,$query);

        //Retorna y actualiza los datos de la pagina principal
        header("Location: index.php");
    }
    