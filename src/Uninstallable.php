<?php

/**
 * Interface: Uninstallable
 *
 * @package   ThoughtsIdeas\WordPress\Infrastructure
 * @author    Thoughts & Ideas <hello@thoughtsandideas.uk>
 * @link      https://www.thoughtsandideas.uk/
 * @license   MIT
 * @copyright 2022-2024 Thoughts & Ideas Limited.
 */

declare(strict_types=1);

namespace ThoughtsIdeas\WordPress\Infrastructure;

interface Uninstallable
{
    public function uninstall(): void;
}
