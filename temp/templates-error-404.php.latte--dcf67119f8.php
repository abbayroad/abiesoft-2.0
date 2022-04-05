<?php

use Latte\Runtime as LR;

/** source: ../templates/error/404.php.latte */
final class Templatedcf67119f8 extends Latte\Runtime\Template
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
		echo ' | Error 404';
	}


	/** {block content} on line 5 */
	public function blockContent(array $ʟ_args): void
	{
		echo '	<p>404 Error</p>
';
	}

}
