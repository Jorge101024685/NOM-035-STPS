<!DOCTYPE html>
<html lang="es">
<head>
	<title>Grafica por categoria</title>
<meta charset="utf-8">

<script src="../js/jquery.min.js"></script>
<script src="../js/highcharts/js/highcharts.js"></script>

<script src="../js/highcharts/js/modules/exporting.js"></script>


</head>
<style type="text/css">
#alto{

  width:40px;
  height:20px;
  border-radius: 5px;
  position:relative;
  background:#e0b241;
  }

  #bajo{

  width:40px;
  height:20px;
  border-radius: 5px;
  position:relative;
  background:#228B22;
  }

  #medio{

  width:40px;
  height:20px;
  border-radius: 5px;
  position:relative;
  background:#FFFF00;
  }

  #muy_alto{

  width:40px;
  height:20px;
  border-radius: 5px;
  position:relative;
  background:#DC143C;
  }

  #nulo{

  width:40px;
  height:20px;
  border-radius: 5px;
  position:relative;
  background:#00BFFF;
  }

</style>

<script type="text/javascript">
	window.onload=function()
	{
		document.forms["dominio"].submit();
	}

</script>


<body>


   <?php 
  
  if (isset($_POST['grafica']))
  {
     $codigo =$_POST['clave'];   
     	 
     $calif[0]= $_POST['cat1'];  
     $calif[1] =$_POST['cat2'];
     $calif[2] = $_POST['cat3'];
     $calif[3] = $_POST['cat4'];
     $calif[4] = $_POST['cat5'];
	 
     $clasi[0]= $_POST['ccat1'];  
     $clasi[1] =$_POST['ccat2'];
     $clasi[2] = $_POST['ccat3'];
     $clasi[3] = $_POST['ccat4'];
     $clasi[4] = $_POST['ccat5'];


	 
	 $dom[0]= $_POST['dom1'];  
     $dom[1] =$_POST['dom2'];
     $dom[2] = $_POST['dom3'];
     $dom[3] = $_POST['dom4'];
	 $dom[4]= $_POST['dom5'];  
     $dom[5] =$_POST['dom6'];
     $dom[6] = $_POST['dom7'];
     $dom[7] = $_POST['dom8'];
     $dom[8] = $_POST['dom9'];
     $dom[9] = $_POST['dom10'];
	 
     $cdom[0]= $_POST['cdom1'];  
     $cdom[1] =$_POST['cdom2'];
     $cdom[2] = $_POST['cdom3'];
     $cdom[3] = $_POST['cdom4'];
	 $cdom[4]= $_POST['cdom5'];  
     $cdom[5] =$_POST['cdom6'];
     $cdom[6] = $_POST['cdom7'];
     $cdom[7] = $_POST['cdom8'];
	 $cdom[8] = $_POST['cdom9'];
     $cdom[9] = $_POST['cdom10'];
	 
	 
	 for($i=0; $i<5; $i++)
	  {
		 if($clasi[$i]=='alto')
		 {
		  $color[$i]='#e0b241'; 
		 }
		if($clasi[$i]=="bajo")
		 {
          $color[$i]='#228B22';
         }             
        if($clasi[$i]=="medio")
		 {
         $color[$i]='#FFFF00'; 
         }
        if($clasi[$i]=="muy alto")
		{
        $color[$i]='#DC143C';
        }
        if($clasi[$i]=="nulo")
		{
		 $color[$i]='#00BFFF'; 
        }
	 }
		
		
	
   for($i=0; $i<10; $i++)
	  {
		 if($cdom[$i]=='alto')
		 {
		  $color2[$i]='#e0b241'; 
		 }
		if($cdom[$i]=="bajo")
		 {
          $color2[$i]='#228B22'; 
         }             
        if($cdom[$i]=="medio")
		 {
         $color2[$i]='#FFFF00'; 
         }
        if($cdom[$i]=="muy alto")
		{
        $color2[$i]='#DC143C'; 
        }
        if($cdom[$i]=="nulo")
		{
		 $color2[$i]='#00BFFF'; 
        }
	 }	
		


		
           }
       
      ?>
    
  <script type="text/javascript">
		$(function () {
			var colors = Highcharts.getOptions().colors,
			categories = ['Ambiente de Trabajo','Factores Propios de la Actividad','Org. del Tiempo del Trabajo','Liderazgo y Relaciones en el Trabajo','Entorno Organizacional'],
			name = '<?php echo $codigo;?>',
			data = [<?php for($x=0;$x<5;$x++){?>	
			{
				y: <?php echo $calif[$x] ?>,
				color:<?php echo "'".$color[$x]."'";?>,                   
			}, 
			<?php }?>	                 
			];
			
			
			
			
			function setChart(name, categories, data, color) {
				chart.xAxis[0].setCategories(categories, false);
				chart.series[0].remove(false);
				chart.addSeries({
					name: name,
					data: data,
					color: color || 'white'
				}, false);
				chart.redraw();
			}
			var chart = $('#grafica').highcharts({
				chart: {
					type: 'column'
				},
				title: {
					text: 'Calificacion por Categoria'
				},
				xAxis: {
					categories: categories
				},
				yAxis:{
                  title:{
                  	 text: 'valores'
                  }
				},


				credits: {
					enabled: false
				},
				plotOptions: {
					column: {
						cursor: 'pointer',
						point: {
							events: {
								click: function() {
									var drilldown = this.drilldown;
									if (drilldown) { 
										setChart(drilldown.name, drilldown.categories, drilldown.data, drilldown.color);
									} else { 
										setChart(name, categories, data);
									}
								}
							}
						},
						dataLabels: {
							enabled: true,
							color: colors[0],
							style: {
								fontWeight: 'bold'
							},
							formatter: function() {
								return this.y +' ';
							},
						}
					}
				},
				series: [{
					name: name,
					data: data,
					color: 'white'
				}],
				exporting: {
					enabled: true
				}
			})
			.highcharts(); 
		});
		</script>
		<div id="grafica">
		
		</div>
  



  <table>
         <thead>
         	<tr>
         		<td style="padding-left: 20px;">Alto</td>
         	    <td><div id="alto"></div></td>
				<td style="padding-left: 20px;">Bajo</td>
				<td><div id="bajo"></div></td>
                <td style="padding-left: 20px;">Medio</td>
				<td><div id="medio"></div></td>
         	    <td style="padding-left: 20px;">Muy Alto</td>
				<td><div id="muy_alto"></div></td>
         	    <td style="padding-left: 20px;">Nulo</td>
				<td><div id="nulo"></div></td>
		           
		   </tr>
        </thead>
      </table>


   
  
  
  
  <script type="text/javascript">
		$(function () {
			var colors = Highcharts.getOptions().colors,
			categories = ['Condiciones en el Ambiente de Trabajo','Carga de Trabajo','Falta de Control Sobre el Trabajo','Jornada de Trabajo','Interferencia Relacion Trabajo-Familia','Liderazgo','Rel en el Trabajo','Violencia','Reconocimiento del Desempeño','Insuf Sentido d Pertenencia'],
			name = '<?php echo $codigo;?>',
			data = [<?php for($x=0;$x<10;$x++){?>	
			{
				y: <?php echo $dom[$x]?>,
				color:<?php echo "'".$color2[$x]."'";?>,                   
			}, 
			<?php }?>	                 
			];
			
			
			
			
			function setChart(name, categories, data, color) {
				chart.xAxis[0].setCategories(categories, false);
				chart.series[0].remove(false);
				chart.addSeries({
					name: name,
					data: data,
					color: color || 'white'
				}, false);
				chart.redraw();
			}
			var chart = $('#dominios').highcharts({
				chart: {
					type: 'column'
				},
				title: {
					text: 'Calificacion por Dominio'
				},
				xAxis: {
					categories: categories
				},

                yAxis:{
                  title:{
                  	 text: 'valores'
                  }
				},

   

				credits: {
					enabled: false
				},
				plotOptions: {
					column: {
						cursor: 'pointer',
						point: {
							events: {
								click: function() {
									var drilldown = this.drilldown;
									if (drilldown) { 
										setChart(drilldown.name, drilldown.categories, drilldown.data, drilldown.color);
									} else { 
										setChart(name, categories, data);
									}
								}
							}
						},
						dataLabels: {
							enabled: true,
							color: colors[0],
							style: {
								fontWeight: 'bold'
							},
							formatter: function() {
								return this.y +' ';
							},
						}
					}
				},
				series: [{
					name: name,
					data: data,
					color: 'white'
				}],
				exporting: {
					enabled: true
				}
			})
			.highcharts(); 
		});




</script>
		

		<div id="dominios">
		
		</div>
  
  
  
  
  
  
  
  
  
 </body>
</html>

