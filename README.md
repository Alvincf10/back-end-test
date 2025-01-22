# Laravel + Angular Task Management Application

This project is a task management application built with **Laravel** (backend) and **Angular** (frontend), featuring real-time updates using **Laravel Echo** and **Pusher**.

---

## How to Run the Application

### Prerequisites
- **PHP** (8.1 or higher)
- **Composer**
- **Node.js** and **npm** (for Angular frontend)
- **PostgreSQL** (or another database)

### 1. Setting up the Laravel Backend

#### Step 1: Clone the Repository
Clone the repository to your local machine:
```bash
git clone https://github.com/your-repository.git
cd your-repository

#### Step 2: Install Laravel Dependencies
composer install

#### Step 3: Set up Environment Variables
cp .env.example .env

#### Step 4: Generate Application Key
php artisan key:generate

#### Step 5: Run Migrations
php artisan migrate

#### Step 6: Serve the Backend
php artisan serve
