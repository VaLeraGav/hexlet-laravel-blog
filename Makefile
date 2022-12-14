start:
	php artisan serve

test:
	./vendor/bin/phpunit tests

test-artisan:
	php artisan test

start-frontend:
	npm run dev

watch:
	npm run watch

clear:
	php artisan view:clear

tinker:
	php artisan tinker

#важно! после добавление миграции выполнить эту функцию
migrate:
	php artisan migrate
