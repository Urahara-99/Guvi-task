**Complete Demo**

[screen-capture (2).webm](https://github.com/user-attachments/assets/c6e428ce-4539-4845-888e-3cb2008e2583)

This task implements a user management system with functionalities for user registration, login, and profile management. The flow of the application is as follows: Register > Login > Profile.

Features
Signup Page: Allows users to register with their details.
Login Page: Users can log in using the credentials provided during registration.
Profile Page: Displays user details such as age, date of birth (DOB), and contact number. Users can view and update these details.
Technologies Used
HTML: Structure of web pages.
CSS: Styling of web pages, with Bootstrap for responsive design.
JavaScript: Client-side scripting with jQuery AJAX for asynchronous data interactions.
PHP: Server-side scripting for handling form submissions and database operations.
MySQL: Relational database for storing user profiles.
MongoDB: NoSQL database for managing additional user data.
Redis: In-memory data structure store for session management.
Folder Structure
markdown
Copy code
- assets/
  - css/
    - styles.css
    - bootstrap.min.css
  - js/
    - login.js
    - profile.js
    - register.js
  - php/
    - login.php
    - profile.php
    - register.php
  - index.html
  - login.html
  - profile.html
  - register.html

Key Points
Separation of Concerns: HTML, JavaScript, CSS, and PHP code are organized into separate files to maintain a clean and modular codebase.
AJAX for Backend Interaction: Uses jQuery AJAX for asynchronous interactions with the backend, avoiding traditional form submissions.
Bootstrap for Responsiveness: Ensures that forms and pages are responsive and styled consistently.
Prepared Statements: MySQL interactions are handled using prepared statements to prevent SQL injection attacks.
LocalStorage for Sessions: Browser localStorage is used to maintain login sessions, avoiding PHP sessions.
Redis for Session Management: Utilized for managing session information on the backend.
Getting Started
Clone the Repository:
bash
Copy code
git clone <repository-url>
Set Up the Environment:
Ensure you have MySQL, MongoDB, and Redis installed and configured.
Update database connection settings in the PHP files as needed.
Run the Application:
Open index.html to start the application.
Follow the registration, login, and profile management flow.
