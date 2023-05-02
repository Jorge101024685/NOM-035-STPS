<?php
//iniciar sesion
session_start();

$cct=$_POST['cct'];
$codigo=$_POST['codigo'];
		
 //abrir DB  
         include("bd/abrir_bd.php");

		        
     //inicia consulta  
       $existe1="false";
       $existe2="false";
                             //consulta en tabla empresa
                 $consulta="SELECT id_empresa FROM $tabla WHERE $tabla.id_empresa=$cct";
                 $resultados = mysqli_query($conexion,$consulta);
         
           if($filas = mysqli_fetch_array($resultados))
               {
                                     //consulta en la tabla claves
               	 $consulta3="SELECT codigo, id_empresa FROM claves WHERE claves.codigo= BINARY '".$codigo."' AND claves.id_empresa=$cct";
               	 $resultados3=mysqli_query($conexion,$consulta3);
                  if($filas3=mysqli_fetch_array($resultados3))
                   {
                    $existe1="true";
                   }  

                  
                      
              }
            
                                
                                  //consulta en tabla cuestionario1
           $consulta2="SELECT codigo FROM $tabla1 WHERE $tabla1.codigo=BINARY '".$codigo."'";
          $resultados2 = mysqli_query($conexion,$consulta2);
      
         if($filas2 = mysqli_fetch_array($resultados2))
             {
              $existe2="true";
             }
    
       
        if($existe2 =="true" and $existe1=="true" )
         {
          //session_destroy();
        //   echo '<script type="text/javascript">';
        //   echo 'alert("El sistema indica que ya has contestado el cuestionario")';
        //   echo '</script>';
        //Redirect a pagina de login si us ya ha contestado el cuestionario
        $message1 = "El sistema indica que ya has contestado el cuestionario";
        echo "<script type='text/javascript'>alert('$message1');
         window.location.href='prueba.html';
         </script>";

          //header("location:index.html");
                   
         }
    
        if($existe1=="false")
         {
		  //session_destroy();
          //echo '<script type="text/javascript">';
          //echo 'alert("CCT o Password incorrecto o no existe")';
          //echo '</script>';  }
          // header("location:prueba.html"); 
          //Redireccion a login despues de mostrar mensaje de alert de usincorrecto
          $message = "CCT o Password incorrecto o no existe";
         echo "<script type='text/javascript'>alert('$message');
         window.location.href='prueba.html';
         </script>";
         }


     if($existe1=="true" and $existe2 =="false")
    {
     $_SESSION['usuario']=$cct;
     $_SESSION['clave']=$codigo;
     header("location:cuestionario1/cuestionario1.php");
    }
     //cerrar DB
	 include("bd/cerrar_bd.php");

   ?>