## Installation

-   Clone repo

```php
git clone https://github.com/iqbalhasandev/laravel-developer-task-seoexpatebdltd.git
```

-   got to project folder

```php
 cd laravel-developer-task-seoexpatebdltd
```

-   the open terminal
-   run this command

```php
 cp .env.example .env
```

-   setup database

-   run composer install

```php
composer install
```

-   run migration

```php
php artisan migrate:fresh
```

-   now serve your application

```php
php artisan serve
```

-   To Test Your mail System please add mail smtp Details to .env file

```php

MAIL_MAILER=smtp
MAIL_HOST=Your.SMST.URL.com
MAIL_PORT=yourSMTPPort
MAIL_USERNAME=yourUsername
MAIL_PASSWORD=yourPassword
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="yourmail@domain.com"

```

## Security Vulnerabilities

If you discover a security vulnerability within this app, please send an e-mail to IQBAL HASAN via [info@iqbalhasan.dev](mailto:info@iqbalhasan.dev). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
