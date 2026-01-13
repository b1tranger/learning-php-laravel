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
</head>

<body>
    <div>
        <h1 class="center">Test PHP 2 Website</h1>
        <hr>
        <form method="POST" action="index.php">

            <label for="input"> name </label>
            <input name="input_name">

            <button type="submit" >Submit</button>
        </form>

    </div>
    <?php

        include("db.php");

        $color = "Red";
        echo "my first PHP script"; 
        echo "my first PHP script is $color";


        function myTest(){
            $color = 'red';
            echo "Variable color inside function is: $color";

        }
        echo "<br>";
        myTest();
        echo "<br>";
        print("helloworld");
        if($_SERVER["REQUEST_METHOD"]=="POST"){

            $name = $_POST["input_name"];

            echo "Hello, " . htmlspecialchars($name) . "!";
        }


        $sql = "SELECT id,name ,email FROM users";
        $result = mysqli_query($conn,$sql)
    ?>

    <br>

    <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
        </tr>
    </thead>
    <tbody>

    <?php

     while($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row["id"] ."</td>";
        echo "<td>" . $row["name"] ."</td>";
        echo "<td>" . $row["email"] ."</td>";
        echo "<tr>";
     }
    ?>

    </tbody>



    </table>


    
</body>

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

</html>