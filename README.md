# Laravel User Management System

A full-stack User Management module developed for **Artisans Digital** using Laravel 10+, providing a responsive **Web-based CRUD interface** and a fully functional **REST API**.

---

## 🛠️ Features

- 🧑 User Registration & Management (6 fields)
- 🌐 Web-based CRUD with Bootstrap 5 Modals
- 🔐 Secure password hashing with Laravel's built-in encryption
- 🔁 REST API endpoints for full CRUD operations
- 📬 Postman Collection included
- ✅ Input validation on both server and client sides

---

## ⚙️ Tech Stack

- Laravel 10+
- Bootstrap 5
- Blade Templates
- MySQL / SQLite
- RESTful API (JSON)
- Postman (for API testing)

---

## 📥 Installation

```bash
# Clone the repository
git clone https://github.com/Samibangash/artisans-digital-task.git
cd artisans-digital-task

# Install dependencies
composer install

# Copy and configure environment
cp .env.example .env
php artisan key:generate

# Set up your database credentials in .env

# Run database migrations
php artisan migrate

# Serve the application
php artisan serve
