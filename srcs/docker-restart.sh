sudo docker-compose -f docker-compose2.yml down
sudo docker volume rm $(sudo docker volume ls -q)
sudo docker-compose -f docker-compose2.yml up --build
sudo docker exec -it mariadb /bin/bash
