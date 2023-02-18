## INSTALLATION

- This project was written in PHP 8.1
  
- Clone repo to your system
  git clone https://github.com/epigpeter/pricepally-interview.git

- Install composer packages.
  composer install

- Copy the .env.example file and create a new .env file.
  cp .env.example .env

- Generate a new application key.
  php artisan key:generate

- Create a new database and update the .env file with your database credentials.
  
- Run database migrations and seeders.
  php artisan migrate --seed
  or
  php artisan migrate:refresh --seed

- Run Application
  php artisan serve
- Open your browser on http://localhost:8000
