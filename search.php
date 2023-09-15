<?php
//
include_once "php/connect.php";
// Check whether user is logged on or not
if (!isset($_SESSION['unique_id'])) {
    header("location:LOGIN.php");
}


?>

<!DOCTYPE html>
<html>
<head>
    <title>Social Network</title>
    <link rel="stylesheet" type="text/css" href="resources/css/main.css">
</head>
<body>
    <div class="container">
        <h1>Search Results</h1>
        <?php
        $key = mysqli_real_escape_string($conn, $_POST['jina']);
            $name = explode(' ', $key, 2); // Break String into Array.
                if(empty($name[1])) {
                    $sql = "SELECT * FROM users WHERE users.user_firstname = '$name[0]' OR users.user_lastname= '$name[0]'";
                    $query = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($query) != 0){
                    echo $query;
                }else{echo "No users found";}
                } else {
                    $sql = "SELECT * FROM users WHERE users.user_firstname = '$name[0]' AND users.user_lastname= '$name[1]'";
                    $quer = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($query) != 0){
                    echo $quer;
                } else{echo "No users found";}
                }   
        ?>
    </div>
</body>
</html>
