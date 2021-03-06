<!DOCTYPE html>
<html>
<head>
	<title>Prototipo Bootstrap</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,700&display=swap">
</head>
<body>
    <div class="container">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Crear Cuenta</h3>
                </div>
                <div class="card-body">
                    <?php
                        require_once 'logic/userException.php';

                        if(isset($_GET["error"])){
                            $error = $_GET["error"];
                            if ($error == UserException::USERNAME_OR_EMAIL_TAKEN){
                                echo('<div class="alert alert-danger" role="alert"> El nombre de usuario o correo electrónico seleccionado ya está en uso. Por favor escriba otro(s).</div>');
                            }
                            else{
                                echo('<div class="alert alert-danger" role="alert"> UNHANDLED ERROR: '. $error .'</div>');
                            }
                        }
                    ?>
                    <form action="registerController.php" method="post">
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input name="username" type="text" class="form-control" placeholder="Nombre de usuario" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input name="password" type="password" class="form-control" placeholder="Contraseña" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            </div>
                            <input name="email" type="email" class="form-control" placeholder="Correo  electrónico" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-signature"></i></span>
                            </div>
                            <input name="name" type="text" class="form-control" placeholder="Nombre" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-signature"></i></span>
                            </div>
                            <input name="lastname1" type="text" class="form-control" placeholder="Primer apellido" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-signature"></i></span>
                            </div>
                            <input name="lastname2" type="text" class="form-control" placeholder="Segundo apellido" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                            </div>
                            <input name="phone" type="tel" class="form-control" placeholder="Número de teléfono" pattern="[0-9]{8}" required>
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-birthday-cake"></i></span>
                            </div>
                            <input name="birthday" type="date" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input name="register" type="submit" value="Registrarse" class="btn float-right login_btn">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        ¿Ya tiene cuenta?<a href="index.php">Inicie sesión</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="retrieve-password.php">¿Olvidó su contraseña?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>