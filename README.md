# 🐶 PET Care System

The **PET Care System** is a PHP & MySQL-based web application designed to simplify the management of pet care services. It supports role-based access for admins, staff, and pet owners, and provides a seamless way to manage pets, appointments, medical records, and payments.

## 🌟 Features

- 🔐 Secure Login for Admins, Staff, and Users
- 🐾 Manage Pet Profiles (add, update, view)
- 📅 Schedule and Manage Appointments
- 💊 Track Medical Records and History
- 💬 Manage Feedback and Contact Requests
- 💰 View Payment Information
- 📊 Admin Dashboard for Monitoring and Management

## 🛠 Tech Stack

- **Frontend:** HTML, CSS, JavaScript, Bootstrap
- **Backend:** PHP
- **Database:** MySQL
- **Other Tools:** jQuery

## 📁 Folder Structure

```plaintext
PET-Care-System/
├── admin/
│   ├── users_details/
│   ├── service_details/
│   ├── payment_details/
│   ├── feedbacks/
│   └── ...
├── about/
├── assets/
├── user/
├── staff/
├── loginselect.php
├── home.php
└── ...
```



## 🚀 Getting Started

1. **Clone the repository:**
   ```bash
   git clone https://github.com/your-username/PET-Care-System.git

#2.Set up the database:
-Import the .sql file (found in the /database folder if available) into your local MySQL server using phpMyAdmin or command line.

#3.Configure the Database:
-Edit admin/connect.php and other config files with your local MySQL credentials.

#4.Run the project:
-##Place the project folder into your web server directory (htdocs for XAMPP).
-##Start Apache and MySQL from XAMPP.
-##Visit http://localhost/PET-Care-System/ in your browser.
