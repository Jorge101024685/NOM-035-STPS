


<?php

//boton consultar

 if (isset($_POST['editar']))
   {

     

    $cct=$_POST['cct'];
    $empresa=$_POST['empresa'];  
    $planta=$_POST['planta'];
    $direccion=$_POST['direccion'];
    $num=$_POST['cantidad'];
    
    echo $empresa,"\n", $planta;
         
    //abrir base de datos
     include("../../bd/abrir_bd.php");

     //borrar claves
     $consulta1="DELETE FROM claves WHERE id_empresa=$cct";
     mysqli_query($conexion, $consulta1);
    

     //guardar cambios en tabla empresa
     $consulta="UPDATE $tabla SET empleados=$num WHERE id_empresa=$cct";
  
    
   if (mysqli_query($conexion,$consulta))
     {
       header('Content-type: application/vnd.ms-excel;charset=iso-8859-15');
       header('Content-Disposition: attachment; filename=claves.xls');	
        
  	  ?>  
      <table class="table">
   
     <tr>
     <th>Usuario</th>
     <th>Password</th>
     <th>Status</th>
     </tr>   
     <?php   
          for ($i=0; $i<$num ; $i++)
           { 
     	  $letras='abcdfghijklmnopkrstuvwxyz0123456789';
     	  $longletras=strlen($letras);
          $letras1='abcdfghijklmnopkrstuvwxyz0123456789';
     	  $longletras1=strlen($letras1);
     	  $letras2='abcdfghijklmnopkrstuvwxyz0123456789*/$%&';
     	  $longletras2=strlen($letras2);
          $clave=rand(100,999);
          $letra=$letras[rand(0,$longletras-1)];
          $letra1=$letras1[rand(0,$longletras1-1)];
          $letra2=$letras2[rand(0,$longletras2-1)];
          $pass=$letra.$letra1.$clave.$letra2;

         echo "<tr> 
             <td>$cct</td>
             <td>$pass</td>";

            $consulta2="INSERT INTO claves (codigo,id_empresa) VALUES ('$pass','$cct')";
	        if (mysqli_query($conexion,$consulta2))
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

        
       } //la empresa se guardo
        else
          {
             ?>
      	        <script type="text/javascript">
                alert("La Empresa no se guardo");
		        location.href ="altaempresa.html";
                </script>
  	        <?php   
  	             include("../../bd/cerrar_bd.php");
	             exit();
           } 	
    
       //cerrar base de datos
        include("../../bd/cerrar_bd.php");



     

    
       }//si se presiono boton editar(isset)

   ?>


