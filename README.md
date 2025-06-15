# Laravel Student Management System



**A student management system with role-based access control**

</div>

---

## 📋 Overview

A Laravel application for managing student records with user authentication and role-based permissions. Users can register, verify their email, and manage student data based on their role.

### ✨ Features

- 🔐 **User Registration & Login** - Laravel Breeze authentication
- 📧 **Email Verification** - Confirm user email addresses
- 👥 **Role-Based Access** - Admin and User roles
- 📚 **Student Management** - Add student name and age
- ✏️ **Admin Permissions** - Only admins can edit student records
- 📄 **Student Reports** - Paginated student list

### 🔑 Permissions

| Action | Admin | User |
|--------|-------|------|
| Add Students | ✅ | ✅ |
| Edit Students | ✅ | ❌ |
| Delete Students | ✅ | ❌ |

---

## 🚀 Installation

### Prerequisites

- **XAMPP** (Apache, MySQL, PHP)
- **Composer**
- **Node.js**

### Setup Steps

1. **Clone the repository**
   ```bash
   git clone https://github.com/merriamessam/laravel-task.git
   cd laravel-task
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   npm run dev
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **XAMPP Configuration**
   - Start Apache and MySQL in XAMPP
   - Create database `student_management` in phpMyAdmin
   - Configure `.env`

5. **Database setup**
   ```bash
   php artisan migrate
   ```

6. **Start server**
   ```bash
   php artisan serve
   ```

Visit: `http://localhost:8000`

---

## 🧪 Testing Roles

1. **Register a user** (default role: user)
2. **Verify email** through verification link
3. **Create admin account**:
   - Go to database → `users` table
   - Change `role` from `user` to `admin`
4. **Test permissions**:
   - Admin: Can edit/delete students
   - User: Can only add students

---

## 📖 Usage

### Registration Process
1. Register new account
2. Check email for verification link
3. Click verification link
4. Login to access system

### Student Management
- **All users**: Can add students (name, age)
- **Admin only**: Can edit and delete student records
- **Reports**: View paginated list of all students

---

## 🛠️ Built With

- **Laravel** - PHP Framework
- **Laravel Breeze** - Authentication
- **MySQL** - Database
- **XAMPP** - Local development environment
