<?php

/**
 * Abstract: Plugin
 *
 * @package   ThoughtsIdeas\Wordpress\Infrastructure
 * @author    Thoughts & Ideas <hello@thoughtsandideas.uk>
 * @link      https://www.thoughtsandideas.uk/
 * @license   MIT
 * @copyright 2022-2024 Thoughts & Ideas Limited.
 */

declare(strict_types=1);

namespace ThoughtsIdeas\Wordpress\Infrastructure;

use ThoughtsIdeas\Wordpress\Infrastructure\Services\ServiceProvider;

abstract class Plugin implements Main
{
    /**
     * @var array<string,string>
     */
    protected array $service_provider_classes = [];

    /**
     * @var array<string,string>
     */
    protected array $queued_service_container = [];

    /**
     * @var array<string,ServiceProvider>
     */
    protected array $service_container = [];

    public function init(): void
    {
        // Enqueue Service Providers.
        $this->registerServiceProviderClasses();
    }

    /**
     * @return array<string,string>
     */
    private function getServiceProviderClasses(): array
    {
        return $this->service_provider_classes;
    }

    // private function enqueueServiceProviderClasses(): void
    // {
    //     foreach ( $this->getServiceProviderClasses() as $prefix => $provider ) {
    //         $this->service_container[ $prefix ] = $this->initializeServiceProvider( $provider );
    //     }
    // }

    private function registerServiceProviderClasses(): void
    {
        foreach ( $this->getServiceProviderClasses() as $prefix => $provider ) {
            $this->service_container[ $prefix ] = $this->initializeServiceProvider( $provider );
        }
    }

    private function initializeServiceProvider(string $service_provider): ServiceProvider
    {
        /**
         * @var ServiceProvider $return
         */
        $return = new $service_provider();
        return $return;
    }
}
