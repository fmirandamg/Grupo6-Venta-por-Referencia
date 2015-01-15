<!DOCTYPE HTML>

<html lang = "es">
 <head>
   <title>Venta por Referencia</title>

   <meta charset="iso-8859-1">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="author" content="Grupo 6">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/principal.css" type="text/css" media="all" />

    <!-- Script bootstrap -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

 </head>

 <body >

   <img id="bg" src="images/fondo_2.png" alt="" />


<!--Menu-->
      <!--<a class="navbar-brand" href="#">Ventas Por Referencia</a>-->

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
            <li><a href="index.html">Home</a></li>
            <li><a href="html/empresa.html">Nuestra Empresa</a></li>
            <li><a href="html/negocio.html">El Negocio</a></li>
            <li><a href="html/pregunta.html">Preguntas Frecuentes</a></li>
            <li class="dropdown">

             <a class="dropdown-toggle" data-toggle="dropdown">
                Modulos
             <b class="caret"></b></a>

             <ul class="dropdown-menu">
               <li><a href="html/perfil_usr.html">Usuario</a></li>
               <li><a href="html/perfil_adm.html">Administrador</a></li>
               <li><a href="html/perfil_vnd.html">Vendedor</a></li>
             </ul>

           </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

      <!-- </div> -->


  <div id="ctr_gen">
  <div class="container">
   <div class="starter-template">

    <div id="Central">
    <!--Cabecera-->
      <div id="cabecera">
       <p id="Tit1">Ventas por Referencia</p>
        <img id="logo" src="images/logo_espol.gif" alt="" />
        <br>
        <p id="Tit2">Gana comisiones Referenciando a tus amigos <br> Tenemos lo que tu necesitas</p>
      </div>

      <!--Lateral Izquierdo-->
      <div id="contenido">
        <h2>NOVEDADES</h2>
        <br>
       <img class="imagenes" src="images/prod1.jpg" alt=""/>
        <br>
        <p><ins>Reloj Bluetooth</ins></p>
        <p>Conectese a su celular vea Mensajes,</p>
        <p>llamadas Entrantes y mucho mas..</p>
        <p>Precio: 150.00</p>
        <br>

       <img class="imagenes" src="images/prod2.jpg" alt="" />
        <br>
        <p><ins>Sillas Ergonomicas</ins></p>
        <p>Disfrute de la comodidad con</p>
        <p>Estilo</p>
        <p>Precio: 80.00</p>
        <br>
        <br>

      </div>

      <!--Lateral derecho-->
      <div class="lateral">
          <!--Ingreso sign In-->
          <div class="ingreso">
            <br>
	    <form method="post" action="Ing_sesion">
               <input type="text" id="usuario" name="user" value="" placeholder="Usuario" required="required" autofocus="autofocus" />
                <br><br>
               <input type="password" id="password" name="psw" placeholder="Password">
                <br>
               <input type="submit" value="Ingresar" class="boton" />
		           <br>
               <a href="html/registro_usr.html"><ins>Registrate</ins></a>
            </form>
            <br>
          </div>

          <!--Noticias-->
          <div id="noticias">
            <h4><b><ins>Ultimas Noticias</ins></b></h4>
            <p><b>Debil aumento de las ventas en el mercado espanol del arte</b></p>
	    <p>
              El presidente de la Fundacion Arte y Mecenazgo (impulsada por 'la Caixa'),
              Leopoldo Rodes; la directora de la Fundacion Arte y Mecenazgo, Mercedes Basso; y la autora del informe,
              Clare McAndrew, fundadora y directora general de Arts Economics, han presentado El mercado español del
              arte en 2014 en el que el sector presenta, por tercer consecutivo, un crecimiento positivo del 3%,
              aunque debil, y alcanza sus niveles maximos desde el inicio de la crisis en 2008.
           </p>
            <a href="http://www.elcultural.es/noticias/arte/Debil-aumento-de-las-ventas-en-el-mercado-espanol-del-arte/7061">
             <ins>
              Mas Informacion
             </ins>
            </a>
            <br>
          </div>

      </div>

     <!--Fin divisón central-->
      <!--Footer-->
      <div id="pie">
         <div>
            <a href="http://www.facebook.com"><img src="images/facebook.jpg" alt=""/></a>
            <a href="http://www.twitter.com"><img src="images/twiter.jpg" alt=""/></a>
            <a href="http://www.google.com"><img src="images/googlemas.jpg" alt=""/></a>
         </div>
         <p>Copyright 2014 Ventitas. Todos los derechos reservados. Desarrollado por Grupo 6</p>
      </div>

  </div>
   </div>
  </div>

</div>

 </body>

</html>