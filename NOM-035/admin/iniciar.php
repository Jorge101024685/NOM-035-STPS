<?php
//iniciar sesion
session_start();

$cct=$_POST['cct'];
$clave=$_POST['clave'];
		
 //abrir DB  
         include("../bd/abrir_bd.php");

		      //USUARIO = NOMBRE DE LA EMPRESA O ID CONTRASEÑA Sisnom035#  
     //inicia consulta  
       $existe1="false";
       $existe2="false";
                             //consulta en tabla empresa
                 $consulta="SELECT id_empresa,empresa,planta,empleados FROM $tabla WHERE $tabla.id_empresa=$cct";
                 $resultados = mysqli_query($conexion,$consulta);
         
             if($filas = mysqli_fetch_array($resultados))
               {
                            
                if($clave=="Sisnom035#")  
                {
                  $existe1="true";
                  $_SESSION['usuario']=$cct;
				          $_SESSION['empresa']=$filas['empresa'];
				          $_SESSION['planta']=$filas['planta'];
				          $_SESSION['numero']=$filas['empleados'];
                  header("location:../cuestionario1/consulta1.php");
                 }   
               }
             else
			         {
				         if($clave=="Sisnom035#")
				           {
				             $existe1="true";	 
				           }					 
				
				           echo '<script type="text/javascript">';
                   echo 'alert("No hay rrsultados que mostrar")';
                   echo '</script>';   
				 
			        }
          
    
       
    
        if($existe1=="false")
         {
		  //session_destroy();
          echo '<script type="text/javascript">';
          echo 'alert("Usuario o Password incorrecto")';
          echo '</script>';  
                  
         // header("location:index.html"); 
         }


     
     //cerrar DB
	 include("../bd/cerrar_bd.php");

   ?>