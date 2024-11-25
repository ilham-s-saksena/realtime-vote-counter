## About Reverb

Reverb is a first-party WebSocket server for Laravel applications, bringing real-time communication between client and server directly to your fingertips. Open source and an Artisan command away - with love from the Laravel team.

## Stack

- Laravel
- TailwindCss


## Requirment

- Composer
- NodeJs
- PHP version 8.3 or higher


## Instalation
1. clone the repository
   ```bash
   git clone git@github.com:ilham-s-saksena/realtime-vote-counter.git
   cd realtime-vote-counter
   ```

2. copy the .env.example
   ```bash
   cp .env.example .env
   ```

3. configure the database connection
    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=reverb
    DB_USERNAME=root
    DB_PASSWORD=
    ```

4. install dependencies
   ```bash 
   composer install
   npm install
   npm run build
   ```

5. generate app key
   ```bashh
   php artisan key:generate
   ```

6. run the migration
   ```bash
   php artisan migrate --seed
   ```

7. run the laravel
   ```bash
   php artisan serve
   ```

8. run the laravel reverb
   ```bash
   php artisan reverb:start
   ```

## Usage

- Go to `127.0.0.1:8000` to Se the Real-Counter
- Go to `127.0.0.1:8000` to vote