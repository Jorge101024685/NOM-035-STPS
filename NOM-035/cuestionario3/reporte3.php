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
	        <h2><?php echo $company."&nbsp&nbsp".$planta ?> </h2>
	      </div>
	    
    </header>
	<h4>Identificación y Análisis de los Factores de Riesgo Psicosocial</h4>
	
	<?php 
 //se abre php  

     
    

     //abrir DB
     include("../bd/abrir_bd.php");

      //$tabla3=cuestionario3 
     $consul="SELECT codigo,pregunta1,pregunta2,pregunta3,pregunta4,pregunta5,pregunta6,pregunta7,pregunta8,pregunta9,pregunta10,pregunta11,pregunta12,pregunta13,pregunta14,pregunta15,pregunta16,pregunta17,pregunta18,pregunta19,pregunta20,pregunta21,pregunta22,pregunta23,pregunta24,pregunta25,pregunta26,pregunta27,pregunta28,pregunta29,pregunta30,pregunta31,pregunta32,pregunta33,pregunta34,pregunta35,pregunta36,pregunta37,pregunta38,pregunta39,pregunta40,pregunta41,pregunta42,pregunta43,pregunta44,pregunta45,pregunta46,pregunta47,pregunta48,pregunta49,pregunta50,pregunta51,pregunta52,pregunta53,pregunta54,pregunta55,pregunta56,pregunta57,pregunta58,pregunta59,pregunta60,pregunta61,pregunta62,pregunta63,pregunta64,   clientes_usuarios,pregunta65,pregunta66,pregunta67,pregunta68,jefe,pregunta69,pregunta70,pregunta71,pregunta72,nivel_riesgo FROM $tabla3 INNER JOIN empresa ON $tabla3.id_empresa=empresa.id_empresa WHERE $tabla3.id_empresa=$cct ORDER BY nivel_riesgo";
                                                                                                                                                                                                   
        $resultados = mysqli_query($conexion,$consul);

     

     
   



header('Content-type: application/vnd.ms-excel;charset=iso-8859-15');
header('Content-Disposition: attachment; filename=entorno_organizacional.xls');

      //se cierra php
     
   ?>
  	   <table>
         <thead>
         	
          <tr>
              <th></th>
              <th colspan="5">Para responder las preguntas siguientes considere las condiciones ambientales de su centro de trabajo.</th>

              <th colspan="3">Para responder a las preguntas siguientes piense en la cantidad y ritmo de trabajo que tiene.</th>

              <th colspan="4">Las preguntas siguientes están relacionadas con el esfuerzo mental que le exige su trabajo.</th>

                <th colspan="4">Las preguntas siguientes están relacionadas con las actividades que realiza en su trabajo y las responsabilidades que tiene</th>

                <th colspan="6">Las preguntas siguientes están relacionadas con su jornada de trabajo.</th>

                <th colspan="6">Las preguntas siguientes están relacionadas con las decisiones que puede tomar en su trabajo.</th>

                 <th colspan="2">Las preguntas siguientes están relacionadas con cualquier tipo de cambio que ocurra en su trabajo (considere los últimos cambios realizados)</th>
                
                <th colspan="6">Las preguntas siguientes están relacionadas con la capacitación e información que se le proporciona sobre su trabajo.</th>

                <th colspan="5">Las preguntas siguientes están relacionadas con el o los jefes con quien tiene contacto.</th>

                <th colspan="5">Las preguntas siguientes se refieren a las relaciones con sus compañeros.</th>

                <th colspan="10">Las preguntas siguientes están relacionadas con la información que recibe sobre su rendimiento en el trabajo, el reconocimiento, el sentido de pertenencia y la estabilidad que le ofrece su trabajo.</th>

                <th colspan="8">Las preguntas siguientes están relacionadas con actos de violencia laboral (malos tratos, acoso, hostigamiento, acoso psicológico).</th>
   

                <th colspan="1"> </th>

                <th colspan="4">Si su respuesta fue "SÍ", responda las preguntas siguientes. Si su respuesta fue "NO" pase a las preguntas de la sección siguiente.</th> 

                <th colspan="1"> </th>

                <th colspan="4">Si su respuesta fue "SÍ", responda las preguntas siguientes. Si su respuesta fue "NO", ha concluido el cuestionario.</th>

            </tr>



          <tr style="background: orange;">
         		
         	    <th>Codigo</th>
              <th>El espacio donde trabajo me permite realizar mis actividades de manera segura e higiénica</th>
         	    <th>Mi trabajo me exige hacer mucho esfuerzo físico</th>
              <th>Me preocupa sufrir un accidente en mi trabajo</th>
              <th>Considero que en mi trabajo se aplican las normas de seguridad y salud en el trabajo</th>
		   	      <th>Considero que las actividades que realizo son peligrosas</th>
         	    <th>Por la cantidad de trabajo que tengo debo quedarme tiempo adicional a mi turno</th>	
              <th>  
Por la cantidad de trabajo que tengo debo trabajar sin parar</th>
              <th>Considero que es necesario mantener un ritmo de trabajo acelerado</th>
		        <th>Mi trabajo exige que esté muy concentrado</th>
		        <th>Mi trabajo requiere que memorice mucha información</th>
		        <th>En mi trabajo tengo que tomar decisiones difíciles muy rápido</th>
		        <th>Mi trabajo exige que atienda varios asuntos al mismo tiempo</th>
		        <th>En mi trabajo soy responsable de cosas de mucho valor</th>
		        <th>Respondo ante mi jefe por los resultados de toda mi área de trabajo</th>
		        <th>En el trabajo me dan órdenes contradictorias</th>
		        <th>Considero que en mi trabajo me piden hacer cosas innecesarias</th>
		        <th>Trabajo horas extras más de tres veces a la semana</th>
		        <th>Mi trabajo me exige laborar en días de descanso, festivos o fines de semana</th>
		        <th>Considero que el tiempo en el trabajo es mucho y perjudica mis actividades familiares o personales</th>
            <th>Debo atender asuntos de trabajo cuando estoy en casa</th>
		        <th>Pienso en las actividades familiares o personales cuando estoy en mi trabajo</th>
		        <th>Pienso que mis responsabilidades familiares afectan mi trabajo</th>
				    <th>Mi trabajo permite que desarrolle nuevas habilidades</th>
            <th>En mi trabajo puedo aspirar a un mejor puesto</th>
            <th>Durante mi jornada de trabajo puedo tomar pausas cuando las necesito</th>
            <th>Puedo decidir cuánto trabajo realizo durante la jornada laboral</th>
            <th>Puedo decidir la velocidad a la que realizo mis actividades en mi trabajo</th>
            <th>Puedo cambiar el orden de las actividades que realizo en mi trabajo</th>
            <th>Los cambios que se presentan en mi trabajo dificultan mi labor</th>
            <th>Cuando se presentan cambios en mi trabajo se tienen en cuenta mis ideas o aportaciones</th>
            <th>Me informan con claridad cuáles son mis funciones</th>
            <th>Me explican claramente los resultados que debo obtener en mi trabajo</th>
            <th>Me explican claramente los objetivos de mi trabajo</th>
            <th>Me informan con quién puedo resolver problemas o asuntos de trabajo</th>
            <th>Me permiten asistir a capacitaciones relacionadas con mi trabajo</th>
            <th>Recibo capacitación útil para hacer mi trabajo</th>
            <th>Mi jefe ayuda a organizar mejor el trabajo</th>
            <th>Mi jefe tiene en cuenta mis puntos de vista y opiniones</th>
            <th>Mi jefe me comunica a tiempo la información relacionada con el trabajo</th>
            <th>La orientación que me da mi jefe me ayuda a realizar mejor mi trabajo</th>
            <th>Mi jefe ayuda a solucionar los problemas que se presentan en el trabajo</th>
            <th>Puedo confiar en mis compañeros de trabajo</th>
            <th>Entre compañeros solucionamos los problemas de trabajo de forma respetuosa</th>
            <th>En mi trabajo me hacen sentir parte del grupo</th>
            <th>Cuando tenemos que realizar trabajo de equipo los compañeros colaboran</th>
            <th>Mis compañeros de trabajo me ayudan cuando tengo dificultades</th>
            <th>Me informan sobre lo que hago bien en mi trabajo</th>
            <th>La forma como evalúan mi trabajo en mi centro de trabajo me ayuda a mejorar mi desempeño</th>
            <th>En mi centro de trabajo me pagan a tiempo mi salario</th>
            <th>El pago que recibo es el que merezco por el trabajo que realizo</th>
            <th>Si obtengo los resultados esperados en mi trabajo me recompensan o reconocen</th>
            <th>Las personas que hacen bien el trabajo pueden crecer laboralmente</th>
            <th>Considero que mi trabajo es estable</th>
            <th>En mi trabajo existe continua rotación de personal</th>
            <th>Siento orgullo de laborar en este centro de trabajo</th>
            <th>Me siento comprometido con mi trabajo</th>
            <th>En mi trabajo puedo expresarme libremente sin interrupciones</th>
            <th>Recibo críticas constantes a mi persona y/o trabajo</th>
            <th>Recibo burlas, calumnias, difamaciones, humillaciones o ridiculizaciones</th>
            <th>Se ignora mi presencia o se me excluye de las reuniones de trabajo y en la toma de decisiones</th>
            <th>Se manipulan las situaciones de trabajo para hacerme parecer un mal trabajador</th>
            <th>Se ignoran mis éxitos laborales y se atribuyen a otros trabajadores</th>
            <th>Me bloquean o impiden las oportunidades que tengo para obtener ascenso o mejora en mi trabajo</th>
            <th>He presenciado actos de violencia en mi centro de trabajo</th>
            <th>En mi trabajo debo brindar servicio a clientes o usuarios:</th>
            <th>Atiendo clientes o usuarios muy enojados</th>
            <th>Mi trabajo me exige atender personas muy necesitadas de ayuda o enfermas</th>
            <th>Para hacer mi trabajo debo demostrar sentimientos distintos a los míos</th>
            <th>Mi trabajo me exige atender situaciones de violencia</th>
            <th>Soy jefe de otros trabajadores</th>
            <th>Comunican tarde los asuntos de trabajo</th>
            <th>Dificultan el logro de los resultados del trabajo</th>
            <th>Cooperan poco cuando se necesita</th>
            <th>Ignoran las sugerencias para mejorar su trabajo</th>            
        

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
          <td>".$consulta['pregunta20']."</td>
          <td>".$consulta['pregunta21']."</td> 
          <td>".$consulta['pregunta22']."</td> 
          <td>".$consulta['pregunta23']."</td>
          <td>".$consulta['pregunta24']."</td>
          <td>".$consulta['pregunta25']."</td>
          <td>".$consulta['pregunta26']."</td> 
          <td>".$consulta['pregunta27']."</td> 
          <td>".$consulta['pregunta28']."</td>
          <td>".$consulta['pregunta29']."</td>
          <td>".$consulta['pregunta30']."</td> 
          <td>".$consulta['pregunta31']."</td> 
          <td>".$consulta['pregunta32']."</td>
          <td>".$consulta['pregunta33']."</td>
          <td>".$consulta['pregunta34']."</td>
          <td>".$consulta['pregunta35']."</td> 
          <td>".$consulta['pregunta36']."</td> 
          <td>".$consulta['pregunta37']."</td>
          <td>".$consulta['pregunta38']."</td>
          <td>".$consulta['pregunta39']."</td> 
          <td>".$consulta['pregunta40']."</td>
          <td>".$consulta['pregunta41']."</td> 
          <td>".$consulta['pregunta42']."</td>
          <td>".$consulta['pregunta43']."</td>
          <td>".$consulta['pregunta44']."</td> 
          <td>".$consulta['pregunta45']."</td> 
          <td>".$consulta['pregunta46']."</td>
          <td>".$consulta['pregunta47']."</td>
          <td>".$consulta['pregunta48']."</td>
          <td>".$consulta['pregunta49']."</td> 
          <td>".$consulta['pregunta50']."</td> 
          <td>".$consulta['pregunta51']."</td>
          <td>".$consulta['pregunta52']."</td>
          <td>".$consulta['pregunta53']."</td> 
          <td>".$consulta['pregunta54']."</td>
          <td>".$consulta['pregunta55']."</td>
          <td>".$consulta['pregunta56']."</td>
          <td>".$consulta['pregunta57']."</td> 
          <td>".$consulta['pregunta58']."</td> 
          <td>".$consulta['pregunta59']."</td>
          <td>".$consulta['pregunta60']."</td>
          <td>".$consulta['pregunta61']."</td> 
          <td>".$consulta['pregunta62']."</td>
          <td>".$consulta['pregunta63']."</td> 
          <td>".$consulta['pregunta64']."</td>
          <td>".$consulta['clientes_usuarios']."</td>
          <td>".$consulta['pregunta65']."</td> 
          <td>".$consulta['pregunta66']."</td> 
          <td>".$consulta['pregunta67']."</td>
          <td>".$consulta['pregunta68']."</td>
          <td>".$consulta['jefe']."</td>
          <td>".$consulta['pregunta69']."</td>
          <td>".$consulta['pregunta70']."</td>
          <td>".$consulta['pregunta71']."</td> 
          <td>".$consulta['pregunta72']."</td>

          </tr>";
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


