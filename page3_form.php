<?php
session_start();

if( isset( $_SESSION['email_address'] )){
$email_address = $_SESSION['email_address'];
$first_name = filter_input(INPUT_POST, 'first_name');
$last_name = filter_input(INPUT_POST, 'last_name');
if (!empty($first_name))
    if (!empty($last_name))


{

//connect to db
$host = "skillterr.com.mysql";
$dbusername = "skillterr_com";
$dbpassword = "NHjABpZVWVHNpnyr29YKutD2";
$dbname = "skillterr_com";

// Create connection
$conn= new mysqli ('skillterr.com.mysql','skillterr_com','NHjABpZVWVHNpnyr29YKutD2', 'skillterr_com');

// Check connection
if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_error() .') '
            . mysqli_connect_error());
    }


else {
$sql = "INSERT INTO members (first_name, last_name, email_address)
values ('$first_name', '$last_name', '$email_address')";
if ($conn->query($sql)){
echo file_get_contents("personal_details.html");
}
else{
echo "Error: " . $sql . "<br>".$conn->error;
}
$conn->close();
}
}

if (empty($first_name))
    if (empty($last_name))
         if (isset( $_POST['submit-join'] )) {
echo file_get_contents("page2_form.php");
}


  if (isset( $_POST['skip'] ))
{

//connect to db
$host = "skillterr.com.mysql";
$dbusername = "skillterr_com";
$dbpassword = "NHjABpZVWVHNpnyr29YKutD2";
$dbname = "skillterr_com";

// Create connection
$conn= new mysqli ('skillterr.com.mysql','skillterr_com','NHjABpZVWVHNpnyr29YKutD2', 'skillterr_com');

// Check connection
if (mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_error() .') '
            . mysqli_connect_error());
    }


else {
$sql = "INSERT INTO members (email_address)
values ('$email_address')";
if ($conn->query($sql)){
echo file_get_contents("personal_details.html");
}
else{
echo "Error: " . $sql . "<br>".$conn->error;
}
$conn->close();
}
}



}
?>


