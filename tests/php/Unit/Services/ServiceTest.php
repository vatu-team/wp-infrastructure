<?php

/**
 * Test: Service
 *
 * @package ThoughtsIdeas\Wordpress\Infrastructure
 */

declare(strict_types=1);

namespace ThoughtsIdeas\Wordpress\Infrastructure\Tests\Unit\Services;

use ThoughtsIdeas\Wordpress\Infrastructure\Tests\TestCase;

class ServiceTest extends TestCase
{
    /**
     * Service Parameters are set.
     *
     * @test
     * @covers \ThoughtsIdeas\Wordpress\Infrastructure\Services\Service
     *
     * @return void
     */
    public function testServiceHookIsSet(): void
    {
        $service = new DummyService(
            hook_prefix: 'ThoughtsIdeas.Plugin'
        );

        self::assertSame(
            expected: 'ThoughtsIdeas.Plugin.Service',
            actual: $service->getHook()
        );
    }

    /**
     * Service Name is returned as String.
     *
     * @test
     * @covers \ThoughtsIdeas\Wordpress\Infrastructure\Services\Service::getName
     *
     * @return void
     */
    public function testServiceReturnsNameAsString(): void
    {
        $service = new DummyService(
            hook_prefix: 'ThoughtsIdeas.Plugin'
        );

        self::assertIsString(
            $service->getName()
        );
    }

    /**
     * Service Hook is concatanated with prefix.
     *
     * @test
     * @covers \ThoughtsIdeas\Wordpress\Infrastructure\Services\Service::getHook
     *
     * @return void
     */
    public function testServiceHookIsConcatanatedWithPrefix(): void
    {
        $service = new DummyService(
            hook_prefix: 'ThoughtsIdeas.Plugin'
        );

        self::assertSame(
            expected: 'ThoughtsIdeas.Plugin.Service',
            actual: $service->getHook()
        );
    }

    /**
     * Service Name is concatanated with prefix.
     *
     * @test
     * @covers \ThoughtsIdeas\Wordpress\Infrastructure\Services\Service::getName
     *
     * @return void
     */
    public function testServiceIsConcatanatedWithPrefix(): void
    {
        $service = new DummyService(
            hook_prefix: 'ThoughtsIdeas.Plugin'
        );

        self::assertSame(
            expected: 'Service',
            actual: $service->getName()
        );
    }
}
