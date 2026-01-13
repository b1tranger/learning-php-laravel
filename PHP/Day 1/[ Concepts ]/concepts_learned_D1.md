Based on the files provided, here is a concise list of the techniques and concepts you have implemented today. These represent the fundamental building blocks of a dynamic, database-driven web application.

### **Database & SQL Management**

* **Table Schema Design**: Creating a structured table named `demo` with specific data types like `varchar` for strings and `int` for numerical values.
* **Primary Key & Auto-Increment**: Configuring a unique `ID` field that serves as a primary key and automatically increases with every new record.
* **Data Seeding**: Using `INSERT INTO` statements within a `.sql` file to populate the database with initial sample data.

### **PHP Backend Integration**

* **Database Connectivity**: Utilizing the `mysqli` object to establish a communication bridge between PHP and a MariaDB/MySQL server.
* **Modular Programming**: Implementing the `include()` function to keep code clean by separating the connection logic into its own file.
* **Handling Superglobals**: Using `$_POST` to retrieve data sent from the browser and `$_SERVER["REQUEST_METHOD"]` to detect form submissions.
* **Conditional Triggering**: Using `isset()` to verify that a specific button was clicked before executing database logic.

### **Frontend & User Interaction**

* **HTML Form Structures**: Building a user interface with various input types (`text`, `number`) to collect diverse data points like Name, Age, and Weight.
* **Post-Action Feedback**: Generating dynamic HTML responses to inform the user whether their data was successfully saved or if an error occurred.
* **Page Navigation**: Using standard HTML anchors (`<a>` tags) to create a flow between the main index, the success message, and a dedicated welcome page.
* **CSS Layout Basics**: Utilizing internal style sheets to manage text alignment and visual separation using classes and horizontal rules.

---

**Would you like me to show you how to add a "Read" feature to your `index.php` so you can see the list of users directly on the page?**