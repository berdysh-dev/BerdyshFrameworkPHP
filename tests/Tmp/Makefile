package=berdysh-framework

all: clean vendor run

run:
	php vendor/bin/phpunit vendor/berdysh-dev/${package}/tests

vendor:
	composer --dev --no-interaction require \
            berdysh-dev/${package} \
            phpunit/phpunit

clean:
	rm -rf composer.json composer.lock vendor *.php




