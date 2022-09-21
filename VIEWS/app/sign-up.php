<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse - ICONS</title>
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
        <div class="col m-auto mt-5">
            <h2 class="ms-3"><a href="index.php"><i class="bi bi-arrow-left-circle"></i></a></h2>
            <h1 class="fw-bold text-center">CREAR NUEVA CUENTA</h1>
            <p class="text-black text-center">¿Ya está registrado? <a href="login.html" class="text-decoration-none">Inicie sesión</a></p>
            <form action="../../CONTROLLER/php/signUp.php" method="POST" class="m-5 p-4 overflow-auto" style="height:500px">
                <div class="was-validated">
                    <label for="names" class="form-label">Nombres</label>
                    <input type="text" name="names" id="names" class="form-control mb-2" placeholder="Ingrese sus nombres" required>
                    <div class="invalid-feedback">Por favor rellena este campo</div>
                </div>
                <div class="was-validated">
                    <label for="lnames" class="form-label">Apellidos</label>
                    <input type="text" name="lnames" id="lnames" class="form-control mb-2" placeholder="Ingrese sus apellidos" required>
                    <div class="invalid-feedback">Por favor rellena este campo</div>
                </div>
                <label for="birthDate" class="form-label">Fecha Nacimiento</label>
                <input type="date" name="birthDate" id="birthDate" class="form-control mb-2">
                <div class="was-validated">
                    <label for="age" class="form-label">Edad</label>
                    <input type="number" name="age" id="age"class="form-control mb-2" placeholder="Ingrese su edad" required>
                    <div class="invalid-feedback">Por favor rellena este campo</div>
                </div>
                <div class="was-validated">
                    <label for="idUser" class="form-label">CC</label>
                    <input type="number" name="idUser" id="idUser" class="form-control mb-2" placeholder="Ingrese su ID" required>
                    <div class="invalid-feedback">Por favor rellena este campo</div>
                </div>
                <div class="was-validated">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control mb-2" placeholder="Ingrese su email" required>
                    <div class="invalid-feedback">Por favor rellena este campo</div>
                </div>
                <!--<div>
                    <label for="cargo" class="form-label">Cargo</label>
                    <select name="cargo" id="cargo" class="form-select mb-2">
                        <option value="Gerencial">Gerencial</option>
                        <option value="Administrativo">Administrativo</option>
                        <option value="Auxiliar" selected>Auxiliar</option>
                    </select>
                </div>-->
                <label for="tel" class="form-label">Telefono</label>
                <input type="text" name="tel" id="tel" class="form-control mb-2" placeholder="Ingrese su telefono">
                <div class="was-validated">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control mb-2" placeholder="Cree una contraseña" required>
                    <div class="invalid-feedback">Crea un contraseña segura</div>
                </div>
    
                <button type="submit" onclick="validateForm()" name="register" id="registerB" class="btn btn-primary mt-3">Crear cuenta</button>
            </form>
        </div>
        <div class="col text-end">
            <img src="../assets/imagenes/main-image.png" alt="" class="m-2 rounded" style="width:500px">
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    <script src="../../CONTROLLER/script/sign-up.js"></script>
</body>
</html>