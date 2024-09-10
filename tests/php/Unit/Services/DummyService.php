<?php

/**
 * Dummy: Serivce
 *
 * @package   ThoughtsIdeas\Wordpress\Infrastructure
 * @author    Thoughts & Ideas <hello@thoughtsandideas.uk>
 * @link      https://www.thoughtsandideas.uk/
 * @license   MIT
 * @copyright 2022-2024 Thoughts & Ideas Limited.
 */

declare(strict_types=1);

namespace ThoughtsIdeas\Wordpress\Infrastructure\Tests\Unit\Services;

use ThoughtsIdeas\Wordpress\Infrastructure\Services\Registrable;
use ThoughtsIdeas\Wordpress\Infrastructure\Services\Service;

final class DummyService extends Service implements Registrable
{
    protected string $name = 'Service';

    public function register(): void
    {
        // Add WordPress Hooks here.
    }
}
