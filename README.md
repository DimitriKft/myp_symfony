Symfony Bundle Skeleton
The "Symfony Bundle Skeleton" is an application for creating reusable Symfony bundles. Forked from [symfony/demo][1]

Requirements
* PHP 7.2.9 or higher; * PDO-SQLite PHP extension enabled; * and the [usual Symfony application requirements][2].

Installation
$ git clone https://github.com/msalsas/symfony-bundle-skeleton.git
Install Composer dependencies:

$ composer install
Usage
Run this command to create the new bundle in /lib:

$ php bin/console skeleton-bundle:create
You will be asked for some needed arguments for the bundle structure and files.

There's no need to configure anything to run the application. If you have [installed Symfony][4], run this command and access the application in your browser at the given URL (<https://localhost:8000> by default):

$ cd symfony-bundle-skeleton/
$ symfony serve
If you don't have the Symfony binary installed, run php -S localhost:8000 -t public/ to use the built-in PHP web server or [configure a web server][3] like Nginx or Apache to run the application.

Tests
Execute this command to run tests:

$ cd symfony-bundle-skeleton/
$ ./bin/phpunit
[1]: https://github.com/symfony/demo [2]: https://symfony.com/doc/current/reference/requirements.html [3]: https://symfony.com/doc/current/cookbook/configuration/web_server_configuration.html [4]: https://symfony.com/download [5]: https://github.com/symfony/webpack-encore