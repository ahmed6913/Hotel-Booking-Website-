# Hotel Booking Website 

# Features

- User and Admin Login Authentication Secure login system for both guests and administrators.
- Room Check-in: Guests can register and check-in to available rooms via a user-friendly registration form.
- Customer Records: The system keeps detailed records of all customer bookings and interactions.
- Room Availability: Real-time updates on the availability or non-availability of rooms.
- Check-in/Check-out Management: Easily track customer check-ins and check-outs.
- Room Booking Status: View and manage the status of booked and unbooked rooms.
- Room Maintenance: Hotel managers can update the maintenance status of rooms.
- Contact and Feedback Section: Guests can reach out to the hotel management or provide feedback through a dedicated contact interface.

# Technologies Used

- HTML : For structuring the web pages.
- CSS : For styling the user interface and enhancing the visual appeal.
- PHP : For backend logic, handling form submissions, and server-side processing.
- MySQL : Database to store customer records, room data, and booking information.
- XAMPP : Local server environment used for development (Apache server, MySQL).
- Visual Code : Code editor used for developing the website.
- Setup and Installation Instructions

## Follow these steps to set up the BookForMe Management System on your local machine:

Install XAMPP: Download and install XAMPP on your machine.

Clone the Project: Clone the repository or download the project files into the htdocs directory inside the XAMPP installation folder.

git clone <repository-url> C:/xampp/htdocs/BookForMe

Start XAMPP Services: Open the XAMPP Control Panel and start the Apache and MySQL services.

## Database Setup:

Open phpMyAdmin by navigating to http://localhost/phpmyadmin.
Create a new database called hotel_management.
Import the provided SQL file (hotel_management.sql) into the newly created database.
Configure Database Connection:

Open the config.php file in the project folder.
Modify the database connection parameters to match local setup:
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BookForMe_management";
Access the Website:

Open your web browser and go to http://localhost/BookForMe to access the application.

# For Guests:

Visit the home page and register/log in to your account.
Search for available rooms and make a booking.
View your booking history and manage your check-ins/check-outs.

# For Admins:

Log in using your admin credentials.
Add, update, and manage hotel rooms and their availability.
View all customer bookings and manage check-in/check-out statuses.
Ensure room maintenance and availability are up-to-date.
Contact

### For any queries or issues, please reach out via the contact form on the website, or email us at: support@bookforme.com.
