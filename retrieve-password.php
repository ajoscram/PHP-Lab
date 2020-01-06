<!DOCTYPE html>
<html>
<head>
	<title>Prototipo Bootstrap</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,700&display=swap">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Recuperar Contraseña</h3>
                </div>
                <div class="card-body">
                    <form action="registerController.php" method="post">
                        <div class="info-message">
                            <p>Se enviará un correo electrónico a su dirección con una nueva contraseña autogenerada. Se recomienda cambiarla de inmediato cuando ingrese con su cuenta.</p>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input type="text" class="form-control" placeholder="Correo electrónico">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Enviar Contraseña" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        ¿Ya tiene cuenta?<a href="index.php">Inicie sesión</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="register.php">Regístrese</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>