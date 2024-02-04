<?php

/**
 * Interface: Deactivatable
 *
 * @package   ThoughtsIdeas\WordPress\Infrastructure
 * @author    Thoughts & Ideas <hello@thoughtsandideas.uk>
 * @link      https://www.thoughtsandideas.uk/
 * @license   MIT
 * @copyright 2022-2024 Thoughts & Ideas Limited.
 */

declare(strict_types=1);

namespace ThoughtsIdeas\WordPress\Infrastructure;

interface Deactivatable
{
    public function deactivate(): void;
}
