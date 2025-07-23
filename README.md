# LORUIG-lab-management-webapp
Web application for managing a computer science research lab — Final Project, Licence Informatique, Université de Ghardaïa.

# 💻 LORUIG

**LORUIG** (*Laboratoire de Recherche Informatique Univ Ghardaïa*) is a web application developed to efficiently manage a computer science research laboratory. This project was completed as part of the final undergraduate thesis at the University of Ghardaïa.

---

## 📌 Objective

The platform aims to simplify lab management through:
- User management (admin, director, team leaders, members)
- Publication and activity tracking
- Role-based access for private and public users

---

## ⚙️ Key Features

- Secure authentication system
- Dashboard with role-based access control
- User CRUD (create, read, update, delete)
- Publication management module
- Public interface for visitors

---

## 🛠️ Technologies Used

| Layer | Technology |
|-------|------------|
| Frontend | HTML5, CSS3, JavaScript |
| Backend  | PHP |
| Database | MySQL |
| Environment | XAMPP (Apache + MySQL), Visual Studio Code |

---

## 🗃️ Database & Connection

The database is managed via **phpMyAdmin** in **XAMPP**.

### 📋 Setup Instructions:
1. Launch **XAMPP** and start **Apache** and **MySQL**
2. Go to `http://localhost/phpmyadmin`
3. Create a new database named **`usersdb`**
4. Import the `usersdb.sql` file (included in this repository)
5. Check the connection using the `config.php` file
