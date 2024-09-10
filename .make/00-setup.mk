# Testing commands.

##@ Setup

setup: ## Setup project for development.
	composer install

##@ Testing

.PHONY: test
test: test-lint test-coding-standards test-static test-unit ## Run full test suite.

test-lint: ## Run PHP Parallel Lint
	docker-compose -f ./.docker/docker-compose.yml --env-file ./.docker/.env run --rm php-cli composer run test:lint:php

test-coding-standards: ## Run PHP CodeSniffer
	docker-compose -f ./.docker/docker-compose.yml --env-file ./.docker/.env run --rm php-cli composer run test:lint:coding-standards

test-static: ## Run PHP Stan
	docker-compose -f ./.docker/docker-compose.yml --env-file ./.docker/.env run --rm php-cli composer run test:static

test-unit: ## Run PHP Unit Tests.
	docker-compose -f ./.docker/docker-compose.yml --env-file ./.docker/.env run --rm php-cli composer run test:unit -- --coverage-html="tests/php/Coverage"

test-integration: ## Run PHP Unit Integration Tests.
	./tools/phpunit/vendor/bin/phpunit -c ./phpunit.xml.dist --testsuite unit
