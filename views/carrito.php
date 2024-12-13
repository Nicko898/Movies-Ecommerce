<?php

$miCarrito = new Carrito();
$items = ($miCarrito)->getCarrito();

?>
<!-- 
<div class="my-2 container">
    <h1 class="mb-5">Carrito de Compras</h1>
    <?= (new Alerta())->get_alertas() ?>
    <?php if( count($items) ){ ?>
    <form action="admin/acciones/update_carrito_acc.php" method="get">
        <div class="table-header">
            <div class="row">
                <div class="col-2">Portada</div>
                <div class="col-3">Nombre</div>
                <div class="col-2">Cantidad</div>
                <div class="col-2">C/U</div>
                <div class="col-2">Subtotal</div>
                <div class="col-1 mx-auto p-0">Acciones</div>
            </div>
        </div>
        <div class="table-body">
                <?php foreach( $items as $key => $item ) {?>
                    <div class="row table-row">
                    <div class="col-2">
                        <img class="img-fluid rounded shadow-sm w-75" src="img/<?php echo $item["portada"]; ?>" alt="<?php echo $item["producto"]; ?>">
                    </div>

                    <div class="col-3 align-middle">
                        <p class="h5"><?php echo $item["producto"]; ?></p>
                    </div>

                    <div class="col-2 align-middle">
                        <input type="number" value="<?php echo $item["cantidad"]; ?>" name="c[<?= $key ?>]" class="form-control">
                    </div>

                    <div class="col-2 align-middle pe-0">
                        <p class="h5"><?php echo $item["precio"]; ?></p>
                    </div>

                    <div class="col-2 align-middle pe-0">
                        <p class="h5"><?=  $item["precio"] * $item["cantidad"]; ?></p>
                    </div>

                    <div class="col-1 align-middle ps-0">
                        <a class="btn btn-danger" href="admin/acciones/remove_item_acc.php?id=<?= $key ?>">Eliminar</a>
                    </div>
                </div>
                <?php } ?> 
            </div>
            <div class="d-flex justify-content-end table-total">
            <h2 class="h5 py-3 fs-2 me-2">Total: </h2>
            <p class="h5 py-3 fs-2">$<?= $miCarrito->getTotal() ?></p>
        </div>

        <div  class="d-flex gap-2 mt-4">
            <input type="submit" value="Actualizar cantidades" class="btn btn-blue">
            <a class="btn btn-dark " href="index.php?sec=productos">Seguir Comprando</a>
            <a class="btn btn-danger "  href="admin/acciones/vaciar_carrito_acc.php">Vaciar Carrito</a>
            <a class="btn btn-success "  href="index.php?sec=finalizar_compra">Finalizar Compra</a>
        </div>
    </form>
    <?php }else{ ?>
        <p>No hay productos en el carrito</p>
        <a class="btn btn-warning w-25" href="index.php?sec=productos">Comprar</a>
    <?php } ?>
</div> -->



<section class="bg-white pb-8 antialiased dark:bg-gray-900">
  <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
    <h2 class="text-xl text-center font-semibold text-gray-900 dark:text-white sm:text-2xl mb-4">Carrito de compras</h2>

    <?= (new Alerta())->get_alertas() ?>
    <?php if( count($items) ){ ?>
    <form action="admin/acciones/update_carrito_acc.php" method="get">
    <div class="mt-6 sm:mt-8 md:gap-6 lg:flex lg:items-start xl:gap-8">
    <?php foreach( $items as $key => $item ) {?>
      <div class="mx-auto w-full flex-none lg:max-w-2xl xl:max-w-4xl">
        <div class="space-y-6">
          <div class="rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 md:p-6">
            <div class="space-y-4 md:flex  md:justify-between md:gap-6 md:space-y-0">
              <a href="#" class="shrink-0 md:order-1">
                <img class="w-22 h-32"  src="img/<?php echo $item["portada"]; ?>" alt="<?php echo $item["producto"]; ?>">
              </a>

              <label for="counter-input" class="sr-only">Elegir cantidad</label>
              <div class="flex items-center justify-between md:order-3 md:justify-end">
              <div class="flex items-center space-x-1">
                    <button type="button" id="decrement-button" data-input-counter-decrement="counter-input" class="inline-flex h-6 w-6 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                        <svg class="h-3 w-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                        </svg>
                    </button>
                    
                    <input type="number" id="counter-input" data-input-counter class="w-20 h-8 text-center text-md font-medium text-gray-900" placeholder="" value="<?php echo $item["cantidad"]; ?>" name="c[<?= $key ?>]" min="1" required />
                    
                    <button type="button" id="increment-button" data-input-counter-increment="counter-input" class="inline-flex h-6 w-6 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                        <svg class="h-3 w-3 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                        </svg>
                    </button>
</div>

                <div class="text-end md:order-4 md:w-32"> 
                  <span>C/U</span>
                  <p class="text-base font-bold text-gray-900 dark:text-white"> $<?php echo $item["precio"]; ?></p>
                </div>

                <div class="text-end md:order-4 md:w-32">
                  <span>Total:</span>
                  <p class="text-base font-bold text-gray-900 dark:text-white"> $<?php echo $item["precio"] * $item["cantidad"]; ?></p>
                </div>
              </div>

              <div class="w-full min-w-0 flex-1 space-y-4 md:space-y-16 md:order-2 md:max-w-md">
                <a href="#" class="text-2xl font-bold text-gray-900 hover:underline dark:text-white"><?php echo $item["producto"]; ?></a>

                <div class="flex items-center gap-4">
                  <button type="button" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-900 hover:underline dark:text-gray-400 dark:hover:text-white">
                    <svg class="me-1.5 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z" />
                    </svg>
                    Agregar a favoritos
                  </button>

                  <a href="admin/acciones/remove_item_acc.php?id=<?= $key ?>" class="inline-flex items-center text-sm font-medium text-red-600 hover:underline dark:text-red-500">
                    <svg class="me-1.5 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6" />
                    </svg>
                    Eliminar
                  </a>
                </div>
              </div>
            </div>
          </div>
          <?php } ?> 
          <div class="flex gap-4">
          <input type="submit" value="Actualizar cantidades" class="flex items-center justify-center rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300"></input>
          <a href="admin/acciones/vaciar_carrito_acc.php" class="flex items-center justify-center rounded-lg bg-teal-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-teal-800 focus:outline-none focus:ring-4 focus:ring-teal-300 w-fit">Vaciar carrito</a>
          </div>
        </form>
   



      <div class="mx-auto mt-6 max-w-4xl flex-1 space-y-6 lg:mt-0 lg:w-full">
        <div class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
          <p class="text-xl font-semibold text-gray-900 dark:text-white">Resumen de orden</p>

          <div class="space-y-4">
            <div class="space-y-2">
              <dl class="flex items-center justify-between gap-4">
                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Precio original</dt>
                <dd class="text-base font-medium text-gray-900 dark:text-white">$<?= $miCarrito->getTotal() ?></dd>
              </dl>

              <dl class="flex items-center justify-between gap-4">
                <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Impuesto fijo</dt>
                <dd class="text-base font-medium text-gray-900 dark:text-white">$500</dd>
              </dl>
            </div>

            <dl class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 dark:border-gray-700">
              <dt class="text-base font-bold text-gray-900 dark:text-white">Total</dt>
              <dd class="text-base font-bold text-gray-900 dark:text-white">$<?= $miCarrito->getTotal() + 500?></dd>
            </dl>
          </div>

          <a href="index.php?sec=finalizar_compra" class="flex w-full items-center justify-center rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300">Terminar compra</a>

          <div class="flex items-center justify-center gap-2">
            <span class="text-sm font-normal text-gray-500 dark:text-gray-400"> or </span>
            <a href="index.php?sec=productos" title="" class="inline-flex items-center gap-2 text-sm font-medium text-blue-700 underline hover:no-underline dark:text-blue-500">
              Seguir comprando
              <svg class="h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
              </svg>
            </a>
          </div>
        </div>

        <!-- <div class="space-y-4 rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
          <form class="space-y-4">
            <div>
              <label for="voucher" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> ¿Tenés un voucher o una tarjeta de regalo? </label>
              <input type="text" id="voucher" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="" required />
            </div>
            <button type="submit" class="flex w-full items-center justify-center rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Aplicar código</button>
          </form>
        </div> -->
      </div>
    </div>
  </div>
</section>

<?php }else{ ?>
        <p class="text-xl font-bold mb-4" >No hay productos en el carrito</p>
        <a href="index.php?sec=productos" class="flex items-center justify-center rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 w-fit">Comprar</a>
    <?php } ?>
        </div>    
      </div>