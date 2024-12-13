<?php
$usuarios = (new Usuario())->getAllUsuarios();
// $roles = ['usuario', 'admin', 'superadmin'];
$roles = (new Usuario())->getAllRoles();
?>

    <!-- <h1 class="text-center m-4">Listado de Usuarios</h1>

    <div class="contenido">
    <article class="table-widget mt-5 mb-5">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
            <th>Usuario</th>
            <th>Rol</th>
        </tr>
    </thead>
    <tbody id="team-member-rows">
        <?php foreach ($usuarios as $usuario) { ?>
            <tr>
                <td>
                    <div class="status">
                        <div class="status__circle status--active"></div>
                        <?= $usuario->getId() ?>
                    </div>
                </td>
                <td><?= $usuario->getUsuario() ?></td>
                <td>
                    <form method="post" action="acciones/actualizar_rol_acc.php">
                        <input type="hidden" name="usuario_id" value="<?= $usuario->getId() ?>">
                        <select class="form-select" name="rol" id="rol">
                            <option value="<?= $usuario->getRoles() ?>" selected disabled><?= $usuario->getRoles() ?></option>
                            <?php foreach ($roles as $rol) {
                                if ($rol != $usuario->getRoles()) { ?>
                                    <option value="<?= $rol ?>"><?= $rol ?></option>
                                    <?php } ?>
                                    <?php } ?>
                                </select>
                                <button type="submit" class="text-light fs-7 text-end">Actualizar</button>
                            </form>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
</table>


    </article>
    </div> -->



    <!-- max-w-[720px] -->
<div class="max-w-[620px] mx-auto my-10">

<div class="relative flex flex-col w-full h-full text-slate-700 bg-white shadow-md rounded-xl bg-clip-border">
	<div class="relative mx-4 mt-4 overflow-hidden text-slate-700 bg-white rounded-none bg-clip-border">
		<div class="flex items-center justify-between ">
			<div>
				<h3 class="text-lg font-semibold text-slate-800">Administración de Usuarios</h3>
				<p class="text-slate-500">Edita y elimina usuarios!</p>
			</div>
		</div>
	
	</div>
	<div class="p-0 overflow-scroll">
		<table class="w-full mt-4 text-left table-auto min-w-max">
		<thead>
			<tr>
			<th
				class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
				<p
				class="flex items-center justify-between gap-2 font-sans text-sm font-normal leading-none text-slate-500">
				Id
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
					stroke="currentColor" aria-hidden="true" class="w-4 h-4">
					<path stroke-linecap="round" stroke-linejoin="round"
					d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
				</svg>
				</p>
			</th>
			<th
				class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
				<p
				class="flex items-center justify-between gap-2 font-sans text-sm font-normal leading-none text-slate-500">
				Usuario
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
					stroke="currentColor" aria-hidden="true" class="w-4 h-4">
					<path stroke-linecap="round" stroke-linejoin="round"
					d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
				</svg>
				</p>
			</th>
			<th class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
			  <p class="flex items-center justify-between gap-2 font-sans text-sm  font-normal leading-none text-slate-500">
				Rol  
			  </p>
			</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($usuarios as $usuario) { 
			// $recortarDescripcion = ( new Pelicula() )->recortarDescripcion(($pelicula->getSinopsis()));  
  		?>
			<tr>
			<td class="p-4 border-b border-slate-200">
				<div class="flex flex-col">
					<p class="text-sm font-semibold text-slate-700">
                        <?= $usuario->getId() ?>
					</p>
				</div>
			</td>
			<td class="p-4 border-b border-slate-200">
				<div class="flex flex-col">
				<p class="text-sm font-semibold text-slate-700 min-w-200">
                    <?= $usuario->getUsuario() ?>
				</p>
				</div>
			</td>
			<td class="p-4 border-b border-slate-200">
            	<form class="max-w-sm flex" method="post" action="acciones/actualizar_rol_acc.php">

                  <input type="hidden" name="usuario_id" value="<?= $usuario->getId() ?>">
                  <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 w-30" name="rol" id="rol">
                    <option value="<?= $usuario->getRoles() ?>" selected disabled><?= $usuario->getRoles() ?></option>
                    <?php foreach ($roles as $rol) {
                        if ($rol != $usuario->getRoles()) { ?>
                            <option value="<?= $rol ?>"><?= $rol ?></option>
                            <?php } ?>
                        <?php } ?>
				  </select>
				  <button type="submit" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2.5 text-center me-2 mb-2 mx-2">Actualizar</button>

                </form>
			</td>
			</tr>
			<?php } ?>

		</tbody>
		</table>
	</div>
	<div class="flex items-center justify-between p-3">
		<p class="block text-sm text-slate-500">
		Page 1 of 10
		</p>
		<div class="flex gap-1">
		<button
			class="rounded border border-slate-300 py-2.5 px-3 text-center text-xs font-semibold text-slate-600 transition-all hover:opacity-75 focus:ring focus:ring-slate-300 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
			type="button">
			Previous
		</button>
		<button
			class="rounded border border-slate-300 py-2.5 px-3 text-center text-xs font-semibold text-slate-600 transition-all hover:opacity-75 focus:ring focus:ring-slate-300 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
			type="button">
			Next
		</button>
		</div>
	</div>
	</div>
	
</div>
