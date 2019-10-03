<?php require_once('views/layouts/header.php') ?>
<body  style="background-image: url(assets/img/bg03.png);">
<?php require_once('views/layouts/banner.php') ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="?class=Login&view=session" method="post">
                <div class="panel panel-default" style="margin-top:10rem; text-align:center; padding:50px;">
                    <div class="panel-body">
                        <h2>Iniciar Sesión</h2>
                        <br>
                        <input type="Email" name="email" placeholder="Email" class="form-control" required>
                        <br>
                        <input type="password" name="pass" placeholder="Contraseña" class="form-control" required>
                        <br>
                        <a href="">¿Olvidaste tu Contraseña?</a>
                        <br>
                        <br>
                        <button class="btn btn-info">Iniciar Sesión</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once('views/layouts/footer.php') ?>
</body>
</html>