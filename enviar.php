<?php
 $conectar = mysqli_connect('localhost','root','sena1234', 'formulario');

 if(!$conectar){
     echo "No conectado";
 }
 $nombre = $_POST['nombre'];
 $email = $_POST['email'];
 $telefono = $_POST['telefono'];
 $genero = $_POST['genero'];
 $password = $_POST['password'];
 $programa = $_POST['programa'];

 $sql = "INSERT INTO usuario (nombre, email, telefono, genero, password, programa) VALUES ('$nombre', '$email', '$telefono','$genero','$password','$programa')";

 $ejecutar = mysqli_query($conectar, $sql);

 if(!$ejecutar){
     echo "Hay algun error";
 }else{
     echo "Datos almacenados correctamente";
 }
?>