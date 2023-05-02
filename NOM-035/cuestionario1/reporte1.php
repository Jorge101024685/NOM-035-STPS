<?php
//inicia sesion
session_start();
$cct=$_SESSION['usuario'];
$company = $_SESSION['empresa'];
$planta = $_SESSION['planta'];
   if(!isset($cct))
   {
    header("location:../admin/index.html");
   }
  else
 {

?>
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Test2</title>
        
		

	</head>
	

	
	
	<body>
	<header id="menu">
		  <div id="submenu">
	        <h2><?php echo $company." ".$planta ?> </h2>
	      </div>
	    
    </header>
	<h4>Identificación y Análisis de los Factores de Riesgo Psicosocial</h4>
	
	<?php 
 //se abre php  

     
    

     //abrir DB
     include("../bd/abrir_bd.php");

      //$tabla1=cuestionario1 
     $consul="SELECT codigo,pregunta1,pregunta2,pregunta3,pregunta4,pregunta5,pregunta6,pregunta7,pregunta8,pregunta9,pregunta10,pregunta11,pregunta12,pregunta13,pregunta14,pregunta15,pregunta16,pregunta17,pregunta18,pregunta19,pregunta20,atencion_clinica FROM $tabla1 INNER JOIN empresa ON $tabla1.id_empresa=empresa.id_empresa WHERE $tabla1.id_empresa=$cct ORDER BY atencion_clinica";
                                                                                                                                                                                                   
        $resultados = mysqli_query($conexion,$consul);

     

     
   



header('Content-type: application/vnd.ms-excel;charset=iso-8859-15');
header('Content-Disposition: attachment; filename=acontecimiento_traumatico.xls');

      //se cierra php
     
   ?>
  	   <table>
         <thead>
            <tr>
            	<th></th>
               <th colspan="6" style="background: green;">I.- Acontecimiento traumático severo</th>
               <th colspan="2" style="background: blue;">II.- Recuerdos persistentes sobre el acontecimiento (durante el último mes):</th>
               <th colspan="7" style="background: red;">
III.- Esfuerzo por evitar circunstancias parecidas o asociadas al acontecimiento (durante el último mes):</th>
               <th colspan="5" style="background: gray;">IV Afectación (durante el último mes):</th>
               <th></th>
            </tr>


         	<tr style="background: orange;">
         		
         	    <th >Codigo</th>
              <th>¿Accidente que tenga como consecuancia la muerte, la pérdida de un miembro o una lesión grave?</th>
         	    <th>¿Asaltos?</th>
              <th>¿Actos violentos que derivarón en lesiones graves?</th>
              <th>¿Secuestros?</th>
		   	      <th>¿Amenazas?</th>
         	    <th>¿Cualquier otro que ponga en riesgo su vida o salud, y/o la de otras personas?</th>	
              <th>¿Ha tenido recuerdos recurrentes sobre el acontecimiento que le provocan malestares?</th>
              <th>¿Ha tenido sueños de carácter recurrente sobre el acontecimiento, que le producen malestar?</th>
		        <th>¿Se ha esforzado por evitar todo tipo de sentimientos, conversaciones o situaciones que le puedan recordar el acontecimiento?</th>
		        <th>¿Se ha esforzado por evitar todo tipo de actividades, lugares o personas que motivan recuerdos del acontecimiento?</th>
		        <th>¿Ha tenido dificultad para recordar alguna parte importante del evento?</th>
		        <th>¿Ha disminuido su interés en sus actividades cotidianas?</th>
		        <th>¿Se ha sentido usted alejado o distante de los demás?</th>
		        <th>¿Ha notado que tiene dificultad para expresar sus sentimientos?</th>
		        <th>¿Ha tenido la impresión de que su vida se va a acortar, que va a morir antes que otras personas o que tiene un futuro limitado?</th>
		        <th>¿Ha tenido usted dificultades para dormir?</th>
		        <th>¿Ha estado particularmente irritable o le han dado arranques de coraje?</th>
		        <th>¿Ha tenido dificultad para concentrarse?</th>
		        <th>¿Ha estado nervioso o constantemente en alerta?</th>
                <th>¿Se ha sobresaltado fácilmente por cualquier cosa?</th>
		        <th>Atención Clínica</th>
        

		   </tr>

		</thead>
 
   <?php
 //se abre php
            
      
       while($consulta = mysqli_fetch_array($resultados))
           {
            echo "<tr>
          
          <td>".$consulta['codigo']."</td> 
          <td>".$consulta['pregunta1']."</td> 
          <td>".$consulta['pregunta2']."</td>
          <td>".$consulta['pregunta3']."</td> 
          <td>".$consulta['pregunta4']."</td>
          <td>".$consulta['pregunta5']."</td> 
          <td>".$consulta['pregunta6']."</td> 
          <td>".$consulta['pregunta7']."</td>
          <td>".$consulta['pregunta8']."</td>
          <td>".$consulta['pregunta9']."</td>
          <td>".$consulta['pregunta10']."</td> 
          <td>".$consulta['pregunta11']."</td> 
          <td>".$consulta['pregunta12']."</td>
          <td>".$consulta['pregunta13']."</td>
          <td>".$consulta['pregunta14']."</td>
          <td>".$consulta['pregunta15']."</td> 
          <td>".$consulta['pregunta16']."</td> 
          <td>".$consulta['pregunta17']."</td>
          <td>".$consulta['pregunta18']."</td>
          <td>".$consulta['pregunta19']."</td> 
          <td>".$consulta['pregunta20']."</td>";
          if ($consulta['atencion_clinica']=='si')
          {
          echo "<td style='background:red;'>".$consulta['atencion_clinica']."</td>";
          }
           else
           {
          echo "<td>".$consulta['atencion_clinica']."</td>";
           }

          echo "</tr>";
        }

         
     //cerrar DB
	  include("../bd/cerrar_bd.php");

    ?> 
     </table>
   
  
	



	</body>
</html>

  <?php
  } //else si estan iniciadas las variables de sesion
  ?>


