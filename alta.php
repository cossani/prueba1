<?php
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$celular1=$_POST["celular1"];
$tipo1=$_POST["tipo1"];
$celular2=$_POST["celular2"];
$tipo2=$_POST["tipo2"];
$direccion=$_POST["direccion"];
$dni=$_POST["dni"];
$nacimiento=$_POST["nacimiento"];
$email=$_POST["email"];
$madre=$_POST["madre"];
$padre=$_POST["padre"];
$salud=$_POST["salud"];
$escuela=$_POST["escuela"];
$curso=$_POST["curso"];
$grupo=$_POST["grupo"];
$nivel=$_POST["nivel"];
$subnivel=$_POST["subnivel"];
$profe=$_POST["profe"];
$observaciones=$_POST["observaciones"];
$contrasena=$_POST["contrasenia"];

// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

require_once "config.php";

   $sql = "INSERT INTO listado
     VALUES ('','$nombre','$apellido','$celular1','$tipo1','$celular2','$tipo2','$direccion','$dni','$nacimiento','$email','$madre','$padre','$salud','$escuela','$curso','$grupo','$nivel','$subnivel','$profe','$observaciones','$contrasena',NOW())";

if ($link->query($sql) === TRUE) {
  echo "<center><p class='alta'>Se agreg&oacute; a " . $_POST["nombre"] . " " . $_POST["apellido"] . " a la base de datos</p><a href='index.php'><p class='altb'>INICIO<a/></p></center>";
} else {
  echo "Error: " . $sql . "<br>" . $link->error;
}

?>

<!DOCTYPE html>
<HTML>
<head>
 <Title>Imagine - Alta de alumno</Title>
 <style>
    .alta{color: #84b37f; font-family: Verdana, Helvetica, Arial; font-weight: bold 15px;}
    a {color: #AAA; font-family: Verdana, Helvetica, Arial; font-weight: bold; font-size: 10px;}
 </style>
</head>
</HTML