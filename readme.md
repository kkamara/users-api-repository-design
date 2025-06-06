<img src="https://github.com/kkamara/useful/blob/main/php-reactjs-boilerplate.png?raw=true" alt="php-reactjs-boilerplate.png" width=""/>

<img src="https://github.com/kkamara/useful/blob/main/php-reactjs-boilerplate2.png?raw=true" alt="php-reactjs-boilerplate2.png" width=""/>

# Users API Repository Design [![API](https://github.com/kkamara/users-api-repository-design/actions/workflows/build.yml/badge.svg)](https://github.com/kkamara/users-api-repository-design/actions/workflows/build.yml)

(02/03/2025) A Laravel 12.x users API with the Repository Design. Includes API feature tests.

* [Using Postman?](#postman)

* [Installation](#installation)

* [Usage](#usage)

* [API Documentation](#api-documentation)

* [Feature Tests](#feature-tests)

* [Misc.](#misc)

* [Contributing](#contributing)

* [License](#license)

<a name="postman"></a>
## Using Postman?

[Get Postman HTTP client](https://www.postman.com).

[Postman API Collection for Users API Repository Design](https://github.com/kkamara/users-api-repository-design/blob/main/database/users-api-repository-design.postman_collection.json).

[Postman API Environment for Users API Repository Design](https://github.com/kkamara/users-api-repository-design/blob/main/database/users-api-repository-design.postman_environment.json).

## Installation

* [XAMPP: Apache, MariaDB (MySQL alternative), & PHP](https://www.apachefriends.org/)
* If you find that the MariaDB XAMPP service fails to start (I get this on Windows) then install MySQL manually [here](https://dev.mysql.com/downloads/mysql/)
* [https://laravel.com/docs/12.x/installation](https://laravel.com/docs/12.x/installation)
* [https://laravel.com/docs/12.x/vite](https://laravel.com/docs/12.x/vite)

```bash
# Create our environment file.
cp .env.example .env
# Update database values in .env file.
# Install our app dependencies.
composer i
php artisan key:generate
# Before running the next command:
# Update your database details in .env
php artisan migrate --seed
yarn install
yarn build
```

## Usage

```bash
php artisan serve --port=3000
# Website accessible at http://localhost:3000
```

## API Documentation

```bash
php artisan route:list
# output
...
POST       api/user ............................ login › API\UserController@login
GET|HEAD   api/user/authorize .................. API\UserController@authorizeUser
POST       api/user/register ................... API\UserController@register
...
```

View the api collection [here](https://documenter.getpostman.com/view/17125932/TzzAKvVe).

## Feature Tests

```bash
php artisan test --filter=API
```

View the feature test code [here](https://raw.githubusercontent.com/kkamara/users-api-repository-design/main/tests/Feature/API).

## Misc.

[See PHP ReactJS Boilerplate app](https://github.com/kkamara/php-reactjs-boilerplate)

[See Python ReactJS Boilerplate app](https://github.com/kkamara/python-reactjs-boilerplate)

[See MRVL Desktop](https://github.com/kkamara/mrvl-desktop)

[See MRVL Web](https://github.com/kkamara/mrvl-web)

[See PHP Docker Skeleton](https://github.com/kkamara/php-docker-skeleton)

[See Python Docker Skeleton](https://github.com/kkamara/python-docker-skeleton)

[See Laravel 10 API 3](https://github.com/kkamara/laravel-10-api-3)

[See movies app](https://github.com/kkamara/movies)

[See Food Nutrition Facts Search web app](https://github.com/kkamara/food-nutrition-facts-search-web-app)

[See Ecommerce Web](https://github.com/kkamara/ecommerce-web)

[See City Maps Mobile](https://github.com/kkamara/city-maps-mobile)

[See Ecommerce Mobile](https://github.com/kkamara/ecommerce-mobile)

[See CRM](https://github.com/kkamara/crm)

[See Birthday Currency](https://github.com/kkamara/birthday-currency)

[See PHP Scraper](https://github.com/kkamara/php-scraper).

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[BSD](https://opensource.org/licenses/BSD-3-Clause)
