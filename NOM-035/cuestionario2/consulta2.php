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

    <!-- pRUEBA DE NAV -->

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
        <!-- <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">Settings</a>
                    <a class="dropdown-item" href="#">Activity Log</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </li>
        </ul> -->
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

    <!-- Navbar-->
    <!-- FIN PRUEBA NAV -->
    <!-- Inicio de layout principal-->
    <div id="layoutSidenav">
        <!-- Inicio de layout da nav -->
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
        <!-- fin de layout de nav -->
        <!-- Script de Tarjetas de colores -->
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

        <!-- Fin de script de tarjetas de colores  -->

        <!-- Inicio de layout content -->
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
                    <!-- div de row -->
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
                <!-- div de container fluid -->




                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Identificación y Análisis de los Factores de Riesgo Psicosocial
                    </div>



                    <!-- fin pegar aki -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <!-- Inicio de el apartado de tablas y graficacion por usuario -->
                                <?php 
 //se abre php  

     
    

     //abrir DB
     include("../bd/abrir_bd.php");

                                                                                                                                                                                            //$tabla2=cuestionario2 
     $consul="SELECT fecha,empresa,codigo,dom1,cdom1,dom2,cdom2,dom3,cdom3,dom4,cdom4,dom5,cdom5,dom6,cdom6,dom7,cdom7,dom8,cdom8,cat1,ccat1,cat2,ccat2,cat3,ccat3,cat4,ccat4,calificacion,nivel_riesgo FROM $tabla2 INNER JOIN empresa ON $tabla2.id_empresa=empresa.id_empresa WHERE $tabla2.id_empresa=$cct ORDER BY nivel_riesgo";
                                                                                                                                                                                                   
        $resultados = mysqli_query($conexion,$consul);

     

      $consul2="SELECT COUNT(*) as grupo, nivel_riesgo FROM $tabla2 WHERE $tabla2.id_empresa=$cct GROUP BY nivel_riesgo";
     $resultados2= mysqli_query($conexion,$consul2);


    
     $consul3="SELECT COUNT(*) as suma1, cdom1 FROM $tabla2 WHERE $tabla2.id_empresa=$cct GROUP BY cdom1";
     $resultados3= mysqli_query($conexion,$consul3);

    
     $consul4="SELECT COUNT(*) as suma2, cdom2 FROM $tabla2 WHERE $tabla2.id_empresa=$cct GROUP BY cdom2";
     $resultados4= mysqli_query($conexion,$consul4);
    
    
    $consul5="SELECT COUNT(*) as suma3, cdom3 FROM $tabla2 WHERE $tabla2.id_empresa=$cct GROUP BY cdom3";
     $resultados5= mysqli_query($conexion,$consul5);
  
   
    $consul6="SELECT COUNT(*) as suma4, cdom4 FROM $tabla2 WHERE $tabla2.id_empresa=$cct GROUP BY cdom4";
     $resultados6= mysqli_query($conexion,$consul6);

   
    $consul7="SELECT COUNT(*) as suma5, cdom5 FROM $tabla2 WHERE $tabla2.id_empresa=$cct GROUP BY cdom5";
     $resultados7= mysqli_query($conexion,$consul7);
     
     
    $consul8="SELECT COUNT(*) as suma6, cdom6 FROM $tabla2 WHERE $tabla2.id_empresa=$cct GROUP BY cdom6";
     $resultados8= mysqli_query($conexion,$consul8);

     
    $consul9="SELECT COUNT(*) as suma7, cdom7 FROM $tabla2 WHERE $tabla2.id_empresa=$cct GROUP BY cdom7";
     $resultados9= mysqli_query($conexion,$consul9);  

   
    $consul10="SELECT COUNT(*) as suma8, cdom8 FROM $tabla2 WHERE $tabla2.id_empresa=$cct GROUP BY cdom8";
     $resultados10= mysqli_query($conexion,$consul10);

    

    
    $consul11="SELECT COUNT(*) as suma9, ccat1 FROM $tabla2 WHERE $tabla2.id_empresa=$cct GROUP BY ccat1";
     $resultados11= mysqli_query($conexion,$consul11);
    
    
    $consul12="SELECT COUNT(*) as suma10, ccat2 FROM $tabla2 WHERE $tabla2.id_empresa=$cct GROUP BY ccat2";
     $resultados12= mysqli_query($conexion,$consul12);

    
    $consul13="SELECT COUNT(*) as suma11, ccat3 FROM $tabla2 WHERE $tabla2.id_empresa=$cct GROUP BY ccat3";
     $resultados13= mysqli_query($conexion,$consul13);

     
    $consul14="SELECT COUNT(*) as suma12, ccat4 FROM $tabla2 WHERE $tabla2.id_empresa=$cct GROUP BY ccat4";
     $resultados14= mysqli_query($conexion,$consul14);

     
    
	$consultartotal="SELECT COUNT(*) as total FROM $tabla2 WHERE $tabla2.id_empresa=$cct";
    $resultotal=mysqli_query($conexion,$consultartotal);



      
     
   ?>

                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th colspan="8" style="color: yellow; background: green;">Dominios</th>
                                        <th colspan="4" style="color: yellow; background: orange;">Categorias</th>
                                        <th colspan="2" style="color: yellow; background: #D2691E;">Cuestionario</th>
                                    </tr>
                                    <tr>
                                        <th width="150">Fecha</th>
                                        <th width="150">Empresa</th>
                                        <th width="90">Codigo</th>
                                        <th style="color: yellow; background: green;">Condiciones en el Ambiente de
                                            Trabajo</th>
                                        <th style="color: yellow; background: green;">Carga de Trabajo</th>
                                        <th style="color: yellow; background: green;">Falta de Control Sobre el Trabajo
                                        </th>
                                        <th style="color: yellow; background: green;">Jornada de Trabajo</th>
                                        <th style="color: yellow; background: green;">Interferencia en la Relación
                                            Trabajo-Familia</th>
                                        <th style="color: yellow; background: green;">Liderazgo</th>
                                        <th style="color: yellow; background: green;">Relaciones en el Trabajo</th>
                                        <th style="color: yellow; background: green;">Violencia</th>
                                        <th style="color: yellow; background: orange;">Ambiente de Trabajo</th>
                                        <th style="color: yellow; background: orange;">Factores Propios de la Actividad
                                        </th>
                                        <th style="color: yellow; background: orange;">Organización del Tiempo del
                                            Trabajo</th>
                                        <th style="color: yellow; background: orange;">Liderazgo y Relaciones en el
                                            Trabajo</th>
                                        <th style="color: yellow; background: #D2691E;" width="80">Calif</th>
                                        <th style="color: yellow; background: #D2691E;" width="80">Riesgo</th>
                                        <th width="80">Total</th>
                                        <th width="80">Acción</th>
                                    </tr>

                                </thead>

                                <?php
 //se abre php
    $c=0;
      
       while($consulta = mysqli_fetch_array($resultados, MYSQLI_ASSOC))
           {
             $fecha[$c]=$consulta['fecha'];
             $empresa[$c]=$consulta['empresa'];           	
             $clave[$c]=$consulta["codigo"];
             $dom1[$c]=$consulta["dom1"];
             $dom2[$c]=$consulta["dom2"];
             $dom3[$c]=$consulta["dom3"];
             $dom4[$c]=$consulta["dom4"];
             $dom5[$c]=$consulta["dom5"];
             $dom6[$c]=$consulta["dom6"];
             $dom7[$c]=$consulta["dom7"];
             $dom8[$c]=$consulta["dom8"];
             $cdom1[$c]=$consulta["cdom1"];
             $cdom2[$c]=$consulta["cdom2"];
             $cdom3[$c]=$consulta["cdom3"];
             $cdom4[$c]=$consulta["cdom4"];
             $cdom5[$c]=$consulta["cdom5"];
             $cdom6[$c]=$consulta["cdom6"];
             $cdom7[$c]=$consulta["cdom7"];
             $cdom8[$c]=$consulta["cdom8"];
             $cat1[$c]=$consulta["cat1"];
             $cat2[$c]=$consulta["cat2"];
             $cat3[$c]=$consulta["cat3"];
             $cat4[$c]=$consulta["cat4"];
             $ccat1[$c]=$consulta["ccat1"];
             $ccat2[$c]=$consulta["ccat2"];
             $ccat3[$c]=$consulta["ccat3"];
             $ccat4[$c]=$consulta["ccat4"];
             $calif[$c]=$consulta["calificacion"];
             $nivel[$c]=$consulta['nivel_riesgo'];
             
              $c++;
           }

         $total=0;  
         $a=0;
while($consulta2 = mysqli_fetch_array($resultados2, MYSQLI_ASSOC))
           {
             $riesgo[$a]=$consulta2['nivel_riesgo'];
             $grupo[$a]=$consulta2['grupo'];
             if($riesgo[$a]=="alto"){
             $color[$a]='#e0b241';
             }
             if($riesgo[$a]=="bajo"){
             $color[$a]='#228B22 ';
             }             
             if($riesgo[$a]=="medio"){
             $color[$a]='#FFFF00';
             }
             if($riesgo[$a]=="muy alto"){
             $color[$a]='#DC143C';
             }
             if($riesgo[$a]=="nulo"){
             $color[$a]='#00BFFF'; 
             }

             $total= $total + $grupo[$a];
              $a++;
           }   
 
//aki pabajo editar colores 
      
 $b=0;
while($consulta3 = mysqli_fetch_array($resultados3, MYSQLI_ASSOC))
           {
             $cdom1[$b]=$consulta3['cdom1'];
             $suma1[$b]=$consulta3['suma1'];
             if($cdom1[$b]=="alto"){
             $color1[$b]='#e0b241'; 
             }
             if($cdom1[$b]=="bajo"){
             $color1[$b]='#228B22';
             }             
             if($cdom1[$b]=="medio"){
             $color1[$b]='#FFFF00'; 
             }
             if($cdom1[$b]=="muy alto"){
             $color1[$b]='#DC143C';
             }
             if($cdom1[$b]=="nulo"){
             $color1[$b]='#00BFFF';
             }

             //$total= $total + $grupo[$a];
             //$total2;
              $b++;
           }   
      
      
 $d=0;
while($consulta4 = mysqli_fetch_array($resultados4, MYSQLI_ASSOC))
           {
             $cdom2[$d]=$consulta4['cdom2'];
             $suma2[$d]=$consulta4['suma2'];
             if($cdom2[$d]=="alto"){
             $color2[$d]='#e0b241'; 
             }
             if($cdom2[$d]=="bajo"){
             $color2[$d]='#228B22'; 
             }             
             if($cdom2[$d]=="medio"){
             $color2[$d]='#FFFF00';
             }
             if($cdom2[$d]=="muy alto"){
             $color2[$d]='#DC143C'; 
             }
             if($cdom2[$d]=="nulo"){
             $color2[$d]='#00BFFF';
             }

             //$total= $total + $grupo[$a];
             //$total2;
              $d++;
           }       

          
 $e=0;
while($consulta5 = mysqli_fetch_array($resultados5, MYSQLI_ASSOC))
           {
             $cdom3[$e]=$consulta5['cdom3'];
             $suma3[$e]=$consulta5['suma3'];
             if($cdom3[$e]=="alto"){
             $color3[$e]='#e0b241'; 
             }
             if($cdom3[$e]=="bajo"){
             $color3[$e]='#228B22'; 
             }             
             if($cdom3[$e]=="medio"){
             $color3[$e]='#FFFF00'; 
             }
             if($cdom3[$e]=="muy alto"){
             $color3[$e]='#DC143C'; 
             }
             if($cdom3[$e]=="nulo"){
             $color3[$e]='#00BFFF'; 
             }

             //$total= $total + $grupo[$a];
             //$total2;
              $e++;
           }       


        
 $f=0;
while($consulta6 = mysqli_fetch_array($resultados6, MYSQLI_ASSOC))
           {
             $cdom4[$f]=$consulta6['cdom4'];
             $suma4[$f]=$consulta6['suma4'];
             if($cdom4[$f]=="alto"){
             $color4[$f]='#e0b241'; 
             }
             if($cdom4[$f]=="bajo"){
             $color4[$f]='#228B22'; 
             }             
             if($cdom4[$f]=="medio"){
             $color4[$f]='#FFFF00'; 
             }
             if($cdom4[$f]=="muy alto"){
             $color4[$f]='#DC143C'; 
             }
             if($cdom4[$f]=="nulo"){
             $color4[$f]='#00BFFF'; 
             }

             //$total= $total + $grupo[$a];
             //$total2;
              $f++;
           }       

     
 $g=0;
while($consulta7 = mysqli_fetch_array($resultados7, MYSQLI_ASSOC))
           {
             $cdom5[$g]=$consulta7['cdom5'];
             $suma5[$g]=$consulta7['suma5'];
             if($cdom5[$g]=="alto"){
             $color5[$g]='#e0b241'; 
             }
             if($cdom5[$g]=="bajo"){
             $color5[$g]='#228B22'; 
             }             
             if($cdom5[$g]=="medio"){
             $color5[$g]='#FFFF00'; 
             }
             if($cdom5[$g]=="muy alto"){
             $color5[$g]='#DC143C'; 
             }
             if($cdom5[$g]=="nulo"){
             $color5[$g]='#00BFFF'; 
             }

             //$total= $total + $grupo[$a];
             //$total2;
              $g++;
           }       


     
 $h=0;
while($consulta8 = mysqli_fetch_array($resultados8, MYSQLI_ASSOC))
           {
             $cdom6[$h]=$consulta8['cdom6'];
             $suma6[$h]=$consulta8['suma6'];
             if($cdom6[$h]=="alto"){
             $color6[$h]='#e0b241'; 
             }
             if($cdom6[$h]=="bajo"){
             $color6[$h]='#228B22'; 
             }             
             if($cdom6[$h]=="medio"){
             $color6[$h]='#FFFF00';
             }
             if($cdom6[$h]=="muy alto"){
             $color6[$h]='#DC143C'; 
             }
             if($cdom6[$h]=="nulo"){
             $color6[$h]='#00BFFF'; 
             }

             //$total= $total + $grupo[$a];
             //$total2;

              $h++;
           }       

    
 $i=0;
while($consulta9 = mysqli_fetch_array($resultados9, MYSQLI_ASSOC))
           {
             $cdom7[$i]=$consulta9['cdom7'];
             $suma7[$i]=$consulta9['suma7'];
             if($cdom7[$i]=="alto"){
             $color7[$i]='#e0b241'; 
             }
             if($cdom7[$i]=="bajo"){
             $color7[$i]='#228B22'; 
             }             
             if($cdom7[$i]=="medio"){
             $color7[$i]='#FFFF00'; 
             }
             if($cdom7[$i]=="muy alto"){
             $color7[$i]='#DC143C';
             }
             if($cdom7[$i]=="nulo"){
             $color7[$i]='#00BFFF'; 
             }

             //$total= $total + $grupo[$a];
             //$total2;
              $i++;
           }       


      
 $k=0;
while($consulta10 = mysqli_fetch_array($resultados10, MYSQLI_ASSOC))
           {
             $cdom8[$k]=$consulta10['cdom8'];
             $suma8[$k]=$consulta10['suma8'];
             if($cdom8[$k]=="alto"){
             $color8[$k]='#e0b241'; 
             }
             if($cdom8[$k]=="bajo"){
             $color8[$k]='#228B22'; 
             }             
             if($cdom8[$k]=="medio"){
             $color8[$k]='#FFFF00'; 
             }
             if($cdom8[$k]=="muy alto"){
             $color8[$k]='#DC143C'; 
             }
             if($cdom8[$k]=="nulo"){
             $color8[$k]='#00BFFF'; 
             }
              //$total= $total + $grupo[$a];
             //$total2;
              $k++;
           }       




       
 $l=0;
while($consulta11 = mysqli_fetch_array($resultados11, MYSQLI_ASSOC))
           {
             $ccat1[$l]=$consulta11['ccat1'];
             $suma9[$l]=$consulta11['suma9'];
             if($ccat1[$l]=="alto"){
             $color9[$l]='#e0b241'; 
             }
             if($ccat1[$l]=="bajo"){
             $color9[$l]='#228B22'; 
             }             
             if($ccat1[$l]=="medio"){
             $color9[$l]='#FFFF00'; 
             }
             if($ccat1[$l]=="muy alto"){
             $color9[$l]='#DC143C'; 
             }
             if($ccat1[$l]=="nulo"){
             $color9[$l]='#00BFFF'; 
             }
             
              $l++;
           }       

        
 $m=0;
while($consulta12 = mysqli_fetch_array($resultados12, MYSQLI_ASSOC))
           {
             $ccat2[$m]=$consulta12['ccat2'];
             $suma10[$m]=$consulta12['suma10'];
             if($ccat2[$m]=="alto"){
             $color10[$m]='#e0b241'; 
             }
             if($ccat2[$m]=="bajo"){
             $color10[$m]='#228B22'; 
             }             
             if($ccat2[$m]=="medio"){
             $color10[$m]='#FFFF00';
             }
             if($ccat2[$m]=="muy alto"){
             $color10[$m]='#DC143C'; 
             }
             if($ccat2[$m]=="nulo"){
             $color10[$m]='#00BFFF'; 
             }
             
              $m++;
           }       


       
 $n=0;
while($consulta13 = mysqli_fetch_array($resultados13, MYSQLI_ASSOC))
           {
             $ccat3[$n]=$consulta13['ccat3'];
             $suma11[$n]=$consulta13['suma11'];
             if($ccat3[$n]=="alto"){
             $color11[$n]='#e0b241'; 
             }
             if($ccat3[$n]=="bajo"){
             $color11[$n]='#228B22'; 
             }             
             if($ccat3[$n]=="medio"){
             $color11[$n]='#FFFF00';
             }
             if($ccat3[$n]=="muy alto"){
             $color11[$n]='#DC143C';
             }
             if($ccat3[$n]=="nulo"){
             $color11[$n]='#00BFFF'; 
             }
             
              $n++;
           }       

      
 $o=0;
while($consulta14 = mysqli_fetch_array($resultados14, MYSQLI_ASSOC))
           {
             $ccat4[$o]=$consulta14['ccat4'];
             $suma12[$o]=$consulta14['suma12'];
             if($ccat4[$o]=="alto"){
             $color12[$o]='#e0b241'; 
             }
             if($ccat4[$o]=="bajo"){
             $color12[$o]='#228B22'; 
             }             
             if($ccat4[$o]=="medio"){
             $color12[$o]='#FFFF00'; 
             }
             if($ccat4[$o]=="muy alto"){
             $color12[$o]='#DC143C'; 
             }
             if($ccat4[$o]=="nulo"){
             $color12[$o]='#00BFFF'; 
             }
             
              $o++;
           }       
   
 
   
while($consultatotal = mysqli_fetch_array($resultotal, MYSQLI_ASSOC))
           {
             
             $total=$consultatotal['total'];
            
           }       
  
        






   

     $r=0;
     $t=0;
       for ($j=0;$j<=$c-1;$j++)
			{ 
       ?>
                                <form method="POST" action="categoria.php" target="ventana"
                                    onsubmit="ventana=window.open('','ventana','width=600,height=900')">

                                    <?php
		   echo " <tr>
                       <td>".$fecha[$j]."</td>
                       <td>".$empresa[$j]."</td>
                    
		               <td><input type='text' name='clave' value='$clave[$j]' size='6' readonly style='border:0;'></td>
                       <td><input type='text' name='dom1' value='$dom1[$j]' size='3' readonly style='border:0;'></td>
                       <td><input type='text' name='dom2' value='$dom2[$j]' size='3' readonly style='border:0;'></td>
                       <td><input type='text' name='dom3' value='$dom3[$j]' size='3' readonly style='border:0;'></td>
                       <td><input type='text' name='dom4' value='$dom4[$j]' size='3' readonly style='border:0;'></td>
                       <td><input type='text' name='dom5' value='$dom5[$j]' size='3' readonly style='border:0;'></td>
                       <td><input type='text' name='dom6' value='$dom6[$j]' size='3' readonly style='border:0;'></td>
                       <td><input type='text' name='dom7' value='$dom7[$j]' size='3' readonly style='border:0;'></td>
                       <td><input type='text' name='dom8' value='$dom8[$j]' size='3' readonly style='border:0;'></td>
                       <td><input type='text' name='cat1' value='$cat1[$j]' size='3' readonly style='border:0;'></td>
                       <td><input type='text' name='cat2' value='$cat2[$j]' size='3' readonly style='border:0;'></td>
                       <td><input type='text' name='cat3' value='$cat3[$j]' size='3' readonly style='border:0;'></td>
                       <td><input type='text' name='cat4' value='$cat4[$j]' size='3' readonly style='border:0;'></td>
                      <td>".$calif[$j]."</td> 
                      <td>".$nivel[$j]."</td>";
					  if($j==0)
				      {
					echo "<td rowspan=".$total.">".$total."</td>"; 
				      }		
                      echo "<td><input type='submit'id='btn' name='grafica' class='btn btn-success' value='Graficar' readonly ></td>";
                      
                ?>

                                    <input type="text" name="cdom1" value="<?php echo $cdom1[$j];?>" size='1' readonly
                                        class="clasi">
                                    <input type="text" name="cdom2" value="<?php echo $cdom2[$j];?>" size='1' readonly
                                        class="clasi">
                                    <input type="text" name="cdom3" value="<?php echo $cdom3[$j];?>" size='1' readonly
                                        class="clasi">
                                    <input type="text" name="cdom4" value="<?php echo $cdom4[$j];?>" size="1"
                                        class="clasi">
                                    <input type="text" name="cdom5" value="<?php echo $cdom5[$j];?>" size='1' readonly
                                        class="clasi">
                                    <input type="text" name="cdom6" value="<?php echo $cdom6[$j];?>" size='1' readonly
                                        class="clasi">
                                    <input type="text" name="cdom7" value="<?php echo $cdom7[$j];?>" size='1' readonly
                                        class="clasi">
                                    <input type="text" name="cdom8" value="<?php echo $cdom8[$j];?>" size="1"
                                        class="clasi">


                                    <input type="text" name="ccat1" value="<?php echo $ccat1[$j];?>" size='1' readonly
                                        class="clasi">
                                    <input type="text" name="ccat2" value="<?php echo $ccat2[$j];?>" size='1' readonly
                                        class="clasi">
                                    <input type="text" name="ccat3" value="<?php echo $ccat3[$j];?>" size='1' readonly
                                        class="clasi">
                                    <input type="text" name="ccat4" value="<?php echo $ccat4[$j];?>" size="1"
                                        class="clasi">





                                </form>
                                <?php     
            //$t=$grupo[$r];
				//   if($r<$a and $j>=$t)
		          // { 
		            	
                    //echo "<td rowspan=".$grupo[$r].">".$grupo[$r]."</td>";   
		      	   
		      	   //$r++;
		      	   //}
		          echo "</tr>";
				  
				  			 			 
				   
			 }	   
		          
		   
		   
		        
	       
	  include("../bd/cerrar_bd.php");

    ?>
                                <!-- Fin de apartado de tablas y graficacion por usuario -->
                            </table>
                        </div>
                    </div>
                </div>
                <!--  Inicio Bloque Title -->

                <div class="container-fluid">
                    <ol class="breadcrumb mb-4">
                        <i class="fas fa-chart-area mr-1"></i>
                        <li class="breadcrumb-item active">Grafica de Resultados de Cuestionario</li>
                    </ol>
                </div>
                <!-- Fin Bloque Title-->

                <!-- Prueba Grafica -->
                <div class="row">
                    <div class="col-xl-2">

                    </div>
                    <div class="col-xl-6">
                        <div class="card mb-6">
                            <div class="card-header">
                                <i class="fas fa-chart-area mr-1"></i>
                                Calificacion del Cuestionario
                            </div>
                            <!-- Inicio de contenido de grafica 1-->
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
                                        text: ''
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
                                                name: <?php echo "'".$riesgo[$x]."'";?>,
                                                y: <?php echo $grupo[$x];?>,
                                                color: <?php echo "'".$color[$x]."'";?>,
                                            },
                                            <?php } ?>
                                        ]
                                    }]
                                });
                            });
                            </script>


                            <!-- Fin de contenido de grafica1 -->
                        </div>
                    </div>
                    <div class="col-xl-2">
                    </div>
                </div>
                <!-- Fin de grafica 1 --> <br>
                <!-- Inicio de prueba de graficas de dominio -->
                <!--  Inicio Bloque Title -->

                <div class="container-fluid">
                    <ol class="breadcrumb mb-4">
                        <i class="fas fa-chart-area mr-1"></i>
                        <li class="breadcrumb-item active">Grafica de Resultados por Dominio</li>
                    </ol>
                </div>
                <!-- Fin Bloque Title-->
                <!-- Inicio  Prueba de graficas dominiio -->
                <div class="row">
                    <div class="col-xl-3">
                        <div class="card mb-3">
                            <!-- <div class="card-header">
                                <i class="fas fa-chart-area mr-1"></i>
                                Area Chart Example
                            </div> -->
                            <div id="dominio1" width="90%" height="40"></div>

                            <script type="text/javascript">
                            $(function() {
                                $('#dominio1').highcharts({
                                    chart: {
                                        plotBackgroundColor: null,
                                        plotBorderWidth: null,
                                        plotShadow: false
                                    },
                                    title: {
                                        text: 'Condiciones en el Ambiente de Trabajo'
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
                                            <?php for($x=0;$x<=$b-1;$x++){?> {
                                                name: <?php echo "'".$cdom1[$x]."'";?>,
                                                y: <?php echo $suma1[$x];?>,
                                                color: <?php echo "'".$color1[$x]."'";?>,
                                            },
                                            <?php } ?>
                                        ]
                                    }]
                                });
                            });
                            </script>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card mb-3">
                            <!-- <div class="card-header">
                                <i class="fas fa-chart-bar mr-1"></i>
                                Bar Chart Example
                            </div> -->
                            <div id="dominio2" width="100%" height="40"></div>

                            <script type="text/javascript">
                            $(function() {
                                $('#dominio2').highcharts({
                                    chart: {
                                        plotBackgroundColor: null,
                                        plotBorderWidth: null,
                                        plotShadow: false
                                    },
                                    title: {
                                        text: 'Carga de Trabajo'
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
                                            <?php for($x=0;$x<=$d-1;$x++){?> {
                                                name: <?php echo "'".$cdom2[$x]."'";?>,
                                                y: <?php echo $suma2[$x];?>,
                                                color: <?php echo "'".$color2[$x]."'";?>,
                                            },
                                            <?php } ?>
                                        ]
                                    }]
                                });
                            });
                            </script>

                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card mb-3">
                            <!-- <div class="card-header">
                                <i class="fas fa-chart-bar mr-1"></i>
                                ejemplo 1
                            </div> -->
                            <div id="dominio3" width="100%" height="40"></div>

                            <script type="text/javascript">
                            $(function() {
                                $('#dominio3').highcharts({
                                    chart: {
                                        plotBackgroundColor: null,
                                        plotBorderWidth: null,
                                        plotShadow: false
                                    },
                                    title: {
                                        text: 'Falta de Control sobre el Trabajo'
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
                                            <?php for($x=0;$x<=$e-1;$x++){?> {
                                                name: <?php echo "'".$cdom3[$x]."'";?>,
                                                y: <?php echo $suma3[$x];?>,
                                                color: <?php echo "'".$color3[$x]."'";?>,
                                            },
                                            <?php } ?>
                                        ]
                                    }]
                                });
                            });
                            </script>

                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card mb-3">
                            <!-- <div class="card-header">
                                <i class="fas fa-chart-bar mr-1"></i>
                                ejemplo15
                            </div> -->
                            <div id="dominio5" width="85%" height="40"></div>

                            <script type="text/javascript">
                            $(function() {
                                $('#dominio5').highcharts({
                                    chart: {
                                        plotBackgroundColor: null,
                                        plotBorderWidth: null,
                                        plotShadow: false
                                    },
                                    title: {
                                        text: 'Interferencia Relacion Trabajo-Familia'
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
                                            <?php for($x=0;$x<=$g-1;$x++){?> {
                                                name: <?php echo "'".$cdom5[$x]."'";?>,
                                                y: <?php echo $suma5[$x];?>,
                                                color: <?php echo "'".$color5[$x]."'";?>,
                                            },
                                            <?php } ?>
                                        ]
                                    }]
                                });
                            });
                            </script>


                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card mb-3">
                            <!-- <div class="card-header">
                                <i class="fas fa-chart-bar mr-1"></i>
                                ejemplo2
                            </div> -->
                            <div id="dominio6" width="100%" height="40"></div>

                            <script type="text/javascript">
                            $(function() {
                                $('#dominio6').highcharts({
                                    chart: {
                                        plotBackgroundColor: null,
                                        plotBorderWidth: null,
                                        plotShadow: false
                                    },
                                    title: {
                                        text: 'Liderazgo'
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
                                            <?php for($x=0;$x<=$h-1;$x++){?> {
                                                name: <?php echo "'".$cdom6[$x]."'";?>,
                                                y: <?php echo $suma6[$x];?>,
                                                color: <?php echo "'".$color6[$x]."'";?>,
                                            },
                                            <?php } ?>
                                        ]
                                    }]
                                });
                            });
                            </script>


                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card mb-3">
                            <!-- <div class="card-header">
                                <i class="fas fa-chart-bar mr-1"></i>
                                ejemplo2
                            </div> -->
                            <div id="dominio7" width="100%" height="40"></div>

                            <script type="text/javascript">
                            $(function() {
                                $('#dominio7').highcharts({
                                    chart: {
                                        plotBackgroundColor: null,
                                        plotBorderWidth: null,
                                        plotShadow: false
                                    },
                                    title: {
                                        text: 'Relacion en el Trabajo'
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
                                            <?php for($x=0;$x<=$i-1;$x++){?> {
                                                name: <?php echo "'".$cdom7[$x]."'";?>,
                                                y: <?php echo $suma7[$x];?>,
                                                color: <?php echo "'".$color7[$x]."'";?>,
                                            },
                                            <?php } ?>
                                        ]
                                    }]
                                });
                            });
                            </script>



                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card mb-3">
                            <!-- <div class="card-header">
                                <i class="fas fa-chart-bar mr-1"></i>
                                ejemplo2
                            </div> -->
                            <div id="dominio8" width="100%" height="40"></div>

                            <script type="text/javascript">
                            $(function() {
                                $('#dominio8').highcharts({
                                    chart: {
                                        plotBackgroundColor: null,
                                        plotBorderWidth: null,
                                        plotShadow: false
                                    },
                                    title: {
                                        text: 'Violencia'
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
                                            <?php for($x=0;$x<=$k-1;$x++){?> {
                                                name: <?php echo "'".$cdom8[$x]."'";?>,
                                                y: <?php echo $suma8[$x];?>,
                                                color: <?php echo "'".$color8[$x]."'";?>,
                                            },
                                            <?php } ?>
                                        ]
                                    }]
                                });
                            });
                            </script>
                        </div>
                    </div>

                    <!-- Fin Prueba graficas  dominio-->

                    <!-- Inicio de Graficas de Categoria -->
                    <!--  Inicio Bloque Title -->
                    <div class="container-fluid">
                        <ol class="breadcrumb mb-4">
                            <i class="fas fa-chart-area mr-1"></i>
                            <li class="breadcrumb-item active">Grafica de Resultados por Categoria</li>
                        </ol>
                    </div>
                    <!-- Fin Bloque Title-->

                    <div class="col-xl-3">
                        <div class="card mb-3">
                            
                            <div id="categoria1" width="100%" height="40"></div>
                            <script type="text/javascript">
                            $(function() {
                                $('#categoria1').highcharts({
                                    chart: {
                                        plotBackgroundColor: null,
                                        plotBorderWidth: null,
                                        plotShadow: false
                                    },
                                    title: {
                                        text: 'Ambiente de Trabajo'
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
                                            <?php for($x=0;$x<=$l-1;$x++){?> {
                                                name: <?php echo "'".$ccat1[$x]."'";?>,
                                                y: <?php echo $suma9[$x];?>,
                                                color: <?php echo "'".$color9[$x]."'";?>,
                                            },
                                            <?php } ?>
                                        ]
                                    }]
                                });
                            });
                            </script>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card mb-3">
                            
                            <div id="categoria2" width="100%" height="40"></div>

                            <script type="text/javascript">
                            $(function() {
                                $('#categoria2').highcharts({
                                    chart: {
                                        plotBackgroundColor: null,
                                        plotBorderWidth: null,
                                        plotShadow: false
                                    },
                                    title: {
                                        text: 'Factores Propios de la Actividad'
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
                                            <?php for($x=0;$x<=$m-1;$x++){?> {
                                                name: <?php echo "'".$ccat2[$x]."'";?>,
                                                y: <?php echo $suma10[$x];?>,
                                                color: <?php echo "'".$color10[$x]."'";?>,
                                            },
                                            <?php } ?>
                                        ]
                                    }]
                                });
                            });
                            </script>

                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card mb-3">
                           
                            <div id="categoria3" width="100%" height="40"></div>

                            <script type="text/javascript">
                            $(function() {
                                $('#categoria3').highcharts({
                                    chart: {
                                        plotBackgroundColor: null,
                                        plotBorderWidth: null,
                                        plotShadow: false
                                    },
                                    title: {
                                        text: 'Organización del Tiempo del Trabajo'
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
                                            <?php for($x=0;$x<=$n-1;$x++){?> {
                                                name: <?php echo "'".$ccat3[$x]."'";?>,
                                                y: <?php echo $suma11[$x];?>,
                                                color: <?php echo "'".$color11[$x]."'";?>,
                                            },
                                            <?php } ?>
                                        ]
                                    }]
                                });
                            });
                            </script>

                        </div>
                    </div>
                    <div class="col-xl-3" >
                        <div class="card mb-3">
                           
                            <div id="categoria4" width="100%" height="40"></div>

                            <script type="text/javascript">
                            $(function() {
                                $('#categoria4').highcharts({
                                    chart: {
                                        plotBackgroundColor: null,
                                        plotBorderWidth: null,
                                        plotShadow: false
                                    },
                                    title: {
                                        text: 'Liderazgo y Relaciones en el Trabajo'
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
                                            <?php for($x=0;$x<=$o-1;$x++){?> {
                                                name: <?php echo "'".$ccat4[$x]."'";?>,
                                                y: <?php echo $suma12[$x];?>,
                                                color: <?php echo "'".$color12[$x]."'";?>,
                                            },
                                            <?php } ?>
                                        ]
                                    }]
                                });
                            });
                            </script>
                        </div>
                    </div>






                    <!-- Fin de graficas de categoria -->
            </main>
        </div>
        <!--Fin de layout content -->


    </div>
    <!-- fin de layout principal -->
    <br><br>
    <!-- fin container graficas -->



    </div>
    <!-- aki no va -->
    </div>
    <br><br>

    <!-- FIN PRUEBA MENU -->
    <!-- container de graficas -->

    <!--  <a href="reporte2.php" style="margin-left: 50px; text-align: left; text-decoration: none; background: gray;color: white; display: block;">Descargar Preguntas</a> 
     <script src="js/scripts.js"></script> -->

    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script> -->
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