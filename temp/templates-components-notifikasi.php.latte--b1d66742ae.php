<?php

use Latte\Runtime as LR;

/** source: ..\templates\components\notifikasi.php.latte */
final class Templateb1d66742ae extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['notifikasi' => 'blockNotifikasi'],
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('notifikasi', get_defined_vars()) /* line 1 */;
		return get_defined_vars();
	}


	/** {block notifikasi} on line 1 */
	public function blockNotifikasi(array $ʟ_args): void
	{
		echo '    <div id=\'notifikasi\' class="display-none w-0 h-0 overflow-hidden">
        <div class="p-4 text-center font-semibold">Notifikasi</div>
        <hr>
        <div class="text-center p-4" id="kontennotifikasi">Loading..</div>
    </div>
';
	}

}
