<?php
    header("Location: ../index.php");

    include_once("../connect.php");
    
    $un = $_REQUEST['username'];
    $pw = $_REQUEST['password'];
    
    $sql = "INSERT INTO `users`(`username`, `password`) VALUES ('$un','$pw')";
    
    if($conn->query($sql) === true){
        echo "<script>alert('You Registered Successfully');
        location.href='../index.php';</script>";
    } else {
        echo "ERROR: Could not able to execute $sql. " . $conn->error;
    }
 
// Close connection
$conn->close();

exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

