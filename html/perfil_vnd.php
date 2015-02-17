<?php
 session_start();  
?>
<!DOCTYPE HTML>

<html lang = "es">
 <head>
   <title>Venta por Referencia - Vendedores</title>

   <meta charset="iso-8859-1">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="author" content="Grupo 6">

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/principal.css" type="text/css" media="all" />
    <link rel="stylesheet" href="../css/ing_registro.css" type="text/css" media="all" />

    <!-- Script bootstrap -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

    <!--Se añade controles para la fecha-->
    <link rel="stylesheet" href="../css/tcal.css" type="text/css" media="all" />
    <script src="../js/tcal.js"></script>

 </head>

 <body >

   <img id="bg" src="../images/fondo_2.png" alt="" />


 <!--Menu-->
    <!--<div id="menu">-->

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand">Ventas Por Referencia</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="perfil_vnd.html">Mi Perfil</a></li>
            <li><a href="contactar_vnd.html">Contactar</a></li>

            <li class="dropdown">
             <a class="dropdown-toggle" data-toggle="dropdown">
                Reportes
             <b class="caret"></b></a>

             <ul class="dropdown-menu">
               <li><a href="rpt_contacto_vnd.html">Contactados</a></li>
               <li><a href="rpt_prod_vnd.html">Prod. Vendidos</a></li>
             </ul>
           </li>

            <li><a href="../index.html">Cerrar Sesión</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

  <div id="ctr_gen">
  <div class="container">
   <div class="starter-template">
    <div id="Central">

    <!--Cabecera-->
      <div id="cabecera">
       <p id="Tit1">Ventas por Referencia</p>
        <img id="logo" src="../images/logo_espol.gif" alt=""/>
        <br>
        <p id="Tit2">Gana comisiones Referenciando a tus amigos <br> Tenemos lo que tú necesitas</p>
      </div>

      <!--Formulario Central-->
      <div id="formulario">
        <h3>Mi Perfil</h3>
        <br>

         <form method="post" action="mod_perfil">
            <label>Nombres</label>
            <br>
            <input type="text" class="nomape" name="nombre" value="" autofocus="autofocus"/>
            <br><br>
            <label>Apellidos</label>
            <br>
            <input type="text" class="nomape" name="apellido" value=""/>
            <br><br>
            <label>Cedula</label>
            <br>
            <input type="text" class="ced" name="cedula" value=""/>
            <br><br>
            <label>Fecha</label>
            <br>
            <input type="text" class="tcal" name="fecha" value="" />
            <br><br>
            <label id="labtel1">Telefono 1</label>
            <label id="labtel2">Telefono 2</label>
            <br>
            <input type="text" class="telf1" name="tel1" value=""/>
            <input type="text" class="telf2" name="tel2" value=""/>
            <br><br>
            <label>Email</label>
            <br>
            <input type="email" class="nomape" name="tel2" value=""/>
            <br><br>
            <label>Usuario</label>
            <br>
            <input type="text" class="usrpwd" name="usr" value=""/>
            <br><br>
            <label>Password</label>
            <br>
            <input type="password" class="usrpwd" name="psw" value=""/>
            <br><br>
            <input type="submit" value="Actualizar" class="boton" />
            <br><br><br>
         </form>

      </div>

      <!--Lateral derecho-->
      <div class="lateral">
          <!--Carga Usuario-->
          <div class="ingreso">
            <br>
           <img class="imgusr" src="../images/foto_usuario.jpg"  alt=""/>

           <form method="post" action="Carga_imagen">
              <br>
              <input type="submit" value="Cargar Imagen" class="boton" />
              <br>
           </form>

          </div>
      </div>

     <!--Fin divisón central-->
      <!--Footer-->
      <div id="pie">
         <div>
            <a href="http://www.facebook.com"><img src="../images/facebook.jpg" alt=""/></a>
			      <a href="http://www.twitter.com"><img src="../images/twiter.jpg" alt=""/></a>
            <a href="http://www.google.com"><img src="../images/googlemas.jpg" alt=""/></a>
         </div>
         <p>Copyright © 2014 Ventitas. Todos los derechos reservados. Desarrollado por Grupo 6</p>
      </div>

    </div>
   </div>
  </div>

  </div>

 </body>

</html>