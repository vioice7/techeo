# 🚀 Tech

A lightweight, high-performance blog application built with **Laravel 12**, **Tailwind CSS**, and **Alpine.js**. This project features a custom Symfony-style role-based access control (RBAC) system.

## ✨ Features

* **CRUD Operations:** Full Create, Read, Update, and Delete capabilities for blog posts.
* **Custom RBAC:** Symfony-inspired role checks (e.g., `ROLE_SUPER_ADMIN`) implemented via Laravel Gates.
* **Pagination:** Optimized list view with 10 posts per page.
* **Modern UI:** Responsive design using Tailwind CSS with a "sticky footer" and clean admin dashboard.
* **Authentication:** Secure login/registration powered by Laravel Breeze.

## 🛠️ Tech Stack

* **Framework:** Laravel 12
* **Frontend:** Tailwind CSS (via CDN) & Blade Templates
* **Database:** SQLite (default) / MySQL
* **Auth:** Laravel Breeze

---

## 🚀 Getting Started

Follow these steps to get your local development environment running.

### Clone the repository
```bash
git clone <your-repository-url>
cd techno-blog
```

### Install Dependencies
```bash
composer install
npm install && npm run build
```

### Environment Setup
```bash
cp .env.example .env
php artisan key:generate
```

### Database Migration & Seeding
*Make sure your database is configured in `.env` (SQLite is recommended for quick testing).*
```bash
php artisan migrate
```

### Start the Application
```bash
php artisan serve
```
The app will be available at: **http://localhost:8000**

---

## 🔑 Admin Setup
To access the administrative features (creating/editing posts), ensure your user has the correct role in the database:

Register an account via `/register`.
Open your database tool and set the `roles` column for your user to: `["ROLE_SUPER_ADMIN"]`.

---

## 📝 License
Built by Tech as a technical demonstration. 1234567890
