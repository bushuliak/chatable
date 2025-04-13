# Chatable

## Documentations:

- [PHP](https://www.php.net/docs.php)
- [Laravel](https://laravel.com/docs/12.x)
- [Livewire](https://livewire.laravel.com/docs/quickstart)
- [Flux](https://fluxui.dev/docs/installation)

## Requirements

- [Docker](https://docs.docker.com/get-started/get-docker/)
- [Docker Compose](https://docs.docker.com/compose/install/)

## Setup

1. **Clone the repository**
   ```bash
   git clone https://github.com/bushuliak/chatable.git
   ```

2. **Change directory**
   ```bash
   cd chatable
   ```

3. **Copy environment file**
   ```bash
   cp .env.example .env
   ```

4. **Start Docker containers**
   ```bash
   docker-compose up -d
   ```

5. **Install Composer dependencies**
   ```bash
    docker-compose exec laravel.test composer install
    ```

6. **Install JavaScript dependencies**
   ```bash
   ./vendor/bin/sail npm install
   ```

7. **Build assets**
   ```bash
   ./vendor/bin/sail npm run dev
   ```

8. **Generate the application key**
   ```bash
   ./vendor/bin/sail artisan key:generate
   ```

9. **Run migrations**
   ```bash
    ./vendor/bin/sail artisan migrate
    ```

10. **Seed the database**
    ```bash
    ./vendor/bin/sail artisan db:seed
    ```

11. **Visit** [http://localhost](http://localhost)
