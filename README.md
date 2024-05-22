docker pull mysql
docker run -p 3306:3306 -e MYSQL_ROOT_PASSWORD=abcd1234 -d mysql