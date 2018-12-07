<?php
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
?>
