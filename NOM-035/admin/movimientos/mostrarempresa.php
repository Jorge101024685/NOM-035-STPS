<html lang="es">

<head>
    <meta charset="utf-8">
    <title>SIEN-035</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="../../estilos/styles.css" rel="stylesheet" />
    <link href="../../estilos/estilosindex.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous">
    </script>

</head>


<div id="layoutAuthentication_footer">
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="font-weight-bold"> Sistema de Administración</div>
                <ul class="nav nav-pills nav-fill">
                    <li class="nav-item">
                        <a class="nav-link " href="../index.html">Inicio de Sesion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../menuempresa.html">Registrar Nueva Empresa</a>
                    </li>
                </ul>
                <div>
                    <div class="font-weight-bold">NOM-035-STPS-2018</div>
                </div>
            </div>
        </div>
    </footer>
</div>
<br><br><br>



<body class="bg-white" class="shadow-lg p-3 mb-5 bg-white rounded">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <!-- <header id="menu">
		


  <h2>Generar Nuevas Claves</h2> -->

            <!--	<a href="cuestionario1/cuestionario1.php">Cuestionario1</a>
		<a href="cuestionario2/cuestionario2.php">Pequenas Empresas</a>
		<a href="cuestionario3/cuestionario3.php">Grandes Empresas</a>
		<a href="consultas.php" style="color:white;">Consultas</a>-->
            <!-- </header> -->


            <?php

//boton consultar

 if (isset($_POST['consultar']))
   {

     

    $cct=$_POST['cct'];
    $clave=$_POST['admin'];  
     
    if ($clave=="Sisnom035#") 
    {
         
    //abrir base de datos
     include("../../bd/abrir_bd.php");
    
    $consulta1="SELECT id_empresa,empresa,planta,direccion,empleados FROM $tabla WHERE id_empresa=$cct";

    $resul=mysqli_query($conexion,$consulta1);

   
    ?>


            <div id="formulario">
                <form method="POST" action="guardarcambios.php">

                    <?php	
   
         if($fila = mysqli_fetch_array($resul))
           {

echo"       <main>
<div class='container'>
    <div class='row justify-content-center'>
        <div class='col-lg-5'>
            <div class='card shadow-lg border-0 rounded-lg mt-5'>
                <div class='card-header'>
                    <!--<h3 class='text-center font-weight-light my-4'>Inicio de sesion</h3></div>-->
                    <div class='card-body'>
                            <div class='form-group'>
                                <label class='small mb-1' for='inputclave'>Clave</label>
                                <input class='form-control py-4' name='cct'
                                    placeholder='Ingrese su Clave de registo'value='{$fila['id_empresa']}' readonly/>
                            </div>
                            <div class='form-group'>
                                <label class='small mb-1' for='inputempresa'>Empresa</label>
                                <input class='form-control py-4' name='empresa'
                                    placeholder='Ingrese el nombre de la empresa' value='{$fila['empresa']}' readonly></p>
                            </div>
                          
                            <div class='form-group'>
                                <label class='small mb-1' for='inputplanta'>Planta</label>
                                <input class='form-control py-4' name='planta'
                                    placeholder='Ingrese el nombre de la Planta' value='{$fila['planta']}' readonly></p>
                            </div>
                      
                            <div class='form-group'>
                                <label class='small mb-1' for='inputdireccion'>Direccion</label>
                                <input class='form-control py-4' name='direccion'
                                    placeholder='Ingrese La direccion de la planta' value='{$fila['direccion']}' readonly></p>
                            </div>
                          
                            <div class='form-group'>
                                <label class='small mb-1' for='inputempl'>No. Empleados</label>
                                <input class='form-control py-4' name='cantidad'
                                    placeholder='Ingrese el numero de empleados de la planta' value='{$fila['empleados']}'>
                                </p>
                            </div>
                         
                                <div class='container'>
                                    <div class='row'>
                                        <div class='col-sm'>
                                        </div>
                                        <div class='col-sm'>
                                      
                                        <input class='btn btn-primary' type='submit' name='editar'
                                        value='Guardar'>
                                        </div>
                                        <div class='col-sm'>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>";



            // echo "<p>Clave: <input type='text' name='cct' class='caja' value='{$fila['id_empresa']}' readonly></p>
            // <p>Empresa: <input name='empresa' class='caja' value='{$fila['empresa']}' readonly></p>
            // <p>Planta: <input name='planta' class='caja' value='{$fila['planta']}' readonly></p>
            // <p>Dirección: <input name='direccion' class='caja' value='{$fila['direccion']}' readonly></p>
            // <p>No. Empleados: <input name='cantidad' class='caja' value='{$fila['empleados']}'></p>
            // <input id='btn' type='submit' name='editar' value='Guardar'>
            // ";
            
            
           }

           else
           {
              echo '<script type="text/javascript">';
          echo 'alert("No hay resultados que mostrar")';
          echo '</script>';  

           }

      ?>

                </form>
            </div>
            <?php
       
    
       //cerrar base de datos
        include("../../bd/cerrar_bd.php");

     } //admin valido

     else
      {
         ?>
            <script type="text/javascript">
            alert("Administrador no valido");
            location.href = "altaempresa.html";
            </script>

            <?php
          include("../../bd/cerrar_bd.php");
          exit();   
       }
    
   
   }//si se presiono boton consultar(isset)

   ?>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
</body>


</html>