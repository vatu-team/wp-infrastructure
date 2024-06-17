<?php

/**
 * Abstract: Serivce Provider
 *
 * @package   ThoughtsIdeas\Wordpress\Infrastructure
 * @author    Thoughts & Ideas <hello@thoughtsandideas.uk>
 * @link      https://www.thoughtsandideas.uk/
 * @license   MIT
 * @copyright 2022-2024 Thoughts & Ideas Limited.
 */

declare(strict_types=1);

namespace ThoughtsIdeas\Wordpress\Infrastructure\Services;

abstract class ServiceProvider implements Provider
{
    protected string $identifier;

    protected string $service_prefix;

    protected string $hook_prefix;

    /**
     * @var array<string>
     */
    protected array $service_class_collection = [];

    /**
     * @var array<string,Service>
     */
    private array $service_collection = [];

    public function __construct(
        string $service_prefix,
        string $hook_prefix
    ) {
        $this->service_prefix = $service_prefix;
        $this->hook_prefix    = $hook_prefix;
    }

    public function getIdentifier(): string
    {
        return "{$this->service_prefix}.{$this->identifier}";
    }

    /**
     * @return array<string,Service>
     */
    public function getServiceCollection(): array
    {
        return $this->service_collection;
    }

    public function initializeServiceCollection(): void
    {
        foreach ( $this->service_class_collection as $service_class ) {
            $service = $this->initializeService( $service_class );
            $this->service_collection[ $service->getName() ] = $service;

            if ( !($this->service_collection[ $service->getName() ] instanceof Registrable) ) {
                continue;
            }

            $this->service_collection[ $service->getName() ]->register();
        }
    }

    private function initializeService(string $service): Service
    {
        /**
         * @var Service $return
         */
        $return = new $service(
            "{$this->service_prefix}.{$this->identifier}",
            "{$this->hook_prefix}.{$this->identifier}"
        );
        return $return;
    }
}
