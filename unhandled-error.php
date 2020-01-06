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
                    <h3>Error Interno :(</h3>
                </div>
                <div class="card-body">
                    <div class="alert alert-danger" role="alert">
                        <strong>Ha ocurrido un error inesperado dentro de la aplicación.</strong>
                        <br><br>
                        Por favor contacte a los desarrolladores con el siguiente mensaje (o un pantallazo):
                        <br><br>
                        <?php
                            if(isset($_GET['error']))
                                echo $_GET['error'];
                            else
                                echo "Error desconocido, fue incorrectamente enviado desde el servidor.";
                        ?>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center links">
                        Regresar a la <a href="index.php">pantalla principal</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>