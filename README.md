1) - First check your php Version BY : php -v
   - in my case my php version is 8.1
   - sudo apt install php8.1-mysql
   - edit your php file : sudo nano /etc/php/8.1/apache2/php.ini
   - search for pdo and remove ; from extension=pdo_mysql
   - the result will be from ;extension=pdo_mysql to extension=pdo_mysql
