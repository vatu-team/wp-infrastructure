<?php

/**
 * Dummy: Serivce Loader
 *
 * @package   ThoughtsIdeas\Wordpress\Infrastructure
 * @author    Thoughts & Ideas <hello@thoughtsandideas.uk>
 * @link      https://www.thoughtsandideas.uk/
 * @license   MIT
 * @copyright 2022-2024 Thoughts & Ideas Limited.
 */

declare(strict_types=1);

namespace ThoughtsIdeas\Wordpress\Infrastructure\Tests\Unit\Services;

use ThoughtsIdeas\Wordpress\Infrastructure\Main;
use ThoughtsIdeas\Wordpress\Infrastructure\Services\ServiceLoader;

final class DummyServiceLoader extends ServiceLoader implements Main
{
	protected string $identifier = 'dummyserviceloader';

    /**
     * @var array<string>
     */
    protected array $provider_class_list = [
		DummyServiceProvider::class,
	];
}
