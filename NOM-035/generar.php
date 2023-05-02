<!DOCTYPE html>
<html lang="es">
<head>
	<title></title>
</head>

<style type="text/css">
  table{
width: 40%;
border: 1px solid;
border-collapse: collapse;
margin: 0 auto;
}

td,th{
border: black 1px solid;

}

th{
  background: #32CD32;
}

</style>



<body>
<form method="POST" action="generar.php">
	C.C.T.<input type="text" name="cct" maxlength="5" size="5" required>
	<!--Iniciales<input type="text" name="ini" maxlength="2" size="2" required>-->
	No. de Trabajadores:<input type="text" name="trab" maxlength="4" size="4" required>
	<input type="submit" name="enviar" value="generar">
</form>

<table class="table">
   
   <tr>
     <th>Usuario</th>
     <th>Password</th>
     <th>Status</th>
   </tr> 


<?php
  if (isset($_POST['enviar']))
   {
    //abrir base de datos	
      include("bd/abrir_bd.php");

  	$cct=$_POST['cct'];
    //$ini=$_POST['ini'];
    $num=$_POST['trab'];
    for ($i=0; $i<$num ; $i++)
     { 
     	  $letras='abcdfghijklmnopkrstuvwxyz0123456789';
     	  $longletras=strlen($letras);
          $letras1='abcdfghijklmnopkrstuvwxyz0123456789';
     	  $longletras1=strlen($letras1);
     	  $letras2='abcdfghijklmnopkrstuvwxyz0123456789';
     	  $longletras2=strlen($letras2);
          $clave=rand(100,999);
          $letra=$letras[rand(0,$longletras-1)];
          $letra1=$letras1[rand(0,$longletras1-1)];
          $letra2=$letras2[rand(0,$longletras2-1)];
          $pass=$letra.$letra1.$clave.$letra2;

       echo "<tr> 
             <td>$cct</td>
             <td>$pass</td>";
            
       
        
    	$consulta="INSERT INTO claves (codigo,id_empresa) VALUES ('$pass','$cct')";
	 if (mysqli_query($conexion,$consulta))
     {
  	   echo "<td>guardado</td>
             </tr>";
     }
     else
      {
  	   echo "<td>No se guardo</td>
              </tr>";
	   --$i;
      }	
		
    }

   //cerrar base de datos
   include("bd/cerrar_bd.php");
  }
?>

    </table>

</body>
</html>