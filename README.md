## INSTALLATION

- This project was written in PHP 8.1
  
- Clone repo to your system <br /> 
  git clone https://github.com/epigpeter/pricepally-interview.git

- Install composer packages: 
  composer install

- Copy the .env.example file and create a new .env file <br /> 
  cp .env.example .env

- Generate a new application key: <br />
  php artisan key:generate

- Create a new database and update the .env file with your database credentials.
  
- Run database migrations and seeders<br /> 
  php artisan migrate --seed<br />
  or<br />
  php artisan migrate:refresh --seed

- Run Application<br />
  php artisan serve
- Open your browser on http://localhost:8000
