<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Proyecto Final</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Modificar fuentes de la plantilla -->
    <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    
    <!-- Font Awesone cdn -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
    <!-- Devicons cdn-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/devicons/1.8.0/css/devicons.min.css" integrity="sha512-JW3fT0YTK7pT7w437SoX6GcW76jOZ6E0jGmrqBAcloC4GKT+njHOY4fX5KxJ9WfIXTkNrAF994525fAHp+KCxg==" crossorigin="anonymous" />
    

    <!-- Modificar estilos de la plantilla -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      
      <a class="navbar-brand js-scroll-trigger" href="/">
        <span class="d-none d-lg-block">
          <img class="img-fluid img-logo rounded-circle mb-4" src="img/logo.jpg" alt="">
        </span>
      </a>
      <div class="navbar-lateral">
 
      <div class="contenedor-menu">
		   <ul class="menu">
			    <li><a href="#"><i class="icono izquierda fa fa-star"></i>Productos<i class="icono derecha fa fa-chevron-down"></i></a>
				    <ul>
					    <li><a href="#">Item 1</a></li>
					    <li><a href="#">Item 2</a></li>
					    <li><a href="#">Item 3</a></li>
				    </ul>
			    </li>
			    <li><a href="#"><i class="icono izquierda fa fa-share-alt"></i>Redes Sociales<i class="icono derecha fa fa-chevron-down"></i></a>
				    <ul>
					    <li><a href="#">Item 1</a></li>
					    <li><a href="#">Item 2</a></li>
					    <li><a href="#">Item 3</a></li>
				    </ul>
                </li>
                <li><a href="#"><i class="icono izquierda fa fa-user"></i>Messenger<i class="icono derecha fa fa-chevron-down"></i></a>
				    <ul>
					    <li><a href="#">Item 1</a></li>
					    <li><a href="#">Item 2</a></li>
					    <li><a href="#">Item 3</a></li>
				    </ul>
            </li>
         </ul>
      </div>
      <ul class="list-inline list-social-icons mb-3">
        <li class="list-inline-item">
          <a href="/calendario">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-calendar fa-stack-1x fa-inverse"></i>
            </span>
          </a>
        </li>
        <li class="list-inline-item">
          <a href="https://www.instagram.com/lales_85/?hl=es-la">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
            </span>
          </a>
        </li>
        <li class="list-inline-item">
          <a href="https://www.linkedin.com/in/bordonalex/">
            <span class="fa-stack fa-lg">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fab fa-linkedin fa-stack-1x fa-inverse"></i>
            </span>
          </a>
        </li>
      </ul>
    </nav>

    

    <nav class="menu_sup">
        <ul class="menu_items">
            <li><a href="/index"><img class="img-fluid img-profile rounded-circle" src="img/perfil.jpg" alt=""></a></li>
            <li><a href="/nosotros">Login</a></li>
            <li><a href="/cursos">Logout</a></li>
        </ul>
    </nav>

    <div class="container-fluid p-0">

        @yield('container')


    </div>


    <footer>
        <nav class="footer">            
            <div class="footer_items">
                <span class="copyright quick-links">Copyright &copy; <a href="#">www.estiprop.com.ar</a> <script>document.write(new Date().getFullYear())</script>
                </span>
              </div>
        </nav>
    </footer>



    <!-- Bootstrap JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="js/menu.js"></script>
  </body>

</html>