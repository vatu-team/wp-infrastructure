<?php

/**
 * Test: Plugin
 *
 * @package ThoughtsIdeas\Wordpress\Infrastructure
 */

declare(strict_types=1);

namespace ThoughtsIdeas\Wordpress\Infrastructure\Tests\Unit;

use ThoughtsIdeas\Wordpress\Infrastructure\Plugin;
use ThoughtsIdeas\Wordpress\Infrastructure\Tests\TestCase;

class PluginTest extends TestCase
{
    /**
     * Basic test to ensure class implements Provider interface.
     *
     * @test
     * @covers \ThoughtsIdeas\Wordpress\Infrastructure\Plugin
     *
     * @return void
     */
    public function testInstanceOfProvider(): void
    {
        self::assertInstanceOf(
            Plugin::class,
            new DummyPlugin()
        );
    }
}
