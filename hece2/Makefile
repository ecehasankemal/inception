COMPOSE_FILE=./srcs/docker-compose.yml
DATA_DIR=$(HOME)/data
WORDPRESS_DIR=$(DATA_DIR)/wordpress
MARIADB_DIR=$(DATA_DIR)/mariadb

.PHONY: all down re clean stop_containers rm_containers rm_images rm_volumes rm_networks add_host logs

all: add_host
	@mkdir -p $(WORDPRESS_DIR)
	@mkdir -p $(MARIADB_DIR)
	@docker-compose -f $(COMPOSE_FILE) up

down:
	@docker-compose -f $(COMPOSE_FILE) down

re:
	@docker-compose -f $(COMPOSE_FILE) up --build

clean: stop_containers rm_containers rm_images rm_volumes rm_networks
	@sudo rm -rf $(DATA_DIR)

stop_containers:
	@if [ -n "$$(docker ps -q)" ]; then \
		docker stop $$(docker ps -q); \
	fi

rm_containers:
	@if [ -n "$$(docker ps -qa)" ]; then \
		docker rm $$(docker ps -qa); \
	fi

rm_images:
	@if [ -n "$$(docker images -q)" ]; then \
		docker rmi -f $$(docker images -q); \
	fi

rm_volumes:
	@if [ -n "$$(docker volume ls -q)" ]; then \
		docker volume rm $$(docker volume ls -q); \
	fi

rm_networks:
	@if [ -n "$$(docker network ls --filter type=custom -q)" ]; then \
		docker network rm $$(docker network ls --filter type=custom -q); \
	fi

logs:
	@docker-compose -f $(COMPOSE_FILE) logs -f
