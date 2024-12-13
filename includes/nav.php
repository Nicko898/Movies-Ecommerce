<!-- <nav class="navbar navbar-expand-lg navbar-light background">
    <div class="container">
                    <a
                        href="index.php?sec=home"
                        title="Logo"
                        class="logo"
                    >
                        <img src="img/logo.webp" alt="">
                    </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                    <?php if(isset($_SESSION["login"]) && $_SESSION["login"]["roles"] === "superadmin" /*|| $_SESSION["login"]["roles"] === "admin"*/){ ?>       
                        <li class="nav-item">
                    <a class="nav-link text-light" href="admin/index.php">
                        ADMIN
                    </a>
                </li>
                     <?php }?>
                <li class="nav-item">
                    <a class="nav-link text-light" href="index.php?sec=home">
                        <?= (!isset($_GET["sec"]) || (isset($_GET["sec"]) && $_GET["sec"] == "home")) ? "<b>Home</b>" : "Home" ?>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-light btn btn-secondary" href="index.php?sec=productos"><?php if (isset($_GET["sec"]) && $_GET["sec"] == "productos" || isset($_GET["categoria"]) || isset($_GET["id"])) {
                        echo "<b>Productos</b>";
                    } else {
                        echo "Productos";
                    } ?></a>
                    <button type="button" class="btn btn-light dropdown-toggle dropdown-toggle-split visually-hidden" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="index.php?sec=productos" class="dropdown-item text-decoration-none "><?= isset($_GET["sec"]) && $_GET["sec"] == "productos" ? "<b>Todos</b>" : "Todos" ?></a>
                        </li>
                        <li>
                            <a href="index.php?sec=filtros&categoria=3" class="dropdown-item text-decoration-none "><?php if (isset($_GET["sec"]) && isset($_GET["categoria"]) && $_GET["sec"] == "filtros" && $_GET["categoria"] == "3") {
                                echo "<b>Terror</b>";
                            } else {
                                echo "Terror";
                            } ?></a>
                        </li>
                        <li>
                            <a href="index.php?sec=filtros&categoria=2" class="dropdown-item text-decoration-none "><?php if (isset($_GET["sec"]) && isset($_GET["categoria"]) && $_GET["sec"] == "filtros" && $_GET["categoria"] == "2") {
                                echo "<b>Comedia</b>";
                            } else {
                                echo "Comedia";
                            } ?></a>
                        </li>
                        <li>
                            <a href="index.php?sec=filtros&categoria=1" class="dropdown-item text-decoration-none "><?php if (isset($_GET["sec"]) && isset($_GET["categoria"]) && $_GET["sec"] == "filtros" && $_GET["categoria"] == "1") {
                                echo "<b>Suspenso</b>";
                            } else {
                                echo "Suspenso";
                            } ?></a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="index.php?sec=envios"><?= isset($_GET["sec"]) && $_GET["sec"] == "envios" ? "<b>Contacto</b>" : "Contacto" ?></a>
                </li>
                <?php if(isset($_SESSION["login"])){ ?>       
                    <a class="nav-link text-light" href="index.php?sec=carrito">
                    <?= (isset($_GET["sec"]) && (isset($_GET["sec"]) && $_GET["sec"] == "carrito")) ? "<b>Carrito</b>" : "Carrito" ?>
                </a>    
                <?php }?>
                
                <?php if( isset($_SESSION['login']) ){ ?>       
                    <li class="nav-item">
                        <a class="nav-link text-light d-flex align-items-center ms-lg-4" href="index.php?sec=perfil"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none"><path stroke="#ffffff" stroke-width="1.5" d="M21 12a8.958 8.958 0 0 1-1.526 5.016A8.991 8.991 0 0 1 12 21a8.991 8.991 0 0 1-7.474-3.984A9 9 0 1 1 21 12Z"/><path fill="#ffffff" d="M13.25 9c0 .69-.56 1.25-1.25 1.25v1.5A2.75 2.75 0 0 0 14.75 9zM12 10.25c-.69 0-1.25-.56-1.25-1.25h-1.5A2.75 2.75 0 0 0 12 11.75zM10.75 9c0-.69.56-1.25 1.25-1.25v-1.5A2.75 2.75 0 0 0 9.25 9zM12 7.75c.69 0 1.25.56 1.25 1.25h1.5A2.75 2.75 0 0 0 12 6.25zM5.166 17.856l-.719-.214l-.117.392l.267.31zm13.668 0l.57.489l.266-.31l-.117-.393zM9 15.75h6v-1.5H9zm0-1.5a4.752 4.752 0 0 0-4.553 3.392l1.438.428A3.252 3.252 0 0 1 9 15.75zm3 6a8.23 8.23 0 0 1-6.265-2.882l-1.138.977A9.73 9.73 0 0 0 12 21.75zm3-4.5c1.47 0 2.715.978 3.115 2.32l1.438-.428A4.752 4.752 0 0 0 15 14.25zm3.265 1.618A8.23 8.23 0 0 1 12 20.25v1.5a9.73 9.73 0 0 0 7.403-3.405z"/></g></svg> <?= $_SESSION["login"]["usuario"]?></a>
                    </li>    
                <?php }else{ ?>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="index.php?sec=login">Login</a>
                    </li>   
                <?php } ?> 
            </ul>
        </div>
    </div>
</nav> -->


<nav class="bg-white dark:bg-gray-900 w-full z-50 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="index.php?sec=home" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="img/logo.png" class="h-8" alt="Stream Logo">
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Stream</span>
  </a>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <ul>

      <?php if( isset($_SESSION['login']) ){ ?>
        <li>

        <div class="flex align-middle">
            <a class="inline-block mr-4" href="index.php?sec=perfil">
              <img class="rounded-full max-w-none w-12 h-12" src="img/usuario.webp" />
            </a>
            <a class="mt-2 text-lg font-bold" href="index.php?sec=perfil"><?= $_SESSION["login"]["usuario"]?></a>
        </div>

          <!-- <a class="btn bg-indigo-800 hover:bg-blue-900" href="index.php?sec=perfil"> <?= $_SESSION["login"]["usuario"]?> </a> -->
        </li>
        </ul>
      <?php }else{ ?>

          <a href="index.php?sec=login" class="btn focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900 mx-1">Login</a>

          <a href="index.php?sec=registro" class="btn text-purple-700 hover:text-white border border-purple-700 hover:bg-purple-800 focus:ring-4 focus:outline-none focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-purple-400 dark:text-purple-400 dark:hover:text-white dark:hover:bg-purple-500 dark:focus:ring-purple-900">Registro</a>
          
      <?php } ?> 
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a class="text-light" href="index.php?sec=home">
          <?= (!isset($_GET["sec"]) || (isset($_GET["sec"]) && $_GET["sec"] == "home")) ? "<b>Home</b>" : "Home" ?>
        </a>
      </li>
      <li>
          <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Productos
            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
          </button>
          
            <!-- Dropdown menu -->
            <div id="dropdownNavbar" class="z-50 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownLargeButton">
                  <li>
                    <a href="index.php?sec=productos" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><?= isset($_GET["sec"]) && $_GET["sec"] == "productos" ? "<b>Todos</b>" : "Todos" ?></a>
                  </li>
                  <li>
                    <a href="index.php?sec=filtros&categoria=3" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white "><?php if (isset($_GET["sec"]) & isset($_GET["categoria"]) && $_GET["sec"] == "filtros" && $_GET["categoria"] == "3") {
                      echo "<b>Terror</b>"; } else {
                      echo "Terror"; } ?>
                    </a>  
                  </li>
                  <li>
                    <a href="index.php?sec=filtros&categoria=2" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><?php if (isset($_GET["sec"]) && isset($_GET["categoria"]) && $_GET["sec"] == "filtros" && $_GET["categoria"] == "2") {
                      echo "<b>Comedia</b>"; } else {
                      echo "Comedia"; } ?>
                    </a>
                  </li>
                  <li>
                    <a href="index.php?sec=filtros&categoria=1" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white "><?php if (isset($_GET["sec"]) && isset($_GET["categoria"]) && $_GET["sec"] == "filtros" && $_GET["categoria"] == "1") {
                      echo "<b>Suspenso</b>"; } else {
                      echo "Suspenso"; } ?>
                    </a>
                  </li>
                </ul>
            </div>      
      </li>
      <li>
        <a class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" href="index.php?sec=envios"><?= isset($_GET["sec"]) && $_GET["sec"] == "envios" ? "<b>Contacto</b>" : "Contacto" ?></a>
      </li>
      <li>
        <?php if(isset($_SESSION["login"])){ ?>   
          <a class="nav-link text-light" href="index.php?sec=carrito">
            <?= (isset($_GET["sec"]) && (isset($_GET["sec"]) && $_GET["sec"] == "carrito")) ? "<b>Carrito</b>" : "Carrito" ?>
          </a>    
        <?php }?>
      </li>
      <li>
        <?php if(isset($_SESSION["login"]) && $_SESSION["login"]["roles"] === "superadmin" /*|| $_SESSION["login"]["roles"] === "admin"*/){ ?>       
          <a class="" href="admin/index.php">
              Admin
          </a>
          <?php }?>
      </li>
    </ul>
  </div>
  </div>
</nav>



