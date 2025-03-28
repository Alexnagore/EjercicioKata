.PHONY : main build-image build-container start test shell stop clean
main: build-image build-container

build-image:
	docker build -t docker-php-ejercicio-kata .

build-container:
	docker run -dt --name docker-php-ejercicio-kata -v .:/AlexNagore/EjercicioKata docker-php-ejercicio-kata
	docker exec docker-php-ejercicio-kata composer install

start:
	docker start docker-php-ejercicio-kata

test: start
	docker exec docker-php-ejercicio-kata ./vendor/bin/phpunit tests/$(target)

shell: start
	docker exec -it docker-php-ejercicio-kata /bin/bash

stop:
	docker stop docker-php-ejercicio-kata

clean: stop
	docker rm docker-php-ejercicio-kata
	rm -rf vendor
