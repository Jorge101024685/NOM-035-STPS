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
 
 


if (isset($_POST["pregunta1"],$_POST["pregunta2"],$_POST["pregunta3"],$_POST["pregunta4"],$_POST["pregunta5"],$_POST["pregunta6"],$_POST["pregunta7"],$_POST["pregunta8"],$_POST["pregunta9"],$_POST["pregunta10"],$_POST["pregunta11"],$_POST["pregunta12"],$_POST["pregunta13"],$_POST["pregunta14"],$_POST["pregunta15"],$_POST["pregunta16"],$_POST["pregunta17"],$_POST["pregunta18"],$_POST["pregunta19"],$_POST["pregunta20"],$_POST["pregunta21"],$_POST["pregunta22"],$_POST["pregunta23"],$_POST["pregunta24"],$_POST["pregunta25"],$_POST["pregunta26"],$_POST["pregunta27"],$_POST["pregunta28"],$_POST["pregunta29"],$_POST["pregunta30"],$_POST["pregunta31"],$_POST["pregunta32"],$_POST["pregunta33"],$_POST["pregunta34"],$_POST["pregunta35"],$_POST["pregunta36"],$_POST["pregunta37"],$_POST["pregunta38"],$_POST["pregunta39"],$_POST["pregunta40"],$_POST["pregunta41"],$_POST["pregunta42"],$_POST["pregunta43"],$_POST["pregunta44"],$_POST["pregunta45"],$_POST["pregunta46"],
          $_POST["pregunta47"],$_POST["pregunta48"],$_POST["pregunta49"],$_POST["pregunta50"],$_POST["pregunta51"],$_POST["pregunta52"],$_POST["pregunta53"],$_POST["pregunta54"],$_POST["pregunta55"],$_POST["pregunta56"],$_POST["pregunta57"],$_POST["pregunta58"],$_POST["pregunta59"],$_POST["pregunta60"],$_POST["pregunta61"],$_POST["pregunta62"],$_POST["pregunta63"],$_POST["pregunta64"],$_POST["clientes_usuarios"],$_POST["pregunta65"],$_POST["pregunta66"],$_POST["pregunta67"],$_POST["pregunta68"],$_POST["jefe"],$_POST["pregunta69"],$_POST["pregunta70"],$_POST["pregunta71"],$_POST["pregunta72"]))
{
  
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
 $pregunta41=$_POST["pregunta41"];
 $pregunta42=$_POST["pregunta42"];
 $pregunta43=$_POST["pregunta43"];
 $pregunta44=$_POST["pregunta44"];
 $pregunta45=$_POST["pregunta45"];
 $pregunta46=$_POST["pregunta46"];
 $pregunta47=$_POST["pregunta47"];
 $pregunta48=$_POST["pregunta48"];
 $pregunta49=$_POST["pregunta49"];
 $pregunta50=$_POST["pregunta50"];
 $pregunta51=$_POST["pregunta51"];
 $pregunta52=$_POST["pregunta52"];
 $pregunta53=$_POST["pregunta53"];
 $pregunta54=$_POST["pregunta54"];
 $pregunta55=$_POST["pregunta55"];
 $pregunta56=$_POST["pregunta56"];
 $pregunta57=$_POST["pregunta57"];
 $pregunta58=$_POST["pregunta58"];
 $pregunta59=$_POST["pregunta59"];
 $pregunta60=$_POST["pregunta60"];
 $pregunta61=$_POST["pregunta61"];
 $pregunta62=$_POST["pregunta62"];
 $pregunta63=$_POST["pregunta63"];
 $pregunta64=$_POST["pregunta64"];
 $clientes_usuarios=$_POST["clientes_usuarios"];
 $pregunta65=$_POST["pregunta65"];
 $pregunta66=$_POST["pregunta66"];
 $pregunta67=$_POST["pregunta67"];
 $pregunta68=$_POST["pregunta68"];
 $jefe=$_POST["jefe"];
 $pregunta69=$_POST["pregunta69"];
 $pregunta70=$_POST["pregunta70"];
 $pregunta71=$_POST["pregunta71"];
 $pregunta72=$_POST["pregunta72"];


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
 $rec_desempeño=0;
 $i_sentido=0;
 $e_organizacional=0;



 
 
    
     if($pregunta1=="siempre"){
	  $contador+=0;
	  $amb_trabajo+=0;
       }
     if($pregunta1=="casi siempre"){
	 $contador+=1;
	 $amb_trabajo+=1;
       }
     
	 if($pregunta1=="algunas veces"){
	 $contador+=2;
	 $amb_trabajo+=2;
       }
     
     if($pregunta1=="casi nunca"){
	 $contador+=3;
	 $amb_trabajo+=3;
       }
	   
	 if($pregunta1=="nunca"){
	 $contador+=4;
	 $amb_trabajo+=4;
       }

    
 
     if($pregunta2=="siempre"){
	  $contador+=4;
       }
     if($pregunta2=="casi siempre"){
	 $contador+=3;
       }
     
	 if($pregunta2=="algunas veces"){
	 $contador+=2;
       }
     
     if($pregunta2=="casi nunca"){
	 $contador+=1;
       }
	   
	 if($pregunta2=="nunca"){
	 $contador+=0;
       }  
	   
	   
   
     if($pregunta3=="siempre"){
	  $contador+=4;
	  $amb_trabajo+=4;
       }
     if($pregunta3=="casi siempre"){
	 $contador+=3;
	 $amb_trabajo+=3;
       }
     
	 if($pregunta3=="algunas veces"){
	 $contador+=2;
	 $amb_trabajo+=2;
       }
     
     if($pregunta3=="casi nunca"){
	 $contador+=1;
	 $amb_trabajo+=1;
       }
	   
	 if($pregunta3=="nunca"){
	 $contador+=0;
	 $amb_trabajo+=0;
       }



	   
   
 if($pregunta4=="siempre"){
	  $contador+=0;
       }
     if($pregunta4=="casi siempre"){
	 $contador+=1;
       }
     
	 if($pregunta4=="algunas veces"){
	 $contador+=2;
       }
     
     if($pregunta4=="casi nunca"){
	 $contador+=3;
       }
	   
	 if($pregunta4=="nunca"){
	 $contador+=4;
       }  
 
 
    for($i=5; $i<23; $i++)
   {
      $pregunta="pregunta".$i;
      if($i==5){
	   if($$pregunta=="siempre"){
	  $contador+=4;
       }
     if($$pregunta=="casi siempre"){
	 $contador+=3;
       }
     
	 if($$pregunta=="algunas veces"){
	 $contador+=2;
       }
     
     if($$pregunta=="casi nunca"){
	 $contador+=1;
       }
	   
	 if($$pregunta=="nunca"){
	 $contador+=0;
       }  
   }
     


    if($i>5 and $i<17){
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

    if($i>16 and $i<19){
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


    if($i>18 and $i<23){
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
 
 
 
 
 
 
 for($i=23; $i<29; $i++)
{
  $pregunta="pregunta".$i;
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

     
     if($pregunta29=="siempre"){
	  $contador+=4;
	  $control_trabajo+=4;
       }
     if($pregunta29=="casi siempre"){
	 $contador+=3;
	 $control_trabajo+=3;
       }
     
	 if($pregunta29=="algunas veces"){
	 $contador+=2;
	 $control_trabajo+=2;
       }
     
     if($pregunta29=="casi nunca"){
	 $contador+=1;
	 $control_trabajo+=1;
       }
	   
	 if($pregunta29=="nunca"){
	 $contador+=0;
	 $control_trabajo+=0;
       }  




   for($i=30; $i<54; $i++)
  {
     $pregunta="pregunta".$i;
  
     if($i==30){
		 if($$pregunta=="siempre"){
	  $contador+=1;
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
    
    if($i>30 and $i<35){
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
  
  
     if($i>34 and $i<37){
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

      
    if($i>36 and $i<42){
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

    if($i>41 and $i<47){
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

 
    if($i>46 and $i<53){
	if($$pregunta=="siempre"){
	  $contador+=0;
	  $rec_desempeño+=0;
       }
     if($$pregunta=="casi siempre"){
	 $contador+=1;
	 $rec_desempeño+=1;
       }
     
	 if($$pregunta=="algunas veces"){
	 $contador+=2;
	 $rec_desempeño+=2;
       }
     
     if($$pregunta=="casi nunca"){
	 $contador+=3;
	 $rec_desempeño+=3;
       }
	   
	 if($$pregunta=="nunca"){
	 $contador+=4;
	 $rec_desempeño+=4;
       }  
	
   }


    if($i==53){
		if($$pregunta=="siempre"){
	  $contador+=0;
	  $i_sentido+=0;
       }
     if($$pregunta=="casi siempre"){
	 $contador+=1;
	 $i_sentido+=1;
       }
     
	 if($$pregunta=="algunas veces"){
	 $contador+=2;
	 $i_sentido+=2;
       }
     
     if($$pregunta=="casi nunca"){
	 $contador+=3;
	 $i_sentido+=3;
       }
	   
	 if($$pregunta=="nunca"){
	 $contador+=4;
	 $i_sentido+=4;
       }  
	}


	
}
  
  
      
     if($pregunta54=="siempre"){
	  $contador+=4;
	  $i_sentido+=4;
       }
     if($pregunta54=="casi siempre"){
	 $contador+=3;
	 $i_sentido+=3;
       }
     
	 if($pregunta54=="algunas veces"){
	 $contador+=2;
	 $i_sentido+=2;
       }
     
     if($pregunta54=="casi nunca"){
	 $contador+=1;
	 $i_sentido+=1;
       }
	   
	 if($pregunta54=="nunca"){
	 $contador+=0;
	 $i_sentido+=0;
       }  
  
  
  
  
  for($i=55; $i<58; $i++)
   {
  $pregunta="pregunta".$i;
  
    if($i>54 and $i<57){
		if($$pregunta=="siempre"){
	  $contador+=0;
	  $i_sentido+=0;
       }
     if($$pregunta=="casi siempre"){
	 $contador+=1;
	 $i_sentido+=1;
       }
     
	 if($$pregunta=="algunas veces"){
	 $contador+=2;
	 $i_sentido+=2;
       }
     
     if($$pregunta=="casi nunca"){
	 $contador+=3;
	 $i_sentido+=3;
       }
	   
	 if($$pregunta=="nunca"){
	 $contador+=4;
	 $i_sentido+=4;
       }  
	}
     
	if($i==57){
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

  
 for($i=58; $i<73; $i++)
 {
  $pregunta="pregunta".$i;
    if($i>57 and $i<65){
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

    if($i>64 and $i<69){
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
   
   if($i>68 and $i<73){
      if($$pregunta=="siempre"){
	  $contador+=4;
	  $violencia+=4;
       }
     if($$pregunta=="casi siempre"){
	 $contador+=3;
	 $violencia+=3;
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


}

$cond_trabajo=$amb_trabajo;
$fact_actividad=$carga_trabajo+$control_trabajo;
$tiempo_trabajo=$jornada_trabajo+$trabajo_familia;
$liderazgo_relaciones=$liderazgo+$relaciones_trabajo+$violencia;
$e_organizacional=$rec_desempeño+$i_sentido;








 

  
  if($cond_trabajo < 5){
	   $cdom1="nulo";
  }
  if($cond_trabajo>=5 and $cond_trabajo<9){
	   $cdom1="bajo";
  }
  if($cond_trabajo>=9 and $cond_trabajo<11){
	   $cdom1="medio";
  }
   if($cond_trabajo>=11 and $cond_trabajo<14){
	   $cdom1="alto";
  }
   if($cond_trabajo>=14){
	   $cdom1="muy alto";
  }

  
   if($carga_trabajo < 15){
	   $cdom2="nulo";
    }
    if($carga_trabajo>=15 and $carga_trabajo<21){
	   $cdom2="bajo";
    }
    if($carga_trabajo>=21 and $carga_trabajo<27){
	   $cdom2="medio";
    }
   if($carga_trabajo>=27 and $carga_trabajo<37){
	   $cdom2="alto";
    }
   if($carga_trabajo>=37){
	   $cdom2="muy alto";
    }

  
   if($control_trabajo < 11){
	   $cdom3="nulo";
    }
    if($control_trabajo>=11 and $control_trabajo<16){
	   $cdom3="bajo";
    }
    if($control_trabajo>=16 and $control_trabajo<21){
	   $cdom3="medio";
    }
   if($control_trabajo>=21 and $control_trabajo<25){
	   $cdom3="alto";
    }
   if($control_trabajo>=25){
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

   


   if($trabajo_familia < 4){
	   $cdom5="nulo";
    }
    if($trabajo_familia>=4 and $trabajo_familia<6){
	   $cdom5="bajo";
    }
    if($trabajo_familia>=6 and $trabajo_familia<8){
	   $cdom5="medio";
    }
   if($trabajo_familia>=8 and $trabajo_familia<10){
	   $cdom5="alto";
    }
   if($trabajo_familia>=10){
	   $cdom5="muy alto";
    }

   


   if($liderazgo < 9){
	   $cdom6="nulo";
    }
    if($liderazgo>=9 and $liderazgo<12){
	   $cdom6="bajo";
    }
    if($liderazgo>=12 and $liderazgo<16){
	   $cdom6="medio";
    }
   if($liderazgo>=16 and $liderazgo<20){
	   $cdom6="alto";
    }
   if($liderazgo>=20){
	   $cdom6="muy alto";
    }

   


   if($relaciones_trabajo < 10){
	   $cdom7="nulo";
    }
    if($relaciones_trabajo>=10 and $relaciones_trabajo<13){
	   $cdom7="bajo";
    }
    if($relaciones_trabajo>=13 and $relaciones_trabajo<17){
	   $cdom7="medio";
    }
   if($relaciones_trabajo>=17 and $relaciones_trabajo<21){
	   $cdom7="alto";
    }
   if($relaciones_trabajo>=21){
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
 
   


   if($rec_desempeño < 6){
	   $cdom9="nulo";
    }
    if($rec_desempeño>=6 and $rec_desempeño<10){
	   $cdom9="bajo";
    }
    if($rec_desempeño>=10 and $rec_desempeño<14){
	   $cdom9="medio";
    }
   if($rec_desempeño>=14 and $rec_desempeño<18){
	   $cdom9="alto";
    }
   if($rec_desempeño>=18){
	   $cdom9="muy alto";
    }
 
 
 


   if($i_sentido < 4){
	   $cdom10="nulo";
    }
    if($i_sentido>=4 and $i_sentido<6){
	   $cdom10="bajo";
    }
    if($i_sentido>=6 and $i_sentido<8){
	   $cdom10="medio";
    }
   if($i_sentido>=8 and $i_sentido<10){
	   $cdom10="alto";
    }
   if($i_sentido>=10){
	   $cdom10="muy alto";
    }
 
 


 
   if($amb_trabajo < 5){
	   $ccat1="nulo";
    }
    if($amb_trabajo>=5 and $amb_trabajo<9){
	   $ccat1="bajo";
    }
    if($amb_trabajo>=9 and $amb_trabajo<11){
	   $ccat1="medio";
    }
   if($amb_trabajo>=11 and $amb_trabajo<14){
	   $ccat1="alto";
    }
   if($amb_trabajo>=14){
	   $ccat1="muy alto";
    }
 
   
   

 
   if($fact_actividad < 15){
	   $ccat2="nulo";
    }
    if($fact_actividad>=15 and $fact_actividad<30){
	   $ccat2="bajo";
    }
    if($fact_actividad>=30 and $fact_actividad<45){
	   $ccat2="medio";
    }
   if($fact_actividad>=45 and $fact_actividad<60){
	   $ccat2="alto";
    }
   if($fact_actividad>=60){
	   $ccat2="muy alto";
    }
 
   
 
   if($tiempo_trabajo < 5){
	   $ccat3="nulo";
    }
    if($tiempo_trabajo>=5 and $tiempo_trabajo<7){
	   $ccat3="bajo";
    }
    if($tiempo_trabajo>=7 and $tiempo_trabajo<10){
	   $ccat3="medio";
    }
   if($tiempo_trabajo>=10 and $tiempo_trabajo<13){
	   $ccat3="alto";
    }
   if($tiempo_trabajo>=13){
	   $ccat3="muy alto";
    }
 
   
   
 
   if($liderazgo_relaciones < 14){
	   $ccat4="nulo";
    }
    if($liderazgo_relaciones>=14 and $liderazgo_relaciones<29){
	   $ccat4="bajo";
    }
    if($liderazgo_relaciones>=29 and $liderazgo_relaciones<42){
	   $ccat4="medio";
    }
   if($liderazgo_relaciones>=42 and $liderazgo_relaciones<58){
	   $ccat4="alto";
    }
   if($liderazgo_relaciones>=58){
	   $ccat4="muy alto";
    }
 
   
 
   if($e_organizacional < 10){
	   $ccat5="nulo";
    }
    if($e_organizacional>=10 and $e_organizacional<14){
	   $ccat5="bajo";
    }
    if($e_organizacional>=14 and $e_organizacional<18){
	   $ccat5="medio";
    }
   if($e_organizacional>=18 and $e_organizacional<23){
	   $ccat5="alto";
    }
   if($e_organizacional>=23){
	   $ccat5="muy alto";
    }
 
   
   
   
   
 
 if($contador<50){
	 $riesgo="nulo";
	 //echo $riesgo;
	 //echo $sica
 }
 if($contador>=50 and $contador<75){
	 $riesgo="bajo";
	 //echo $riesgo;
	 //echo $sica
 }
 
 if($contador>=75 and $contador<99){
	 $riesgo="medio";
	 //echo $riesgo;
	 //echo $sica
 }
 
if($contador>=99 and $contador<140){
	 $riesgo="alto";
	 //echo $riesgo;
	 //echo $sica
	  }

if($contador>=140){
	 $riesgo="muy alto";
	 //echo $riesgo;
	 //echo $sica
 }


    if($clientes_usuarios=="no")
     {
	 $pregunta65="";
     $pregunta66="";
     $pregunta67=""; 
	 $pregunta68="";
     }
 
     if($jefe=="no")
     {
	 $pregunta69="";
     $pregunta70=""; 
	 $pregunta71="";
     $pregunta72=""; 
     }


                         //$tabla3=cuestionario3
$consulta = "INSERT INTO $tabla3(id_empresa,codigo,pregunta1,pregunta2,pregunta3,pregunta4,pregunta5,pregunta6,pregunta7,pregunta8,pregunta9,pregunta10,pregunta11,pregunta12,pregunta13,pregunta14,pregunta15,pregunta16,pregunta17,pregunta18,pregunta19,pregunta20,pregunta21,pregunta22,pregunta23,pregunta24,pregunta25,pregunta26,pregunta27,pregunta28,pregunta29,pregunta30,pregunta31,pregunta32,pregunta33,pregunta34,pregunta35,pregunta36,pregunta37,pregunta38,pregunta39,pregunta40,pregunta41,pregunta42,pregunta43,pregunta44,pregunta45,pregunta46,pregunta47,pregunta48,pregunta49,pregunta50,pregunta51,pregunta52,pregunta53,pregunta54,pregunta55,pregunta56,pregunta57,pregunta58,pregunta59,pregunta60,pregunta61,pregunta62,pregunta63,pregunta64,clientes_usuarios,pregunta65,pregunta66,pregunta67,pregunta68,jefe,pregunta69,pregunta70,pregunta71,pregunta72,dom1,cdom1,dom2,cdom2,dom3,cdom3,dom4,cdom4,dom5,cdom5,dom6,cdom6,dom7,cdom7,dom8,cdom8,dom9,cdom9,dom10,cdom10,cat1,ccat1,cat2,ccat2,cat3,ccat3,cat4,ccat4,cat5,ccat5,calificacion,nivel_riesgo) VALUES ('$cct','$codigo','$pregunta1','$pregunta2','$pregunta3','$pregunta4','$pregunta5','$pregunta6','$pregunta7','$pregunta8','$pregunta9','$pregunta10','$pregunta11','$pregunta12','$pregunta13','$pregunta14','$pregunta15','$pregunta16','$pregunta17','$pregunta18','$pregunta19','$pregunta20','$pregunta21','$pregunta22','$pregunta23','$pregunta24','$pregunta25','$pregunta26','$pregunta27','$pregunta28','$pregunta29','$pregunta30','$pregunta31','$pregunta32','$pregunta33','$pregunta34','$pregunta35','$pregunta36','$pregunta37','$pregunta38','$pregunta39','$pregunta40','$pregunta41','$pregunta42','$pregunta43','$pregunta44','$pregunta45','$pregunta46','$pregunta47','$pregunta48','$pregunta49','$pregunta50','$pregunta51','$pregunta52','$pregunta53','$pregunta54','$pregunta55','$pregunta56','$pregunta57','$pregunta58','$pregunta59','$pregunta60','$pregunta61','$pregunta62','$pregunta63','$pregunta64','$clientes_usuarios','$pregunta65','$pregunta66','$pregunta67','$pregunta68','$jefe','$pregunta69','$pregunta70','$pregunta71','$pregunta72','$cond_trabajo','$cdom1','$carga_trabajo','$cdom2','$control_trabajo','$cdom3','$jornada_trabajo','$cdom4','$trabajo_familia','$cdom5','$liderazgo','$cdom6','$relaciones_trabajo','$cdom7','$violencia','$cdom8','$rec_desempeño','$cdom9','$i_sentido','$cdom10','$amb_trabajo','$ccat1','$fact_actividad','$ccat2','$tiempo_trabajo','$ccat3','$liderazgo_relaciones','$ccat4','$e_organizacional','$ccat5','$contador','$riesgo')";

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
   include("../bd/cerrar_bd.php");
  }  
?>