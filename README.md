# GymLife

GymLife is a modern web application for managing gym-related data, including members, trainers, workouts, schedules, and progress tracking. It is built with **Laravel 12**, **Livewire**, and **Tailwind CSS**.

## Key Functionalities

- **User Authentication**: Secure login for members and admins.
- **Member Management**: Create, update, and view member profiles.
- **Trainer Management**: Schedule and assign trainers.
- **Workout Plans**: Create and track personalized workout plans.
- **Class Schedule**: Manage and view class timings.
- **Progress Tracking**: Log and visualize member progress.
- **Admin Panel**: Easy-to-use dashboard for data management.

## Technologies

- **[Laravel 12](https://laravel.com)**: The PHP Framework for Web Artisans.
- **[Livewire](https://livewire.laravel.com)**: Full-stack framework for Laravel.
- **[Tailwind CSS](https://tailwindcss.com)**: A utility-first CSS framework.
- **[Vite](https://vitejs.dev)**: Next Generation Frontend Tooling.
- **MySQL / MariaDB**: Relational database management.

## Requirements

- PHP 8.2 or higher
- Composer
- Node.js & NPM

## Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/yourusername/gymlife.git
   cd gymlife
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment Setup**
   Copy the example environment file and configure your database credentials:
   ```bash
   cp .env.example .env
   ```
   Update the `.env` file with your database settings:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=gymlife
   DB_USERNAME=root
   DB_PASSWORD=
   ```

5. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

6. **Run Migrations**
   Set up the database tables:
   ```bash
   php artisan migrate
   ```

7. **Build Assets**
   Compile the frontend assets:
   ```bash
   npm run build
   ```

## Usage

Start the local development server:

```bash
php artisan serve
```

Access the application at `http://localhost:8000`.

To run the frontend build in watch mode during development:

```bash
npm run dev
```

## License

The GymLife software is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
