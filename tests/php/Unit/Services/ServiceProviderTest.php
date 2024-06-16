<?php

/**
 * Test: Service Provider
 *
 * @package ThoughtsIdeas\Wordpress\Infrastructure
 */

declare(strict_types=1);

namespace ThoughtsIdeas\Wordpress\Infrastructure\Tests\Unit\Services;

use ThoughtsIdeas\Wordpress\Infrastructure\Services\Provider;
use ThoughtsIdeas\Wordpress\Infrastructure\Services\Service;
use ThoughtsIdeas\Wordpress\Infrastructure\Services\ServiceProvider;
use ThoughtsIdeas\Wordpress\Infrastructure\Tests\TestCase;

class ServiceProviderTest extends TestCase
{
    /**
     * Basic test to ensure class implements Provider interface.
     *
     * @test
     * @covers \ThoughtsIdeas\Wordpress\Infrastructure\Services\ServiceProvider
     *
     * @return void
     */
    public function testInstanceOfProvider(): void
    {
        self::assertInstanceOf(
            Provider::class,
            new DummyServiceProvider(
                service_prefix: 'thoughtsideas.infrastructure',
                hook_prefix: 'thoughtsideas.infrastructure'
            )
        );
    }

    /**
     * Ensure class is instance of ServiceProvider.
     *
     * @test
     * @covers \ThoughtsIdeas\Wordpress\Infrastructure\Services\ServiceProvider
     *
     * @return void
     */
    public function testInstanceOfServiceProvider(): void
    {
        self::assertInstanceOf(
            ServiceProvider::class,
            new DummyServiceProvider(
                service_prefix: 'thoughtsideas.infrastructure',
                hook_prefix: 'thoughtsideas.infrastructure'
            )
        );
    }

    /**
     * Service Provider Name is returned as String.
     *
     * @test
     * @covers \ThoughtsIdeas\Wordpress\Infrastructure\Services\ServiceProvider::getIdentifier
     *
     * @return void
     */
    public function testServiceReturnsIdentifierAsString(): void
    {
        $service_provider = new DummyServiceProvider(
            service_prefix: 'thoughtsideas.infrastructure',
            hook_prefix: 'thoughtsideas.infrastructure'
        );

        self::assertIsString(
            $service_provider->getIdentifier()
        );
    }

    /**
     * Service Provider Name is returned as String.
     *
     * @test
     * @covers \ThoughtsIdeas\Wordpress\Infrastructure\Services\ServiceProvider::getIdentifier
     *
     * @return void
     */
    public function testServiceReturnsConcatinatedIdentifier(): void
    {
        $service_provider = new DummyServiceProvider(
            service_prefix: 'thoughtsideas.infrastructure',
            hook_prefix: 'thoughtsideas.infrastructure'
        );

        self::assertEquals(
            'thoughtsideas.infrastructure.dummyserviceprovider',
            $service_provider->getIdentifier()
        );
    }

    /**
     * Service is initialized.
     *
     * @test
     * @covers \ThoughtsIdeas\Wordpress\Infrastructure\Services\ServiceProvider::initializeServiceCollection
     * @covers \ThoughtsIdeas\Wordpress\Infrastructure\Services\ServiceProvider::initializeService
     *
     * @return void
     */
    public function testInitializeService(): void
    {
        $service_provider = new DummyServiceProvider(
            service_prefix: 'thoughtsideas.infrastructure',
            hook_prefix: 'thoughtsideas.infrastructure'
        );

        $service_provider->initializeServiceCollection();

        $act = $service_provider->getServiceCollection();

        self::assertInstanceOf(
            Service::class,
            $act['thoughtsideas.infrastructure.dummyserviceprovider.dummy']
        );
    }

    /**
     * Get Service Collection
     *
     * @test
     * @covers \ThoughtsIdeas\Wordpress\Infrastructure\Services\ServiceProvider::getServiceCollection
     *
     * @return void
     */
    public function testGetServiceCollectionReturnsArray(): void
    {
        $service_provider = new DummyServiceProvider(
            service_prefix: 'thoughtsideas.infrastructure',
            hook_prefix: 'thoughtsideas.infrastructure'
        );

        $service_provider->initializeServiceCollection();
        $service_collection = $service_provider->getServiceCollection();


        self::assertInstanceOf(
            expected: DummyService::class,
            actual: $service_collection['thoughtsideas.infrastructure.dummyserviceprovider.dummy']
        );
    }
}
