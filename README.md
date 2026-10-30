# Reading List App

A small Laravel app to keep track of books you want to read, are reading, or have finished.
You can see all your books in a list, add, edit and delete them (delete asks "Are you sure?"),
and filter the list by status: To read, Reading or Finished. There is no login. Data is stored in a SQLite file.

## Requirements

- PHP 8.3 or newer (with the pdo_sqlite extension enabled)
- Composer
- Git

## How to run it

1. Clone the repository and go into the folder:

        git clone https://github.com/keshikaf67/reading-list.git
        cd reading-list

2. Install the PHP packages:

        composer install

3. Create the environment file and the app key (on Windows Command Prompt use `copy` instead of `cp`):

        cp .env.example .env
        php artisan key:generate

4. Create the empty SQLite database file (on Windows PowerShell: `New-Item database/database.sqlite`):

        touch database/database.sqlite

5. Create the tables:

        php artisan migrate

6. Start the app, then open http://127.0.0.1:8000 in your browser:

        php artisan serve

## AI usage

I used Claude (an AI assistant) for this project. It wrote the code for the migration, model, controller and views, wrote the setup and Git commands, and explained Laravel ideas to me. It gave me a script that created the files and made one commit per step. I ran it, tested the app in the browser, and read the code to prepare for my viva.
