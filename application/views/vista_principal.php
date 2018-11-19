<!DOCTYPE html>
<html lang=MX>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>AudiTeso</title>
  </head>
  <body>
    <style type="text/css">
    * {
    	margin:0;
    	padding:0;
    }
    body{
      background: black;
    }

    /*EN EL VIDEO HAY UN ERROR POR EL CUAL NO SE VISUALIZA EN GOOGLE CHROME,
    EL CÓDIGO A CONTINUACIÓN YA ESTA CORREGIDO*/

    header {
    	margin-top:10px;
        width: 100%;
        overflow: hidden;
        height: 150px;
        position: relative;
    }

    nav {
        top:-20px;
        position: absolute;
        left:0;
        right:0;
    	margin:20px auto;
    	max-width:1000px;
    	width:90%;
    }

    nav ul {
    	list-style:none;
    }

    nav > ul {
    	display:table;
    	/*Quitamos el overflow hidden que estaba aqui*/
    	width:100%;
    	background:#116814;
    	position:relative;
    }

    nav > ul li {
    	display:table-cell;
    }

    /*Sub-menu*/
    nav > ul > li:hover > ul {
    	display:block;
    	height:100%;
    }

    nav > ul > li > ul {
    	display:block;
    	position:absolute;
    	background: #116814;
    	left:0;
    	right:0;
    	overflow:hidden;
    	height:0%;
    	-webkit-transition: all .3s ease;
    	-moz-transition: all .3s ease;
    	-ms-transition: all .3s ease;
    	-o-transition: all .3s ease;
    	transition: all .3s ease;
    }

    nav > ul li a {
    	color:#fff;
    	display:block;
    	line-height:20px;
    	padding:20px;
    	position: relative;
    	text-align:center;
    	text-decoration:none;
    	-webkit-transition: all .3s ease;
    	-moz-transition: all .3s ease;
    	-ms-transition: all .3s ease;
    	-o-transition: all .3s ease;
    	transition: all .3s ease;
    }

    nav > ul > li > ul > li a:hover {
    	background:#5da5a2;
    }

    nav > ul > li > a span {
    	background:#174459;
    	display:block;
    	height:100%;
    	width:100%;
    	left:0;
    	position:absolute;
    	top:-55px;
    	-webkit-transition: all .3s ease;
    	-moz-transition: all .3s ease;
    	-ms-transition: all .3s ease;
    	-o-transition: all .3s ease;
    	transition: all .3s ease;
    }

    nav > ul > li > a span .icon {
    	display:block;
    	line-height:60px;
    }

    nav > ul > li > a:hover > span {
    	top:0;
    }

    /*Colores*/
    nav ul li a .primero {
    	background: #000;
    }

    nav ul li a .segundo {
    	background:#C10000;
    }

    nav ul li a .tercero {
    	background:#f25724;
    }
    </style>
    <header>
      <nav>
        <ul>
          <li><a href="#"><span class="primero"><i class="icon fas fa-home"></i></span>Inicio</a></li>
          <li><a href="#"><span class="segundo"><i class="icon fab fa-weixin"></i></span>Nosotros</a></li>
          <li><a href="#"><span class="tercero"><i class="icon fab fa-servicestack"></i></span>Servicio</a>
            <ul>
              <li><a href="#">Auditoria</a></li>
              <li><a href="#">Clientes</a></li>
            </ul>
            </li>
          <li><a href="#"><span class="tercero"><i class="icon fas fa-external-link-alt"></i></span>Experiencia</a></li>
          <li><a href="#"><span class="segundo"><i class="icon far fa-envelope"></i></span>Contacto</a></li>
          <li><a href="#"><span class="primero"><i class="icon fas fa-sign-in-alt"></i></span>Acceder</a></li>
        </ul>
      </nav>
    </header>
  </body>
</html>
