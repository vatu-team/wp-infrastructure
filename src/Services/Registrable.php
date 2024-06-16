<?php

/**
 * Interface: Registrable
 *
 * Register class with WordPress.
 *
 * @package   ThoughtsIdeas\Wordpress\Infrastructure
 * @author    Thoughts & Ideas <hello@thoughtsandideas.uk>
 * @link      https://www.thoughtsandideas.uk/
 * @license   MIT
 * @copyright 2022-2024 Thoughts & Ideas Limited.
 */

declare(strict_types=1);

namespace ThoughtsIdeas\Wordpress\Infrastructure\Services;

interface Registrable
{
    /**
     * Register the service.
     *
     * @return void
     */
    public function register(): void;
}
