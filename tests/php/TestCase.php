<?php

/**
 * Test Case.
 *
 * @package   ThoughtsIdeas\WordPress\Infrastructure
 * @author    Thoughts & Ideas <hello@thoughtsandideas.uk>
 * @link      https://www.thoughtsandideas.uk/
 * @license   MIT
 * @copyright 2022-2024 Thoughts & Ideas Limited.
 */

declare(strict_types=1);

namespace ThoughtsIdeas\WordPress\Infrastructure\Tests;

use Brain\Monkey;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Yoast\PHPUnitPolyfills\TestCases\TestCase as YoastTestCase;

class TestCase extends YoastTestCase
{
	// Adds Mockery expectations to the PHPUnit assertions count.
	use MockeryPHPUnitIntegration;

	public function setUp(): void
	{
		parent::setUp();
		Monkey\setUp();
	}

	public function tearDown(): void
	{
		Monkey\tearDown();
		parent::tearDown();
	}
}
