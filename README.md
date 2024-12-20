# Bookstore API

Bookstore API is a project developed in Laravel 8 and Passport with the sole purpose of being used as a practice and guide for those who are starting out.

This project serves as a brief reference to basic uses of Laravel and the use of OAuth.

## ✅ Features

- Show users
- Show Authors and Author by id
- Show Books and Book by id
- Show Book with filters
- Show Book with relations
- Edit Book
- Delete Book
- Create Book
- Login User
- Edit Author
- Delete Author
- Create Author

## ⚙️ Tech Stack

- Laravel 8.10
- Laravel Passport 10.1
- Postgre 13


## 💾 Installation

Install and run

1. Clone and move to folder
```bash
$ git clone git@github.com:abrahamuchos/bookstore-api.git
$ cd bookstore-api
```

2. Install dependencies
```bash
$  composer install
```

3. Create a copy of the `.env.example` file and rename it to `.env`. Next, configure the necessary environment variables.

4. Generate an application key by running `php artisan key:generate`.

5. Run `php artisan migrate` to create the database tables.

6. Run `php artisandb:seed` to create dummy data and admin user.

7. Run `php artisan serve` to start the Laravel development server.

8. Run `php artisan passport:install` to create the encryption keys needed to generate access tokens.

9. Run `php artisan passport:client --password` to create a password grant client.


## Environment Variables

To run this project, you will need to add the following environment variables to your .env file

```
DB_HOST
DB_PORT
DB_DATABASE
DB_USERNAME
DB_PASSWORD
```

## Docs

[Documentation Bookstore API - Postman](https://documenter.getpostman.com/view/6168326/2sAYJ3EMdu)

You can find a .json with the endpoints in `/docs/Bookstore API.postman_collection.json`

## 🧑‍💻 Authors

- [@abrahamuchos](https://github.com/abrahamuchos)
- [Contact mail](mailto:j.abraham29@gmail.com)




