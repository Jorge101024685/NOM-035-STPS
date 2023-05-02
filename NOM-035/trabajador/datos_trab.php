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

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Trabajador</title>
    <meta name="viewport"
        content="width-device-width, user-scalable-no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
     <link rel="stylesheet" type="text/css" href="../estilos/estilos2.css"> 
    <link href="../estilos/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous">
    </script>
</head>




<body>







    <form method="POST" action="guardar.php">
        <!-- <p>C.C.T:<input style="margin-right: 20px;" type="text" name="clave" value="<?php echo $cct?>" readonly>Codigo<input style="margin-right: 20px;" type="text" name="pass" value="<?php echo $codigo?>" readonly></p>-->

        <!-- <p>CUESTIONARIO PARA IDENTIFICAR LOS FACTORES DE RIESGO PSICOSOCIAL EN LOS CENTROS
DE TRABAJO</p> -->

        <!-- footer -->
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
        <!-- footer -->
        <!-- marque si o no segun corresponda -->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">

                </div>
                <div class="col-sm-6">
                    <h5 class="card-title">Responda Las Preguntas Segun Corresponda </h5>
                </div>
                <div class="col-sm-2">

                </div>
            </div>
        </div>
        <!-- fin de marque si -->
        <!-- Inicio de layout -->
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">

                <main>
                    <div class="container">
                        <div class="row ">
                            <div class="col-lg">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-body">
                                        <!-- <form> -->
                                        <div class="form-group">
                                            <h5 class="card-title"> </h5>
                                            <p><label id="pregunta1">Sexo</label></p>
                                            <p class="respuestas"><label>Femenino<input type="radio" name="pregunta1"
                                                        value="femenino" required></label><label>Masculino<input
                                                        type="radio" name="pregunta1" value="masculino"
                                                        required></label></p>
                                        </div>

                                    </div>
                                </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>

                </main>
                <main>
                    <div class="container">
                        <div class="row ">
                            <div class="col-lg">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-body">
                                        <!-- <form> -->
                                        <div class="form-group">
                                            <h5 class="card-title"> </h5>

                                            <p><label>Edad en Años</label></p>
                                            <p class="respuestas"><label>15-19<input type="radio" name="pregunta2"
                                                        value="15-19" required></label><label>20-24<input type="radio"
                                                        name="pregunta2" value="20-24"
                                                        required></label><label>25-29<input type="radio"
                                                        name="pregunta2" value="25-29"
                                                        required></label><label>30-34<input type="radio"
                                                        name="pregunta2" value="30-34"
                                                        required></label><label>35-39<input type="radio"
                                                        name="pregunta2" value="35-39" required></label>
                                                <label>40-44<input type="radio" name="pregunta2" value="40-44"
                                                        required></label><label>45-49<input type="radio"
                                                        name="pregunta2" value="45-49"
                                                        required></label><label>50-54<input type="radio"
                                                        name="pregunta2" value="50-54"
                                                        required></label><label>55-59<input type="radio"
                                                        name="pregunta2" value="55-59"
                                                        required></label><label>60-64<input type="radio"
                                                        name="pregunta2" value="60-64" required></label>
                                                <label>65-69<input type="radio" name="pregunta2" value="65-69"
                                                        required></label><label>70 o más<input type="radio"
                                                        name="pregunta2" value="70 o mas" required></label>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>

                </main>
                <main>
                    <div class="container">
                        <div class="row ">
                            <div class="col-lg">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-body">
                                        <!-- <form> -->
                                        <div class="form-group">
                                            <h5 class="card-title"> </h5>
                                            <p><label>Estado Civil</label></p>
                                            <p class="respuestas"><label>Casado<input type="radio" name="pregunta3"
                                                        value="casado" required></label><label>Divorciado<input
                                                        type="radio" name="pregunta3" value="divorsiado"
                                                        required></label><label>Soltero<input type="radio"
                                                        name="pregunta3" value="soltero"
                                                        required></label><label>Viudo<input type="radio"
                                                        name="pregunta3" value="viudo" required></label><label>Union
                                                    Libre<input type="radio" name="pregunta3" value="union libre"
                                                        required></label> </p>
                                        </div>

                                    </div>
                                </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>

                </main>
                <main>
                    <div class="container">
                        <div class="row ">
                            <div class="col-lg">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-body">
                                        <!-- <form> -->
                                        <div class="form-group">
                                            <p><label>Nivel de Estudios</label></p>
                                            <p class="respuestas"><label>Sin formación<input type="radio"
                                                        name="pregunta4" value="sin formacion"
                                                        required></label><label>Primaria<input type="radio"
                                                        name="pregunta4" value="primaria"
                                                        required></label><label>Secundaria<input type="radio"
                                                        name="pregunta4" value="secundaria" required></label>
                                                <label>Preparatoria o Bachillerato<input type="radio" name="pregunta4"
                                                        value="preparatoria" required></label><label>Técnico o
                                                    Superior<input type="radio" name="pregunta4" value="Técnico"
                                                        required></label><label>Licenciatura<input type="radio"
                                                        name="pregunta4" value="licenciatura" required></label>
                                                <label>Maestría<input type="radio" name="pregunta4" value="maestria"
                                                        required></label><label>Doctorado<input type="radio"
                                                        name="pregunta4" value="doctorado" required></label>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                </main>
                <main>
                    <div class="container">
                        <div class="row ">
                            <div class="col-lg">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-body">
                                        <!-- <form> -->
                                        <div class="form-group">
                                            <p><label>Ocupación / profesión / puesto</label><input class="caja"
                                                    name="ocupacion" size="20" required></p>
                                        </div>
                                        <div class="form-group">
                                            <p><label>Departamento / Sección / Área</label><input class="caja"
                                                    name="area" size="20" required></p>
                                        </div>
                                    </div>
                                    <!-- </form> -->
                                </div>
                            </div>
                        </div>
                    </div>

                </main>
                <main>
                    <div class="container">
                        <div class="row ">
                            <div class="col-lg">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-body">
                                        <!-- <form> -->
                                        <div class="form-group">
                                            <p><label>Tipo de Puesto</label></p>
                                            <p class="respuestas"><label>Operativo<input type="radio" name="pregunta7"
                                                        value="operativo" required></label><label>Supervisor<input
                                                        type="radio" name="pregunta7" value="supervisor"
                                                        required></label><label>Prefesional o Técnico<input type="radio"
                                                        name="pregunta7" value="profesional o tecnico" required></label>
                                                <label>Gerente<input type="radio" name="pregunta7" value="gerente"
                                                        required></label>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>

                </main>
                <main>
                    <div class="container">
                        <div class="row ">
                            <div class="col-lg">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-body">
                                        <!-- <form> -->
                                        <div class="form-group">
                                            <p><label>Tipo de contratacion</label></p>
                                            <p class="respuestas"><label>Por obra o proyecto<input type="radio"
                                                        name="pregunta8" value="por proyecto"
                                                        required></label><label>Temporal<input type="radio"
                                                        name="pregunta8" value="temporal"
                                                        required></label><label>Indeterminado<input type="radio"
                                                        name="pregunta8" value="indeterminado" required></label>
                                                <label>Honorarios<input type="radio" name="pregunta8" value="honorarios"
                                                        required></label>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>

                </main>
                <main>
                    <div class="container">
                        <div class="row ">
                            <div class="col-lg">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-body">
                                        <!-- <form> -->
                                        <div class="form-group">
                                            <p><label>Tipo de personal</label></p>
                                            <p class="respuestas"><label>Sindicalizado<input type="radio"
                                                        name="pregunta9" value="sindicalizado"
                                                        required></label><label>Confianza<input type="radio"
                                                        name="pregunta9" value="confianza"
                                                        required></label><label>Ninguno<input type="radio"
                                                        name="pregunta9" value="ninguno" required></label> </p>
                                        </div>

                                    </div>
                                </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>

                </main>
                <main>
                    <div class="container">
                        <div class="row ">
                            <div class="col-lg">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-body">
                                        <!-- <form> -->
                                        <div class="form-group">
                                            <p><label>Tipo de Jornada de Trabajo</label></p>
                                            <p class="respuestas"><label>Fijo Nocturno<input type="radio"
                                                        name="pregunta10" value="nocturno" required></label><label>Fijo
                                                    Diurno<input type="radio" name="pregunta10" value="diurno"
                                                        required></label><label>Fijo Mixto<input type="radio"
                                                        name="pregunta10" value="mixto" required></label></p>
                                        </div>

                                    </div>
                                </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>

                </main>
                <main>
                    <div class="container">
                        <div class="row ">
                            <div class="col-lg">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-body">
                                        <!-- <form> -->
                                        <div class="form-group">
                                            <p><label>Realiza rotación de turnos</label></p>
                                            <p class="respuestas"><label>Sí<input type="radio" name="pregunta11"
                                                        value="si" required></label><label>No<input type="radio"
                                                        name="pregunta11" value="no" required></label></p>
                                        </div>

                                    </div>
                                </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                </main>
                <main>
                    <div class="container">
                        <div class="row ">
                            <div class="col-lg">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-body">
                                        <!-- <form> -->
                                        <div class="form-group">
                                            <p><label>Experiencia (años):</label></p>
                                            <p><label>Tiempo en el puesto actual</label></p>
                                            <p class="respuestas"><label>Menos de 6 meses<input type="radio"
                                                        name="pregunta12" value="menos de 6 meses"
                                                        required></label><label>De 6 meses y 1 año<input type="radio"
                                                        name="pregunta12" value="6meses y 1año"
                                                        required></label><label>De 1 a 4 años<input type="radio"
                                                        name="pregunta12" value="1 a 4 años" required></label><label>De
                                                    5 a 9 años<input type="radio" name="pregunta12" value="5 a 9 años"
                                                        required></label><label>De 10 a 14 años<input type="radio"
                                                        name="pregunta12" value="10 a 14 años"
                                                        required></label><label>De 15 a 19 años<input type="radio"
                                                        name="pregunta12" value="15 a 19 años"
                                                        required></label><label>De 20 a 24 años<input type="radio"
                                                        name="pregunta12" value="20 a 24 años"
                                                        required></label><label>25 años o más<input type="radio"
                                                        name="pregunta12" value="mas de 25 años" required></label></p>
                                        </div>

                                    </div>
                                </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                </main>

                <main>
                    <div class="container">
                        <div class="row ">
                            <div class="col-lg">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-body">
                                        <!-- <form> -->
                                        <div class="form-group">
                                            <p><label>Tiempo experiencia laboral</label></p>
                                            <p class="respuestas"><label>Menos de 6 meses<input type="radio"
                                                        name="pregunta13" value="menos de 6 meses"
                                                        required></label><label>De 6 meses y 1 año<input type="radio"
                                                        name="pregunta13" value="6meses y 1año"
                                                        required></label><label>De 1 a 4 años<input type="radio"
                                                        name="pregunta13" value="1 a 4 años" required></label><label>De
                                                    5 a 9 años<input type="radio" name="pregunta13" value="5 a 9 años"
                                                        required></label><label>De 10 a 14 años<input type="radio"
                                                        name="pregunta13" value="10 a 14 años"
                                                        required></label><label>De 15 a 19 años<input type="radio"
                                                        name="pregunta13" value="15 a 19 años"
                                                        required></label><label>De 20 a 24 años<input type="radio"
                                                        name="pregunta13" value="20 a 24 años"
                                                        required></label><label>25 años o más<input type="radio"
                                                        name="pregunta13" value="mas de 25 años" required></label></p>


                                        </div>

                                    </div>
                                </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                </main>
                <!--  Inicio card de prueba de boton-->
                <div class="container">
                    <div class="row">
                        <div class="col-sm">

                        </div>
                        <div class="col-sm">
                            <input id="submit" type="submit" name="enviar" value="enviar" class="btn btn-primary">
                            
                        </div>
                        <div class="col-sm">

                        </div>
                    </div>
                </div>
                <!--  Fin card de prueba de boton  -->

            </div>
        </div>
        <!-- fin layout -->

        <!-- <div id="fondo">
	
	





<div class="separador">
<p><label>Tipo de Jornada de Trabajo</label></p>
<p class="respuestas"><label>Fijo Nocturno<input type="radio" name="pregunta10" value="nocturno" required></label><label>Fijo Diurno<input type="radio" name="pregunta10" value="diurno" required></label><label>Fijo Mixto<input type="radio" name="pregunta10" value="mixto" required></label></p></div>



<div class="separador">
<p><label>Realiza rotación de turnos</label></p>
<p class="respuestas"><label>Sí<input type="radio" name="pregunta11" value="si" required></label><label>No<input type="radio" name="pregunta11" value="no" required></label></p></div>



<div class="separador">
<p><label>Experiencia (años):</label></p>
<p><label>Tiempo en el puesto actual</label></p>
<p class="respuestas"><label>Menos de 6 meses<input type="radio" name="pregunta12" value="menos de 6 meses" required></label><label>De 6 meses y 1 año<input type="radio" name="pregunta12" value="6meses y 1año" required></label><label>De 1 a 4 años<input type="radio" name="pregunta12" value="1 a 4 años" required></label><label>De 5 a 9 años<input type="radio" name="pregunta12" value="5 a 9 años" required></label><label>De 10 a 14 años<input type="radio" name="pregunta12" value="10 a 14 años" required></label><label>De 15 a 19 años<input type="radio" name="pregunta12" value="15 a 19 años" required></label><label>De 20 a 24 años<input type="radio" name="pregunta12" value="20 a 24 años" required></label><label>25 años o más<input type="radio" name="pregunta12" value="mas de 25 años" required></label></p></div>


<div class="separador">
<p><label>Tiempo experiencia laboral</label></p>
<p class="respuestas"><label>Menos de 6 meses<input type="radio" name="pregunta13" value="menos de 6 meses" required></label><label>De 6 meses y 1 año<input type="radio" name="pregunta13" value="6meses y 1año" required></label><label>De 1 a 4 años<input type="radio" name="pregunta13" value="1 a 4 años" required></label><label>De 5 a 9 años<input type="radio" name="pregunta13" value="5 a 9 años" required></label><label>De 10 a 14 años<input type="radio" name="pregunta13" value="10 a 14 años" required></label><label>De 15 a 19 años<input type="radio" name="pregunta13" value="15 a 19 años" required></label><label>De 20 a 24 años<input type="radio" name="pregunta13" value="20 a 24 años" required></label><label>25 años o más<input type="radio" name="pregunta13" value="mas de 25 años" required></label></p></div>





</div> -->

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