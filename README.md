# Laravel Web Application

This is a Laravel web application.

## Prerequisites

To run this project locally, for me, I'm using **Herd** for **Nginx** and **PHP-8.3**, and **XAMPP** for **MySQL**.

- [Git](https://git-scm.com/) (to clone the repository)
- [Composer](https://getcomposer.org/) (to manage Laravel dependencies)
- [Herd](https://herd.dev/) (for Nginx and PHP)
- [XAMPP](https://www.apachefriends.org/) (for MySQL)

## Setup Instructions

### 1. Clone the repository
```bash
git clone https://github.com/yourusername/your-laravel-project.git
cd your-laravel-project
```

### 2. Install Laravel dependencies
Make sure you have [Composer](https://getcomposer.org/) installed, then run:
```bash
composer install
```

### 3. Configure Environment Variables
Duplicate the `.env.example` file and rename it to `.env`:
```bash
cp .env.example .env
```
Edit the `.env` file to configure the database and other necessary settings. Example configuration for MySQL (using XAMPP):
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pdiary
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate Application Key
```bash
php artisan key:generate
```

### 5. Set up the database
Start **XAMPP** and enable **MySQL**. Create a new database for your project in **phpMyAdmin**.
If **phpMyAdmin** refuses to run (since **Apache** won't start), you may have to disable Nginx temporarily in Herd.

Then, run the database migrations:
```bash
php artisan migrate
```

### 6. Run the Laravel application using Herd
Make sure you have [Herd](https://herd.dev/) installed, and then use it to run your Laravel application:
```bash
herd start
```

This will start Nginx and PHP services. By default, the app will be available at `http://localhost`.

### 7. Start MySQL with XAMPP
Start XAMPP and ensure MySQL is running. You can access the MySQL database from phpMyAdmin at `http://localhost/phpmyadmin`.

## Access the Application

Once you've followed the setup steps, open your browser and navigate to:

```
http://localhost
```

You should see your Laravel web application running locally.

## Troubleshooting

- If you encounter permission issues, try running the following command:
  ```bash
  sudo chmod -R 775 storage
  sudo chmod -R 775 bootstrap/cache
  ```

- Make sure Herd and XAMPP are both running.

