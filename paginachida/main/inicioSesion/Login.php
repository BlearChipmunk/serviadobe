
<!DOCTYPE html>
<html lang="es-mx">
<head>
    <link rel="stylesheet" href="./inicioSesion/estilo_login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TecnoAgricola MX</title>
</head>
<body>
    <div class="wrapper">
        <div class="card-switch">
            <label class="switch">
                <input type="checkbox" class="toggle">
                <span class="slider"></span>
                <span class="card-side"></span>
                <div class="flip-card__inner">
                    <div class="flip-card__front">
                        <div class="title">Iniciar Sesion</div>
                        <form class="flip-card__form" action="Login.php" method="post">
                            <input class="flip-card__input" name="email" placeholder="Correo" type="email">
                            <input class="flip-card__input" name="password" placeholder="Contraseña" type="password">
                            <button class="flip-card__btn">Ingresar</button>
                        </form>
                    </div>
                    <div class="flip-card__back">
                        <div class="title">Registrarte</div>
                        <form class="flip-card__form" action="register.php" method="post">
                            <input class="flip-card__input" name="nombreUsuario" placeholder="Nombre de usuario" type="name">
                            <input class="flip-card__input" name="apellido" placeholder="Apellido" type="text">
                            <input class="flip-card__input" name="email" placeholder="Correo" type="email">
                            <input class="flip-card__input" name="password" placeholder="Contraseña" type="password">
                            <button class="flip-card__btn">Confirmar</button>
                        </form>
                    </div>
                </div>
            </label>
        </div>   
    </div>
</body>
</html>
