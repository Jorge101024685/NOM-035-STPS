<?php
    //inicia sesion
    session_start();
    $cct=$_SESSION['usuario'];
    $codigo=$_SESSION['clave'];
  if(!isset($cct,$codigo))
    {
    header("location:../index.html");
    } 
 else
{
    //abrir DB
	include("../bd/abrir_bd.php");

     if (isset($_POST["pregunta1"],$_POST["pregunta2"],$_POST["pregunta3"],$_POST["pregunta4"],$_POST["ocupacion"],$_POST["area"],$_POST["pregunta7"],$_POST["pregunta8"],$_POST["pregunta9"],$_POST["pregunta10"],$_POST["pregunta11"],$_POST["pregunta12"],$_POST["pregunta13"]))
   {
 //$id_empresa=$_POST["clave"];
 //$codigo=$_POST["pass"]; 
    $pregunta1=$_POST["pregunta1"];
    $pregunta2=$_POST["pregunta2"];
    $pregunta3=$_POST["pregunta3"];
    $pregunta4=$_POST["pregunta4"];
    $ocupacion=$_POST["ocupacion"];
    $area=$_POST["area"];
    $pregunta7=$_POST["pregunta7"];
    $pregunta8=$_POST["pregunta8"];
    $pregunta9=$_POST["pregunta9"];
    $pregunta10=$_POST["pregunta10"];
    $pregunta11=$_POST["pregunta11"];
    $pregunta12=$_POST["pregunta12"];
    $pregunta13=$_POST["pregunta13"];

 
 
                       //Tabla TRABAJADOR 
     $consulta = "INSERT INTO trabajador(id_empresa,codigo,sexo,edad,civil,estudios,puesto,departamento,cargo,contratacion,personal,turno,rotacion,tiempo,experiencia) VALUES ('$cct','$codigo','$pregunta1','$pregunta2','$pregunta3','$pregunta4','$ocupacion','$area','$pregunta7','$pregunta8','$pregunta9','$pregunta10','$pregunta11','$pregunta12','$pregunta13')";

       if (mysqli_query($conexion,$consulta))
       {
  	
         header("location:../fin_test.html");
  	    }
      else
      {
  	  echo "No se guardo";
      }
 
  }

else  {
      echo 'por favor complete el Formulario';	
     }

      //cerrar sesion
	  //session_destroy();
	  
     //cerrar DB
    include("../bd/cerrar_bd.php" );
}
?>

