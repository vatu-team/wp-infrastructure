<?php

/**
 * Test: Example
 *
 * @package ThoughtsIdeas\Wordpress\Infrastructure
 */

declare(strict_types=1);

namespace ThoughtsIdeas\Wordpress\Infrastructure\Tests\Unit;

use Yoast\PHPUnitPolyfills\TestCases\TestCase;
use Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;
use Brain\Monkey;
use Brain\Monkey\Functions;

/**
 * Test Example.
 *
 */
class ExampleTest extends TestCase
{
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

    /**
     * Example Test.
     *
     * @test
     * @coversNothing
     */
    public function testExample(): void
    {
        $this->assertTrue(true);
    }
}
