
<?php 
    require_once "function/autoload.php";
    // print_r($_GET['sec']);
    $view = isset($_GET['sec']) ? $_GET['sec'] : 'home'; //isset pregunta si el valor que le estoy pasando entre parentesis existe. Con esta linea le estas diciendo que si existe, te mande al que se elije y sino, al $view ser igual a home, la redireccion va a ser 'views/home.php'
    $vista = 'error404';

    $seccionesValidas = [
        'envios' => [
            'titulo' => 'Envíos'
        ],
        'filtros' => [
            'titulo' => 'Filtros de Productos'
        ],
        'home' => [
            'titulo' => 'Stream'
        ],
        'productos' => [
            'titulo' => 'Peliculas'
        ],
        'peliculas' => [
            'titulo' => 'Pelicula'
        ],
        'procesar' => [
            'titulo' => 'Formulario Enviado'
        ],
        'login' => [
            'titulo' => 'Iniciar sesion'
        ],
        'registro' => [
            'titulo' => 'Registrate'
        ],
        'carrito' => [
            'titulo' => 'Carrito'
        ],
        'logout' => [
            'titulo' => 'Cerrar sesion'
        ],
        'finalizar_compra' => [
            'titulo' => 'Compra Finalizada'
        ],
        'perfil' => [
            'titulo' => 'Tu Perfil'
        ],
        'edit_foto' => [
            'titulo' => 'editar foto'
        ]
    ];


    if (array_key_exists($view, $seccionesValidas)) {
        $vista = $view;
    }else{
        $vista = 'error404';
}
    /*
    echo "<pre>";
    print_r($_SESSION["login"]);
    echo "</pre>";
    */

include_once 'class/Pelicula.php'

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= isset($seccionesValidas[$vista]['titulo']) ? $seccionesValidas[$vista]['titulo'] : 'Error 404'?> </title>
    
    <!-- <link rel="stylesheet" href="css/tailwind.css"> -->


    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/styles2.css">

    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/login.css">

    <!-- <link rel="stylesheet" href="css/tablas_perfil.css">   -->
    <link rel="stylesheet" href="css/tarjeta_perfil.css">
</head>
<body class="">

<?php include_once 'includes/nav.php'; ?>

<main class="mt-10">

<?php file_exists("views/$vista.php") 
                ? include "views/$vista.php" 
                : include "views/error404.php";?>

</main>



<?php include_once 'includes/footer.php' ?>

<script src="./node_modules/flowbite/dist/flowbite.min.js"></script>

</body>
</html>