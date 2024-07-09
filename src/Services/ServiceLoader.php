<?php

/**
 * Abstract: Serivce Loader
 *
 * @package   ThoughtsIdeas\Wordpress\Infrastructure
 * @author    Thoughts & Ideas <hello@thoughtsandideas.uk>
 * @link      https://www.thoughtsandideas.uk/
 * @license   MIT
 * @copyright 2022-2024 Thoughts & Ideas Limited.
 */

declare(strict_types=1);

namespace ThoughtsIdeas\Wordpress\Infrastructure\Services;

abstract class ServiceLoader implements Loader
{
    /**
     * WordPress action to trigger the service registration on.
     */
    protected string $registration_action = 'plugins_loaded';

    protected string $identifier;

    protected string $service_prefix;

    protected string $hook_prefix;

    /**
     * @var array<string>
     */
    protected array $provider_class_list = [];

    /**
     * Providers to be loaded.
     *
     * @var array<string,Provider>
     */
    protected array $provider_collection = [];

    public function __construct(
        string $service_prefix,
        string $hook_prefix
    ) {
            $this->service_prefix = $service_prefix;
            $this->hook_prefix    = $hook_prefix;
    }

    public function pluginsLoaded(): void
    {
        \add_action(
            $this->registration_action,
            [ $this, 'initializeProviderCollection' ],
            10,
            0
        );
    }

    /**
     * @return array<string,Provider>
     */
    public function getProviderCollection(): array
    {
        return $this->provider_collection;
    }

    public function initializeProviderCollection(): void
    {
        foreach ( $this->provider_class_list as $provider_class ) {
            $provider = $this->initializeProvider( $provider_class );
            $this->provider_collection[ $provider->getIdentifier() ] = $provider;

            if ( ! ($this->provider_collection[ $provider->getIdentifier() ] instanceof ServiceProvider) ) {
                    continue;
            }

            $this->provider_collection[ $provider->getIdentifier() ]->initializeServiceCollection();
        }
    }

    public function initializeProvider(string $service_provider): ServiceProvider
    {
        /**
         * @var ServiceProvider $return
         */
        $return = new $service_provider(
            "{$this->service_prefix}.{$this->identifier}",
            "{$this->hook_prefix}.{$this->identifier}"
        );
        return $return;
    }
}
