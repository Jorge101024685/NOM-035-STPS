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

if (isset($_POST["pregunta1"],$_POST["pregunta2"],$_POST["pregunta3"],$_POST["pregunta4"],$_POST["pregunta5"],$_POST["pregunta6"],$_POST["pregunta7"],$_POST["pregunta8"],$_POST["pregunta9"],$_POST["pregunta10"],$_POST["pregunta11"],$_POST["pregunta12"],$_POST["pregunta13"],$_POST["pregunta14"],$_POST["pregunta15"],$_POST["pregunta16"],$_POST["pregunta17"],$_POST["pregunta18"],$_POST["pregunta19"],$_POST["pregunta20"],$_POST["pregunta21"],$_POST["pregunta22"],$_POST["pregunta23"],$_POST["pregunta24"],$_POST["pregunta25"],$_POST["pregunta26"],$_POST["pregunta27"],$_POST["pregunta28"],$_POST["pregunta29"],$_POST["pregunta30"],$_POST["pregunta31"],$_POST["pregunta32"],$_POST["pregunta33"],$_POST["pregunta34"],$_POST["pregunta35"],$_POST["pregunta36"],$_POST["pregunta37"],$_POST["pregunta38"],$_POST["pregunta39"],$_POST["pregunta40"],$_POST["clientes_usuarios"],$_POST["pregunta41"],$_POST["pregunta42"],$_POST["pregunta43"],$_POST["jefe"],$_POST["pregunta44"],$_POST["pregunta45"],$_POST["pregunta46"]))
{
 //$id_empresa=$_POST["clave"];
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
 $pregunta21=$_POST["pregunta21"];
 $pregunta22=$_POST["pregunta22"];
 $pregunta23=$_POST["pregunta23"];
 $pregunta24=$_POST["pregunta24"];
 $pregunta25=$_POST["pregunta25"];
 $pregunta26=$_POST["pregunta26"];
 $pregunta27=$_POST["pregunta27"];
 $pregunta28=$_POST["pregunta28"];
 $pregunta29=$_POST["pregunta29"];
 $pregunta30=$_POST["pregunta30"];
 $pregunta31=$_POST["pregunta31"];
 $pregunta32=$_POST["pregunta32"];
 $pregunta33=$_POST["pregunta33"];
 $pregunta34=$_POST["pregunta34"];
 $pregunta35=$_POST["pregunta35"];
 $pregunta36=$_POST["pregunta36"];
 $pregunta37=$_POST["pregunta37"];
 $pregunta38=$_POST["pregunta38"];
 $pregunta39=$_POST["pregunta39"];
 $pregunta40=$_POST["pregunta40"];
 $clientes_usuarios=$_POST["clientes_usuarios"];
 $pregunta41=$_POST["pregunta41"];
 $pregunta42=$_POST["pregunta42"];
 $pregunta43=$_POST["pregunta43"];
 $jefe=$_POST["jefe"];
 $pregunta44=$_POST["pregunta44"];
 $pregunta45=$_POST["pregunta45"];
 $pregunta46=$_POST["pregunta46"];
 
 $contador=0;
 $amb_trabajo=0;
 $cond_trabajo=0;
 $fact_actividad=0;
 $carga_trabajo=0;
 $cargas_a_resp=0;
 $cargas_contra=0;
 $jornada_trabajo=0;
 $trabajo_familia=0;
 $tiempo_trabajo=0;
 $control_trabajo=0;
 $liderazgo=0;
 $relaciones_trabajo=0;
 $violencia=0;
 $liderazgo_relaciones=0;
 
 
 
 for($i=1; $i<18; $i++)
{
  $pregunta="pregunta".$i;
  
  //Categoria, dominio y general 1 a 18  
    if($i<4){
		  
     if($$pregunta=="siempre"){
	  $contador+=4;
	  $cond_trabajo+=4;
       }
     if($$pregunta=="casi siempre"){
	    $contador+=3;
	    $cond_trabajo+=3;
	   }
     
	 if($$pregunta=="algunas veces"){
	 $contador+=2;
	 $cond_trabajo+=2;
       }
     
     if($$pregunta=="casi nunca"){
	 $contador+=1;
	 $cond_trabajo+=1;
       }
	   
	 if($$pregunta=="nunca"){
	 $contador+=0;
	 $cond_trabajo+=0;
    	}  
	
	}   

   if($i>3 and $i<10){
		  
     if($$pregunta=="siempre"){
	  $contador+=4;
	  $carga_trabajo+=4;
       }
     if($$pregunta=="casi siempre"){
	    $contador+=3;
	    $carga_trabajo+=3;
	   }
     
	 if($$pregunta=="algunas veces"){
	 $contador+=2;
	 $carga_trabajo+=2;
       }
     
     if($$pregunta=="casi nunca"){
	 $contador+=1;
	 $carga_trabajo+=1;
       }
	   
	 if($$pregunta=="nunca"){
	 $contador+=0;
	 $carga_trabajo+=0;
    	}  
	
	} 

     
	 
	if($i>9 and $i<12){
		  
     if($$pregunta=="siempre"){
	  $contador+=4;
	  $cargas_a_resp+=4;
	         }
     if($$pregunta=="casi siempre"){
	    $contador+=3;
	    $cargas_a_resp+=3;
	   }
     
	 if($$pregunta=="algunas veces"){
	 $contador+=2;
	 $cargas_a_resp+=2;
       }
     
     if($$pregunta=="casi nunca"){
	 $contador+=1;
	 $cargas_a_resp+=1;
       }
	   
	 if($$pregunta=="nunca"){
	 $contador+=0;
	 $cargas_a_resp+=0;
    	}  
	
	}  

if($i>11 and $i<14){
		  
     if($$pregunta=="siempre"){
	  $contador+=4;
	  $cargas_contra+=4;
	  }
     if($$pregunta=="casi siempre"){
	    $contador+=3;
	    $cargas_contra+=3;
	   }
     
	 if($$pregunta=="algunas veces"){
	 $contador+=2;
	 $cargas_contra+=2;
       }
     
     if($$pregunta=="casi nunca"){
	 $contador+=1;
	 $cargas_contra+=1;
       }
	   
	 if($$pregunta=="nunca"){
	 $contador+=0;
	 $cargas_contra+=0;
    	}  
	
	}  

    if($i>13 and $i<16){
		  
     if($$pregunta=="siempre"){
	  $contador+=4;
	  $jornada_trabajo+=4;
	  }
     if($$pregunta=="casi siempre"){
	    $contador+=3;
	    $jornada_trabajo+=3;
	   }
     
	 if($$pregunta=="algunas veces"){
	 $contador+=2;
	 $jornada_trabajo+=2;
       }
     
     if($$pregunta=="casi nunca"){
	 $contador+=1;
	 $jornada_trabajo+=1;
       }
	   
	 if($$pregunta=="nunca"){
	 $contador+=0;
	 $jornada_trabajo+=0;
    	}  
	
	}  

if($i>15 and $i<18){
		  
     if($$pregunta=="siempre"){
	  $contador+=4;
	  $trabajo_familia+=4;
	  }
     if($$pregunta=="casi siempre"){
	    $contador+=3;
	    $trabajo_familia+=3;
	   }
     
	 if($$pregunta=="algunas veces"){
	 $contador+=2;
	 $trabajo_familia+=2;
       }
     
     if($$pregunta=="casi nunca"){
	 $contador+=1;
	 $trabajo_familia+=1;
       }
	   
	 if($$pregunta=="nunca"){
	 $contador+=0;
	 $trabajo_familia+=0;
    	}  
	
	}  

  



}


for($i=18; $i<34; $i++)
{
  $pregunta="pregunta".$i;
    
   if($i<23){
	  
     if($$pregunta=="siempre"){
	  $contador+=0;
	  $control_trabajo+=0;
       }
     if($$pregunta=="casi siempre"){
	 $contador+=1;
	 $control_trabajo+=1;
       }
     
	 if($$pregunta=="algunas veces"){
	 $contador+=2;
	 $control_trabajo+=2;
       }
     
     if($$pregunta=="casi nunca"){
	 $contador+=3;
	 $control_trabajo+=3;
       }
	   
	 if($$pregunta=="nunca"){
	 $contador+=4;
	 $control_trabajo+=4;
       }  
	 
	}


    if($i>22 and $i<26){
	  
     if($$pregunta=="siempre"){
	  $contador+=0;
	  $liderazgo+=0;
       }
     if($$pregunta=="casi siempre"){
	 $contador+=1;
	 $liderazgo+=1;
       }
     
	 if($$pregunta=="algunas veces"){
	 $contador+=2;
	 $liderazgo+=2;
       }
     
     if($$pregunta=="casi nunca"){
	 $contador+=3;
	 $liderazgo+=3;
       }
	   
	 if($$pregunta=="nunca"){
	 $contador+=4;
	 $liderazgo+=4;
       }  
	 
	}



    if($i>25 and $i<28){
	  
     if($$pregunta=="siempre"){
	  $contador+=0;
	  $control_trabajo+=0;
       }
     if($$pregunta=="casi siempre"){
	 $contador+=1;
	 $control_trabajo+=1;
       }
     
	 if($$pregunta=="algunas veces"){
	 $contador+=2;
	 $control_trabajo+=2;
       }
     
     if($$pregunta=="casi nunca"){
	 $contador+=2;
	 $control_trabajo+=2;
       }
	   
	 if($$pregunta=="nunca"){
	 $contador+=4;
	 $control_trabajo+=4;
       }  
	 
	}

    if($i>27 and $i<30){
	  
     if($$pregunta=="siempre"){
	  $contador+=0;
	  $liderazgo+=0;
       }
     if($$pregunta=="casi siempre"){
	 $contador+=1;
	 $liderazgo+=1;
       }
     
	 if($$pregunta=="algunas veces"){
	 $contador+=2;
	 $liderazgo+=2;
       }
     
     if($$pregunta=="casi nunca"){
	 $contador+=3;
	 $liderazgo+=3;
       }
	   
	 if($$pregunta=="nunca"){
	 $contador+=4;
	 $liderazgo+=4;
       }  
	 
	}

    if($i>29 and $i<33){
	  
     if($$pregunta=="siempre"){
	  $contador+=0;
	  $relaciones_trabajo+=0;
       }
     if($$pregunta=="casi siempre"){
	 $contador+=1;
	 $relaciones_trabajo+=1;
       }
     
	 if($$pregunta=="algunas veces"){
	 $contador+=2;
	 $relaciones_trabajo+=2;
       }
     
     if($$pregunta=="casi nunca"){
	 $contador+=3;
	 $relaciones_trabajo+=3;
       }
	   
	 if($$pregunta=="nunca"){
	 $contador+=4;
	 $relaciones_trabajo+=4;
       }  
	 
	}

   if($i==33){
	  
     if($$pregunta=="siempre"){
	  $contador+=0;
	  $violencia+=0;
       }
     if($$pregunta=="casi siempre"){
	 $contador+=1;
	 $violencia+=1;
       }
     
	 if($$pregunta=="algunas veces"){
	 $contador+=2;
	 $violencia+=2;
       }
     
     if($$pregunta=="casi nunca"){
	 $contador+=3;
	 $violencia+=3;
       }
	   
	 if($$pregunta=="nunca"){
	 $contador+=4;
	 $violencia+=4;
       }  
	 
	}

	
}







for($i=34; $i<47; $i++)
{
	$pregunta="pregunta".$i;
	
	if($i>33 and $i<41){
	 if($$pregunta=="siempre"){
	  $contador+=4;
	  $violencia+=4;
       }
     if($$pregunta=="casi siempre"){
	 $contador+=2;
	 $violencia+=2;
       }
     
	 if($$pregunta=="algunas veces"){
	 $contador+=2;
	 $violencia+=2;
       }
     
     if($$pregunta=="casi nunca"){
	 $contador+=1;
	 $violencia+=1;
       }
	   
	 if($$pregunta=="nunca"){
	 $contador+=0;
	 $violencia+=0;
       }  
	}
 

if($i>40 and $i<44){
	 if($$pregunta=="siempre"){
	  $contador+=4;
	  $carga_trabajo+=4;
       }
     if($$pregunta=="casi siempre"){
	 $contador+=3;
	 $carga_trabajo+=3;
       }
     
	 if($$pregunta=="algunas veces"){
	 $contador+=2;
	 $carga_trabajo+=2;
       }
     
     if($$pregunta=="casi nunca"){
	 $contador+=1;
	 $carga_trabajo+=1;
       }
	   
	 if($$pregunta=="nunca"){
	 $contador+=0;
	 $carga_trabajo+=0;
       }  
	   
	  
	}
	
	
	
	
   if($i>43 and $i<47){
	 if($$pregunta=="siempre"){
	  $contador+=4;
	  $relaciones_trabajo+=4;
       }
     if($$pregunta=="casi siempre"){
	 $contador+=3;
	 $relaciones_trabajo+=3;
       }
     
	 if($$pregunta=="algunas veces"){
	 $contador+=2;
	 $relaciones_trabajo+=2;
       }
     
     if($$pregunta=="casi nunca"){
	 $contador+=1;
	 $relaciones_trabajo+=1;
       }
	   
	 if($$pregunta=="nunca"){
	 $contador+=0;
	 $relaciones_trabajo+=0;
       }  
	   
	  
	}	
    
	
	
	
}

$amb_trabajo=$cond_trabajo;
$fact_actividad=$carga_trabajo; 
$tiempo_trabajo=$jornada_trabajo+$trabajo_familia;
$liderazgo_relaciones=$liderazgo+$relaciones_trabajo+$violencia;	




  
   
  if($cond_trabajo < 3){
	   $cdom1="nulo";
  }
  if($cond_trabajo>=3 and $cond_trabajo<5){
	   $cdom1="bajo";
  }
  if($cond_trabajo>=5 and $cond_trabajo<7){
	   $cdom1="medio";
  }
   if($cond_trabajo>=7 and $cond_trabajo<9){
	   $cdom1="alto";
  }
   if($cond_trabajo>=9){
	   $cdom1="muy alto";
  }

  
   if($carga_trabajo < 12){
	   $cdom2="nulo";
    }
    if($carga_trabajo>=12 and $carga_trabajo<16){
	   $cdom2="bajo";
    }
    if($carga_trabajo>=16 and $carga_trabajo<20){
	   $cdom2="medio";
    }
   if($carga_trabajo>=20 and $carga_trabajo<24){
	   $cdom2="alto";
    }
   if($carga_trabajo>=24){
	   $cdom2="muy alto";
    }

  
   if($control_trabajo < 5){
	   $cdom3="nulo";
    }
    if($control_trabajo>=5 and $control_trabajo<8){
	   $cdom3="bajo";
    }
    if($control_trabajo>=8 and $control_trabajo<11){
	   $cdom3="medio";
    }
   if($control_trabajo>=11 and $control_trabajo<14){
	   $cdom3="alto";
    }
   if($control_trabajo>=14){
	   $cdom3="muy alto";
    }

  
  if($jornada_trabajo < 1){
	   $cdom4="nulo";
    }
    if($jornada_trabajo>=1 and $jornada_trabajo<2){
	   $cdom4="bajo";
    }
    if($jornada_trabajo>=2 and $jornada_trabajo<4){
	   $cdom4="medio";
    }
   if($jornada_trabajo>=4 and $jornada_trabajo<6){
	   $cdom4="alto";
    }
   if($jornada_trabajo>=6){
	   $cdom4="muy alto";
    }

  
   if($trabajo_familia < 1){
	   $cdom5="nulo";
    }
    if($trabajo_familia>=1 and $trabajo_familia<2){
	   $cdom5="bajo";
    }
    if($trabajo_familia>=2 and $trabajo_familia<4){
	   $cdom5="medio";
    }
   if($trabajo_familia>=4 and $trabajo_familia<6){
	   $cdom5="alto";
    }
   if($trabajo_familia>=6){
	   $cdom5="muy alto";
    }

   
   if($liderazgo < 3){
	   $cdom6="nulo";
    }
    if($liderazgo>=3 and $liderazgo<5){
	   $cdom6="bajo";
    }
    if($liderazgo>=5 and $liderazgo<8){
	   $cdom6="medio";
    }
   if($liderazgo>=8 and $liderazgo<11){
	   $cdom6="alto";
    }
   if($liderazgo>=11){
	   $cdom6="muy alto";
    }

   
   if($relaciones_trabajo < 5){
	   $cdom7="nulo";
    }
    if($relaciones_trabajo>=5 and $relaciones_trabajo<8){
	   $cdom7="bajo";
    }
    if($relaciones_trabajo>=8 and $relaciones_trabajo<11){
	   $cdom7="medio";
    }
   if($relaciones_trabajo>=11 and $relaciones_trabajo<14){
	   $cdom7="alto";
    }
   if($relaciones_trabajo>=14){
	   $cdom7="muy alto";
    }
 
 
   if($violencia < 7){
	   $cdom8="nulo";
    }
    if($violencia>=7 and $violencia<10){
	   $cdom8="bajo";
    }
    if($violencia>=10 and $violencia<13){
	   $cdom8="medio";
    }
   if($violencia>=13 and $violencia<16){
	   $cdom8="alto";
    }
   if($violencia>=16){
	   $cdom8="muy alto";
    }
 
   
 
 
 
   if($amb_trabajo < 3){
	   $ccat1="nulo";
    }
    if($amb_trabajo>=3 and $amb_trabajo<5){
	   $ccat1="bajo";
    }
    if($amb_trabajo>=5 and $amb_trabajo<7){
	   $ccat1="medio";
    }
   if($amb_trabajo>=7 and $amb_trabajo<9){
	   $ccat1="alto";
    }
   if($amb_trabajo>=9){
	   $ccat1="muy alto";
    }
 
   
   
 
   if($fact_actividad < 10){
	   $ccat2="nulo";
    }
    if($fact_actividad>=10 and $fact_actividad<20){
	   $ccat2="bajo";
    }
    if($fact_actividad>=20 and $fact_actividad<30){
	   $ccat2="medio";
    }
   if($fact_actividad>=30 and $fact_actividad<40){
	   $ccat2="alto";
    }
   if($fact_actividad>=40){
	   $ccat2="muy alto";
    }
 
   
 
   if($tiempo_trabajo < 4){
	   $ccat3="nulo";

    }
    if($tiempo_trabajo>=4 and $tiempo_trabajo<6){
	   $ccat3="bajo";
    }
    if($tiempo_trabajo>=6 and $tiempo_trabajo<9){
	   $ccat3="medio";
    }
   if($tiempo_trabajo>=9 and $tiempo_trabajo<12){
	   $ccat3="alto";
    }
   if($tiempo_trabajo>=12){
	   $ccat3="muy alto";
    }
 
   
   
 
   if($liderazgo_relaciones < 10){
	   $ccat4="nulo";
    }
    if($liderazgo_relaciones>=10 and $liderazgo_relaciones<18){
	   $ccat4="bajo";
    }
    if($liderazgo_relaciones>=18 and $liderazgo_relaciones<28){
	   $ccat4="medio";
    }
   if($liderazgo_relaciones>=28 and $liderazgo_relaciones<38){
	   $ccat4="alto";
    }
   if($liderazgo_relaciones>=38){
	   $ccat4="muy alto";
    }
 
   
   
   
   
 if($contador<20){
	 $riesgo="nulo";
	 //echo $riesgo;
	 //echo $categoria5;
 }
 if($contador>=20 and $contador<45){
	 $riesgo="bajo";
	 //echo $riesgo;
	 //echo $categoria5;
 }
 
 if($contador>=45 and $contador<70){
	 $riesgo="medio";
	 //echo $riesgo;
	 //echo $categoria5;
 }
 
if($contador>=70 and $contador<90){
	 $riesgo="alto";
	 //echo $riesgo;
	 //echo $categoria5;
 }

if($contador>=90){
	 $riesgo="muy alto";
	 //echo $riesgo;
	 //echo $categoria5;
 }
 
 
    if($clientes_usuarios=="no")
     {
	 $pregunta41="";
     $pregunta42="";
     $pregunta43=""; 
     }
 
     if($jefe=="no")
     {
	 $pregunta44="";
     $pregunta45="";
     $pregunta46="";
     $pregunta47=""; 
     }
                       //$tabla2=cuestionario2 
$consulta = "INSERT INTO $tabla2(id_empresa,codigo,pregunta1,pregunta2,pregunta3,pregunta4,pregunta5,pregunta6,pregunta7,pregunta8,pregunta9,pregunta10,pregunta11,pregunta12,pregunta13,pregunta14,pregunta15,pregunta16,pregunta17,pregunta18,pregunta19,pregunta20,pregunta21,pregunta22,pregunta23,pregunta24,pregunta25,pregunta26,pregunta27,pregunta28,pregunta29,pregunta30,pregunta31,pregunta32,pregunta33,pregunta34,pregunta35,pregunta36,pregunta37,pregunta38,pregunta39,pregunta40,clientes_usuarios,pregunta41,pregunta42,pregunta43,jefe,pregunta44,pregunta45,pregunta46,dom1,cdom1,dom2,cdom2,dom3,cdom3,dom4,cdom4,dom5,cdom5,dom6,cdom6,dom7,cdom7,dom8,cdom8,cat1,ccat1,cat2,ccat2,cat3,ccat3,cat4,ccat4,calificacion,nivel_riesgo) VALUES ('$cct','$codigo','$pregunta1','$pregunta2','$pregunta3','$pregunta4','$pregunta5','$pregunta6','$pregunta7','$pregunta8','$pregunta9','$pregunta10','$pregunta11','$pregunta12','$pregunta13','$pregunta14','$pregunta15','$pregunta16','$pregunta17','$pregunta18','$pregunta19','$pregunta20','$pregunta21','$pregunta22','$pregunta23','$pregunta24','$pregunta25','$pregunta26','$pregunta27','$pregunta28','$pregunta29','$pregunta30','$pregunta31','$pregunta32','$pregunta33','$pregunta34','$pregunta35','$pregunta36','$pregunta37','$pregunta38','$pregunta39','$pregunta40','$clientes_usuarios','$pregunta41','$pregunta42','$pregunta43','$jefe','$pregunta44','$pregunta45','$pregunta46','$cond_trabajo','$cdom1','$carga_trabajo','$cdom2','$control_trabajo','$cdom3','$jornada_trabajo','$cdom4','$trabajo_familia','$cdom5','$liderazgo','$cdom6','$relaciones_trabajo','$cdom7','$violencia','$cdom8','$amb_trabajo','$ccat1','$fact_actividad','$ccat2','$tiempo_trabajo','$ccat3','$liderazgo_relaciones','$ccat4','$contador','$riesgo')";

  if (mysqli_query($conexion,$consulta))
    {
  	
      header("location:../trabajador/datos_trab.php");
  	}
  else
    {
  	echo "No se guardo";
    }
 
}

else {
   echo 'por favor complete el Formulario';	
    }

  //cerrar sesion
	//session_destroy();
	  
  //cerrar DB
  include("../bd/cerrar_bd.php" );
}
?>

