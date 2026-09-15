# Hope

Hope is a Laravel + Inertia + Vue application focused on suicide prevention awareness, support, and mental health education. The project presents a compassionate public-facing experience with content designed to help people understand warning signs, explore support resources, and find hope during difficult moments.

## Overview

This application provides a warm, accessible space for:

- learning about suicide prevention awareness
- understanding how to support someone in crisis
- finding trusted resources and next steps
- reinforcing messages of hope, care, and connection

The app is built using:

- Laravel 13
- Inertia.js
- Vue 3
- Vite
- Tailwind CSS

## Project structure

- `app/` — Laravel application code
- `config/` — framework configuration
- `database/` — migrations and seeders
- `public/` — public assets and entry point
- `resources/js/` — Vue components, pages, and frontend logic
- `routes/` — Laravel routes
- `tests/` — automated tests

## Main pages

The current public pages include:

- Home (`/`)
- Awareness (`/awareness`)
- Support (`/support`)
- Resources (`/resources`)
- Hope (`/hope`)

These pages are implemented as Inertia pages and share a public-facing layout.

## Requirements

Before running the project locally, make sure you have the following installed:

- PHP 8.3+
- Composer
- Node.js 20+
- npm
- SQLite (or another supported database driver)

## Local setup

1. Clone the repository.
2. Copy the example environment file:

   ```bash
   cp .env.example .env
   ```

3. Generate an application key:

   ```bash
   php artisan key:generate
   ```

4. Install PHP dependencies:

   ```bash
   composer install
   ```

5. Install front-end dependencies:

   ```bash
   npm install
   ```

6. Run database migrations:

   ```bash
   php artisan migrate
   ```

7. Start the development server:

   ```bash
   composer run dev
   ```

This starts the Laravel development environment and Vite for the Vue frontend.

## Build for production

```bash
npm run build
```

You can also run a production-style Laravel app using the standard Laravel deployment flow after building the assets.

## Useful commands

```bash
php artisan test
php artisan migrate
php artisan serve
npm run check
npm run types:check
```

## Environment configuration

The project includes an example environment file at `.env.example`. Update your local `.env` with your app settings, database credentials, and any other environment variables required for your environment.
