<?php require_once('views/layouts/header.php') ?>
<body style="background-image: url(assets/img/bg03.png);">
<?php require_once('views/layouts/banner.php') ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="?class=Register&view=store" method="POST">
                <div class="panel panel-default" style="margin-top:10rem; text-align:center; padding:50px;">
                    <div class="panel-body">
                        <h2>Registrarse</h3>
                        <br>
                        <input type="text" name="username" placeholder="Nombre de usuario" class="form-control">
                        <br>
                        <input type="Email" name="email" placeholder="Email" class="form-control">
                        <br>
                        <input type="password" name="pass" placeholder="Contraseña" class="form-control">
                        <br>
                        <br>
                        <button class="btn btn-info">Registrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once('views/layouts/footer.php') ?>
</body>
</html>