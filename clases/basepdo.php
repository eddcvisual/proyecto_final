<?php

class basepdo{

    public function insertar($query){
        $link = mysqli_connect("localhost", "root","","prueba");
        
        if (mysqli_connect_errno()) 
        {  echo "Error al conectar : " . mysqli_connect_error(); 
            return false ;} 

        $result = mysqli_query($link,$query);
        mysqli_close($link);
        return $result ;
    }

   public function cargar($query) {
    $conn = mysqli_connect("localhost", "root","","prueba");
    if (!$conn) 
    
    {
        
        die("No hay conexión: ".mysqli_connect_error());
        return 0;
    }
    $respuesta = mysqli_query($conn,$query);
    return mysqli_num_rows($respuesta);

   }

   public function obtener_datos ($query){
    $conn = mysqli_connect("localhost", "root","","prueba");
    if (!$conn) 
    
    {
        
        die("No hay conexión: ".mysqli_connect_error());
        return 0;
    }
    $respuesta = mysqli_query($conn,$query);
    
    $datos = [];
    while ($reg = mysqli_fetch_array($respuesta)) {
        $datos[] = $reg;
    }
    return $datos;

   }

}