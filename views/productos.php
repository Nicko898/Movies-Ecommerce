
<?= (new Alerta())->get_alertas() ?>
<!-- <div class="d-flex justify-content-center position-relative mb-4 mt-4">
    <h2 class="text-primary-emphasis m-0">Peliculas</h2>
    <div class="dropdownn position-absolute">
        <button class="dropbtn">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M3 5H21V7H3V5ZM7 11H17V13H7V11ZM11 17H13V19H11V17Z" fill="currentColor"/>
            </svg>
        </button>
        <div class="dropdown-content">
            <a href="index.php?sec=productos&orden=asc">Precio: Menor a Mayor</a>
            <a href="index.php?sec=productos&orden=desc">Precio: Mayor a Menor</a>
        </div>
    </div>
</div> -->




             



<h2 class="text-2xl font-bold text-center mt-10">Peliculas</h2>

<section class="flex items-center justify-center min-h-screen">
  <div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full max-w-6xl px-4 py-14 m-4 relative">

<!-- <div class="relative mt-48"> -->
    <div class="absolute top-0 right-0">
      <button id="dropdownNavbarLink" data-dropdown-toggle="filter" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Filtros
        <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
        </svg>
      </button>

      <div id="filter" class="z-50 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
          <ul class="p-4 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownLargeButton">
            <li class="my-3">
              <a href="index.php?sec=productos&orden=asc">Precio: Menor a Mayor</a>
            <li>
              <a href="index.php?sec=productos&orden=desc">Precio: Mayor a Menor</a>
            </li>
          </ul>
      </div>
    </div>
<!-- </div> -->

  <?php
    $orden = isset($_GET['orden']) ? $_GET['orden'] : 'asc';
    $productos = (new Pelicula())->catalogoCompletoOrdenado($orden);

    foreach ($productos as $producto) {
        $categoriaConMayuscula = (new Pelicula())->categoriaMayuscula($producto->getCategoria_id());
        $directorConMayuscula = (new Pelicula())->directorMayuscula($producto->getDirector_id());
        $nombreConMayuscula = (new Pelicula())->nombreMayuscula(($producto->getNombre()));
        $recortarDescripcion = (new Pelicula())->recortarDescripcion(($producto->getSinopsis()));
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
  </div>
</section>
        
