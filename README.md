# PHPMotors
- This is a demo website that shows MVC architecture, using tutorials available from BYU-Idaho here: https://ammonshepherd.github.io/340br/assignments.html

# How To Run It
- Follow the instructions to setup XAMPP if you don't have it yet
- Clone this repo into your htdocs (it should create a folder called phpmotors inside htdocs).
- Start your MySQL server in the XAMPP admin panel.
- Navigate to http://localhost/phpmyadmin/
- Create a database called phpmotors as instructed here: https://ammonshepherd.github.io/340br/phpmotors/views/local-db.html. Don't import the SQL it gives you.
- Instead, import the complete SQL file called phpmotors-april-2024.sql (inside this repo) into phpmotors. See previous link for how to import SQL into phpmotors: https://ammonshepherd.github.io/340br/phpmotors/views/local-db.html
- Create a proxy user as detailed here: https://ammonshepherd.github.io/340br/phpmotors/views/proxy-user.html, and modify the library/connections.php file to use your proxy user password.
- Start your Apache server in the XAMPP admin panel and navigate to http://localhost/phpmotors/