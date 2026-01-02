# Simple Task Management System
A Laravel-based Task Management System developed as part of a technical screening assessment.  
The application allows users to create, view, update, and delete tasks in a simple single-user environment.

## Project Purpose
This project was created to demonstrate:
- Understanding of Laravel fundamentals
- Proper MVC architecture usage
- CRUD operations
- Clean and maintainable code
- Ability to follow given technical requirements

## sFeatures:
- Task listing
- Add new task
- Edit existing task
- Mark task as completed
- Delete task
- Priority levels (Low / Medium / High)

## Tech Stack:
- Laravel 11+ (project uses Laravel 12)
- PHP 8.5
- MySQL
- Blade Templates
- Git & GitHub

## Prerequisites:
- PHP 8.1 or higher
- Composer
- MySQL
- Git

## Installation & Setup:
1. Clone repository
   git clone https://github.com/likhithakulal2003/task-management-system.git
   cd task-management-system

2. Install dependencies
   composer install

3. Create environment file
   cp .env.example .env

4. Generate app key
   php artisan key:generate

5. Configure database in .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_manager
DB_USERNAME=root
DB_PASSWORD=

6. Run migrations
   php artisan migrate

7. Run server
   php artisan serve

## Application URL:
http://127.0.0.1:8000/tasks

## Application Flow
- User opens the task listing page
- Views all existing tasks
- Clicks Add Task to create a new task
- Task appears in the task list
- User can edit or delete tasks using action icons

## Security & Best Practices
- CSRF protection enabled
- Environment variables stored securely in .env
- MVC pattern followed
- Resource routing used



Author:
Likhitha 
Purpose: Laravel Technical Screening Assessment

