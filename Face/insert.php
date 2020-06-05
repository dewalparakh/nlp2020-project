<html>
   <head>
      <title>Add New Record in MySQLi Database</title>
   </head>
   
   <body>
      <div id = "main">
         <form action = "" method = "post">
            <label>Username :</label>
            <input type = "text" name = "username" id = "name" />
            <br />
            <label>Password :</label>
            <input type = "text" name = "password" id = "pass" />
            <br />
            <label>Phone :</label>
            <input type = "tel" name = "phone" id = "phone" />
            <br />
            <br />
            <input type = "submit" value ="Submit" name = "submit"/>
            <br />
         </form>
      </div>
      
      <?php
         if(isset($_POST["submit"])){
            $servername = "localhost:8015";
            $username = "root";
            $password = "";
            $dbname = "blindaid";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
            } 

            $username=$_POST["username"];
            $password=$_POST["password"];
            $phone=$_POST["phone"];

            echo $username;
            echo $password;
            echo $phone;

            //
            $sql = "INSERT INTO user VALUES ('$username', '$password', '$phone')";

            if (mysqli_query($conn, $sql)) {
               echo "New record created successfully";
            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $conn->close();
         }
      ?>
   </body>
</html>