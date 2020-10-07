<?php

include("Basesdatos.php");

if(isset($_POST["botonenviar"])){


   $nombre=$_POST["nombre"];
   $apeellido=$_POST["apellido"];
   $cedula=$_POST["cedula"];
   $edad=$_POST["edad"];
   $telefono=$_POST["telefono"];
   $direccion=$_POST["direccion"];

   $operacion= new BaseDatos();

   $consulta="INSERT INTO usuarios( nombre) VALUES ('$nombre')";
   
   $operacion-> alterarBaseDatos($consulta);

}







?>