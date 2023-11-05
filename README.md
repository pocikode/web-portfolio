
# Laravel Project Readme

This Portfolio project is based on Laravel is designed to run on PHP version 8.1 or higher.

## Database Setup

The database dump file is located in the root folder as `portfolio.sql`. To set up the database, follow these steps:

1. Create a new database.
2. Import the `portfolio.sql` file into the newly created database.
3. Configure the `.env` file with your database credentials.

## Installation

Follow these steps to set up the project:

1. Clone this repository.
2. Run `composer install` to install the necessary dependencies.
3. Configure the `.env` file based on the provided `.env.example`. Ensure to set up the database connection.
4. Run `php artisan migrate` to migrate the database schema.
5. Run `php artisan storage:link` to create a symbolic link from public/storage to storage/app/public.

## Usage

To start the Laravel development server, run `php artisan serve` in the terminal.

Make sure to check the Laravel [documentation](https://laravel.com/docs) for more information and guidance on using Laravel.

## Important Note

This project requires PHP 8.1 or higher. Make sure your environment meets this requirement before proceeding with the installation.

If you encounter any issues or have questions, please refer to the project's issue tracker or seek support in the Laravel community forums.

Enjoy working with Laravel!
