# Job Hub

## 🚀 Introduction
Job Hub is a browser-based application for managing job postings. This application was built using the Laravel framework. The project includes several features, such as CRUD operations (Create, Read, Update, Delete) for different models like Job, Company, Category and User.

## 🤖 Installation
The installation follows the Laravel documentation. If you are using Laravel Sail, you can start the containers and run the migrations to set up the database.

### Requirements:
- PHP 8.2+
- Composer
- Docker (for Sail)

### Installation Steps:
1. Clone the repository:
   ```bash
   git clone https://github.com/junesdream/job-hub
   cd job-hub
   ```
2. Install dependencies:
   ```bash
   composer install
   npm install
   ```
3. Start Docker containers:
   ```bash
   ./vendor/bin/sail up -d
   ```
4. Run migrations and seeders:
   ```bash
   ./vendor/bin/sail artisan migrate --seed
   ```

5. Start development:
   ```bash
   ./vendor/bin/sail npm run dev
   ./vendor/bin/sail artisan serve
   ```
   Or, if not using Docker:
   ```bash
   php artisan serve
   ```

## 📜 Requirements and Technologies Used
- **Laravel Framework v11.9**
- **PHP v8.2**
- **SQLite (or MySQL)** for the database
- **Laravel Sail**: Docker-based development environment
- **Laravel Tinker**: for database interaction during development

## 📏 Project Structure
This project consists of the following models:
- **Job**: Contains information about job postings (title, description, salary, etc.)
- **Company**: Contains information about companies offering jobs
- **Category**: Contains categories to classify job postings
- **User**: Manages users for different roles within the app

Each model has corresponding **CRUD** functionality, implemented through controllers and views.

## 🚧 Development & Commands
### Important Artisan Commands
- Create models, controllers, migrations, policies, and more:
  ```bash
  sail artisan make:model Job --all
  sail artisan make:model Company --all
  sail artisan make:model Category --all
  sail artisan make:model User --all
  ```
- Run migrations:
  ```bash
  sail artisan migrate
  ```
- Seed database:
  ```bash
  sail artisan db:seed
  ```
- Refresh migrations and seed database:
  ```bash
  sail artisan migrate:fresh --seed
  ```

## 🔨 Development Environment
- Laravel Sail is used to provide a Docker-based development environment, making setup easier and consistent.
- Alternatively, the application can be run locally using `php artisan serve`.

## 📈 Features
- **CRUD for Job Postings**: View, create, edit & delete job postings.
- **Company and Category Management**: View, create, edit & delete companies and categories.
- **User Management**: Manage user permissions (planned feature).

## 🛠 Troubleshooting
- **Missing Dependencies**: Ensure all Composer and npm dependencies are installed (`composer install`, `npm install`).
- **Docker Issues**: Make sure Docker is running before using Sail.
- **Migration Issues**: Use `sail artisan migrate:fresh --seed` to recreate the database.

## 🏦 License
This project is licensed under the MIT License.

## 👋 Contributors
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## 🎮 Screenshots
- **Job Listing Page**: An overview of all available jobs.
- **Job Detail Page**: Displays the details of a specific job posting.

