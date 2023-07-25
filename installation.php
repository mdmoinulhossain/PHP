* Download php(Current Stable version): https://www.php.net/

* Zip folder keep in c drive: C:\php-8.2.7

* Open The "edit the system environment variable" from controll panel.

* advance -> environment variable -> system variable -> select `path` -> select `edit`.

* (add new) for path -> C:\php-8.2.7.

---- Install successfully --------
start in project folder: php -S localhost:3000
goto browser, type: localhost:3000
* if execute specific file: -> localhost:3000/filesNames.php
------------ Executing PHP files 
$ php my_script.php

$ php -f my_script.php

* Pass the PHP code to execute directly on the command line.
$ php -r 'print_r(get_defined_constants());'