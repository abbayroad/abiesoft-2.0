<?php

use Latte\Runtime as LR;

/** source: ../templates/home/index.php.latte */
final class Templated03c75c019 extends Latte\Runtime\Template
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
		echo '	<div class="flex justify-between items-center p-8">
		<div class="text-2xl font-semibold">Dashboard</div>
		<div class="rounded-full bg-slate-300 text-white font-semibold font-sm px-3">Home - Dashboard</div>
	</div>
	<div class="px-8"><hr></div>
	<div class="p-8">

		<div class="flex p-4">
			<div class="w-1/12"></div>
			<div class="w-10/12">
				<div class="p-4 bg-white shadow-sm rounded-md text-center">
					Total Data
					<div class="text-2xl font-bold" id="totalwarga">Loading..</div>
				</div>
			</div>
			<div class="w-1/12"></div>
		</div>

		<div class="flex p-4">
			<div class="w-1/12"></div>
			<div class="w-5/12 mr-4">
				<div class="flex justify-between items-center p-4 bg-white shadow-sm rounded-md">
					<div>Total Users</div>
					<div class="text-2xl font-bold" id="totalusers">Loading..</div>
				</div>
			</div>
			<div class="w-5/12">
				<div class="flex justify-between items-center p-4 bg-white shadow-sm rounded-md">
					<div>Total Pesan</div>
					<div class="text-2xl font-bold" id="totalpesan">Loading..</div>
				</div>
			</div>
			<div class="w-1/12"></div>
		</div>
	</div>
';
	}

}
