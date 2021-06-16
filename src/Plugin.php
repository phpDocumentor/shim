<?php

declare(strict_types=1);

namespace phpDocumentor;

use PharIo\ComposerDistributor\ConfiguredMediator;

final class Plugin extends ConfiguredMediator
{
	public function getDistributorConfig(): string
	{
		return __DIR__ . '/../mediator.xml';
	}
}
