Capture Moment Photography
Capture Moment Photography is a professional portfolio website designed to showcase the photographer's work, skills, and experience. This project features a user-friendly interface, a gallery for displaying photographs, and an admin panel for easy content management.

Table of Contents
Project Overview
Features
Installation
Technologies Used
Usage
Admin Panel
Responsive Design
Testing
Contributing
License
Project Overview
Capture Moment Photography is a multi-page website aimed at enhancing the online presence of photographers. It includes key pages such as:

Portfolio Page
Gallery Page
Experience & Skills Page
Contact Form
Admin Panel for content management
Features
Responsive Design: The website works seamlessly on mobile, tablet, and desktop devices.
Gallery Filter: Users can filter images by categories (e.g., Wildlife, Night, Landscape).
Contact Form: Clients can reach out to the photographer directly through the website.
Admin Panel: Photographers can easily manage their portfolio, update the gallery, and view client inquiries.
SEO Optimized: The website is optimized for search engines to improve visibility.
Installation
Clone the Repository
Clone the project to your local machine using:

bash
Copy code
git clone https://github.com/ShishirB434/CaptureMoment.git
Navigate to the Project Directory

bash
Copy code
cd CaptureMoment
Set Up Local Development Environment
Use XAMPP to set up a local server. Start the Apache and MySQL services.

Import the Database

Open phpMyAdmin from your XAMPP control panel.
Create a new database named capture_moment.
Import the provided SQL file into this database.
Update Configurations
Modify the database connection details in the config file (if necessary):

php
Copy code
// config.php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'capture_moment';
Run the Application
Open your browser and navigate to:

bash
Copy code
http://localhost/capture-moment
Technologies Used
Frontend: HTML5, CSS3, JavaScript, Bootstrap
Backend: PHP, MySQL
Server: Apache (via XAMPP)
Version Control: Git and GitHub
Usage
Viewing the Portfolio:
Users can browse through various photography categories in the gallery and filter photos based on their interests.

Contact Form:
Visitors can contact the photographer by filling out the contact form. Form submissions are handled by the backend and stored in the database.

Admin Panel:
The admin panel allows the photographer to manage the gallery, add new projects, update skills, and respond to inquiries. Admin access is secured with authentication.

Admin Panel
Login: Secure login for the photographer to access the admin area.
Manage Gallery: Add, update, or delete photos in the gallery, with immediate reflection of changes on the live site.
View Inquiries: View messages from potential clients submitted through the contact form.
Responsive Design
The website is fully responsive and has been tested across multiple devices, ensuring optimal performance on:

Mobile
Tablet
Desktop
Testing
The website has been thoroughly tested for functionality and performance:

Contact Form Submission: Valid and invalid inputs were tested.
Gallery Functionality: Ensured smooth image loading and filtering.
Admin Panel: Verified secure login and content management.
Cross-Browser Compatibility: Tested on Chrome, Firefox, and Safari.
Responsive Design: Verified proper layout on different screen sizes.
Contributing
If you would like to contribute to this project:

Fork the repository.
Create a new branch for your feature.
Submit a pull request explaining your changes.
License
This project is licensed under the MIT License. See the LICENSE file for details.
