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
	   
      
	
	include("../bd/abrir_bd.php");
	
	

   if (isset($_POST["pregunta1"],$_POST["pregunta2"],$_POST["pregunta3"],$_POST["pregunta4"],$_POST["pregunta5"],$_POST["pregunta6"],$_POST["pregunta7"],$_POST["pregunta8"],$_POST["pregunta9"],$_POST["pregunta10"],$_POST["pregunta11"],$_POST["pregunta12"],$_POST["pregunta13"],$_POST["pregunta14"],$_POST["pregunta15"],$_POST["pregunta16"],$_POST["pregunta17"],$_POST["pregunta18"],$_POST["pregunta19"],$_POST["pregunta20"]))
   {
        //$clave=$_POST["clave"];
        //$codigo=$_POST["pass"]; 
 
        $pregunta1=$_POST["pregunta1"];
        $pregunta2=$_POST["pregunta2"];
        $pregunta3=$_POST["pregunta3"];
        $pregunta4=$_POST["pregunta4"];
        $pregunta5=$_POST["pregunta5"];
        $pregunta6=$_POST["pregunta6"];
        $pregunta7=$_POST["pregunta7"];
        $pregunta8=$_POST["pregunta8"];
        $pregunta9=$_POST["pregunta9"];
        $pregunta10=$_POST["pregunta10"];
        $pregunta11=$_POST["pregunta11"];
        $pregunta12=$_POST["pregunta12"];
        $pregunta13=$_POST["pregunta13"];
        $pregunta14=$_POST["pregunta14"];
        $pregunta15=$_POST["pregunta15"];
        $pregunta16=$_POST["pregunta16"];
        $pregunta17=$_POST["pregunta17"];
        $pregunta18=$_POST["pregunta18"];
        $pregunta19=$_POST["pregunta19"];
        $pregunta20=$_POST["pregunta20"];
 


      if($pregunta1=="no" and $pregunta2=="no" and $pregunta3=="no" and $pregunta4=="no" and $pregunta5=="no" and $pregunta6=="no")
        {
         $pregunta7="";
         $pregunta8="";
         $pregunta9="";
         $pregunta10="";
         $pregunta11="";
         $pregunta12="";
         $pregunta13="";
         $pregunta14="";
         $pregunta15="";
         $pregunta16="";
         $pregunta17="";
         $pregunta18="";
         $pregunta19="";
         $pregunta20="";
         $pregunta21="";
         $clinica="no";
        }
      else
          {
	       $seccion2=0;
	       $seccion3=0;
	       $seccion4=0;
	
	     for($i=7;$i<9;$i++)
	    {
	    $pregunta="pregunta".$i;
         if($$pregunta=="si")
	     {
		  $seccion2+=1;
	     }		  
	    }
	
	  for($i=9;$i<16;$i++)
	  {
	   $pregunta="pregunta".$i;
         if($$pregunta=="si")
	     {
		  $seccion3+=1;
	     }		  
	  }
	
	  for($i=16;$i<21;$i++)
	  {
	   $pregunta="pregunta".$i;
        if($$pregunta=="si")
	    {
		  $seccion4+=1;
	    }		  
	  }
	
	    if($seccion2>=1 or $seccion3>=3 or $seccion4>=2)
    	{
		 $clinica="si";
	    }
	    else{
		 $clinica="no";
	    }	
	
     }

     $a=0;
     $b=1;
     $consulta="SELECT empleados FROM $tabla WHERE id_empresa=$cct";
     $result=mysqli_query($conexion,$consulta);
        if($encontrado=mysqli_fetch_array($result, MYSQLI_ASSOC))
		{
			$cantidad=$encontrado['empleados'];
			
		}
           
       
    $consulta = "INSERT INTO $tabla1(id_empresa,codigo,pregunta1,pregunta2,pregunta3,pregunta4,pregunta5,pregunta6,pregunta7,pregunta8,pregunta9,pregunta10,pregunta11,pregunta12,pregunta13,pregunta14,pregunta15,pregunta16,pregunta17,pregunta18,pregunta19,pregunta20,atencion_clinica) VALUES ('$cct','$codigo','$pregunta1','$pregunta2','$pregunta3','$pregunta4','$pregunta5','$pregunta6','$pregunta7','$pregunta8','$pregunta9','$pregunta10','$pregunta11','$pregunta12','$pregunta13','$pregunta14','$pregunta15','$pregunta16','$pregunta17','$pregunta18','$pregunta19','$pregunta20','$clinica')";

     if (mysqli_query($conexion,$consulta))
     {
     	if($cantidad <=15)
		{
		  header("location:../trabajador/datos_trab.php");
		//header("location:../fin_test.html");
		 exit();	
		}
		if($cantidad >=16 and $cantidad <=50)
		{
		 header("location:../cuestionario2/cuestionario2.php");	
		 exit();
		}
		if($cantidad >=51)
		{
		  header("location:../cuestionario3/cuestionario3.php");	
		  exit();
		}
 		
     /*<script type="text/javascript">
          alert("Registro Guardado");
		  location.href ="../index.html";
          </script>*/
   
      }
        else
        {
  	    echo "No se guardo";
        }
 
     }

else 
    {
      echo 'por favor complete el Formulario';	
    }
	//cerrar sesion
	//session_destroy();
	
   //cerra base de datos
 include("../bd/cerrar_bd.php");
 }
?>
