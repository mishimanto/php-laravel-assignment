# PHP OOP & Laravel Assignment

---

## 📌 Tasks Overview

### ✅ **Task 0: Valid Parentheses**
Implemented an efficient stack-based algorithm to verify if a string contains valid parentheses.

### ✅ **Task 1: Class Inheritance**
OOP inheritance with Shape → Circle & Rectangle classes.  
Each class includes its own area calculation method.

### ✅ **Task 2: Interface Implementation**
Created a logging system using a `LoggerInterface` with FileLogger and DatabaseLogger implementations.

### ✅ **Task 3: Encapsulation**
Employee class demonstrating encapsulation with secure salary getters & setters.

### ✅ **Task 4: Polymorphism**
Animal classes overriding `makeSound()` to demonstrate runtime polymorphism.

### ⭐ **Task 5 (Mandatory): Laravel Todo CRUD**
A complete Laravel CRUD application for managing tasks.  
Includes:
- Create Task  
- Edit Task  
- Delete Task  
- Task List  
- Mark as Completed  
- Bootstrap UI (Clean and Responsive)

---


##  **How to Run the Laravel Todo App**

```bash
### Step 1 — Clone the repository
git clone <https://github.com/mishimanto/laravel-todo>
cd Task_5_Laravel_Todo

### Step 2 — Install dependencies
composer install

Step 3 — Create .env
cp .env.example .env

### Step 4 — Generate key
php artisan key:generate

### Step 5 — Configure database in .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=todo
DB_USERNAME=root
DB_PASSWORD=

### Step 6 — Run migrations
php artisan migrate

### Step 7 — Run the server
php artisan serve

App URL:
http://localhost:8000
