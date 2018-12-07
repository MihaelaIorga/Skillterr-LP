<?php
include 'connect.php';
?>

<?php

if(isset($_POST["submit"]))
    if($_POST){
        $_SESSION ['email_address'] = $_POST['email_address'];
      $_SESSION ['first_name'] = $_POST['first_name'];
        $_SESSION ['last_name'] = $_POST['last_name'];

    $email_address = $_POST["email_address"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];

$query=mysqli_query($con,"INSERT INTO members (email_address, first_name, last_name) VALUES ('$email_address', '$first_name', '$last_name')");
        if($query($sql)){
echo "done!";
}
        else{
            echo "Error: " . $sql . "<br>".$conn->error;

        }
else{
    echo "Please try-again";
    die();
}

?>
