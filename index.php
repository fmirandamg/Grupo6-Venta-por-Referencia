<!DOCTYPE HTML>

<html lang = "es">
 <head>
   <?php  include 'plantillas/cabecera.html';  ?>

 </head>

 <body >

    <?php  include 'plantillas/fondo.html';  ?>
<!--Menu-->
      <!--<a class="navbar-brand" href="#">Ventas Por Referencia</a>-->
    <?php  include 'plantillas/menu_principal.html';  ?>

      <!-- </div> -->


  <div id="ctr_gen">
  <div class="container">
   <div class="starter-template">

    <div id="Central">
    <!--Cabecera-->
       <?php  include 'plantillas/logo.html';  ?>

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
               <a href="html/registro_usr.php"><ins>Registrate</ins></a>
            </form>
            <br>
          </div>

          <!--Noticias-->
          <div id="noticias">
            <h4><b><ins>Ultimas Noticias</ins></b></h4>
             <p><b>D&eacutebil aumento de las ventas en el mercado espa&ntildeol del arte</b></p>
	    <p>
               El presidente de la Fundaci&oacuten &aacuterte y Mecenazgo (impulsada por 'la Caixa'),
              Leopoldo Rod&eacutes; la directora de la Fundaci&oacuten Arte y Mecenazgo, Mercedes Basso; y la autora del informe,
              Clare McAndrew, fundadora y directora general de Arts Econ&oacutemics, han presentado El mercado espa&ntildeol del
              arte en 2014 en el que el sector presenta, por tercer a&ntildeo consecutivo, un crecimiento positivo del 3%,
              aunque d&eacutebil, y alcanza sus niveles m&aacuteximos desde el inicio de la crisis en 2008.
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
       <?php  include 'plantillas/footer.html';  ?>

  </div>
   </div>
  </div>

</div>

 </body>

</html>