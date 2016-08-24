# Attendance

#Installation
Installation Requirement :
  - PHP 5 Above, set environtment variabel for PHP : 
  	- Start->Control Panel\System and Security\System->advanced system settings.
  	- Then click->environment variables.
  	- Search "Path" on the System Variables -> Edit
  	- After that, on the variable value, add the ";"
  	- And Then, copy->Paste the address version php (example:"C:\xampp\php")
  	- click "ok" to Finish
  - Mysql
Installation Steps :
  - Create database in your mysql 
  - Download and extract the code, open terminal or command prompt go to your Attendance Apps directory.
  - Download composer, install, migrate and run, with command : 
```sh
 php -r "readfile('https://getcomposer.org/installer');" | php
 php composer.phar install
 php artisan migrate
 php artisan serve
```
  - Open your browser and enter the address http://localhost:8000 or http://127.0.0.1:8000
  
