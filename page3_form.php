<?php
session_start();


//connect to db
$servername = "skillterr.com.mysql";
$username = "skillterr_com";
$password = "NHjABpZVWVHNpnyr29YKutD2";

// Create connection
$conn=mysqli_connect('skillterr.com.mysql','skillterr_com','NHjABpZVWVHNpnyr29YKutD2');
mysqli_select_db($conn,'skillterr_com');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

//REGISTER USER

if (isset($_POST['submit_join'])) {

    //receive all input values from the form
  $first_name = ($_POST['first_name']);
  $last_name = ($_POST['last_name']);
    $email_address = ($_SESSION['email_address']);
}

$query=mysqli_query($conn,"INSERT INTO members (email_address, first_name, last_name) VALUES ('$email_address', '$first_name', '$last_name')";);

//let's run query
        if($query($sql)){
echo "Success";
}
    }
        else{
            echo "Error: " . $sql . "<br>".$conn->error;

        }
else{
    echo "Please try-again";
    die();
}

?>
