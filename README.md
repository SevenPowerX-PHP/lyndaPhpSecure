# [Lynda.com | Creating Secure PHP Websites (2014)](http://nnm-club.me/forum/viewtopic.php?t=1188569)



Используйте php.net для update php --version

Известные уязвимости [CVE](https://cve.mitre.org/)

phpinfo() and phpMyAdmin 
- phpinfo: powerful server information
- phpMyAdmin: powerful access to data 

Неиспользуйте на продакшене. используйте обыкновенный MySql из командной строки
 - Best security is to use neither
 - Require a password
 - With Apache, use .htaccess files
 - HTTP authentication mode in phpMyAdmin


 https://docs.phpmyadmin.net/en/latest/setup.html#securing-your-phpmyadmin-installation

## 2.04 Configure Error Reporting 
В файле php.ini - настройки конфигурации.
Должно быть Две конфигурации одна для продкшина и одна для разработки
* errer_reporting - (отчеты об ошибках)
* display_errors - (отображение ошибок в браузере пользователя)
* log_errors - (запись ошибок в log file)
* error_log - (путь к log file)

 - http://php.net/manual/ru/errorfunc.constants.php

 - [Русский PHP.INI](https://sites.google.com/site/dlasebamne/apache-i-php/russkij-php-ini)
 - [Русский перевод файла "php.ini"](http://www.codenet.ru/webmast/apache/Apache-WindowsNT/phpini.php)