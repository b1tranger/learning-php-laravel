<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .center {
            text-align: center;
        }
    </style>
    <?php

    include("connection.php");

    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // Collect the username and sanitize it for safety
        // $name = htmlspecialchars($_POST['username']);
        // $buttonClicked = $_POST['action'];
    
        // echo "
        // <div style='margin-top: 20px; padding: 10px; border: 1px solid #ccc;'> ";
    
        // // Logic based on the button value
        // if ($buttonClicked == "save") {
        //     echo "<strong>Success:</strong> User <em>$name</em> has been saved to the database.";
        // } elseif ($buttonClicked == "delete") {
        //     echo "<strong>Warning:</strong> User <em>$name</em> has been removed.";
        // }
    
        // echo "</div>";
    }

    // Check if the button was clicked
    if (isset($_POST['submit'])) {

        // Getting data from the form
        $name = $_POST['name'];
        $age = $_POST['age'];
        $blood_type = $_POST['blood_type'];
        $weight = $_POST['weight'];

        // Standard SQL Query (The "Easier" Version)
        $sql = "INSERT INTO demo (Name, Age, Blood_type, Weight) 
            VALUES ('$name', '$age', '$blood_type', '$weight')";

        // if (mysqli_query($conn, $sql)) {
        //     echo "Data inserted successfully into the demo table!";
        //     echo "<br><a href='index.html'>Go Back</a>";
        // } else {
        //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        // }
    }
    ?>
</head>

<body>
    <div>
        <h1 class="center">Test PHP Website</h1>
        <hr>
        <h2>User Management</h2>
        <!-- <form method="POST" action="../../../PHP/Day 1/b1tranger/level_2/welcome.php"> -->
        <!-- <label for="username">Enter Name:</label>
            <input type="text" name="username" id="username" value="
             <?php

             //  if ($_SERVER["REQUEST_METHOD"] == "POST") {
             //      echo $name;
             
             //  }
             ?>
            " required> -->

        <!-- <br><br>

            <button type="submit" name="action" value="save">Save User</button>
            <button type="submit" name="action" value="delete">Delete User</button> -->
        <!-- </form> -->


        <form action="" method="POST">
            <label>Name:</label><br>
            <input type="text" name="name" required><br><br>

            <label>Age:</label><br>
            <input type="number" name="age" required><br><br>

            <label>Blood Type:</label><br>
            <input type="text" name="blood_type" required><br><br>

            <label>Weight (kg):</label><br>
            <input type="number" name="weight" required><br><br>

            <button type="submit" name="submit">Save Data</button>

        </form>

        <?php
        if (isset($_POST['submit'])) {
            echo "
        
            <div style='margin-top: 20px; padding: 10px; border: 1px solid #ccc;'> ";

            // Logic based on the button value
            // if ($buttonClicked == "save") {
            //     echo "<strong>Success:</strong> User <em>$name</em> has been saved to the database.";
            // } elseif ($buttonClicked == "delete") {
            //     echo "<strong>Warning:</strong> User <em>$name</em> has been removed.";
            // }
        
            if (mysqli_query($conn, $sql)) {
                echo "Data inserted successfully into the demo table!";
                echo "<br><br><a href='index.php'>Go Back</a>";
                echo "<br><br><a href='Level_2/welcome.php'>Go to Welcome</a>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }


            echo "</div>";
        }
        ?>


    </div>
</body>

</html>