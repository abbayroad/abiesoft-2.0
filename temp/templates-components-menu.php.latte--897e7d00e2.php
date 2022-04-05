<?php

use Latte\Runtime as LR;

/** source: ..\templates\components\menu.php.latte */
final class Template897e7d00e2 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['menu' => 'blockMenu'],
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('menu', get_defined_vars()) /* line 1 */;
		return get_defined_vars();
	}


	/** {block menu} on line 1 */
	public function blockMenu(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '<div class="absolute top-[60px] w-[200px] bg-slate-200 bottom-[64px] left-0 overflow-hidden hover:overflow-y-auto">
    <div class="mt-3 p-4 text-center flex justify-left items-center">
        <div class="w-[50px] h-[50px] bg-slate-300 rounded-full overflow-hidden">
            <img src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(\AbieSoft\Utilities\Config::envReader('BASEURL'))) /* line 5 */;
		echo '/assets/media/images/photo_default.jpg" class="w-[50px] h-[50px] object-cover">
        </div>
        <div>
            <div class="w-[90px] text-xs ml-2 text-left">Login Sebagai,</div>
            <div class="w-[90px] h-[20px] font-semibold text-sm overflow-hidden ml-2 text-left">Sukron</div>
        </div>
    </div>
    <ul class="mt-4 pb-4">
        <li>
            <a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(\AbieSoft\Utilities\Config::envReader('BASEURL'))) /* line 14 */;
		echo '" class="px-4 py-2 block font-semibold h-[40px] ';
		echo LR\Filters::escapeHtmlAttr((explode('/',$_SERVER['REQUEST_URI'])[1] == '') ? '' : 'hover:') /* line 14 */;
		echo 'bg-slate-100 ';
		echo LR\Filters::escapeHtmlAttr((explode('/',$_SERVER['REQUEST_URI'])[1] == '') ? '' : 'hover:') /* line 14 */;
		echo 'shadow-sm ';
		echo LR\Filters::escapeHtmlAttr((explode('/',$_SERVER['REQUEST_URI'])[1] == '') ? '' : 'hover:') /* line 14 */;
		echo 'rounded-tl-full ';
		echo LR\Filters::escapeHtmlAttr((explode('/',$_SERVER['REQUEST_URI'])[1] == '') ? '' : 'hover:') /* line 14 */;
		echo 'rounded-bl-full ';
		echo LR\Filters::escapeHtmlAttr((explode('/',$_SERVER['REQUEST_URI'])[1] == '') ? '' : 'hover:') /* line 14 */;
		echo 'ml-4">
                <div class="flex items-center">
                    <div class="w-[40px]"><i class="fa-solid fa-dashboard px-2 font-sm mr-2"></i></div>
                    <span>Dashboard</span>
                </div>
            </a>
        </li>
        <li class="px-4 mt-4 mb-2 font-semibold text-sm text-slate-500">Menu Utama</li>
        <li>
            <a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(\AbieSoft\Utilities\Config::envReader('BASEURL'))) /* line 23 */;
		echo '/users" class="px-4 py-2 block font-semibold h-[40px] ';
		echo LR\Filters::escapeHtmlAttr((explode('/',$_SERVER['REQUEST_URI'])[1] == 'users') ? '' : 'hover:') /* line 23 */;
		echo 'bg-slate-100 ';
		echo LR\Filters::escapeHtmlAttr((explode('/',$_SERVER['REQUEST_URI'])[1] == 'users') ? '' : 'hover:') /* line 23 */;
		echo 'shadow-sm ';
		echo LR\Filters::escapeHtmlAttr((explode('/',$_SERVER['REQUEST_URI'])[1] == 'users') ? '' : 'hover:') /* line 23 */;
		echo 'rounded-tl-full ';
		echo LR\Filters::escapeHtmlAttr((explode('/',$_SERVER['REQUEST_URI'])[1] == 'users') ? '' : 'hover:') /* line 23 */;
		echo 'rounded-bl-full ';
		echo LR\Filters::escapeHtmlAttr((explode('/',$_SERVER['REQUEST_URI'])[1] == 'users') ? '' : 'hover:') /* line 23 */;
		echo 'ml-4">
                <div class="flex items-center">
                    <div class="w-[40px]"><i class="fa-solid fa-users px-2 font-sm mr-2"></i></div>
                    <span>Users</span>
                </div>
            </a>
        </li>
        <li class="px-4 mt-4 mb-2 font-semibold text-sm text-slate-500">Menu Kamu</li>
        <li>
            <a href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(\AbieSoft\Utilities\Config::envReader('BASEURL'))) /* line 32 */;
		echo '/file?folder=3312022145" class="px-4 py-2 block font-semibold h-[40px] ';
		echo LR\Filters::escapeHtmlAttr((explode('/',$_SERVER['REQUEST_URI'])[1] == 'file?folder=3312022145') ? '' : 'hover:') /* line 32 */;
		echo 'bg-slate-100 ';
		echo LR\Filters::escapeHtmlAttr((explode('/',$_SERVER['REQUEST_URI'])[1] == 'file?folder=3312022145') ? '' : 'hover:') /* line 32 */;
		echo 'shadow-sm ';
		echo LR\Filters::escapeHtmlAttr((explode('/',$_SERVER['REQUEST_URI'])[1] == 'file?folder=3312022145') ? '' : 'hover:') /* line 32 */;
		echo 'rounded-tl-full ';
		echo LR\Filters::escapeHtmlAttr((explode('/',$_SERVER['REQUEST_URI'])[1] == 'file?folder=3312022145') ? '' : 'hover:') /* line 32 */;
		echo 'rounded-bl-full ';
		echo LR\Filters::escapeHtmlAttr((explode('/',$_SERVER['REQUEST_URI'])[1] == 'file?folder=3312022145') ? '' : 'hover:') /* line 32 */;
		echo 'ml-4">
                <div class="flex items-center">
                    <div class="w-[40px]"><i class="fa-solid fa-archive px-2 font-sm mr-2"></i></div>
                    <span>File Manajer</span>
                </div>
            </a>
        </li>
        <li>
            <a href="" class="px-4 py-2 block font-semibold h-[40px] hover:bg-slate-100 hover:shadow-sm hover:rounded-tl-full hover:rounded-bl-full hover:ml-4">
                <div class="flex items-center">
                    <div class="w-[40px]"><i class="fa-solid fa-message px-2 font-sm mr-2"></i></div>
                    <span>Pesan</span>
                </div>
            </a>
        </li>
        <li class="px-4 mt-4 mb-2 font-semibold text-sm text-slate-500">Seting</li>
        <li>
            <a class="px-4 py-2 block font-semibold h-[40px]">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-[40px]"><i class="fa-solid fa-gear px-2 font-sm mr-2"></i></div>
                        <span>Aplikasi</span>
                    </div>
                </div>
            </a>
            <ul class="ml-4">
                <li>
                    <a href="" class="px-4 py-2 block font-semibold h-[40px] hover:bg-slate-100 hover:shadow-sm hover:rounded-tl-full hover:rounded-bl-full">
                        <div class="flex items-center">
                            <div class="w-[40px]"><i class="fa-solid fa-ellipsis px-2 font-sm mr-2"></i></div>
                            <span>Notifikasi</span>
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a class="px-4 py-2 block font-semibold h-[40px]">
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="w-[40px]"><i class="fa-solid fa-user-gear px-2 font-sm mr-2"></i></div>
                        <span>Akun</span>
                    </div>
                </div>
            </a>
            <ul class="ml-4">
                <li>
                    <a href="" class="px-4 py-2 block font-semibold h-[40px] hover:bg-slate-100 hover:shadow-sm hover:rounded-tl-full hover:rounded-bl-full">
                        <div class="flex items-center">
                            <div class="w-[40px]"><i class="fa-solid fa-ellipsis px-2 font-sm mr-2"></i></div>
                            <span>Umum</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="px-4 py-2 block font-semibold h-[40px] hover:bg-slate-100 hover:shadow-sm hover:rounded-tl-full hover:rounded-bl-full">
                        <div class="flex items-center">
                            <div class="w-[40px]"><i class="fa-solid fa-ellipsis px-2 font-sm mr-2"></i></div>
                            <span>Keamanan</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="" class="px-4 py-2 block font-semibold h-[40px] hover:bg-slate-100 hover:shadow-sm hover:rounded-tl-full hover:rounded-bl-full">
                        <div class="flex items-center">
                            <div class="w-[40px]"><i class="fa-solid fa-ellipsis px-2 font-sm mr-2"></i></div>
                            <span>Photo</span>
                        </div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</div>
<div class="text-center absolute w-[200px] left-0 bottom-0 h-[64px] bg-sky-800 text-slate-100 flex items-center justify-center">
    <div class="font-semibold">
        <div class="text-sm">';
		echo LR\Filters::escapeHtmlText(\AbieSoft\Magic\Reader::hariini('tglfull')) /* line 108 */;
		echo '</div>
        <div class="text-lg mt-[-8px]"><span id="waktu">00:00:00</span> <span>WIB</span></div>
    </div>
</div>
';
	}

}
