# Recruitment Management System

A Laravel-based Recruitment Management System built as part of my Laravel learning journey.

This project allows applicants to submit job applications and provides an administrator dashboard for viewing and managing applications.

---

## Features

### Applicant

- Submit a job application
- Form validation
- Store applications in a MySQL database

### Administrator

- View all submitted applications
- View detailed application information
- Edit application details
- Dashboard showing total applications

---

## Tech Stack

- Laravel 13
- PHP 8.5
- MySQL
- Blade Templates
- HTML
- CSS
- Git & GitHub

---

## Database

The project currently includes the following tables:

- users
- applications
- migrations
- cache
- jobs
- sessions

---

## Project Structure

```
app/
database/
public/
resources/
routes/
```

---

## Screens Implemented

- Home Page
- Careers Page
- Job Application Form
- Applications Dashboard
- Application Details Page
- Edit Application Page
- Delete Application Page

---

## Current CRUD Progress

| Operation | Status |
|----------|--------|
| Create | ✅ Completed |
| Read | ✅ Completed |
| Update | ✅ Completed |
| Delete |✅ Completed |

---

## Installation

Clone the repository

```bash
git clone https://github.com/Glory-Nyambura/Laravel-Playground.git
```

Navigate into the project

```bash
cd Laravel-Playground
```

Install dependencies

```bash
composer install
```

Create your environment file

```bash
cp .env.example .env
```

Generate the application key

```bash
php artisan key:generate
```

Configure your database in the `.env` file.

Run the migrations

```bash
php artisan migrate
```

Start the development server

```bash
php artisan serve
```

Visit

```
http://127.0.0.1:8000
```

---

## Future Improvements

- Delete applications
- Authentication (Admin Login)
- Search applications
- Filter by position
- Pagination
- File uploads (CV/Resume)
- Email notifications
- Dashboard statistics
- Role-based access

---

## Learning Outcomes

Through this project I have learned:

- Laravel Routing
- Blade Templates
- Migrations
- Models
- Form Validation
- CRUD Operations
- MySQL Integration
- Git and GitHub
- Basic MVC Architecture

---

## Author

**Glory Nyambura**

GitHub: https://github.com/Glory-Nyambura
