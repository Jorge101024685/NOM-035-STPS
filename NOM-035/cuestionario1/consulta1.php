<?php
//inicia sesion
session_start();
$cct = $_SESSION['usuario'];
$company = $_SESSION['empresa'];
$planta = $_SESSION['planta'];
$numero = $_SESSION['numero'];
if(!isset($cct))
{
  header("location:../admin/index.html");
}
else
{
 
     include("../bd/abrir_bd.php");

?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="es">

<!-- <head>
    <meta charset="utf-8">
    <title>Test1</title>
    <link rel="stylesheet" type="text/css" href="../admin/estilos.css">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script src="../js/highcharts/js/highcharts.js"></script>
    <script src="../js/highcharts/js/modules/exporting.js"></script>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous">
    </script>
</head> -->
<head>
    <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Test2</title>
        <link rel="stylesheet" type="text/css" href="../admin/estilos.css">
		<script type="text/javascript" src="../js/jquery.min.js"></script>
		<script src="../js/highcharts/js/highcharts.js"></script>
        <script src="../js/highcharts/js/modules/exporting.js"></script> -->
    <meta charset="utf-8">
    <title>Test1</title>
    <link rel="stylesheet" type="text/css" href="../admin/estilos.css">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script src="../js/highcharts/js/highcharts.js"></script>
    <script src="../js/highcharts/js/modules/exporting.js"></script>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous">
    </script>

</head>

<body class="sb-nav-fixed">
    <!-- pegar aki lo que me robe  -->

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i
                class="fas fa-bars"></i></button>
        <a class="navbar-brand">Bienvenido &nbsp<?php echo $company."&nbsp&nbsp".$planta ?> </a>

        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">

                <div class="input-group-append">

                </div>
            </div>
        </form>

        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdowns" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="../cerrar.php">Cerrar Sesion</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">

                        <!-- PHP DE TEST -->
                        <?php
		      if($numero >= 16 and $numero <= 50)
		      {
               echo '
               <div class="sb-sidenav-menu-heading">Panel de Actividad</div>
               <a class="nav-link" href="../cuestionario2/consulta2.php">
                   <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                   Test 2
               </a>
             ';

	          }	
		      if($numero >= 51)
		      {


                echo '
                <div class="sb-sidenav-menu-heading">Panel de Actividad</div>
                <a class="nav-link" href="../cuestionario3/consulta3.php">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Test 3
                </a>
              ';
		       }
              ?>
                        <!-- FIN PHP TEST -->
                        </a>
                        <div class="sb-sidenav-menu-heading">Informacion Adicional</div>
                        <form action="reporte1.php">
                            <!-- <input type="submit" value="Descargar Respuestas"
                                style="display: block; text-align: left; margin-left: 3%;margin-top: 5px; color: green;"> -->
                            <!-- <input id="btn" type="submit" value="Descargar Respuestas"> -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">

                                    </div>
                                    <div class="col-sm">
                                        <input id="btn" type="submit" class="btn btn-dark" value="Descargar Respuestas">
                                    </div>
                                    <div class="col-sm">

                                    </div>
                                </div>
                            </div>


                        </form>
                        <!-- prueba1 -->
                        <form action="avance.php">
                            <!-- <input type="submit" value="Descargar Respuestas"
                                style="display: block; text-align: left; margin-left: 3%;margin-top: 5px; color: green;"> -->
                            <!-- <input id="btn" type="submit" value="Descargar Respuestas"> -->
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm">

                                    </div>
                                    <div class="col-sm">
                                        <input id="btn" type="submit" class="btn btn-dark" value="Descargar prueba">
                                    </div>
                                    <div class="col-sm">

                                    </div>
                                </div>
                            </div>


                        </form>

                        <!-- fin prueba1 -->

                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small"></div>
                    Sica Panzacola
                </div>
            </nav>
        </div>

        <script>
        function myFunction(idButton) {
            var producto1 = document.getElementById('producto1');
            var producto2 = document.getElementById('producto2');
            var producto3 = document.getElementById('producto3');
            var producto4 = document.getElementById('producto4');
            var producto5 = document.getElementById('producto5');




            switch (idButton) {
                case 1:
                    producto1.style.display = 'none';
                    producto1.style.display = 'block';
                    producto2.style.display = 'none';
                    producto3.style.display = 'none';
                    producto4.style.display = 'none';
                    producto5.style.display = 'none';

                    break;

                case 2:
                    producto1.style.display = 'none';
                    producto2.style.display = 'block';
                    producto3.style.display = 'none';
                    producto4.style.display = 'none';
                    producto5.style.display = 'none';
                    break;

                case 3:
                    producto1.style.display = 'none';
                    producto2.style.display = 'none';
                    producto3.style.display = 'block';
                    producto4.style.display = 'none';
                    producto5.style.display = 'none';
                    break;
                case 4:
                    producto1.style.display = 'none';
                    producto2.style.display = 'none';
                    producto3.style.display = 'none';
                    producto4.style.display = 'block';
                    producto5.style.display = 'none';
                    break;
                case 5:
                    producto1.style.display = 'none';
                    producto2.style.display = 'none';
                    producto3.style.display = 'none';
                    producto4.style.display = 'none';
                    producto5.style.display = 'block';
                    break;

                default:
                    alert("No Existen Mas Categorias de Color")
            }

        }
        </script>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Administrador</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Informacion de bloques de Color</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-1 col-md-6">
                        </div>
                        <div class="col-xl-2 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">Nulo</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" onclick="myFunction(1)" title=""
                                        class="boton_mostrar">Ver Detalles</a>
                                    <!-- 
                                    <script>
                                    function muestra_oculta(id) {
                                        if (document.getElementById) { //se obtiene el id
                                            var el = document.getElementById(
                                                id); //se define la variable "el" igual a nuestro div
                                            el.style.display = (el.style.display == 'none') ? 'block' :
                                                'none'; //damos un atributo display:none que oculta el div
                                        }
                                    }
                                    window.onload = function() {
                                        /*hace que se cargue la función lo que predetermina que div estará oculto hasta llamar a la función nuevamente*/
                                        muestra_oculta(
                                            'contenido'
                                        ); /* "contenido_a_mostrar" es el nombre que le dimos al DIV */
                                    }
                                    </script> -->
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Bajo</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" onclick="myFunction(2)">Ver Detalles</a>


                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Medio</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" onclick="myFunction(3)">Ver Detalles</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6">
                            <div class="card bg-secondary text-white mb-4">
                                <div class="card-body">Alto</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" onclick="myFunction(4)">Ver detalles</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-2 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">Muy alto</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <a class="small text-white stretched-link" onclick="myFunction(5)">Ver detalles</a>
                                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- pruba div nulo -->
                    <div class="col-xl-12 col-md-12" id="producto1" style="display:none;">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">
                                <h5 class="card-title">Nulo.
                                </h5>
                                <p>El riesgo resulta despreciable por lo que no se requiere medidas adicionales. </p>
                            </div>
                        </div>
                    </div>

                    <!-- fin prueba div -->


                    <div class="col-xl-12 col-md-12" id="producto2" style="display:none;">
                        <div class="card bg-success text-white mb-4">
                            <div class="card-body">
                                <h5 class="card-title">Bajo.
                                </h5>
                                <p>Es necesario una mayor difusión de la política de prevención de riesgos psicosociales
                                    y programas para: la prevención de los factores de riesgo psicosocial, la promoción
                                    de un entorno organizacional favorable y la prevención de la violencia laboral. </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-12 col-md-12" id="producto3" style="display:none;">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">
                                <h5 class="card-title">Medio
                                </h5>
                                <p> Se requiere revisar la política de prevención de riesgos psicosociales y programas
                                    para la prevención de los factores de riesgo psicosocial, la promoción de un entorno
                                    organizacional favorable y la prevención de la violencia laboral, así como reforzar
                                    su aplicación y difusión, mediante un Programa de intervención.</p>
                            </div>
                        </div>
                    </div>



                    <div class="col-xl-12 col-md-12" id="producto4" style="display:none;">
                        <div class="card bg-secondary text-white mb-4">
                            <div class="card-body">
                                <h5 class="card-title">Alto
                                </h5>
                                <p>Se requiere realizar un análisis de cada categoría y dominio, de manera que se puedan
                                    determinar las acciones de intervención apropiadas a través de un Programa de
                                    intervención, que podrá incluir una evaluación específica1 y deberá incluir una
                                    campaña de sensibilización, revisar la política de prevención de riesgos
                                    psicosociales y programas para la prevención de los factores de riesgo psicosocial,
                                    la promoción de un entorno organizacional favorable y la prevención de la violencia
                                    laboral, así como reforzar su aplicación y difusión. </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-xl-12 col-md-12" id="producto5" style="display:none;">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body">
                                <h5 class="card-title">Muy alto
                                </h5>
                                <p> Se requiere realizar el análisis de cada categoría y dominio para establecer las
                                    acciones de intervención apropiadas, mediante un Programa de intervención que deberá
                                    incluir evaluaciones específicas1, y contemplar campañas de sensibilización, revisar
                                    la política de prevención de riesgos psicosociales y programas para la prevención de
                                    los factores de riesgo psicosocial, la promoción de un entorno organizacional
                                    favorable y la prevención de la violencia laboral, así como reforzar su aplicación y
                                    difusión.</p>
                            </div>
                        </div>
                    </div>



                    <!-- fin prueba div -->
                </div>




                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Identificación de los Trabajadores que fueron sujetos a Acontecimientos Traumáticos Severos
                    </div>



                    <!-- fin pegar aki -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <tr>
                                    <th>Fecha</th>
                                    <th>codigo</th>
                                    <th>Empresa</th>
                                    <th>Planta</th>
                                    <th>Atn Clinica</th>
                                    <th>Total</th>
                                </tr>

                                <?php
 
       
       $consulta = "SELECT fecha,codigo,atencion_clinica,empresa,planta FROM $tabla1 INNER JOIN empresa ON $tabla1.id_empresa=empresa.id_empresa WHERE $tabla1.id_empresa=$cct ORDER BY atencion_clinica";                                              
       $resultados = mysqli_query($conexion,$consulta);
      
    
       $consultartotal = "SELECT COUNT(*) as total FROM $tabla1 WHERE $tabla1.id_empresa=$cct";   
         $resultotal = mysqli_query($conexion,$consultartotal);

       while($consultatotal = mysqli_fetch_array($resultotal, MYSQLI_ASSOC))
           {
             
             $total=$consultatotal['total'];
            
           }

      $t=0;
      $consulta3;
       while($fila = mysqli_fetch_array($resultados))
           {
            echo "<tr>
		      <td>".$fila['fecha']."</td>
		      <td>".$fila['codigo']."</td> 
		      <td>".$fila['empresa']."</td> 
		      <td>".$fila['planta']."</td>
		      <td>".$fila['atencion_clinica']."</td>"; 
               if($t==0)
               {
               	echo "<td rowspan=".$total.">".$total."</td>";
               }

		      echo "</tr>";
		      $t++;
	       }



         $consulta2 = "SELECT COUNT(codigo) as grupo, atencion_clinica FROM $tabla1 WHERE $tabla1.id_empresa=$cct GROUP BY atencion_clinica";                                                                              
         $resultados2 = mysqli_query($conexion,$consulta2);
       

        $a=0;
		while($fila2 = mysqli_fetch_array($resultados2, MYSQLI_ASSOC))
           {
            $atencion[$a]=$fila2['atencion_clinica'];
			$grupo[$a]=$fila2['grupo'];
			if($atencion[$a]=="si"){
             $color[$a]='#DC143C';
             }
             if($atencion[$a]=="no"){
             $color[$a]='#228B22';
             }             
			$a++;
	       }




	      
	  include("../bd/cerrar_bd.php");
    ?>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
        </main>

    </div>
    </div>
    <br><br>

    <!-- Inicio graficas -->

    <div class="row">
        <div class="col-xl-2">

        </div>
        <div class="col-xl-8">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area mr-1"></i>
                    Atención Clinica
                </div>
                <!-- Aki va todo -->
                <div id="container" width="100%" height="40"></div>

                <script type="text/javascript">
                $(function() {
                    $('#container').highcharts({
                        chart: {
                            plotBackgroundColor: null,
                            plotBorderWidth: null,
                            plotShadow: false
                        },
                        title: {
                            text: 'Porcentaje de Atención Clínica'
                        },

                        credits: {
                            enabled: false
                        },

                        tooltip: {
                            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
                        },
                        plotOptions: {
                            pie: {
                                allowPointSelect: true,
                                cursor: 'pointer',
                                dataLabels: {
                                    enabled: true,
                                    color: '#000000',
                                    connectorColor: '#000000',
                                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                                }
                            }
                        },
                        series: [{
                            type: 'pie',
                            name: 'Riesgo',
                            data: [
                                <?php for($x=0;$x<=$a-1;$x++){?> {
                                    name: <?php echo "'".$atencion[$x]."'";?>,
                                    y: <?php echo $grupo[$x];?>,
                                    color: <?php echo "'".$color[$x]."'";?>,
                                },
                                <?php } ?>
                            ]
                        }]
                    });
                });
                </script>



                <!-- Aki termina -->
            </div>
        </div>
        <div class="col-xl-2">

        </div>
    </div>

    <!-- Fin graficas -->


    <!-- <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous">
    </script>








</body>

</html>
<?php
}
?>