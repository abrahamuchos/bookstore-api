# Laravel API Course
Laravel course youtube. 
<br/>

Title: Laravel 8.3 API Crash Course For Beginners | Laravel 8 API Crash Course | Laravel 8 API Tutorial

Channel: Code with Dary

url: https://youtu.be/xvqPEEpRBJ4

# Getting started

<br/>

## Installation
<hr/>

Install all the dependencies using composer
```
$ composer update
```

Copy the example envfile and make  configuration  changes in the .env file.

```
$ cp .env.example .env
```

Generate a new application key
```
$ php artisan key:generate
```

Run migration
```
$ php artisan migrate
```

<br/>

## Laravel Passport
<hr>

Install 
```
$ composer require laravel/passport
$ php artisan migrate
$ php artisan passport:install
```

Config

Add in ```App\Models\User```
```
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
}

```
Add in ```App\Providers\AuthServiceProvider```
```
use Laravel\Passport\Passport;

public function boot()
{
    $this->registerPolices();
    Passport::routes(); //This
}

```

Change in ```config/auth.php``` (Driver add -> passport)
```
'api' => [
        'driver' => 'passport', // this
        'provider' => 'users',´´
    ],
```

## Database seeding
<hr>
<br/>

Run the database seeder and you're done
```
$ php artisan db:seed
```
<br/>


## Enviroment variables
<hr>
<br/>

```.env``` file
```
DB_DATABASE=bookstore
DB_USERNAME=root
DB_PASSWORD=
```




