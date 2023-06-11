all: clean vendor run

run:
	php vendor/bin/phpunit vendor/berdysh-dev/berdysh-framework/tests

vendor:
	composer --dev --no-interaction require \
            berdysh-dev/berdysh-framework \
            phpunit/phpunit

clean:
	rm -rf composer.json composer.lock vendor *.php




