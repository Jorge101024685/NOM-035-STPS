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
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Test 2</title>
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
<style type="text/css">
table {
    width: 95%;
    border: 1px solid;
    border-collapse: collapse;
    font-size: 13px;
    margin: 0 auto;

}

td,
th {
    border: black 1px solid;

}

th {
    background: #32CD32;
    /*LimeGreen*/
}

.clasi {
    display: none;
}
</style>

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
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
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
                        <div class="sb-sidenav-menu-heading">Panel de Actividad</div>
                        <a class="nav-link" href="../cuestionario1/consulta1.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Test 1

                        </a>
                        <div class="sb-sidenav-menu-heading">Informacion Adicional</div>
                        <form action="reporte2.php">
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
                                    <a class="small text-white stretched-link" onclick="myFunction(1)">Ver Detalles</a>
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
                        Identificación y Análisis de los Factores de Riesgo Psicosocial
                    </div>



                    <!-- fin pegar aki -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <!-- Todo sobre tablas aki -->

                                <!-- fin todo sobre tabls -->
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
                    Graficas
                </div>
                <!-- Aki va todo -->



                <!-- Aki termina -->
            </div>
        </div>
        <div class="col-xl-2">

        </div>
    </div>

    <!-- Fin graficas -->


    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>






</body>

</html>
<?php
}
?>