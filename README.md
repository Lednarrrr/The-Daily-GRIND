# The Daily GRIND ☕

**The Daily GRIND** is a web-based platform for a co-working and study space located in Manila. Designed for students and professionals, this application allows users to explore amenities, view rates, inspect the space via a gallery, and send inquiries directly to the management.

## 🚀 Features

* **Responsive UI:** Built with **CSS Grid** and **Flexbox**, fully optimized for desktop and mobile devices.
* **Glassmorphism Design:** Modern sticky navigation bar with frosted glass effects.
* **Interactive Gallery:** Custom JavaScript **Lightbox** feature allows users to view images in full screen without leaving the page.
* **Feature Modals:** Pop-up modals on the homepage for viewing the "Menu" and "Speedtest" results.
* **Real-time Contact Form:** Fully functional contact form integrated with a **PHP & MySQL** backend.
* **Security:** Implements **Prepared Statements** in PHP to prevent SQL Injection attacks.
* **Google Maps Integration:** Embedded map locating the branch at Dapitan St., Manila.

## 🛠️ Technologies Used

* **Frontend:** HTML5, CSS3 (CSS Variables, Media Queries), JavaScript (Vanilla).
* **Backend:** PHP (v8.0+).
* **Database:** MySQL.
* **Server:** Apache (via XAMPP).
* **Editor:** VS Code.

---

## ⚙️ Installation & Setup Guide

To run this project on your local machine, follow these steps:

### 1. Prerequisites
Ensure you have **XAMPP** (or WAMP/MAMP) installed to run Apache and MySQL.

### 2. Project Setup
1.  Download or Clone this repository.
2.  Move the project folder into your XAMPP `htdocs` directory (usually `C:\xampp\htdocs\TheDailyGrind`).

### 3. Database Configuration
1.  Open **XAMPP Control Panel** and start **Apache** and **MySQL**.
2.  Go to **phpMyAdmin** in your browser (`http://localhost/phpmyadmin`).
3.  Create a new database named: `dailygrind`
4.  Click on the database and go to the **SQL** tab.
5.  Paste and run the following SQL command to create the required table:

```sql
CREATE TABLE contacts (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    subject VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);