
<?php 
    require_once '../function/autoload.php';

    $seccionesValidas = [
        'principal' => [
            'titulo' => 'Panel de Control'
        ],
        'admin_pelicula' => [
            'titulo' => 'Administración de Peliculas',
        ],
        'add_pelicula' => [
            'titulo' => 'Agregar Película',
        ],
        'edit_pelicula' => [
            'titulo' => 'Editar Pelicula',
        ],
        'delete_pelicula' => [
            'titulo' => 'Eliminar Película',
        ],
        'admin_director' => [
            'titulo' => 'Administración de Director',
        ],
        'add_director' => [
            'titulo' => 'Agregar Director',
        ],
        'edit_director' => [
            'titulo' => 'Editar Director',
        ],
        'delete_director' => [
            'titulo' => 'Eliminar Director',
        ],
        'admin_categoria' => [
            'titulo' => 'Administración de Categoría',
        ],
        'add_categoria' => [
            'titulo' => 'Agregar Categoría',
        ],
        'edit_categoria' => [
            'titulo' => 'Editar Categoría',
        ],
        'delete_categoria' => [
            'titulo' => 'Eliminar Categoría',
        ],
        'logout' => [
            'titulo' => 'Cerrar Sesión',
        ],
        'perfil' => [
            'titulo' => 'Tu Perfil',
        ],
        'usuarios' => [
            'titulo' => 'Usuarios',
        ]
    ];


    
    $seccion = $_GET['seccion'] ?? 'principal';
    (new Autenticacion())->verify();
    
    if (array_key_exists($seccion, $seccionesValidas)) {
        $vista = $seccion;
        $titulo = $seccionesValidas[$seccion]['titulo'];
    }else{
        $vista = 'error404';
        $titulo = 'Página no encontrada';
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($seccionesValidas[$vista]['titulo']) ? $seccionesValidas[$vista]['titulo'] : 'Error 404'?> </title>

    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/footer.css">

    <!-- <link rel="stylesheet" href="../css/tablas_perfil.css"> -->
    <link rel="stylesheet" href="../css/tarjeta_perfil.css">

</head>
<body>
    <header>
        <?php include_once 'includes/nav.php'; ?>
    </header>

    <?=(new Alerta())->get_alertas() ?>
    <?php
    require file_exists("views/$vista.php") ? "views/$vista.php" : "../views/error404.php";

    // include_once '../includes/footer.php' 
    include_once 'includes/footer.php'
    ?>



<script src="../node_modules/flowbite/dist/flowbite.min.js"></script>

</body>
</html>