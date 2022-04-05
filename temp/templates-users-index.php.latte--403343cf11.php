<?php

use Latte\Runtime as LR;

/** source: ../templates/users/index.php.latte */
final class Template403343cf11 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['title' => 'blockTitle', 'content' => 'blockContent'],
	];


	public function main(): array
	{
		extract($this->params);
		echo "\n";
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('title', get_defined_vars()) /* line 3 */;
		echo '

';
		$this->renderBlock('content', get_defined_vars()) /* line 5 */;
		echo "\n";
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		$this->parentName = '../launcher.php.latte';
		
	}


	/** {block title} on line 3 */
	public function blockTitle(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo ' | ';
		echo LR\Filters::escapeHtmlText($title) /* line 3 */;
		
	}


	/** {block content} on line 5 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '	<div class="flex justify-between items-center p-8">
		<div class="text-2xl font-semibold">';
		echo LR\Filters::escapeHtmlText($title) /* line 7 */;
		echo '</div>
		<div class="rounded-full bg-slate-300 text-white font-semibold font-sm px-3">Home - ';
		echo LR\Filters::escapeHtmlText($title) /* line 8 */;
		echo '</div>
	</div>
	<div class="px-8"><hr></div>
	<div class="p-8">
		<div id="grid" data-masonry=\'{ "itemSelector": ".grid-item", "columnWidth": 270 }\'>

			<!-- Part Users Block -->
			<div class="w-[250px] m-[10px] bg-white shadow-sm rounded-md text-center grid-item float-left overflow-hidden">
				<div class="flex justify-left">
					<div class="display-block w-[100px] h-[100px] bg-slate-400 rounded-br-[55px] overflow-hidden">
						<img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(\AbieSoft\Utilities\Config::envReader('BASEURL'))) /* line 18 */;
		echo '/assets/media/images/photo_default.jpg" class="w-[100px] h-[100px] object-cover">
					</div>
					<div class="w-[150px]">
						<div class="px-4"></div>
						<div class="w-full text-xs bg-black text-white mt-2 mb-2 p-3 ml-4 rounded-tl-full rounded-bl-full">IT Support</div>
						<hr>
						<div class="w-full h-[40px] flex justify-center items-center">
							<button class="font-semibold mr-1 w-[25px] h-[25px] text-xs rounded-full hover:bg-slate-100"><i class="fa-solid fa-message"></i></button>
							<button class="font-semibold mr-1 w-[25px] h-[25px] text-xs rounded-full hover:bg-slate-100"><i class="fa-solid fa-info"></i></button>
							<button class="font-semibold mr-1 w-[25px] h-[25px] text-xs rounded-full hover:bg-slate-100"><i class="fa-solid fa-edit"></i></button>
							<button class="font-semibold text-red-800 mr-1 w-[25px] h-[25px] text-xs rounded-full hover:bg-red-100"><i class="fa-solid fa-trash"></i></button>
						</div>
						<hr>
					</div>
				</div>
				<div class="px-4 py-2 font-semibold">Sukron Abbayroad</div>
				<hr>
				<div class="p-4 text-left max-h-[150px] overflow-hidden hover:overflow-y-auto">
					<div class="text-xs my-1"><span class="font-bold">31 Mar 2021 10:33</span> Login Aplikasi</div>
				</div>
			</div>
			<!--// Part Users Block -->


			<!-- Part Users Block -->
			<div class="w-[250px] m-[10px] bg-white shadow-sm rounded-md text-center grid-item float-left overflow-hidden">
				<div class="flex justify-left">
					<div class="display-block w-[100px] h-[100px] bg-slate-400 rounded-br-[55px] overflow-hidden">
						<img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(\AbieSoft\Utilities\Config::envReader('BASEURL'))) /* line 46 */;
		echo '/assets/media/images/photo_default.jpg" class="w-[100px] h-[100px] object-cover">
					</div>
					<div class="w-[150px]">
						<div class="px-4"></div>
						<div class="w-full text-xs bg-sky-700 text-white mt-2 mb-2 p-3 ml-4 rounded-tl-full rounded-bl-full">Pimpinan</div>
						<hr>
						<div class="w-full h-[40px] flex justify-center items-center">
							<button class="font-semibold mr-1 w-[25px] h-[25px] text-xs rounded-full hover:bg-slate-100"><i class="fa-solid fa-message"></i></button>
							<button class="font-semibold mr-1 w-[25px] h-[25px] text-xs rounded-full hover:bg-slate-100"><i class="fa-solid fa-info"></i></button>
							<button class="font-semibold mr-1 w-[25px] h-[25px] text-xs rounded-full hover:bg-slate-100"><i class="fa-solid fa-edit"></i></button>
							<button class="font-semibold text-red-800 mr-1 w-[25px] h-[25px] text-xs rounded-full hover:bg-red-100"><i class="fa-solid fa-trash"></i></button>
						</div>
						<hr>
					</div>
				</div>
				<div class="px-4 py-2 font-semibold">Nama Personil</div>
				<hr>
				<div class="p-4 text-left max-h-[150px] overflow-hidden hover:overflow-y-auto">
					<div class="text-center text-xs my-1">Tidak Ada Aktifikas</div>
				</div>
			</div>
			<!--// Part Users Block -->


			<!-- Part Users Block -->
			<div class="w-[250px] m-[10px] bg-white shadow-sm rounded-md text-center grid-item float-left overflow-hidden">
				<div class="flex justify-left">
					<div class="display-block w-[100px] h-[100px] bg-slate-400 rounded-br-[55px] overflow-hidden">
						<img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(\AbieSoft\Utilities\Config::envReader('BASEURL'))) /* line 74 */;
		echo '/assets/media/images/photo_default.jpg" class="w-[100px] h-[100px] object-cover">
					</div>
					<div class="w-[150px]">
						<div class="px-4"></div>
						<div class="w-full text-xs bg-yellow-500 text-white mt-2 mb-2 p-3 ml-4 rounded-tl-full rounded-bl-full">Keuangan</div>
						<hr>
						<div class="w-full h-[40px] flex justify-center items-center">
							<button class="font-semibold mr-1 w-[25px] h-[25px] text-xs rounded-full hover:bg-slate-100"><i class="fa-solid fa-message"></i></button>
							<button class="font-semibold mr-1 w-[25px] h-[25px] text-xs rounded-full hover:bg-slate-100"><i class="fa-solid fa-info"></i></button>
							<button class="font-semibold mr-1 w-[25px] h-[25px] text-xs rounded-full hover:bg-slate-100"><i class="fa-solid fa-edit"></i></button>
							<button class="font-semibold text-red-800 mr-1 w-[25px] h-[25px] text-xs rounded-full hover:bg-red-100"><i class="fa-solid fa-trash"></i></button>
						</div>
						<hr>
					</div>
				</div>
				<div class="px-4 py-2 font-semibold">Nama Personil</div>
				<hr>
				<div class="p-4 text-left max-h-[150px] overflow-hidden hover:overflow-y-auto">
					<div class="text-center text-xs my-1">Tidak Ada Aktifikas</div>
				</div>
			</div>
			<!--// Part Users Block -->


			<!-- Part Users Block -->
			<div class="w-[250px] m-[10px] bg-white shadow-sm rounded-md text-center grid-item float-left overflow-hidden">
				<div class="flex justify-left">
					<div class="display-block w-[100px] h-[100px] bg-slate-400 rounded-br-[55px] overflow-hidden">
						<img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(\AbieSoft\Utilities\Config::envReader('BASEURL'))) /* line 102 */;
		echo '/assets/media/images/photo_default.jpg" class="w-[100px] h-[100px] object-cover">
					</div>
					<div class="w-[150px]">
						<div class="px-4"></div>
						<div class="w-full text-xs bg-lime-600 text-white mt-2 mb-2 p-3 ml-4 rounded-tl-full rounded-bl-full">Personalia</div>
						<hr>
						<div class="w-full h-[40px] flex justify-center items-center">
							<button class="font-semibold mr-1 w-[25px] h-[25px] text-xs rounded-full hover:bg-slate-100"><i class="fa-solid fa-message"></i></button>
							<button class="font-semibold mr-1 w-[25px] h-[25px] text-xs rounded-full hover:bg-slate-100"><i class="fa-solid fa-info"></i></button>
							<button class="font-semibold mr-1 w-[25px] h-[25px] text-xs rounded-full hover:bg-slate-100"><i class="fa-solid fa-edit"></i></button>
							<button class="font-semibold text-red-800 mr-1 w-[25px] h-[25px] text-xs rounded-full hover:bg-red-100"><i class="fa-solid fa-trash"></i></button>
						</div>
						<hr>
					</div>
				</div>
				<div class="px-4 py-2 font-semibold">Nama Personil</div>
				<hr>
				<div class="p-4 text-left max-h-[150px] overflow-hidden hover:overflow-y-auto">
					<div class="text-center text-xs my-1">Tidak Ada Aktifikas</div>
				</div>
			</div>
			<!--// Part Users Block -->


			<!-- Part Users Block -->
			<div class="w-[250px] m-[10px] bg-white shadow-sm rounded-md text-center grid-item float-left overflow-hidden">
				<div class="flex justify-left">
					<div class="display-block w-[100px] h-[100px] bg-slate-400 rounded-br-[55px] overflow-hidden">
						<img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(\AbieSoft\Utilities\Config::envReader('BASEURL'))) /* line 130 */;
		echo '/assets/media/images/photo_default.jpg" class="w-[100px] h-[100px] object-cover">
					</div>
					<div class="w-[150px]">
						<div class="px-4"></div>
						<div class="w-full text-xs bg-teal-500 text-white mt-2 mb-2 p-3 ml-4 rounded-tl-full rounded-bl-full">Administrasi</div>
						<hr>
						<div class="w-full h-[40px] flex justify-center items-center">
							<button class="font-semibold mr-1 w-[25px] h-[25px] text-xs rounded-full hover:bg-slate-100"><i class="fa-solid fa-message"></i></button>
							<button class="font-semibold mr-1 w-[25px] h-[25px] text-xs rounded-full hover:bg-slate-100"><i class="fa-solid fa-info"></i></button>
							<button class="font-semibold mr-1 w-[25px] h-[25px] text-xs rounded-full hover:bg-slate-100"><i class="fa-solid fa-edit"></i></button>
							<button class="font-semibold text-red-800 mr-1 w-[25px] h-[25px] text-xs rounded-full hover:bg-red-100"><i class="fa-solid fa-trash"></i></button>
						</div>
						<hr>
					</div>
				</div>
				<div class="px-4 py-2 font-semibold">Nama Personil</div>
				<hr>
				<div class="p-4 text-left max-h-[150px] overflow-hidden hover:overflow-y-auto">
					<div class="text-center text-xs my-1">Tidak Ada Aktifikas</div>
				</div>
			</div>
			<!--// Part Users Block -->


			<!-- Part Users Block -->
			<div class="w-[250px] m-[10px] bg-white shadow-sm rounded-md text-center grid-item float-left overflow-hidden">
				<div class="flex justify-left">
					<div class="display-block w-[100px] h-[100px] bg-slate-400 rounded-br-[55px] overflow-hidden">
						<img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(\AbieSoft\Utilities\Config::envReader('BASEURL'))) /* line 158 */;
		echo '/assets/media/images/photo_default.jpg" class="w-[100px] h-[100px] object-cover">
					</div>
					<div class="w-[150px]">
						<div class="px-4"></div>
						<div class="w-full text-xs bg-fuchsia-700 text-white mt-2 mb-2 p-3 ml-4 rounded-tl-full rounded-bl-full">Operasional</div>
						<hr>
						<div class="w-full h-[40px] flex justify-center items-center">
							<button class="font-semibold mr-1 w-[25px] h-[25px] text-xs rounded-full hover:bg-slate-100"><i class="fa-solid fa-message"></i></button>
							<button class="font-semibold mr-1 w-[25px] h-[25px] text-xs rounded-full hover:bg-slate-100"><i class="fa-solid fa-info"></i></button>
							<button class="font-semibold mr-1 w-[25px] h-[25px] text-xs rounded-full hover:bg-slate-100"><i class="fa-solid fa-edit"></i></button>
							<button class="font-semibold text-red-800 mr-1 w-[25px] h-[25px] text-xs rounded-full hover:bg-red-100"><i class="fa-solid fa-trash"></i></button>
						</div>
						<hr>
					</div>
				</div>
				<div class="px-4 py-2 font-semibold">Nama Personil</div>
				<hr>
				<div class="p-4 text-left max-h-[150px] overflow-hidden hover:overflow-y-auto">
					<div class="text-center text-xs my-1">Tidak Ada Aktifikas</div>
				</div>
			</div>
			<!--// Part Users Block -->


		</div>
	</div>
';
	}

}
