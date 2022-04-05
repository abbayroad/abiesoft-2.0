<?php

use Latte\Runtime as LR;

/** source: ..\templates\components\navbar.php.latte */
final class Template3446d986a4 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['navbar' => 'blockNavbar'],
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('navbar', get_defined_vars()) /* line 1 */;
		return get_defined_vars();
	}


	/** {block navbar} on line 1 */
	public function blockNavbar(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '<nav class="bg-sky-800 absolute top-0 left-0 right-0">
    <div class="flex justify-between items-center">
        <div class="text-white font-semibold text-xl p-4">
            <a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(\AbieSoft\Utilities\Config::envReader('BASEURL'))) /* line 5 */;
		echo '">';
		echo ($this->filters->replace)(\AbieSoft\Utilities\Config::envReader('WEB_TITLE'), 'Soft', '<span class="text-yellow-400">Soft</span>') /* line 5 */;
		echo '</a>
        </div>
        <div class="pr-4 flex items-center">
            <div onclick=\'return shownotifikasi()\' class="w-[70px] h-[30px] flex items-center justify-center mr-2 text-sm cursor-pointer bg-sky-700 rounded-full">
                <i class="fa-solid fa-bell text-yellow-400"></i>
                <div class="ml-2 w-[25px] text-center text-slate-100 font-semibold">0</div>
            </div>
            <div>
                <div class="cursor-pointer bg-white rounded-full overflow-hidden w-[40px] h-[40px]" onclick="return showprofilemenu()">
                    <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(\AbieSoft\Utilities\Config::envReader('BASEURL').'/assets/media/images/photo_default.jpg')) /* line 14 */;
		echo '" class="object-cover w-[40px] h-[40px]">
                </div>
                <div id="profilemenu" class="display-none w-0 h-0 overflow-hidden">
                    <a href="" class="px-4 py-2 block font-semibold hover:bg-gray-100">
                        <div class="flex items-center">
                            <i class="fa-solid fa-user px-2 font-sm mr-2"></i>
                            <span>Profile</span>
                        </div>
                    </a>
                    <a href="" class="px-4 py-2 block font-semibold hover:bg-gray-100">
                        <div class="flex items-center">
                            <i class="fa-solid fa-message px-2 font-sm mr-2"></i>
                            <span>Pesan</span>
                        </div>
                    </a>
                    <div class="py-4 px-4"><hr></div>
                    <a href="" class="px-4 py-2 block font-semibold hover:bg-gray-100">
                        <div class="flex items-center">
                            <i class="fa-solid fa-arrow-right-from-bracket px-2 font-sm mr-2"></i>
                            <span>Logout</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
';
	}

}
