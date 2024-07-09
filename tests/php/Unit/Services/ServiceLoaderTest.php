<?php

/**
 * Test: Service Loader
 *
 * @package ThoughtsIdeas\Wordpress\Infrastructure
 */

declare(strict_types=1);

namespace ThoughtsIdeas\Wordpress\Infrastructure\Tests\Unit\Services;

use ThoughtsIdeas\Wordpress\Infrastructure\Services\Loader;
use ThoughtsIdeas\Wordpress\Infrastructure\Services\Provider;
use ThoughtsIdeas\Wordpress\Infrastructure\Services\ServiceProvider;
use ThoughtsIdeas\Wordpress\Infrastructure\Tests\TestCase;

class ServiceLoaderTest extends TestCase
{
    /**
     * Basic test to ensure class implements Loader interface.
     *
     * @test
     * @covers \ThoughtsIdeas\Wordpress\Infrastructure\Services\ServiceLoader
     *
     * @return void
     */
    public function testInstanceOfProvider(): void
    {
        self::assertInstanceOf(
            Loader::class,
            new DummyServiceLoader(
                service_prefix: 'thoughtsideas.infrastructure',
                hook_prefix: 'thoughtsideas.infrastructure'
            )
        );
    }

    /**
     * Get Service Collection
     *
     * @test
     * @covers \ThoughtsIdeas\Wordpress\Infrastructure\Services\ServiceLoader::getProviderCollection
     *
     * @return void
     */
    public function testGetProviderCollectionReturnsArray(): void
    {
        $service_loader = new DummyServiceLoader(
            service_prefix: 'thoughtsideas.infrastructure',
            hook_prefix: 'thoughtsideas.infrastructure'
        );

        $service_loader->initializeProviderCollection();

        $act = $service_loader->getProviderCollection();

        self::assertInstanceOf(
            expected: DummyServiceProvider::class,
            actual: $act['thoughtsideas.infrastructure.dummyserviceloader.dummyserviceprovider']
        );
    }

    /**
     * ServiceProvider is added to collection.
     *
     * @test
     * @covers \ThoughtsIdeas\Wordpress\Infrastructure\Services\ServiceLoader::initializeProviderCollection
     *
     * @return void
     */
    public function testInitializerProviderCollection(): void
    {
        $service_loader = new DummyServiceLoader(
            service_prefix: 'thoughtsideas.infrastructure',
            hook_prefix: 'thoughtsideas.infrastructure'
        );

        $service_loader->initializeProviderCollection();

        $act = $service_loader->getProviderCollection();


        self::assertInstanceOf(
            ServiceProvider::class,
            $act['thoughtsideas.infrastructure.dummyserviceloader.dummyserviceprovider']
        );
    }

    /**
     * Service is initialized.
     *
     * @test
     * @covers \ThoughtsIdeas\Wordpress\Infrastructure\Services\ServiceLoader::initializeProvider
     *
     * @return void
     */
    public function testInitializeProvider(): void
    {
        $service_loader = new DummyServiceLoader(
            service_prefix: 'thoughtsideas.infrastructure',
            hook_prefix: 'thoughtsideas.infrastructure'
        );

        $service_provider = DummyServiceProvider::class;

        $act = $service_loader->initializeProvider( service_provider: $service_provider );

        self::assertInstanceOf( Provider::class, $act );
    }
}
