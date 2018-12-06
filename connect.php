    <?php

$email_address = filter_input(INPUT_POST, 'email_address');
if (!empty($email_address)){
$host = "skillterr.com.mysql";
    $dbusername = "skillterr_com";
    $dbpassword = "NHjABpZVWVHNpnyr29YKutD2";
    $dbname = "skillterr_com";

    // Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

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
else{
    echo "Please fill in your email";
    die();
}
?>
