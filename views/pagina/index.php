<?php

session_start();
$username = $_SESSION['username'];

if(!isset($username)){
    header('location:?class=Login&view=index');
    
}else{
?>

<?php require_once('views/layouts/header.php') ?>

<body style="background-color:#F0F1F4">
        <header>
            <nav>
            <div class="dropdown">
              <a href="" data-toggle="dropdown"><i class="glyphicon glyphicon-menu-hamburger display-block float-left"></i><b class="display-block" style="padding-top:6px;"><?php echo strtoupper($username) ?></b></a>
                    <div class="dropdown-menu">
                        <div class="dropdown-divider"></div>
                        <a href="?class=Pagina&view=index" class="dropdown-item"><h3>Dashboard</h3></a>
                        <div class="dropdown-divider"></div>
                        <a href="?class=Referidos&view=index" class="dropdown-item"><h3>Referidos</h3></a>
                        <div class="dropdown-divider"></div>
                        <a href="?class=Login&view=update" class="dropdown-item"><h3>Configurar Perfil</h3></a>
                        <div class="dropdown-divider"></div>
                        <a href="?class=Login&view=signOff" class="dropdown-item"><h3>Salir</h3></a>

                    </div>
                </div>

            <div class="nav-wrapper">
            <ul id="nav-mobile" class="right hide-on-med-and-down">

                <div class="dropleft">
                <a href="#" role="button" data-toggle="dropdown"  arial-expanded="false"><h4 style="padding-top:15px;"><?php echo strtoupper($username); ?></h4></a>

                <div class="dropdown-menu" >
                    <a class="dropdown-item h5" href="?class=Login&view=update">Configurar Perfil</a>
                    <a class="dropdown-item h5" href="?class=Login&view=signOff ">Salir</a>
                </div>
                </div>
            
            </ul>
            </div>
        </nav>
        </header>
    </div>
    <script>
    document.getElementById("logobanner").style.fontSize = "35px";
    </script>
    

    <div class="bar-nav display-none float-left" >
    
        <a href="" class="brand-logo "><img src="assets/img/pic00.png" alt="" class="img-ico " style="margin:0px 30px 0px 0px;" ><b class="display-none-img">BINARY TRADING</b></a>

        <hr style="border-color: rgba(190, 190, 190, 0.315)">

        <a href="?class=Pagina&view=index">
        <i class="glyphicon glyphicon-dashboard float-left" style="padding-right:10px"></i>
        <p>Dashboard</p>
        </a>

        <hr style="border-color: rgba(190, 190, 190, 0.315)">

        <a href="?class=Referidos&view=index">
        <i class="glyphicon glyphicon-user float-left" style="padding-right:10px"></i>
        <p>Referidos</p>
        </a>

        <hr style="border-color: rgba(190, 190, 190, 0.315)">

    </div>



    <div class="container-fluid" style="margin-top:50px;">
        <div class="row">
            <div class="col-sm-4">
                <div class="card-personal card-border-green float-left-block">
                <div class="row">
                        <div class="col-xs-3">
                            <img src="assets/img/ico03.png" class="left margin-img" alt="">
                        </div>
                        <div class="col-xs-9">
                        <h6 class="text-success">GANANCIAS</h6>
                        <h3><b>$11.000</b></h3>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="col-sm-4 ">
            <div class="card-personal card-border-yellow float-left-block">
                    <div class="row">
                        <div class="col-xs-3">
                            <img src="assets/img/ico04.png" class="left margin-img" alt="">
                        </div>
                        <div class="col-xs-9">
                        <h6 class="text-warning">SPONSOR</h6>
                        <h3><b>FELIPE CHACON</b></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 ">
            <div class="card-personal card-border-cyan float-left-block">
            <div class="row">
                        <div class="col-xs-3">
                            <img src="assets/img/ico05.png" class="left margin-img" alt="">
                        </div>
                        <div class="col-xs-9">
                        <h6 class="text-info">REFERIDOS</h6>
                        <h3><b>2704</b></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
            <h2>REFERIDOS</h2>
            <hr style="border-color: rgba(190, 190, 190, 0.315)">

                <table class="table table-bordered table-striped">
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>CORREO</th>
                    </tr>

                    <tr>
                        <td>1</td>
                        <th>Felipe Chacon</th>
                        <th>felioch06@gmail.com</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>

<?php require_once('views/layouts/footer.php') ?>

</body>

<?php } ?>