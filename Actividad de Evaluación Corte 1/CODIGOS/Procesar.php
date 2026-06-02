<?php
// Inicia o reanuda una sesión en PHP.
// Las sesiones permiten guardar información del usuario mientras navega entre páginas.
session_start();

// Variable que almacenará la acción enviada desde el formulario (login o registro).
// Es un ARREGLO SUPERGLOBAL asociativo que guarda todos los datos enviados por un formulario mediante el método POST.
$accion = $_POST['accion'] ?? '';


// --- CASO 1: LOGIN ---
// Se evalúa si la acción recibida desde el formulario es "login".
if ($accion === 'login') {

    // Se obtiene el nombre de usuario enviado desde el formulario.
    //Funciona como un ARREGLO ASOCIATIVO donde la clave es el nombre del input del formulario.
    $user = $_POST['usuario'] ?? '';

    // Se obtiene la contraseña enviada desde el formulario.
    $pass = $_POST['password'] ?? '';

    // Variable que almacena el nombre del archivo donde se guardan los usuarios registrados.
    $archivo = "usuarios.txt";

    // Variable booleana que indica si el usuario logró autenticarse correctamente.
    $valido = false;

    // Se verifica si el archivo de usuarios existe en el sistema.
    if (file_exists($archivo)) {

        // La función file() lee el contenido del archivo y lo guarda en un ARREGLO.
        $lineas = file($archivo, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lineas as $l) {

            // Separamos el usuario y la clave que están en el TXT

            // list() permite asignar los valores del arreglo directamente a variables.
            list($u, $p) = explode("|", $l);

            // Se comparan dos condiciones:
            // 1. Que el usuario ingresado sea igual al usuario guardado
            // 2. Que la contraseña ingresada coincida con la contraseña encriptada
            if ($user === $u && password_verify($pass, $p)) {

                // Si ambas condiciones se cumplen, el usuario es válido
                $valido = true;

                // break termina el ciclo foreach porque ya encontramos al usuario correcto
                break;
            }
        }
    }

    // Se verifica si el login fue válido
    if ($valido) {
        // Aquí guardamos el nombre del usuario autenticado.
        $_SESSION['usuario'] = $user;

        // header() envía una cabecera HTTP para redirigir al usuario a otra página.
        header("Location: index.php");

        // exit finaliza la ejecución del script inmediatamente.
        exit;

    } else {

        // Si el usuario o la contraseña son incorrectos, se redirige nuevamente al login
        // enviando un parámetro de error en la URL.
        header("Location: login.php?error=credenciales");

        // Se detiene la ejecución del programa.
        exit;
    }
}


// --- CASO 2: REGISTRO ---
// Se evalúa si la acción enviada es "registro".
if ($accion === 'registro') {

    // Se obtiene el nuevo nombre de usuario desde el formulario.
    $nuevo_u = $_POST['nuevo_usuario'] ?? '';

    // Se obtiene la nueva contraseña ingresada por el usuario.
    // En este punto la contraseña aún NO está encriptada.
    $nuevo_p = $_POST['nueva_password'] ?? ''; // <--- Aquí recibes la clave normal

    // empty() verifica si una variable está vacía.
    // Se asegura que el usuario haya ingresado tanto usuario como contraseña.
    if (!empty($nuevo_u) && !empty($nuevo_p)) {

        // --- AQUÍ ENTRA TU CÓDIGO DE ENCRIPTACIÓN ---

        // password_hash() encripta la contraseña usando un algoritmo seguro.
        $password_encriptada = password_hash($nuevo_p, PASSWORD_DEFAULT);
        $linea = $nuevo_u . "|" . $password_encriptada . PHP_EOL;
        file_put_contents("usuarios.txt", $linea, FILE_APPEND);

        // Después del registro exitoso, se redirige al usuario al login.
        header("Location: login.php?registro=exito");

        // Se finaliza la ejecución del script.
        exit;
    }
}
