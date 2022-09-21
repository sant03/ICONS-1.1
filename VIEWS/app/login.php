<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion - ICONS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/Index.css">
    <link rel="icon" href="../assets/imagenes/icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body class="container">
    <div class="row m-auto bg-light p-0 mt-5 rounded shadow">
        <div class="col m-auto">
            <h2 class="ms-3"><a href="index.php"><i class="bi bi-arrow-left-circle"></i></a></h2>
            <h1 class="fw-bold text-center">INICIAR SESION</h1>
            <p class="text-black text-center">Inicie sesion para continuar</p>
            <form action="../../CONTROLLER/php/login.php" method="POST" class="m-5 p-4" name="login_form">
                <label for="user" class="form-label">Usuario</label>
                <input type="text" name="user" id="user" class="form-control mb-2" placeholder="Ingrese su usuario">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Ingrese su contraseña">
                <button type="submit" onclick="validateForm()" name="login" class="btn btn-primary mt-3">Login</button>
            </form>
            <p class="text-center"><a href="reset-password.php" class="text-decoration-none">¿Olvidó su Contraseña?</a></p>
            <p class="text-center">¿No tiene una cuenta? <a href="sign-up.php" class="text-decoration-none">Regístrese</a></p>
        </div>
        <div class="col text-end">
            <img src="../assets/imagenes/main-image.png" alt="" class="m-2 rounded" style="width:500px">
        </div>
    </div>

    <!--Script -->
    <script src="../../CONTROLLER/script/login.js"></script>
</body>
</html>