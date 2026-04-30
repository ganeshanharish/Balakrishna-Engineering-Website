# Balakrishna Engineering Website

This is a dynamic website built for a food machinery business. The site showcases different machines, company details, and allows users to view products and contact the company. It also includes a simple admin panel to manage machines.

## About the Project

The main idea of this project is to create a complete business website with both frontend and backend functionality. Users can browse machines, check details, and send enquiries. Admin can log in and manage machine data.

## Features

* Home page with company overview and featured machines 
* Products page listing all machines from database 
* Detailed product page with specs and images 
* Gallery page for infrastructure photos 
* Contact page with company details and form 
* About page with company information 
* Testimonials section
* Admin panel to:

  * Add new machines
  * Edit machine details
  * Delete machines
* Login system for admin 

## Technologies Used

* PHP
* MySQL
* HTML
* CSS
* JavaScript
* Bootstrap

## Project Structure

* `index.php` – Main homepage
* `products.php` – List of all machines
* `product-details.php` – Single product page
* `gallery.php` – Image gallery
* `contact.php` – Contact page
* `about.php` – Company details
* `includes/` – Header, footer, DB connection
* `admin/` – Admin panel files (CRUD operations)
* `assets/` – CSS, images, uploads

## Database

* Uses MySQL database (`machines` table)
* Connection handled using PDO 

## How to Run (Local Setup)

1. Install XAMPP / WAMP
2. Move project folder to:

   ```
   C:\xampp\htdocs\
   ```
3. Start Apache and MySQL
4. Import the database file into phpMyAdmin
5. Open browser:

   ```
   http://localhost/project-folder-name
   ```

## Admin Login

Default login credentials:

* Username: `admin`
* Password: `admin123`

(You can change this in the login file)

## Notes

* Database connection file is inside `includes/db.php`
* Make sure database name and credentials match your local setup
* Image uploads are stored in the uploads folder

## Future Improvements

* Add secure authentication (hashed passwords)
* Add search and filter for products
* Improve UI design
* Add order or enquiry tracking system

## Author

Harish G
Tamil Nadu, India
