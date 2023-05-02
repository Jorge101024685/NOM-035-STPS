<?php
 session_start();
 $cct=$_SESSION['usuario'];
 $codigo=$_SESSION['clave'];
  
  if(!isset($cct,$codigo))
  {
    header("location:../index.html");
  }
  else
  {

  ?>

<!--<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="utf-8">
  <title>Test2</title>
  <meta name="viewport" content="width-device-width, user-scalable-no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
</head>
  -->
<!-- Inicio cdn bootstrap -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Test 2</title>
    <link href="../estilos/styles.css" rel="stylesheet" />
    <link href="../estilos/estilosindex.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<!-- fin cdn -->


<script type="text/javascript">
function clientes() {
    var acti = document.getElementById('clientes_usuarios');

    acti.style.display = "block";

}




function jefes() {
    var activ = document.getElementById('jefe');

    activ.style.display = "block";


}
</script>

<body class="bg-white" class="shadow-lg p-3 mb-5 bg-white rounded">







    <form method="POST" action="guardar.php">
        <!-- <p>C.C.T:<input style="margin-right: 20px;" type="text" name="clave" value="<?php echo $cct?>" readonly>Codigo<input style="margin-right: 20px;" type="text" name="pass" value="<?php echo $codigo?>" readonly></p>-->

        <!-- <p>CUESTIONARIO PARA IDENTIFICAR LOS FACTORES DE RIESGO PSICOSOCIAL EN LOS CENTROS
DE TRABAJO</p> -->

        <!--   prueba    <header id="menu">
<figure>
    <img src="../logo2.jpg">
  </figure> 
  
    <h3>T e s t  &nbsp&nbsp   2</h3>

  </header>   fin header prueba   -->

        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="font-weight-bold"> Sistema de Evaluacion</div>
                        <div>
                            <div class="font-weight-bold">NOM-035-STPS-2018</div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-2">

                </div>
                <div class="col-sm-8">
                    Para responder las preguntas siguientes considere las condiciones de su centro de trabajo, así como
                    la cantidad y ritmo de trabajo.
                </div>
                <div class="col-sm-2">

                </div>
            </div>
        </div>

        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <!--  Inicio card -->
                <main>
                    <div class="container">
                        <div class="row ">
                            <div class="col-lg">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <div class="card-body">
                                            <!-- <form> -->
                                            <div class="form-group">
                                            </div>
                                            <div class="form-group">
                                                <p><label id="pregunta1">1.- Mi trabajo me exige hacer mucho esfuerzo
                                                        físico.</label></p>
                                                <p class="respuestas"><label>Siempre<input type="radio" name="pregunta1"
                                                            value="siempre" required></label><label>Casi siempre<input
                                                            type="radio" name="pregunta1" value="casi siempre"
                                                            required></label><label>Algunas veces<input type="radio"
                                                            name="pregunta1" value="algunas veces"
                                                            required></label><label>Casi nunca<input type="radio"
                                                            name="pregunta1" value="casi nunca"
                                                            required></label><label>Nunca<input type="radio"
                                                            name="pregunta1" value="nunca" required> </label></p>
                                            </div>
                                        </div>
                                        <div>
                                        </div>
                                        <!-- </form> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <!--  Fin card   -->
                <!--  Inicio card -->
                <main>
                    <div class="container">
                        <div class="row ">
                            <div class="col-lg">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <div class="card-body">
                                            <!-- <form> -->
                                            <div class="form-group">
                                            </div>
                                            <div class="form-group">
                                                <p><label>2.-Me preocupa sufrir un accidente en mi trabajo.</label></p>
                                                <p class="respuestas"><label>Siempre<input type="radio" name="pregunta2"
                                                            value="siempre" required></label><label>Casi siempre<input
                                                            type="radio" name="pregunta2" value="casi siempre"
                                                            required></label><label>Algunas veces<input type="radio"
                                                            name="pregunta2" value="algunas veces"
                                                            required></label><label>Casi nunca<input type="radio"
                                                            name="pregunta2" value="casi nunca"
                                                            required></label><label>Nunca<input type="radio"
                                                            name="pregunta2" value="nunca" required> </label></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                    </div>
                                    <!-- </form> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <!--  Fin card   -->
                <!--  Inicio card -->
                <main>
                    <div class="container">
                        <div class="row ">
                            <div class="col-lg">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <div class="card-body">
                                            <!-- <form> -->
                                            <div class="form-group">
                                            </div>
                                            <div class="form-group">
                                                <p><label>3.- Considero que las actividades que realizo son
                                                        peligrosas.</label></p>
                                                <p class="respuestas"><label>Siempre<input type="radio" name="pregunta3"
                                                            value="siempre" required></label><label>Casi siempre<input
                                                            type="radio" name="pregunta3" value="casi siempre"
                                                            required></label><label>Algunas veces<input type="radio"
                                                            name="pregunta3" value="algunas veces"
                                                            required></label><label>Casi nunca<input type="radio"
                                                            name="pregunta3" value="casi nunca"
                                                            required></label><label>Nunca<input type="radio"
                                                            name="pregunta3" value="nunca" required> </label></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>

                    <!--  Fin card   -->
                    <!--  Inicio card -->
                    <main>
                        <div class="container">
                            <div class="row ">
                                <div class="col-lg">
                                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                                        <div class="card-header">
                                            <div class="card-body">
                                                <!-- <form> -->
                                                <div class="form-group">
                                                </div>
                                                <div class="form-group">
                                                    <p><label>4.- Por la cantidad de trabajo que tengo debo quedarme
                                                            tiempo
                                                            adicional a mi turno.</label></p>
                                                    <p class="respuestas"><label>Siempre<input type="radio"
                                                                name="pregunta4" value="siempre"
                                                                required></label><label>Casi siempre<input type="radio"
                                                                name="pregunta4" value="casi siempre"
                                                                required></label><label>Algunas veces<input type="radio"
                                                                name="pregunta4" value="algunas veces"
                                                                required></label><label>Casi
                                                            nunca<input type="radio" name="pregunta4" value="casi nunca"
                                                                required></label><label>Nunca<input type="radio"
                                                                name="pregunta4" value="nunca" required> </label></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                </div>
                                <!-- </form> -->
                            </div>
                        </div>
            </div>
        </div>
        </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <p><label>5.- Por la cantidad de trabajo que tengo debo trabajar sin
                                                parar</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta5"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta5" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta5" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta5" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta5"
                                                    value="nunca" required> </label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                </div>
                <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <p><label>6.- Considero que es necesario mantener un ritmo de trabajo
                                                acelerado.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta6"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta6" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta6" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta6" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta6"
                                                    value="nunca" required> </label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <p><label>7.- Mi trabajo exige que esté muy concentrado.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta7"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta7" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta7" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta7" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta7"
                                                    value="nunca" required> </label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <p><label>8.- Mi trabajo requiere que memorice mucha información.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta8"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta8" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta8" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta8" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta8"
                                                    value="nunca" required> </label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <p><label>9.- Mi trabajo exige que atienda varios asuntos al mismo
                                                tiempo.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta9"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta9" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta9" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta9" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta9"
                                                    value="nunca" required> </label></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <h5 class="card-title">Las preguntas siguientes están relacionadas con las
                                            actividades que realiza en su trabajo y las responsabilidades que tiene.
                                        </h5>
                                    </div>
                                </div>
                                <div>
                                </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <p><label>10.- En mi trabajo soy responsable de cosas de mucho valor.</label>
                                        </p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta10"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta10" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta10" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta10" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta10"
                                                    value="nunca" required> </label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <p><label>11.- Respondo ante mi jefe por los resultados de toda mi área de
                                                trabajo.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta11"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta11" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta11" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta11" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta11"
                                                    value="nunca" required> </label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <p><label>12.- En mi trabajo me dan órdenes contradictorias.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta12"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta12" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta12" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta12" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta12"
                                                    value="nunca" required> </label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <p><label>13.- Considero que en mi trabajo me piden hacer cosas
                                                innecesarias.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta13"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta13" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta13" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta13" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta13"
                                                    value="nunca" required> </label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <h5 class="card-title">Las preguntas siguientes están relacionadas con las
                                            actividades que realiza en su trabajo y las responsabilidades que tiene.
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <p><label>14.- Trabajo horas extras más de tres veces a la semana.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta14"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta14" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta14" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta14" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta14"
                                                    value="nunca" required> </label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <p><label>15.- Mi trabajo me exige laborar en días de descanso, festivos o
                                                fines de semana.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta15"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta15" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta15" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta15" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta15"
                                                    value="nunca" required> </label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <p><label>16.- Considero que el tiempo en el trabajo es mucho y perjudica
                                                mis actividades familiares o personales.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta16"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta16" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta16" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta16" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta16"
                                                    value="nunca" required> </label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->








        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <p><label>17.- Pienso en las actividades familiares o personales cuando estoy en
                                                mi trabajo.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta17"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta17" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta17" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta17" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta17"
                                                    value="nunca" required> </label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->

        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <h5 class="card-title">Las preguntas siguientes están relacionadas con las
                                            decisiones que puede tomar en su trabajo. </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->

        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <p><label>18.- Mi trabajo permite que desarrolle nuevas habilidades.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta18"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta18" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta18" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta18" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta18"
                                                    value="nunca" required> </label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->

        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <p><label>19.- En mi trabajo puedo aspirar a un mejor puesto.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta19"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta19" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta19" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta19" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta19"
                                                    value="nunca" required> </label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <p><label>20.- Durante mi jornada de trabajo puedo tomar pausas cuando las
                                                necesito.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta20"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta20" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta20" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta20" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta20"
                                                    value="nunca" required> </label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->

        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <p><label>21.- Puedo decidir la velocidad a la que realizo mis actividades en mi
                                                trabajo.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta21"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta21" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta21" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta21" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta21"
                                                    value="nunca" required> </label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->

        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <p><label>22.- Puedo cambiar el orden de las actividades que realizo en mi
                                                trabajo.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta22"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta22" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta22" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta22" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta22"
                                                    value="nunca" required> </label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <h5 class="card-title">Las preguntas siguientes están relacionadas con la
                                            capacitación e información que recibe sobre su trabajo. </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <p><label>23.- Me informan con claridad cuáles son mis funciones.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta23"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta23" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta23" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta23" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta23"
                                                    value="nunca" required> </label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <p><label>24.- Me explican claramente los resultados que debo obtener en mi
                                                trabajo.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta24"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta24" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta24" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta24" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta24"
                                                    value="nunca" required> </label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <p><label>25.- Me informan con quién puedo resolver problemas o asuntos de
                                                trabajo.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta25"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta25" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta25" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta25" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta25"
                                                    value="nunca" required> </label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <p><label>26.- Me permiten asistir a capacitaciones relacionadas con mi
                                                trabajo.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta26"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta26" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta26" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta26" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta26"
                                                    value="nunca" required> </label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <p><label>27.- Recibo capacitación útil para hacer mi trabajo.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta27"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta27" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta27" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta27" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta27"
                                                    value="nunca" required> </label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->

        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <h5 class="card-title"> Las preguntas siguientes se refieren a las relaciones
                                            con sus compañeros de trabajo y su jefe.</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">

                                        <p><label>28.- Mi jefe tiene en cuenta mis puntos de vista y opiniones.</label>
                                        </p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta28"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta28" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta28" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta28" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta28"
                                                    value="nunca" required> </label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <p><label>29.- Mi jefe ayuda a solucionar los problemas que se presentan en el
                                                trabajo.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta29"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta29" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta29" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta29" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta29"
                                                    value="nunca" required> </label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <p><label>30.- Puedo confiar en mis compañeros de trabajo.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta30"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta30" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta30" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta30" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta30"
                                                    value="nunca" required> </label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <p><label>31.- Cuando tenemos que realizar trabajo de equipo los compañeros
                                                colaboran.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta31"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta31" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta31" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta31" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta31"
                                                    value="nunca" required> </label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <p><label>32.- Mis compañeros de trabajo me ayudan cuando tengo
                                                dificultades.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta32"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta32" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta32" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta32" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta32"
                                                    value="nunca" required> </label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <p><label>33.- En mi trabajo puedo expresarme libremente sin
                                                interrupciones.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta33"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta33" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta33" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta33" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta33"
                                                    value="nunca" required> </label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">
                                        <p><label>34.- Recibo críticas constantes a mi persona y/o trabajo.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta34"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta34" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta34" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta34" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta34"
                                                    value="nunca" required> </label></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">


                                        <p><label>35.- Recibo burlas, calumnias, difamaciones, humillaciones o
                                                ridiculizaciones.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta35"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta35" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta35" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta35" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta35"
                                                    value="nunca" required> </label></p>
                                    </div>



                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">

                                        <p><label>36.- Se ignora mi presencia o se me excluye de las reuniones de
                                                trabajo y en la toma de decisiones.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta36"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta36" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta36" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta36" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta36"
                                                    value="nunca" required> </label></p>
                                    </div>




                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">

                                        <p><label>37.- Se manipulan las situaciones de trabajo para hacerme parecer un
                                                mal trabajador.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta37"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta37" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta37" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta37" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta37"
                                                    value="nunca" required> </label></p>
                                    </div>




                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">


                                        <p><label>38.- Se ignoran mis éxitos laborales y se atribuyen a otros
                                                trabajadores.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta38"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta38" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta38" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta38" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta38"
                                                    value="nunca" required> </label></p>
                                    </div>



                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">

                                        <p><label>39.- Me bloquean o impiden las oportunidades que tengo para obtener
                                                ascenso o mejora en mi trabajo.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta39"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta39" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta39" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta39" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta39"
                                                    value="nunca" required> </label></p>
                                    </div>




                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">


                                        <p><label>40.- He presenciado actos de violencia en mi centro de
                                                trabajo.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta40"
                                                    value="siempre" required></label><label>Casi siempre<input
                                                    type="radio" name="pregunta40" value="casi siempre"
                                                    required></label><label>Algunas veces<input type="radio"
                                                    name="pregunta40" value="algunas veces" required></label><label>Casi
                                                nunca<input type="radio" name="pregunta40" value="casi nunca"
                                                    required></label><label>Nunca<input type="radio" name="pregunta40"
                                                    value="nunca" required> </label></p>
                                    </div>



                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">

                                        <h5 class="card-title"> Las preguntas siguientes están relacionadas con la
                                            atención a clientes y usuarios. </h5>



                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">


                                        <p><label> En mi trabajo debo brindar servicio a clientes o usuarios:</label>
                                        </p>
                                        <p class="respuestas"><label>Sí<input type="radio" name="clientes_usuarios"
                                                    value="si" onclick="clientes()" required></label><label>No<input
                                                    type="radio" name="clientes_usuarios" value="no" required></label>
                                        </p>
                                    </div>



                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">

                                        <div id="clientes_usuarios">
                                            <div class="separador">
                                                <p><label>41.- Atiendo clientes o usuarios muy enojados.</label></p>
                                                <p class="respuestas"><label>Siempre<input type="radio"
                                                            name="pregunta41" value="siempre"></label><label>Casi
                                                        siempre<input type="radio" name="pregunta41"
                                                            value="casi siempre"></label><label>Algunas veces<input
                                                            type="radio" name="pregunta41" value="algunas veces"
                                                            required></label><label>Casi nunca<input type="radio"
                                                            name="pregunta41"
                                                            value="casi nunca"></label><label>Nunca<input type="radio"
                                                            name="pregunta41" value="nunca" checked> </label></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">

                                        <p><label>42.- Mi trabajo me exige atender personas muy necesitadas de ayuda o
                                                enfermas.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta42"
                                                    value="siempre"></label><label>Casi siempre<input type="radio"
                                                    name="pregunta42" value="casi siempre"></label><label>Algunas
                                                veces<input type="radio" name="pregunta42"
                                                    value="algunas veces"></label><label>Casi nunca<input type="radio"
                                                    name="pregunta42" value="casi nunca"></label><label>Nunca<input
                                                    type="radio" name="pregunta42" value="nunca" checked> </label></p>
                                    </div>




                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">

                                        <p><label>43.- Para hacer mi trabajo debo demostrar sentimientos distintos a los
                                                míos.</label></p>
                                        <p class="respuestas"><label>Siempre<input type="radio" name="pregunta43"
                                                    value="siempre"></label><label>Casi siempre<input type="radio"
                                                    name="pregunta43" value="casi siempre"></label><label>Algunas
                                                veces<input type="radio" name="pregunta43"
                                                    value="algunas veces"></label><label>Casi nunca<input type="radio"
                                                    name="pregunta43" value="casi nunca"></label><label>Nunca<input
                                                    type="radio" name="pregunta43" value="nunca" checked> </label></p>
                                    </div>




                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">





                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">





                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">





                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->
        <!--  Inicio card -->
        <main>
            <div class="container">
                <div class="row ">
                    <div class="col-lg">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <div class="card-body">
                                    <!-- <form> -->
                                    <div class="form-group">
                                    </div>
                                    <div class="form-group">





                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div>
            </div>
            <!-- </form> -->
            </div>
            </div>
            </div>
            </div>
            </div>
        </main>
        <!--  Fin card   -->














        <!-- No se de que son estos div investigar -->

        </div>
        </div>
        <!-- fin de los div extraños  -->

        <!--

<div id="fondo">
	<div class="separador">





<div class="separador">
<p><label>42.- Mi trabajo me exige atender personas muy necesitadas de ayuda o enfermas.</label></p>
<p class="respuestas"><label>Siempre<input type="radio" name="pregunta42" value="siempre"></label><label>Casi siempre<input type="radio" name="pregunta42" value="casi siempre"></label><label>Algunas veces<input type="radio" name="pregunta42" value="algunas veces"></label><label>Casi nunca<input type="radio" name="pregunta42" value="casi nunca"></label><label>Nunca<input type="radio" name="pregunta42" value="nunca" checked> </label></p></div>

<div class="separador">
<p><label>43.- Para hacer mi trabajo debo demostrar sentimientos distintos a los míos.</label></p>
<p class="respuestas"><label>Siempre<input type="radio" name="pregunta43" value="siempre"></label><label>Casi siempre<input type="radio" name="pregunta43" value="casi siempre"></label><label>Algunas veces<input type="radio" name="pregunta43" value="algunas veces"></label><label>Casi nunca<input type="radio" name="pregunta43" value="casi nunca"></label><label>Nunca<input type="radio" name="pregunta43" value="nunca" checked> </label></p></div>

</div>  -->
        <!--div clientes_usuarios-->

        <!---
<div class="separador">
<p><label>-- Soy jefe de otros trabajadores:</label></p>
<p class="respuestas"><label>Sí<input type="radio" name="jefe" value="si" onclick="jefes()" required></label><label>No<input type="radio" name="jefe" value="no" required></label></p></div>


<div id="jefe">
	<div class="separador">
<p><label>44.- Comunican tarde los asuntos de trabajo.</label></p>
<p class="respuestas"><label>Siempre<input type="radio" name="pregunta44" value="siempre"></label><label>Casi siempre<input type="radio" name="pregunta44" value="casi siempre"></label><label>Algunas veces<input type="radio" name="pregunta44" value="algunas veces"></label><label>Casi nunca<input type="radio" name="pregunta44" value="casi nunca"></label><label>Nunca<input type="radio" name="pregunta44" value="nunca" checked> </label></p></div>

<div class="separador">
<p><label>45.- Dificultan el logro de los resultados del trabajo.</label></p>
<p class="respuestas"><label>Siempre<input type="radio" name="pregunta45" value="siempre"></label><label>Casi siempre<input type="radio" name="pregunta45" value="casi siempre"></label><label>Algunas veces<input type="radio" name="pregunta45" value="algunas veces"></label><label>Casi nunca<input type="radio" name="pregunta45" value="casi nunca"></label><label>Nunca<input type="radio" name="pregunta45" value="nunca" checked> </label></p></div>

<div class="separador">
<p><label>46.- Ignoran las sugerencias para mejorar su trabajo.</label></p>
<p class="respuestas"><label>Siempre<input type="radio" name="pregunta46" value="siempre"></label><label>Casi siempre<input type="radio" name="pregunta46" value="casi siempre"></label><label>Algunas veces<input type="radio" name="pregunta46" value="algunas veces"></label><label>Casi nunca<input type="radio" name="pregunta46" value="casi nunca"></label><label>Nunca<input type="radio" name="pregunta46" value="nunca" checked> </label></p></div>

</div>  -->
        <!--div jefe-->
        </div>
        <!--div fondo-->

        <div class="container">
            <div class="row">
                <div class="col-sm">

                </div>
                <div class="col-sm">
                    <input id="submit" type="submit" name="enviar" value="Enviar">
                </div>
                <div class="col-sm">

                </div>
            </div>
        </div>





    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>

</html>

<?php
 } //cierra el else

 ?>