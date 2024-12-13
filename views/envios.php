<div class="container mx-auto flex flex-col md:flex-row justify-center items-center p-5 gap-8 lg:gap-12 max-w-screen-lg">
  <div class="w-full md:w-1/2">
    <div>
      <span class="text-gray-500">Contáctanos</span>
      <h2 class="text-3xl font-extrabold mt-2 text-gray-800 tracking-tight leading-tight">
        Dejenos su nombre y su mail si desea hacer una compra mayorista que nos comunicaremos a la brevedad
      </h2>
    </div>
  </div>

  <div class="w-full md:w-1/2">
    <form action="index.php?sec=procesar" method="POST" class="space-y-6">
      <div class="relative mt-20">
        <label for="nombre" class="block text-sm font-semibold text-gray-700 dark:text-gray-200 mt-12">
          Nombre y Apellido
        </label>
        <input
          required
          id="nombre"
          type="text"
          name="Nombre"
          class="mt-2 block w-full rounded-md border-gray-300 bg-gray-50 p-3 text-gray-900 focus:ring-2 focus:ring-blue-500 focus-visible:outline-none dark:bg-gray-800 dark:border-gray-600 dark:text-white"
          placeholder="Juan Pérez"
        />
      </div>

      <div class="relative mt-8">
        <label for="mail" class="block text-sm font-semibold text-gray-700 dark:text-gray-200">
          Mail
        </label>
        <input
          required
          id="mail"
          type="email"
          name="Mail"
          class="mt-2 block w-full rounded-md border-gray-300 bg-gray-50 p-3 text-gray-900 focus:ring-2 focus:ring-blue-500 focus-visible:outline-none dark:bg-gray-800 dark:border-gray-600 dark:text-white"
          placeholder="name@example.com"
        />
      </div>

      <button
        type="submit"
        class="w-full sm:w-auto px-6 py-3 text-white bg-blue-600 rounded-md font-semibold text-sm hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:outline-none transition-all duration-300 mt-8"
      >
        Enviar
      </button>
    </form>
  </div>
</div>
