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
    protected string $name;

    protected string $hook;

    public function __construct(
        string $hook_prefix
    ) {
        $this->hook = "{$hook_prefix}.{$this->name}";
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getHook(): string
    {
        return $this->hook;
    }
}
