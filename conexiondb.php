<?php
//conexion base de datos 
     $conn = mysqli_connect(
        'localhost',
        'root',
        '',
        'tareas_db'
    );
    if (isset($conn)){
        ECHO "<div style ='color:#17202A'>.</div>";
    }else{
        ECHO "<div style ='color:red'><h2>La BD de datos no esta conectada</h2></div>";
    }