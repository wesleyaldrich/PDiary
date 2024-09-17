# PDiary Web Application

This is a Laravel web application to learn basic CRUD (Create, Read, Update, Delete) with Laravel. By preference, I use **diaries** for the **CRUD objects** for no particular reason.

## Prerequisites

To run this project locally, for me, I'm using **Herd** for **Nginx** and **PHP-8.3**, and **XAMPP** for **MySQL**.

- [Git](https://git-scm.com/) (to clone the repository)
- [Composer](https://getcomposer.org/) (to manage Laravel dependencies)
- [Herd](https://herd.dev/) (for Nginx and PHP)
- [XAMPP](https://www.apachefriends.org/) (for MySQL)

## Setup Instructions

### 1. Clone the repository
```bash
git clone https://github.com/wesleyaldrich/PDiary.git
cd PDiary
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
Start **XAMPP** and enable **MySQL**. Create a new database for your project in **phpMyAdmin**. For this case, you may want to name it **"pdiary"**.
If **phpMyAdmin** refuses to run (since **Apache** won't start), you may have to disable **Nginx** temporarily in **Herd** by doing:
```bash
herd stop
```

Then, run the database migrations:
```bash
php artisan migrate
```

### 6. Start Nginx and PHP with Herd
Make sure you have [Herd](https://herd.dev/) installed, start the default **Herd** services:
```bash
herd start
```

This will start **Nginx** and **PHP** services.
Once you have **Herd** installed, it is recommended to put the _"pdiary"_ folder inside _"Herd"_ directory
(in my case: "C:\Users\Wesley\Herd\pdiary").

### 7. Manage the PDiary database with Herd
Open the **Herd desktop application** and go to **"Open Sites"**, you will see the information about your web app if it's inside the **Herd** directory.
Click "Open" in the "Database" row to open **AdminerEvo**. Or you can simplify this whole process by visiting the URL:
```
http://database.herd.test
```

Or you can also do this instead if you have the same local MySQL credentials as me to simplify even more.
```
http://database.herd.test/?mysql&server=127.0.0.1:3306&username=root&password=&db=pdiary
```

## Access the Application

Once you've followed the setup steps, the local web app is accessible by visiting the URL: 

```
http://pdiary.test
```

You should see the **PDiary** web application running locally.

- Note: Your web app URL could be different, double check by opening your **Herd desktop application** and go to **"Open Sites"**
to see the information about your web app if it's inside the **Herd** directory.
