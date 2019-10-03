<?php require_once('views/layouts/header.php') ?>
<body>
    <header >
    <nav>
    <div class="dropdown">
              <a href="" data-toggle="dropdown"><i class="glyphicon glyphicon-menu-hamburger display-block float-left"></i></a>
                    <div class="dropdown-menu">
                        <div class="dropdown-divider"></div>
                        <a href="?class=Index&view=index" class="dropdown-item"><h3>Inicio</h3></a>
                        <div class="dropdown-divider"></div>
                        <a href="?class=Login&view=index" class="dropdown-item"><h3>Iniciar Sesión</h3></a>
                        <div class="dropdown-divider"></div>
                        <a href="?class=Register&view=index" class="dropdown-item"><h3>Registrarse</h3></a>
                    </div>
                </div>
    <div class="nav-wrapper display-none">
      <a href="?class=Index&view=index" id="logobanner" class="brand-logo"><img src="assets/img/pic00.png" alt="" class="img-ico" style="margin:0px 30px 0px 30px;">BINARY TRADING</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="li-select"><a href="?class=Login&view=index"><h4>INICIAR SESION</h4></a></li>
        <li class="li-select"><a href="?class=Register&view=index"><h4>REGISTRAR</h4></a></li>
      
      </ul>
    </div>
  </nav>
    </header>
                            
</body>
