CREATE
	DATABASE IF NOT EXISTS $MYSQL_DATABASE;
CREATE
	USER '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_PASSWORD';
CREATE
	USER '$MYSQL_ADMIN_USER'@'localhost' IDENTIFIED BY '$MYSQL_ADMIN_PASSWORD';

GRANT ALL PRIVILEGES ON *.* TO '$MYSQL_ADMIN_USER'@'localhost' WITH GRANT OPTION;
GRANT
	ALL PRIVILEGES
	ON $MYSQL_DATABASE.* TO $MYSQL_USER
	WITH GRANT OPTION;

FLUSH PRIVILEGES;
