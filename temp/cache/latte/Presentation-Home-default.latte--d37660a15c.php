<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: /var/www/html/app/Presentation/Home/default.latte */
final class Template_d37660a15c extends Latte\Runtime\Template
{
	public const Source = '/var/www/html/app/Presentation/Home/default.latte';

	public const Blocks = [
		['content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		$this->renderBlock('content', get_defined_vars()) /* line 3 */;
	}


	/** {block content} on line 3 */
	public function blockContent(array $ʟ_args): void
	{
		echo '
<div>
    <h2>Hello World!</h2>
	<p>Tady je změna</p>
	<p>Tady je změna</p>
</div>';
	}
}
