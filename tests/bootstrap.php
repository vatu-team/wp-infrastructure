<?php

/**
 * PHPUnit bootstrap file.
 *
 * @package   ThoughtsIdeas\WordPress\Infrastructure
 * @author    Thoughts & Ideas <hello@thoughtsandideas.uk>
 * @link      https://www.thoughtsandideas.uk/
 * @license   MIT
 * @copyright 2022-2024 Thoughts & Ideas Limited.
 */

declare(strict_types=1);

$root_dir = dirname( __DIR__ );

require_once $root_dir . '/tools/vendor/autoload.php';
require_once $root_dir . '/vendor/autoload.php';
require_once $root_dir . '/tests/php/TestCase.php';
