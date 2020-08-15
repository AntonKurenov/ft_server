CREATE DATABASE wordpress;
CREATE USER 'elovegoo'@'localhost' IDENTIFIED BY 'admin';
GRANT ALL PRIVILEGES ON wordpress.* TO 'elovegoo'@'localhost';
FLUSH PRIVILEGES;
