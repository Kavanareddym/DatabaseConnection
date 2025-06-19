# 🔐 PHP Login & Signup System

This is a simple **PHP-based login and signup system** with session management and MySQL integration. It allows users to sign up, log in, and access a protected dashboard.

## 🌐 Features

- User registration (Sign Up)
- User authentication (Login)
- Session-based dashboard access
- Clean and responsive UI with HTML & CSS
- Built using PHP, MySQL, HTML, and CSS

## 🛠️ Setup Instructions

1. **Create a MySQL Database**

```sql
CREATE DATABASE login_system;

USE login_system;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(100) NOT NULL,
  password VARCHAR(100) NOT NULL
);

```

2. **Configure the Project**

Place the files inside your htdocs (XAMPP) or www (WAMP) folder
Start Apache and MySQL
Visit http://localhost/login.html

📁 **File Overview**
```
├── login.html       → Login form
├── login.php        → Login authentication
├── signup.html      → Sign-up form
├── signup.php       → Sign-up handler
├── dashboard.php    → Protected page after login
├── style.css        → Frontend styling
```

👨‍💻 Created By **Kavana Reddy M**
✏️ Documented by **Kavanareddym**

