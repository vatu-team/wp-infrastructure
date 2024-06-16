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
    public function testServicePrefixIsSet(): void
    {
        $service = new DummyService(
            service_prefix: 'thoughtsideas.infrastructure',
            hook_prefix: 'thoughtsideas.infrastructure'
        );

        self::assertIsString(
            $service->getServicePrefix()
        );

        self::assertSame(
            expected: 'thoughtsideas.infrastructure',
            actual: $service->getServicePrefix()
        );
    }

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
            service_prefix: 'thoughtsideas.infrastructure',
            hook_prefix: 'thoughtsideas.infrastructure'
        );

        self::assertIsString(
            $service->getHookPrefix()
        );

        self::assertSame(
            expected: 'thoughtsideas.infrastructure',
            actual: $service->getHookPrefix()
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
            service_prefix: 'thoughtsideas.infrastructure',
            hook_prefix: 'thoughtsideas.infrastructure'
        );

        self::assertIsString(
            $service->getName()
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
            service_prefix: 'thoughtsideas.infrastructure',
            hook_prefix: 'thoughtsideas.infrastructure'
        );

        self::assertSame(
            expected: 'thoughtsideas.infrastructure.dummy',
            actual: $service->getName()
        );
    }
}
