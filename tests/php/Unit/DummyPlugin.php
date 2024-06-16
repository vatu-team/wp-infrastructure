<?php

/**
 * Dummy: Plugin
 *
 * @package   ThoughtsIdeas\Wordpress\Infrastructure
 * @author    Thoughts & Ideas <hello@thoughtsandideas.uk>
 * @link      https://www.thoughtsandideas.uk/
 * @license   MIT
 * @copyright 2022-2024 Thoughts & Ideas Limited.
 */

declare(strict_types=1);

namespace ThoughtsIdeas\Wordpress\Infrastructure\Tests\Unit;

use ThoughtsIdeas\Wordpress\Infrastructure\Plugin;

class DummyPlugin extends Plugin
{
    private const HOOK_PREFIX    = 'thoughtsideas.dummy-plugin';
    private const SERVICE_PREFIX = 'thoughtsideas.dummy-plugin';

    /**
     * @var array<string,string>
     */
    protected array $service_provider_classes = [
        self::SERVICE_PREFIX . '.dummy' => Services\DummyServiceProvider::class,
    ];

    /**
     * Test Helper.
     */
    public function getServiceCollection(): array
    {
        return $this->service_container;
    }
}
