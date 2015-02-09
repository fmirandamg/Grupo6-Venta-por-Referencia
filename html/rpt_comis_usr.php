<!DOCTYPE HTML>

<html lang = "es">
 <head>
   <title>Venta por Referencia - Usuario</title>

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

    <!--Se a�ade controles para la fecha-->
    <link rel="stylesheet" href="../css/tcal.css" type="text/css" media="all" />
    <script src="../js/tcal.js"></script>

 </head>

 <body >
   
   <img id="bg" src="../images/fondo_2.png"  alt=""/>  
   

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
            <li><a href="perfil_usr.html">Mi Perfil</a></li>
            <li><a href="referenciado_usr.html">Referenciados</a></li>
            <li><a href="promover_usr.html">Promover</a></li>

            <li class="dropdown">
             <a class="dropdown-toggle" data-toggle="dropdown">
                Reportes
             <b class="caret"></b></a>
   
             <ul class="dropdown-menu">
               <li><a href="rpt_refer_usr.html">Referenciados</a></li>
               <li><a href="rpt_comis_usr.html">Comisiones</a></li>
             </ul>
           </li>

            <li><a href="../index.html">Cerrar Sesi�n</a></li>
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
        <p id="Tit2">Gana comisiones Referenciando a tus amigos <br> Tenemos lo que t� necesitas</p>
      </div>

      <!--Pantalla Criterio-->
        <!--Criterio Nombre-->
        <div id="Buscador">
         <h3>Consulta de Articulos y Comisiones</h3>
         <h4>Criterio de Descripci�n</h4>
         <form method="post" action="buscar_descrip">
            <select>
              <option value="tod">Todos</option>
              <option value="codigo">C�digo</option>
              <option value="descrip">Descripci�n</option>              
            </select>
            <input type="text" name="buscar" class="buscar" />
         </form> 

        </div>
        <!--Rango de Fechas-->
         <div id="rep_fecha">
           <form method="post" action="Buscar_res">
            <br>
            <label id="labtel1">Fecha Desde</label>
            <label id="labtel2">Fecha Hasta</label>
            <br>
            <input type="text" class="tcal" name="fechaD" value="" />
            <input type="text" class="tcal" name="fechaH" value="" />
            <br>
            <input type="submit" value="Buscar" class="boton">
           </form>
        </div>
        <br><br><br><br><br>
      <!--Fin Campos de Criterio-->
      <!--Tabla de Resultados-->
        <div id="repor_cont">
          <table class="tblbuscar" >
               <caption> <strong> Resultado de la Busqueda</strong> </caption>
               <thead >
                  <tr >
                     <th class="tbl_cod_rep" >C�digo</th>
                     <th class="tbl_nombre_rep">Descripci�n</th>
                     <th >Cant.Vend.</th>
                     <th >Valor Comisi�n</th>
                  </tr>
               </thead>
             </table> 

             <div id="d_tabrep">
              <table class="tblbusdet" >
               <tbody>
                 <tr>
                   <td class="tbl_cod_rep">1</td>
                   <td class="tbl_nombre_rep">RELOJ BLUETOOTH</td>
                   <td >10</td>
                   <td >12.50</td>
                 </tr>
                 <tr>
                   <td>2</td>
                   <td>SILLAS ERGON�MICAS</td>
                   <td>0</td>
                   <td>0.00</td>
                 </tr>  
                 
               </tbody>
              </table>
             </div>
         </div>    
      <!--Fin de Tabla de Resultados-->
      
      <!--Footer-->
      <div id="pie">
         <div>
            <a href="http://www.facebook.com"><img src="../images/facebook.jpg" alt=""/></a>
            <a href="http://www.twitter.com"><img src="../images/twiter.jpg" alt=""/></a>
            <a href="http://www.google.com"><img src="../images/googlemas.jpg" alt=""/></a>
         </div>
         <p>Copyright � 2014 Ventitas. Todos los derechos reservados. Desarrollado por Grupo 6</p>
      </div>

    </div>
   </div>
  </div>
  </div>

 </body>

</html>