# Simple Task Management System

A Laravel-based web application to manage daily tasks efficiently.

## Features
- Home page 
- View all tasks
- Add new tasks
- Edit tasks
- Mark tasks as completed
- Delete tasks

## Tech Stack
- Laravel (11+)
- PHP 8.5
- MySQL
- Blade Templates
- HTML & CSS

## Prerequisites
- PHP 8.1 or higher
- Composer
- MySQL
- Git

## Project Flow
1. User lands on the home page
2. Clicks the Tasks button
3. Views the list of tasks
4. Adds a new task
5. Can edit or delete tasks

## Setup Instructions
1. Clone the repository
2. Run `composer install`
3. Create a MySQL database named `task_manager`
4. Update database credentials in `.env`
5. Run `php artisan migrate`
6. Run `php artisan serve`
7. Open `http://127.0.0.1:8000` in the browser

## Database
- MySQL
- Tables: tasks, sessions, users

## Security
- CSRF protection enabled
- Sensitive configuration stored in `.env`

