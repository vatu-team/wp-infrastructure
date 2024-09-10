<?php

/**
 * Dummy: Serivce Provider
 *
 * @package   ThoughtsIdeas\Wordpress\Infrastructure
 * @author    Thoughts & Ideas <hello@thoughtsandideas.uk>
 * @link      https://www.thoughtsandideas.uk/
 * @license   MIT
 * @copyright 2022-2024 Thoughts & Ideas Limited.
 */

declare(strict_types=1);

namespace ThoughtsIdeas\Wordpress\Infrastructure\Tests\Unit\Services;

use ThoughtsIdeas\Wordpress\Infrastructure\Services\ServiceProvider;

final class DummyServiceProvider extends ServiceProvider
{
    protected string $identifier = 'Provider';

    /**
     * @var array<string>
     */
    protected array $service_collection = [
        DummyService::class,
    ];
}
