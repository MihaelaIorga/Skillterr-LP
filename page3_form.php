<?php
session_start();





    $email_address = $_SESSION['email_address'];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
?>

<?php
include 'connect.php';

$query=mysqli_query($con,"INSERT INTO members (email_address, first_name, last_name) VALUES ('$email_address', '$first_name', '$last_name')");
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
