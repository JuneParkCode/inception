NAME = inception

SRC_DIR = ./srcs

DOCKER_COMPOSE_FILE = $(SRC_DIR)/docker_compose.yml

DOCKER_COMPOSE = sudo docker-compose -f $(DOCKER_COMPOSE_FILE)

# install docker
install:
	echo "INSTALL DOCKER"
	curl -fsSL https://get.docker.com -o get-docker.sh
	sudo sh get-docker.sh
	echo "INSTALL DOCKER-COMPOSE"
	sudo curl -L "https://github.com/docker/compose/releases/download/2.15.1/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
	sudo chmod +x /usr/local/bin/docker-compose
	sudo docker-compose --version


# setup
all : up

$(NAME) : all

up	:
	$(DOCKER_COMPOSE) up
down :
	$(DOCKER_COMPOSE) down
stop :
	$(DOCKER_COMPOSE) stop
start :
	$(DOCKER_COMPOSE) start
restart :
	$(DOCKER_COMPOSE) restart
