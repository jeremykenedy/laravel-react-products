## Laravel React Products

[![Build Status](https://travis-ci.com/jeremykenedy/laravel-react-products.svg?branch=master)](https://travis-ci.com/jeremykenedy/laravel-react-products)
[![StyleCI](https://github.styleci.io/repos/151041725/shield?branch=master)](https://github.styleci.io/repos/151041725)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/jeremykenedy/laravel-react-products/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/jeremykenedy/laravel-react-products/?branch=master)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)

#### Table of contents
- [About](#about)
- [Features](#features)
- [Installation Instructions](#installation-instructions)
- [Routes](#routes)
- [File Tree](#file-tree)
- [License](#license)

### About
Simple products Create/Read example using Laravel 5.7 and ReactJS UI.

### Features
| Laravel React Products Features |
| :------------ |
|Built on [Laravel](http://laravel.com/) 5.7|
|Built on [Bootstrap](https://getbootstrap.com/) 4|
|Front End Built on [ReactJS](https://reactjs.org/)|

### Installation Instructions
1. Run `git clone https://github.com/jeremykenedy/laravel-react-products.git laravel-react-products`
2. From the projects root run `cp .env.example .env`
3. Run `composer update` from the projects root folder
4. From the projects root folder run `php artisan key:generate`
5. From the projects root folder run `yarn install`
6. From the projects root folder run `yarn run dev` or `yarn run production`
  * You can watch assets with `yarn run watch`
7. From the projects root folder run `php artisan serve`

### Routes

```
+--------+----------+------------------------+------+------------------------------------------------+------------+
| Domain | Method   | URI                    | Name | Action                                         | Middleware |
+--------+----------+------------------------+------+------------------------------------------------+------------+
|        | GET|HEAD | /                      |      | Closure                                        | web        |
|        | GET|HEAD | api/products           |      | App\Http\Controllers\ProductsController@index  | api        |
|        | POST     | api/products           |      | App\Http\Controllers\ProductsController@store  | api        |
|        | GET|HEAD | api/products/{product} |      | App\Http\Controllers\ProductsController@show   | api        |
|        | PUT      | api/products/{product} |      | App\Http\Controllers\ProductsController@update | api        |
|        | DELETE   | api/products/{product} |      | App\Http\Controllers\ProductsController@delete | api        |
+--------+----------+------------------------+------+------------------------------------------------+------------+
```

### File Tree

```
Laravel React Products
├── .env.example
├── .env.travis
├── .gitattributes
├── .gitignore
├── .travis.yml
├── LICENSE
├── app
│   ├── Console
│   │   └── Kernel.php
│   ├── Exceptions
│   │   └── Handler.php
│   ├── Http
│   │   ├── Controllers
│   │   │   ├── Auth
│   │   │   │   ├── ForgotPasswordController.php
│   │   │   │   ├── LoginController.php
│   │   │   │   ├── RegisterController.php
│   │   │   │   ├── ResetPasswordController.php
│   │   │   │   └── VerificationController.php
│   │   │   ├── Controller.php
│   │   │   └── ProductsController.php
│   │   ├── Kernel.php
│   │   └── Middleware
│   │       ├── Authenticate.php
│   │       ├── CheckForMaintenanceMode.php
│   │       ├── EncryptCookies.php
│   │       ├── RedirectIfAuthenticated.php
│   │       ├── TrimStrings.php
│   │       ├── TrustProxies.php
│   │       └── VerifyCsrfToken.php
│   ├── Models
│   │   └── Product.php
│   ├── Providers
│   │   ├── AppServiceProvider.php
│   │   ├── AuthServiceProvider.php
│   │   ├── BroadcastServiceProvider.php
│   │   ├── EventServiceProvider.php
│   │   └── RouteServiceProvider.php
│   └── User.php
├── artisan
├── bootstrap
│   ├── app.php
│   └── cache
│       ├── .gitignore
│       ├── packages.php
│       └── services.php
├── composer.json
├── composer.lock
├── config
│   ├── app.php
│   ├── auth.php
│   ├── broadcasting.php
│   ├── cache.php
│   ├── database.php
│   ├── filesystems.php
│   ├── hashing.php
│   ├── logging.php
│   ├── mail.php
│   ├── queue.php
│   ├── services.php
│   ├── session.php
│   └── view.php
├── database
│   ├── .gitignore
│   ├── factories
│   │   └── UserFactory.php
│   ├── migrations
│   │   ├── 2014_10_12_000000_create_users_table.php
│   │   ├── 2014_10_12_100000_create_password_resets_table.php
│   │   └── 2018_10_01_004429_create_products_table.php
│   └── seeds
│       ├── DatabaseSeeder.php
│       └── ProductsTableSeeder.php
├── package.json
├── phpunit.xml
├── public
│   ├── .htaccess
│   ├── css
│   │   └── app.css
│   ├── favicon.ico
│   ├── index.php
│   ├── js
│   │   └── app.js
│   ├── mix-manifest.json
│   ├── robots.txt
│   └── svg
│       ├── 403.svg
│       ├── 404.svg
│       ├── 500.svg
│       └── 503.svg
├── readme.md
├── resources
│   ├── js
│   │   ├── app.js
│   │   ├── bootstrap.js
│   │   └── components
│   │       ├── AddProduct.js
│   │       ├── Example.js
│   │       ├── Main.js
│   │       └── Product.js
│   ├── lang
│   │   └── en
│   │       ├── auth.php
│   │       ├── pagination.php
│   │       ├── passwords.php
│   │       └── validation.php
│   ├── sass
│   │   ├── _variables.scss
│   │   └── app.scss
│   └── views
│       ├── app.blade.php
│       └── welcome.blade.php
├── routes
│   ├── api.php
│   ├── channels.php
│   ├── console.php
│   └── web.php
├── server.php
├── webpack.mix.js
└── yarn.lock

```

* Tree command can be installed using brew: `brew install tree`
* File tree generated using command `tree -a -I '.git|node_modules|vendor|storage|tests'`

### License
Laravel React Products is licensed under the [MIT license](https://opensource.org/licenses/MIT). Enjoy!
