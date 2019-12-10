# Air app
This app allows you to check air quality level in your area.

### Prerequisites
- PHP 7.3 or higher
- Composer
- Database (I used MySQL 8.0.17)

### Installation

Download repository from github:

    git clone https://github.com/delyro/airapp.git

Install dependencies with composer:

    composer install

Configure .env.example file (add your database credentials) and rename it to .env.

If you using MySQL 8 you have to change authentication method to mysql_native_password. Example:
```sql
ALTER USER 'yourname'@'localhost' IDENTIFIED WITH mysql_native_password BY 'yourpassword';

```
Do not forget to grant privileges to database.

Generate key:
```php
php artisan key:generate
```

Run migration:

```php
php artisan migrate
```
Populate database with cities and stations:
```php
php artisan db:seed
```

Finally, run the application:
```php
php artisan serve
```

The will be available at [localhost:8000](http://localhost:8000 "localhost:8000")