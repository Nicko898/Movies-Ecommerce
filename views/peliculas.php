<?php 

    $id =  $_GET['id'];
    $producto = (new Pelicula())->catalogoPorId($id);
    $categoriaConMayuscula = (new Pelicula())->categoriaMayuscula($producto->getCategoria_id());
    $directorConMayuscula = (new Pelicula())->directorMayuscula($producto->getDirector_id());
    $nombreConMayuscula = ( new Pelicula() )->nombreMayuscula(($producto->getNombre()));

?>

<!-- bg-gradient-to-b from-red-600 via-pink-700 to-purple-800 -->

<div class="min-h-screen  p-6 flex items-center justify-center text-black">
  <div class="bg-black text-white max-w-6xl rounded-lg overflow-hidden shadow-lg flex flex-col md:flex-row">
    <!-- Columna Izquierda (Póster) -->
    <div class="md:w-1/3">
      <img src="img/<?= $producto->getImagen() ?>" alt="<?= $producto->getNombre() ?>" class="w-full h-auto">
    </div>

    <!-- Columna Derecha (Detalles) -->
    <div class="p-10 md:w-2/3">
      <!-- Título y Puntuación -->
      <div class="flex items-center justify-between">
        <h1 class="text-3xl font-bold"><?= $nombreConMayuscula; ?></h1>
        <div class="flex items-center gap-1">
          <span class="text-yellow-500 text-xl font-semibold">4.96</span>
          <svg class="w-5 h-5 text-yellow-500" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
          </svg>
        </div>
      </div>
      <!-- Detalles -->
      <div class="text-gray-400 text-sm mt-2">
        <p>2018 | 2h 23min | 16+</p>
      </div>

      <!-- Navegación de Tabs -->
      <div class="mt-6 border-b border-gray-700">
        <ul class="flex gap-6 text-gray-400" id="default-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-purple-600 hover:text-purple-600 border-purple-600" data-tabs-inactive-classes="border-transparent text-gray-500 hover:text-gray-600 border-gray-100 hover:border-gray-300" role="tablist">

        <li class="me-2" role="presentation">
            <button class="cursor-pointer text-white border-b-2 pb-2 " id="descripcion-tab" data-tabs-target="#descripcion" type="button" role="tab" aria-controls="descripcion" aria-selected="false">Descripción</button>
        </li>
        <li class="me-2" role="presentation">
            <button class="cursor-pointer text-white border-b-2 pb-2 " id="trailer-tab" data-tabs-target="#trailer" type="button" role="tab" aria-controls="trailer" aria-selected="false">Trailer</button>
        </li>
        </ul>
      </div>

        <div id="default-tab-content">
          <div class="hidden mt-10" id="descripcion" role="tabpanel" aria-labelledby="descripcion-tab">
            <!-- Descripción -->
            <div class="mt-4">
              <p class="text-gray-400">
                <?= $producto->getSinopsis(); ?>
              </p>
            </div>

            <!-- Detalles de producción -->
            <div class="mt-4">
              <!-- <p class="text-gray-700" ><span class="text-gray-400">Starring:</span> Scarlett Johansson, Chris Evans, Robert Downey Jr.</p> -->
              <p><span class="text-gray-400">Director:</span> <?= $directorConMayuscula ?></p>
              <p><span class="text-gray-400">Genero:</span> <?= $categoriaConMayuscula; ?></p>
            </div>

            <!-- Películas relacionadas -->
            <div class="mt-6">
              <h2 class="text-gray-700 text-xl font-semibold mb-4">Quieres ver la pelicula?</h2>
                <form action="admin/acciones/add_item_acc.php">

                  <input type="submit" class="btn text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" value="Comprar">
                  <input type="hidden" name="id" value="<?= $producto->getId() ?>">  

                </form>
              <!-- <div class="flex gap-4">
                <div class="w-1/3">
                  <img src="https://via.placeholder.com/150" alt="Related Movie" class="rounded-lg">
                </div>
                <div class="w-1/3">
                  <img src="https://via.placeholder.com/150" alt="Related Movie" class="rounded-lg">
                </div>
                <div class="w-1/3">
                  <img src="https://via.placeholder.com/150" alt="Related Movie" class="rounded-lg">
                </div>
              </div> -->
            </div>
            </div>

            <div class="hidden mt-10" id="trailer" role="tabpanel" aria-labelledby="trailer-tab">
                  <!-- <p class="text-sm text-gray-500 pb-5">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p> -->
                  <p class="text-sm text-gray-500 pb-5">Disfruta del tráiler oficial y sumérgete en el mundo de esta increíble película. <strong class="font-medium text-gray-200">Descubre un adelanto lleno de emoción y momentos inolvidables</strong> que te prepararán para vivir una experiencia cinematográfica única. ¡No te lo pierdas!</p>

                    
                <div class="w-full h-64 md:h-48 mb-4">
                  <iframe
                    class="w-full h-full rounded-lg "
                    src="<?= $producto->getTrailer(); ?>"
                    title="<?= $producto->getNombre() ?>"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                  </iframe>
                </div>
            </div>
        </div>

      

    </div>
  </div>
</div>






<!-- 
<section>

<div class="">

<div class="card-group gap-3 ">
  <div class="card w-full" style="max-width: 15rem;">
  <img src="img/<?= $producto->getImagen() ?>" class="card-img-top" alt="<?= $producto->getNombre() ?>">
    <div class="card-body">
    <p class="card-title">Director: <?= $directorConMayuscula ?></p>
    <p class="card-title">Genero: <?= $categoriaConMayuscula; ?></p>
    <p class="card-text precio"><span class="me-1">$</span><span class="fw-bold"><?= $producto->getPrecio(); ?></span></p>  
    </div>
    <div class="card-footer">
      <small class="text-body-secondary">Last updated 3 mins ago</small>
    </div>
  </div>

  <div class="card-comprar card w-full" style="max-width: 35rem;">
    <div class="ratio ratio-16x9">
      <iframe class="d-none d-md-block" width="560" height="315" src="<?= $producto->getTrailer(); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    <div class="card-body">
      <h5 class="card-title fs-4"><?= $nombreConMayuscula; ?></h5>
      <p class="card-text"><?= $producto->getSinopsis(); ?></p>
      <form action="admin/acciones/add_item_acc.php">
            <input type="submit" class="btn btn-primary" value="Comprar">
            <input type="hidden" name="id" value="<?= $producto->getId() ?>">  
      </form>
    </div>
    <div class="card-footer">
      <small class="text-body-secondary">Last updated 3 mins ago</small>
    </div>
  </div>
</div>

</div>

</section> -->


