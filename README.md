# Dental Site Project Using Laravel



- Fully functional Dental website .
- Using laravel voyager as an admin panel for the site.
- javascript, jquery, bootstrap and css for the front-end.
- Adding items to the cart that uses session.
- Different user roles and privileges.
- Categories, tags and price filtering for easier search for products.
- And much more features.

## Make sure there is a dental name database already created on your local machine .

## Installation

1. Clone the repo and `cd` into it
1. `composer install`
1. Rename or copy `.env.example` file to `.env`
1. `php artisan key:generate`
1. Set your database credentials in your `.env` file
1. Set `ADMIN_PASSWORD` in your `.env` file if you want to specify an admin password. If not, the default password is 'password'
1. `php artisan ecommerce:install`. This will migrate the database and run any seeders necessary. 
1. `npm install`
1. `npm run dev`
1. `php artisan serve` or use Laravel Valet or Laravel Homestead
1. Visit `localhost:8000` in your browser


## Screenshots

- HomePage

![Homepage image](https://github.com/avijeetpandey/laravel_dental_site_project/blob/master/project_images/home.png)

- Login Page

![Login Page](https://github.com/avijeetpandey/laravel_dental_site_project/blob/master/project_images/login.png)

- Register Page

![Register Page](https://github.com/avijeetpandey/laravel_dental_site_project/blob/master/project_images/register.png)

- Services Page 

![Services Page](https://github.com/avijeetpandey/laravel_dental_site_project/blob/master/project_images/services.png)