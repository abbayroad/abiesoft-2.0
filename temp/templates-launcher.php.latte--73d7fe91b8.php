<?php

use Latte\Runtime as LR;

/** source: ..\templates\launcher.php.latte */
final class Template73d7fe91b8 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['title' => 'blockTitle', 'content' => 'blockContent', 'footer' => 'blockFooter'],
	];


	public function main(): array
	{
		extract($this->params);
		echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(\AbieSoft\Utilities\Config::envReader('BASEURL'))) /* line 8 */;
		echo '/assets/fa/css/all.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>';
		echo LR\Filters::escapeHtmlText(\AbieSoft\Utilities\Config::envReader('WEB_TITLE')) /* line 10 */;
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('title', get_defined_vars()) /* line 10 */;
		echo '</title>
    <script>const baseurl = ';
		echo LR\Filters::escapeJs(\AbieSoft\Utilities\Config::envReader('BASEURL')) /* line 11 */;
		echo '</script>
</head>

<body onload="jam()">
';
		$this->createTemplate('components/navbar.php.latte', $this->params, "include")->renderToContentType('html', "navbar") /* line 15 */;
		$this->createTemplate('components/menu.php.latte', $this->params, "include")->renderToContentType('html', "menu") /* line 16 */;
		$this->createTemplate('components/notifikasi.php.latte', $this->params, "include")->renderToContentType('html', "notifikasi") /* line 17 */;
		echo '    <div class="absolute top-[60px] left-[200px] right-0 bottom-0 bg-slate-100 overflow-y-auto">';
		$this->renderBlock('content', get_defined_vars()) /* line 18 */;
		echo '</div>
    <div>';
		$this->renderBlock('footer', get_defined_vars()) /* line 19 */;
		echo '</div>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(\AbieSoft\Utilities\Config::envReader('BASEURL').'/assets/js/jquery-3.6.0.min.js')) /* line 20 */;
		echo '"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(\AbieSoft\Utilities\Config::envReader('BASEURL').'/assets/js/masonry.pkgd.min.js')) /* line 21 */;
		echo '"></script>
    <script src="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl(\AbieSoft\Utilities\Config::envReader('BASEURL').'/assets/js/default.js')) /* line 22 */;
		echo '"></script>
</body>

</html>';
		return get_defined_vars();
	}


	/** {block title} on line 10 */
	public function blockTitle(array $ʟ_args): void
	{
		
	}


	/** {block content} on line 18 */
	public function blockContent(array $ʟ_args): void
	{
		
	}


	/** {block footer} on line 19 */
	public function blockFooter(array $ʟ_args): void
	{
		echo '&copy; ';
		echo LR\Filters::escapeHtmlText(\AbieSoft\Utilities\Config::envReader('WEB_TITLE') .' | '. date('Y')) /* line 19 */;
		
	}

}
