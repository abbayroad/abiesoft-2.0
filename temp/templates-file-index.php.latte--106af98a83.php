<?php

use Latte\Runtime as LR;

/** source: ../templates/file/index.php.latte */
final class Template106af98a83 extends Latte\Runtime\Template
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
		<div id=\'loadfolder\'>Loading..</div>
	</div>
';
	}

}
