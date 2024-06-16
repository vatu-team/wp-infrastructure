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
    protected string $service_name = 'dummy';

    public function register(): void
    {
        // Add WordPress Hooks here.
    }

    /**
     * Test Helper.
     */
    public function getServicePrefix(): string
    {
        return $this->service_prefix;
    }

    /**
     * Test Helper.
     */
    public function getHookPrefix(): string
    {
        return $this->hook_prefix;
    }
}
