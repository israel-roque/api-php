# Simple and Functional PHP API

This repository contains the source code for a PHP API developed using pure PHP, without any frameworks. The primary goal of this project is to practice fundamental **API creation concepts using PHP** and principles of **Object-Oriented Programming (OOP)**.

## Implemented Features

- **PSR-4**: Standard autoloading for automatic class loading.
- **HTTP**: Handling of requests and responses, including HTTP methods.
- **JWT Authentication**: Manual implementation of JSON Web Token-based authentication.
- **Routing System**: Definition and management of API routes.
- **Database Interaction**: Operations with the database for CRUD (Create, Read, Update, Delete) operations.
- **MVC Architecture**: Implementation focusing on separation of concerns, using the Services layer instead of the View.

## Prerequisites

Ensure you have the following items installed in your development environment:

- PHP 7.4 or higher
- Composer
- A web server (Apache or NGINX)
- A database (e.g., MySQL)

## Installation and Execution

### 1. Cloning the Repository

Clone the repository to your local environment:

```bash
git clone https://github.com/israel-roque/api-php.git api-php
```

### 2. Installing Dependencies
Navigate to the project directory and install PHP dependencies using Composer:

```bash
cd api-php
composer install

```

### 3. Configuring the Environment
Web Server Configuration: Move the project directory to the public directory of your web server (Apache or NGINX).

Using PHP's Built-in Server: Alternatively, you can start a local built-in server:

```bash
Copiar código
php -S localhost:8080 -t public
```

### 4. Database Configuration
```sql
/* MySQL Example */

CREATE DATABASE api_php CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

USE api_php;

CREATE TABLE
    IF NOT EXISTS users (
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
        modified_at DATETIME NULL
);

```
If you want can to configure the database credentials in the configuration file (e.g., `.env` or `config.php`) according to your local environment.

### 5. Testing
Use tools like Postman or Insomnia to test the API endpoints. Refer to the documentation provided in the code for details on available routes and methods.

If you choose, php builting server, please, remember to adjust the URL to include the port (e.g., `http://localhost:8080`) when testing with tools like Postman or Insomnia.
