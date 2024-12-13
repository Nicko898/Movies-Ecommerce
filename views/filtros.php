<?php   

$categoriaSeleccionada = isset($_GET["categoria"]) ? $_GET["categoria"] : null;

$tituloCategoria = null;
if ($categoriaSeleccionada) {
    $categoria = new Categoria();
    $tituloCategoria = $categoria->getNombrePorId($categoriaSeleccionada);
}
?>


<h2 class="text-center text-2xl font-bold m-4"><?= ucfirst($tituloCategoria) ?></h2>







<section class="flex items-center justify-center min-h-screen">
  <!-- <h2 class="text-center text-primary-emphasis m-4"><?= $categoriaConMayuscula //strtoupper($categoriaSeleccionada) convierte toda la cadena a mayuscula, sino se puede usar ucfirst que pone como mayuscula la primer letra?> </h2> -->
  <div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full max-w-6xl px-4 py-14 m-4">

<?php
    if(isset($_GET["categoria"])){
    
    $filtroCategoria = (new Pelicula())->catalogoCategoria($categoriaSeleccionada);
    
    foreach ($filtroCategoria as $producto) { 
        // foreach ($productos as $producto) {
    $categoriaConMayuscula = (new Pelicula())->categoriaMayuscula($producto->getCategoria_id());
    $directorConMayuscula = (new Pelicula())->directorMayuscula($producto->getDirector_id());
    $nombreConMayuscula = ( new Pelicula() )->nombreMayuscula(($producto->getNombre()));
    $recortarDescripcion = ( new Pelicula() )->recortarDescripcion(($producto->getSinopsis()));
?>

	<div
		class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white">
		<div class="w-full md:w-1/3 bg-white grid place-items-center">
			<img src="img/<?= $producto->getImagen() ?>" alt="<?= $producto->getNombre() ?>" class="rounded-xl" />
    </div>
			<div class="w-full md:w-2/3 bg-white flex flex-col space-y-2 p-3">
				<div class="flex justify-between item-center">
					<p class="text-gray-500 font-medium hidden md:block">Vacations</p>
					<div class="flex items-center">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20"
							fill="currentColor">
							<path
								d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
						</svg>
						<p class="text-gray-600 font-bold text-sm ml-1">
							4.96
							<span class="text-gray-500 font-normal">(76 reviews)</span>
						</p>
					</div>
					<div class="bg-gray-200 px-3 py-1 rounded-full text-xs font-medium text-gray-800 hidden md:block"><?= $categoriaConMayuscula; ?></div>
				</div>
				<h3 class="font-black text-gray-800 md:text-3xl text-xl"><?= $nombreConMayuscula; ?></h3>
				<p class="md:text-lg text-gray-500 text-base"><?= $recortarDescripcion; ?></p>
				<p class="text-xl font-black text-gray-800">
					$<?= $producto->getPrecio(); ?>

          <a href="index.php?sec=peliculas&id=<?= $producto->getId() ?>" class="btn text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-purple-400 dark:text-purple-400 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-900">Ver Detalles</a>
				</p>
			</div>
		</div>

         <?php } ?>
        <?php } ?>
  </div>
</section>