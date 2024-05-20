<?php
    include('conexiondb.php');
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        // Eliminamos la tarea con el identificador $id
        $query = "DELETE FROM tarea WHERE id_tarea = $id";
        $resultado = mysqli_query($conn,$query);

        if(!$resultado){
            die('Fallo en la eliminacion de la tarea');
        }else{
            header("Location: index.php");
        }
        

    }