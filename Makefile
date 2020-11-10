up:
	docker-compose up -d
upb:
	docker-compose up -d --build
sh:
	docker-compose exec app sh
migrate:
	docker-compose exec app php artisan migrate