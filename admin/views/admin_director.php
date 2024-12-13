<?php

$directores = (new Director())->catalogoCompleto();

?>




<!-- max-w-[720px] -->
<div class="max-w-[920px] mx-auto">

<div class="relative flex flex-col w-full h-full text-slate-700 bg-white shadow-md rounded-xl bg-clip-border">
	<div class="relative mx-4 mt-4 overflow-hidden text-slate-700 bg-white rounded-none bg-clip-border">
		<div class="flex items-center justify-between ">
			<div>
				<h3 class="text-lg font-semibold text-slate-800">Administración de Directores</h3>
				<p class="text-slate-500">Edita, elimina o crea nuevos directores!</p>
			</div>
		<div class="flex flex-col gap-2 shrink-0 sm:flex-row">
			<a href="index.php?seccion=add_director" class="btn flex select-none items-center gap-2 rounded bg-slate-800 py-2.5 px-4 text-xs font-semibold text-white shadow-md shadow-slate-900 transition-all hover:shadow-lg hover:shadow-slate-900 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
							<svg id="Layer_1" viewBox="0 0 24 24" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" fill="currentColor"><path d="m12 0a12 12 0 1 0 12 12 12.013 12.013 0 0 0 -12-12zm0 22a10 10 0 1 1 10-10 10.011 10.011 0 0 1 -10 10zm5-10a1 1 0 0 1 -1 1h-3v3a1 1 0 0 1 -2 0v-3h-3a1 1 0 0 1 0-2h3v-3a1 1 0 0 1 2 0v3h3a1 1 0 0 1 1 1z"/></svg>
			  Agregar
			</a>
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
				Director
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
				Biografia
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
					stroke="currentColor" aria-hidden="true" class="w-4 h-4">
					<path stroke-linecap="round" stroke-linejoin="round"
					d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9"></path>
				</svg>
				</p>
			</th>
			<th class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100">
			  <p class="flex items-center justify-between gap-2 font-sans text-sm  font-normal leading-none text-slate-500">
				Acciones  
			  </p>
			</th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($directores as $director) { 
			// $recortarDescripcion = ( new Pelicula() )->recortarDescripcion(($pelicula->getSinopsis()));  
  		?>
			<tr>
			<td class="p-4 border-b border-slate-200">
				<div class="flex items-center gap-3">
				<img src="../img/directores/<?= $director->getImagen() ?>"
					alt="<?= $director->getNombre() ?>" class="relative inline-block h-9 w-9 !rounded-full object-cover object-center" />
				<div class="flex flex-col">
					<p class="text-sm font-semibold text-slate-700">
					  <?= $director->getNombre() ?>
					</p>
				</div>
				</div>
			</td>
			<td class="p-4 border-b border-slate-200">
				<div class="flex flex-col">
				<p class="text-sm font-semibold text-slate-700 min-w-200">
				  <?= $director->getBiografia() ?>
				</p>
				</div>
			</td>
			<td class="p-4 border-b border-slate-200 relative">

				<a href="index.php?seccion=delete_director&id=<?= $director->getId() ?>" class="btn relative h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-slate-900 transition-all hover:bg-slate-900/10 active:bg-slate-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
				<span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
				  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" class="w-6 h-6">
					<path d="M10 12V17" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M14 12V17" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M4 7H20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M6 10V18C6 19.6569 7.34315 21 9 21H15C16.6569 21 18 19.6569 18 18V10" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					<path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				  </svg>
				</span>
				</a>
				
				<a href="index.php?seccion=edit_director&id=<?= $director->getId() ?>" class="btn relative h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-slate-900 transition-all hover:bg-slate-900/10 active:bg-slate-900/20 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
				<span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
					class="w-4 h-4">
					<path
						d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z">
					</path>
					</svg>
				</span>
				</a>

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