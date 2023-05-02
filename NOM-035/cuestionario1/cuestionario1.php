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
    <title>Test1</title>
    <meta name="viewport"
        content="width-device-width, user-scalable-no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilos/estilos.css">
    <link href="../estilos/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<script type="text/javascript">
var preg = 1;

function verifica() {

    /*var obte=document.getElementsByName('pregunta6');
     for(i=0; i<obte.length; i++)
      {
     
      if(obte[i].checked)
         {
         	
          obte[i].checked=false;
         }
      }*/



    pregu = preg + 1;
    document.getElementById('pregunta' + pregu).style.display = 'block';
    document.getElementById('pregunta' + preg).style.display = 'none';


    preg++;

}




function activar() {

    var conta = 0;
    var contador = 0;
    var acti = document.getElementById('siguientes');
    var clase = document.getElementsByClassName('seccion1');
    for (i = 0; i < clase.length; i++) {
        if (clase[i].value == "si" && clase[i].checked) {
            conta++;
        }

        if (clase[i].checked) {
            contador++;
        }
    }

    //alert(conta);

    if (conta >= 1 && contador >= 5) {
        document.getElementById('submit').style.display = 'none';

        for (j = 7; j <= 20; j++) {


            var obte = document.getElementsByName('pregunta' + j);
            for (i = 0; i < obte.length; i++) {

                if (obte[i].checked) {

                    obte[i].checked = false;
                }

            }
        }
        //acti.style.display= "block";
        verifica();
        document.getElementById('submit').style.display = 'none';
    } else {
        document.getElementById('submit').style.display = 'block';
    }


}


function boton() {

    document.getElementById('submit').style.display = 'block';
}

function boton_o() {
    document.getElementById('submit').style.display = 'none';

}
</script>


<body class="bg-white" class="shadow-lg p-3 mb-5 bg-white rounded">





    <form method="POST" action="agregar.php">

        <!--  C.C.T:<input style="margin-right: 20px;" type="text" name="clave" value="<?php echo $cct?>" readonly>Codigo<input type="text" name="pass" value="<?php echo $codigo?>" readonly></p>-->

        <!--  <p>CUESTIONARIO PARA IDENTIFICAR A LOS TRABAJADORES QUE FUERON SUJETOS A
        ACONTECIMIENTOS TRAUMÁTICOS SEVEROS</p> -->
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
                <div class="col-sm">

                </div>
                <div class="col-sm">
                    <h5 class="card-title">Marque Si o No Segun Corresponda </h5>
                </div>
                <div class="col-sm">

                </div>
            </div>
        </div>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <!-- <div id="fondo">       -->
                <fieldset id="pregunta1">
                    <!--  Inicio card -->
                    <main>
                        <div class="container">
                            <div class="row ">
                                <div class="col-lg">
                                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                                        <div class="card-body">
                                            <!-- <form> -->
                                            <div class="form-group">
                                                <h5 class="card-title">I.- Acontecimiento traumático severo </h5>
                                                <p class="card-text">Ha presenciado o sufrido alguna vez,
                                                    durante o con motivo del trabajo un acontecimiento como los
                                                    siguientes:</p> <br>
                                                <p><label for="pregunta1">1.- ¿Accidente que tenga como
                                                        consecuencia la muerte, la pérdida de un miembro o una
                                                        lesión grave?</label></p>
                                                <p class="respuestas"><label>Sí<input type="radio" name="pregunta1"
                                                            class="seccion1" value="si" required
                                                            onclick="verifica()"></label>
                                                    <label>No<input type="radio" name="pregunta1" class="seccion1"
                                                            value="no" required onclick="verifica()"></label>
                                                </p>
                                            </div>

                                            <!-- </form> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>

                    <!--  Fin card   -->
                </fieldset>
                <fieldset class="preguntas" id="pregunta2">
                    <!--  Inicio card -->
                    <main>
                        <div class="container">
                            <div class="row ">
                                <div class="col-lg">
                                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                                        <div class="card-body">
                                            <!-- <form> -->
                                            <div class="form-group">
                                                <p class="card-text">Ha presenciado o sufrido alguna vez,
                                                    durante o con motivo del trabajo un acontecimiento como:
                                                </p> <br>
                                                <p><label for="pregunta2">2.- ¿Asaltos?</label></p>
                                                <p class="respuestas"><label>Sí<input type="radio" name="pregunta2"
                                                            class="seccion1" value="si" required
                                                            onclick="verifica()"></label><label>No<input type="radio"
                                                            name="pregunta2" class="seccion1" value="no" required
                                                            onclick="verifica()"></label>
                                                </p>
                                            </div>
                                            <!-- </form> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <!--  Fin card   -->
                </fieldset>
                <fieldset class="preguntas" id="pregunta3">
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
                                                    <p class="card-text">Ha presenciado o sufrido alguna vez,
                                                        durante o con motivo del trabajo un acontecimiento como:
                                                    </p> <br>
                                                    <p><label for="pregunta3">3.- ¿Actos violentos que derivaron en
                                                            lesiones graves?</label></p>
                                                    <p class="respuestas"><label>Sí<input type="radio" name="pregunta3"
                                                                class="seccion1" value="si" required
                                                                onclick="verifica()"></label><label>No<input
                                                                type="radio" name="pregunta3" class="seccion1"
                                                                value="no" required onclick="verifica()"></label>
                                                    </p>
                                                </div>
                                                <!-- </form> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <!--  Fin card   -->
                </fieldset>
                <fieldset class="preguntas" id="pregunta4">
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
                                                    <p class="card-text">Ha presenciado o sufrido alguna vez,
                                                        durante o con motivo del trabajo un acontecimiento como:
                                                    </p> <br>
                                                    <p><label for="pregunta4">4.- ¿Secuestro?</label></p>
                                                    <p class="respuestas"><label>Sí<input type="radio" name="pregunta4"
                                                                class="seccion1" value="si" required
                                                                onclick="verifica()"></label><label>No<input
                                                                type="radio" name="pregunta4" class="seccion1"
                                                                value="no" required onclick="verifica()"></label>
                                                    </p>
                                                </div>
                                                <!-- </form> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <!--  Fin card   -->

                </fieldset>
                <fieldset class="preguntas" id="pregunta5">
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
                                                    <p class="card-text">Ha presenciado o sufrido alguna vez,
                                                        durante o con motivo del trabajo un acontecimiento como:
                                                    </p> <br>
                                                    <p><label for="pregunta5">5.- ¿Amenazas?</label></p>
                                                    <p class="respuestas"><label>Sí<input type="radio" name="pregunta5"
                                                                class="seccion1" value="si" required
                                                                onclick="verifica()"></label><label>No<input
                                                                type="radio" name="pregunta5" class="seccion1"
                                                                value="no" required onclick="verifica()"></label>
                                                    </p>
                                                </div>
                                                <!-- </form> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <!--  Fin card   -->
                </fieldset>
                <fieldset class="preguntas" id="pregunta6">
                    <!-- <div class="separador">
                        <p><label for="pregunta6">6.- o ¿Cualquier otro que ponga en riesgo su vida o salud, y/o la de
                                otras personas?</label></p>
                        <p class="respuestas"><label>Sí<input type="radio" name="pregunta6" class="seccion1" value="si"
                                    required onclick="activar()"></label><label>No<input type="radio" name="pregunta6"
                                    class="seccion1" value="no" required onclick="activar()"></label></p> -->
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
                                                    <p class="card-text">Ha presenciado o sufrido alguna vez,
                                                        durante o con motivo del trabajo un acontecimiento como:
                                                    </p> <br>
                                                    <p><label for="pregunta6">6.- o ¿Cualquier otro que ponga en
                                                            riesgo su vida o salud, y/o la de otras
                                                            personas?</label></p>
                                                    <p class="respuestas"><label>Sí<input type="radio" name="pregunta6"
                                                                class="seccion1" value="si" required
                                                                onclick="activar()"></label><label>No<input type="radio"
                                                                name="pregunta6" class="seccion1" value="no" required
                                                                onclick="activar()"></label></p>
                                                </div>
                                                <!-- </form> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <!--  Fin card   -->
                </fieldset>
                <!--<fieldset  name="siguientes" id="siguientes">deshabilita los elementos de este grupo-->
                <fieldset class="preguntas" id="pregunta7">
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
                                                    <h5 class="card-title">II.- Recuerdos persistentes sobre el
                                                        acontecimiento (durante el último mes):</h5>
                                                    <p class="card-text">Ha presenciado o sufrido alguna vez,
                                                        durante o con motivo del trabajo un acontecimiento como:
                                                    </p> <br>
                                                    <p><label for="pregunta7">7.- ¿Ha tenido recuerdos
                                                            recurrentes sobre el acontecimiento que le provocan
                                                            malestares?</label></p>
                                                    <p class="respuestas"><label>Sí<input type="radio" name="pregunta7"
                                                                value="si" required
                                                                onclick="verifica()"></label><label>No<input
                                                                type="radio" name="pregunta7" value="no" required
                                                                checked onclick="verifica()"></label>
                                                    </p>
                                                </div>
                                                <!-- </form> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <!--  Fin card   -->
                </fieldset>
                <fieldset class="preguntas" id="pregunta8">
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
                                                    <p class="card-text">Ha presenciado o sufrido alguna vez,
                                                        durante o con motivo del trabajo un acontecimiento como:
                                                    </p> <br>
                                                    <p><label for="pregunta8">8.- ¿Ha tenido sueños de carácter
                                                            recurrente sobre el acontecimiento, que le producen
                                                            malestar?</label></p>
                                                    <p class="respuestas"><label>Sí<input type="radio" name="pregunta8"
                                                                value="si" required
                                                                onclick="verifica()"></label><label>No<input
                                                                type="radio" name="pregunta8" value="no" required
                                                                checked onclick="verifica()"></label>
                                                    </p>
                                                </div>
                                                <!-- </form> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <!--  Fin card   -->
                </fieldset>
                <fieldset class="preguntas" id="pregunta9">
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
                                                    <h5 class="card-title">III.- Esfuerzo por evitar
                                                        circunstancias parecidas o asociadas al acontecimiento
                                                        (durante el último mes):</h5>
                                                    <p class="card-text">Ha presenciado o sufrido alguna vez,
                                                        durante o con motivo del trabajo un acontecimiento como:
                                                    </p> <br>
                                                    <p><label for="pregunta9">9.- ¿Se ha esforzado por evitar
                                                            todo tipo de sentimientos, conversaciones o
                                                            situaciones que le puedan recordar el
                                                            acontecimiento?</label></p>
                                                    <p class="respuestas"><label>Sí<input type="radio" name="pregunta9"
                                                                value="si" required onclick="verifica()"></label><label
                                                            for="pregunta9">No<input type="radio" name="pregunta9"
                                                                value="no" required checked
                                                                onclick="verifica()"></label></p>
                                                </div>
                                                <!-- </form> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <!--  Fin card   -->

                </fieldset>
                <fieldset class="preguntas" id="pregunta10">
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
                                                    <p class="card-text">Ha presenciado o sufrido alguna vez,
                                                        durante o con motivo del trabajo un acontecimiento como:
                                                    </p> <br>
                                                    <p><label for="pregunta10">10.- ¿Se ha esforzado por evitar
                                                            todo tipo de actividades, lugares o personas que
                                                            motivan recuerdos del acontecimiento?</label></p>
                                                    <p class="respuestas"><label>Sí<input type="radio" name="pregunta10"
                                                                value="si" required
                                                                onclick="verifica()"></label><label>No<input
                                                                type="radio" name="pregunta10" value="no" required
                                                                checked onclick="verifica()"></label>
                                                    </p>
                                                </div>
                                                <!-- </form> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <!--  Fin card   -->
                </fieldset>
                <fieldset class="preguntas" id="pregunta11">
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
                                                    <p class="card-text">Ha presenciado o sufrido alguna vez,
                                                        durante o con motivo del trabajo un acontecimiento como:
                                                    </p> <br>
                                                    <p><label for="pregunta11">11.- ¿Ha tenido dificultad para
                                                            recordar alguna parte importante del evento?
                                                        </label></p>
                                                    <p class="respuestas"><label>Sí<input type="radio" name="pregunta11"
                                                                value="si" required onclick="verifica()"></label><label
                                                            for="pregunta11">No<input type="radio" name="pregunta11"
                                                                value="no" required checked
                                                                onclick="verifica()"></label>
                                                    </p>
                                                </div>
                                                <!-- </form> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <!--  Fin card   -->

                </fieldset>
                <fieldset class="preguntas" id="pregunta12">
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
                                                    <p class="card-text">Ha presenciado o sufrido alguna vez,
                                                        durante o con motivo del trabajo un acontecimiento como:
                                                    </p> <br>
                                                    <p><label for="pregunta12">12.- ¿Ha disminuido su interés en
                                                            sus actividades cotidianas?</label></p>
                                                    <p class="respuestas"><label>Sí<input type="radio" name="pregunta12"
                                                                value="si" required onclick="verifica()"></label><label
                                                            for="pregunta12">No<input type="radio" name="pregunta12"
                                                                value="no" required checked
                                                                onclick="verifica()"></label>
                                                    </p>
                                                </div>
                                                <!-- </form> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <!--  Fin card   -->
                </fieldset>
                <fieldset class="preguntas" id="pregunta13">
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
                                                    <p class="card-text">Ha presenciado o sufrido alguna vez,
                                                        durante o con motivo del trabajo un acontecimiento como:
                                                    </p> <br>
                                                    <p><label for="pregunta13">13.- ¿Se ha sentido usted alejado
                                                            o distante de los demás?</label></p>
                                                    <p class="respuestas"><label>Sí<input type="radio" name="pregunta13"
                                                                value="si" required onclick="verifica()"></label><label
                                                            for="pregunta13">No<input type="radio" name="pregunta13"
                                                                value="no" required checked
                                                                onclick="verifica()"></label>
                                                    </p>
                                                </div>
                                                <!-- </form> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <!--  Fin card   -->
                </fieldset>
                <fieldset class="preguntas" id="pregunta14">
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
                                                    <p class="card-text">Ha presenciado o sufrido alguna vez,
                                                        durante o con motivo del trabajo un acontecimiento como:
                                                    </p> <br>
                                                    <p><label for="pregunta14">14.- ¿Ha notado que tiene
                                                            dificultad para expresar sus sentimientos?</label>
                                                    </p>
                                                    <p class="respuestas"><label>Sí<input type="radio" name="pregunta14"
                                                                value="si" required
                                                                onclick="verifica()"></label><label>No<input
                                                                type="radio" name="pregunta14" value="no" required
                                                                checked onclick="verifica()"></label>
                                                    </p>
                                                </div>
                                                <!-- </form> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <!--  Fin card   -->
                </fieldset>
                <fieldset class="preguntas" id="pregunta15">
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
                                                    <p class="card-text">Ha presenciado o sufrido alguna vez,
                                                        durante o con motivo del trabajo un acontecimiento como:
                                                    </p> <br>
                                                    <p><label for="pregunta15">15.- ¿Ha tenido la impresión de
                                                            que su vida se va a acortar, que va a morir antes
                                                            que otras personas o que tiene un futuro
                                                            limitado?</label></p>
                                                    <p class="respuestas"><label>Sí<input type="radio" name="pregunta15"
                                                                value="si" required
                                                                onclick="verifica()"></label><label>No<input
                                                                type="radio" name="pregunta15" value="no" required
                                                                checked onclick="verifica()"></label>
                                                    </p>
                                                </div>
                                                <!-- </form> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <!--  Fin card   -->
                </fieldset>
                <fieldset class="preguntas" id="pregunta16">
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
                                                    <h5 class="card-title"> IV Afectación (durante el último
                                                        mes):</h5>
                                                    <p class="card-text">Ha presenciado o sufrido alguna vez,
                                                        durante o con motivo del trabajo un acontecimiento como:
                                                    </p> <br>
                                                    <p><label for="pregunta16">16.- ¿Ha tenido usted
                                                            dificultades para dormir?</label></p>
                                                    <p class="respuestas"><label>Sí<input type="radio" name="pregunta16"
                                                                value="si" required
                                                                onclick="verifica()"></label><label>No<input
                                                                type="radio" name="pregunta16" value="no" required
                                                                checked onclick="verifica()"></label>
                                                    </p>
                                                </div>
                                                <!-- </form> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <!--  Fin card   -->
                </fieldset>
                <fieldset class="preguntas" id="pregunta17">
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
                                                    <p class="card-text">Ha presenciado o sufrido alguna vez,
                                                        durante o con motivo del trabajo un acontecimiento como:
                                                    </p> <br>
                                                    <p><label for="pregunta17">17.- ¿Ha estado particularmente
                                                            irritable o le han dado arranques de coraje?</label>
                                                    </p>
                                                    <p class="respuestas"><label>Sí<input type="radio" name="pregunta17"
                                                                value="si" required
                                                                onclick="verifica()"></label><label>No<input
                                                                type="radio" name="pregunta17" value="no" required
                                                                checked onclick="verifica()"></label>
                                                    </p>
                                                </div>
                                                <!-- </form> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <!--  Fin card   -->
                </fieldset>
                <fieldset class="preguntas" id="pregunta18">
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
                                                    <p class="card-text">Ha presenciado o sufrido alguna vez,
                                                        durante o con motivo del trabajo un acontecimiento como:
                                                    </p> <br>
                                                    <p><label for="pregunta18">18.- ¿Ha tenido dificultad para
                                                            concentrarse?</label></p>
                                                    <p class="respuestas"><label>Sí<input type="radio" name="pregunta18"
                                                                value="si" required
                                                                onclick="verifica()"></label><label>No<input
                                                                type="radio" name="pregunta18" value="no" required
                                                                checked onclick="verifica()"></label>
                                                    </p>
                                                </div>
                                                <!-- </form> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <!--  Fin card   -->
                </fieldset>
                <fieldset class="preguntas" id="pregunta19">
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
                                                    <p class="card-text">Ha presenciado o sufrido alguna vez,
                                                        durante o con motivo del trabajo un acontecimiento como:
                                                    </p> <br>
                                                    <p><label for="pregunta19">19.- ¿Ha estado nervioso o
                                                            constantemente en alerta?</label></p>
                                                    <p class="respuestas"><label>Sí<input type="radio" name="pregunta19"
                                                                value="si" required
                                                                onclick="verifica()"></label><label>No<input
                                                                type="radio" name="pregunta19" value="no" required
                                                                checked onclick="verifica()"></label>
                                                    </p>
                                                </div>
                                                <!-- </form> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <!--  Fin card   -->
                </fieldset>
                <fieldset class="preguntas" id="pregunta20">
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
                                                    <p class="card-text">Ha presenciado o sufrido alguna vez,
                                                        durante o con motivo del trabajo un acontecimiento como:
                                                    </p> <br>
                                                    <p><label for="pregunta20">20.- ¿Se ha sobresaltado
                                                            fácilmente por cualquier cosa?</label></p>
                                                    <p class="respuestas"><label>Sí<input type="radio" name="pregunta20"
                                                                value="si" required
                                                                onclick="boton()"></label><label>No<input type="radio"
                                                                name="pregunta20" value="no" required checked
                                                                onclick="boton()"></label>
                                                    </p>
                                                </div>
                                                <!-- </form> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                    <!--  Fin card   -->
                </fieldset>
                <br><br><br> <br> <br> 
                  <!--    Boton Submit -->
            <div class="container">
                <div class="row">
                    <div class="col">
                    </div>
                    <div class="col ">
                        <!-- <input class="btn btn-primary btn-lg" type="submit" name="validar" data-toggle="button" -->
                        <!-- aria-pressed="false" autocomplete="off" value="Enviar" id="submit"> -->
                        <input class="btn btn-primary btn-lg" type="submit" id="submit" value="Enviar"
                            data-toggle="button">
                        <!-- <input id="submit" type="submit" value="Enviar"> -->

                    </div>
                    <div class="col">
                    </div>
                </div>
            </div>

            <!-- fin submit -->

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
