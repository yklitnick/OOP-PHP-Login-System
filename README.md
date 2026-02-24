# PHP Object-Oriented Login System

This project is a complete, custom Object-Oriented PHP Login and Registration system developed for learning and testing purposes.

## Features

- **User Registration (Sign Up)**: Ensures unique usernames and emails, and securely hashes passwords.
- **User Authentication (Login)**: Verifies user credentials before granting access to protected areas.
- **Session Management**: Securely manages user sessions upon login and gracefully destroys sessions on logout.
- **Object-Oriented Architecture (OOP)**: Clean separation of concerns with Model-View-Controller (MVC) style patterns.
    - `classes/dbh.classes.php`: Database connection class using PHP Data Objects (PDO).
    - `classes/*.classes.php`: Core logic (Models) handling database queries.
    - `classes/*-contr.classes.php`: Controllers handling user inputs and validation logic.
    - `includes/*.inc.php`: Scripts that bridge the frontend HTML forms with backend controller logic.

## Project Structure

```
Login-System/
├── classes/
│   ├── dbh.classes.php           # Database helper class
│   ├── login.classes.php         # Login model
│   ├── login-contr.classes.php   # Login controller
│   ├── signup.classes.php        # Signup model
│   └── signup-contr.classes.php  # Signup controller
├── includes/
│   ├── login.inc.php             # Form action for user login
│   ├── logout.inc.php            # Destroys session
│   └── signup.inc.php            # Form action for user signup
├── index.php                     # Main frontend (Sign Up & Login forms)
└── style.css                     # Stylesheet for the index timeline
```

## How to Run Locally

### Prerequisites

To run this application, you must have a local server environment capable of running PHP and MySQL databases, such as **XAMPP**, **MAMP**, or **WAMP**.

### Installation Steps

1. **Clone or Download the Project**: Place the project folder (`Login-System`) into your local server's web root directory.
    - For XAMPP: `C:\xampp\htdocs\Login-System`
    - For WAMP: `C:\wamp\www\Login-System`
    - For MAMP: `/Applications/MAMP/htdocs/Login-System`

2. **Start Your Local Server**: Open the control panel for your respective local server (like XAMPP Control Panel) and start both the **Apache** (for PHP) and **MySQL** services.

3. **Database Setup**:
    - Navigate to your `phpMyAdmin` interface in your browser (usually `http://localhost/phpmyadmin/`).
    - Create a new MySQL database named `ooplogin`.
    - Run the following SQL query to create the `users` table required by the scripts:
        ```sql
        CREATE TABLE users (
          users_id int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
          users_uid tinytext NOT NULL,
          users_pwd longtext NOT NULL,
          users_email tinytext NOT NULL
        );
        ```

4. **Verify Database Configuration**: Check `classes/dbh.classes.php`. By default, the app is configured to connect using:
    - Host: `localhost`
    - Database Name: `ooplogin`
    - Username: `root`
    - Password: `""` (no password)
      _If your local database configuration has a password for root, you must edit `classes/dbh.classes.php` to include your password._

5. **Run the App**:
    - Open your web browser and navigate to `http://localhost/Login-System/`.
    - You should see the login and sign-up forms and will now be able to register a new user and login.

## Security Disclaimer

This system is primarily setup for testing/educational purposes. For real-world production environments, additional layers of abstraction, more thorough input sanitization (though prepared statements are in place), CSRF tokens, and HTTPs configurations should be strictly enforced.
