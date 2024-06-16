<?php

/**
 * Interface: Service
 *
 * @package   ThoughtsIdeas\Wordpress\Infrastructure
 * @author    Thoughts & Ideas <hello@thoughtsandideas.uk>
 * @link      https://www.thoughtsandideas.uk/
 * @license   MIT
 * @copyright 2022-2024 Thoughts & Ideas Limited.
 */

declare(strict_types=1);

namespace ThoughtsIdeas\Wordpress\Infrastructure\Services;

abstract class Service
{
    protected string $service_name;

    protected string $service_prefix;

    protected string $hook_prefix;

    public function __construct(
        string $service_prefix,
        string $hook_prefix
    ) {
        $this->service_prefix = $service_prefix;
        $this->hook_prefix    = $hook_prefix;
    }

    public function getName(): string
    {
        return $this->service_prefix . "." . $this->service_name;
    }
}
