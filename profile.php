<?php
session_start();
include_once "php/connect.php";
if(!isset($_SESSION['unique_id'])){
  header("location: LOGIN.php");
}
?>
<html><img src="php/images/<?php echo $row['img']; ?>" alt=""></html>
<?php
echo '<div class="profile">';
echo '<center>';
$profilequery = mysqli_query($conn, "SELECT * FROM users WHERE unique_id ={$_SESSION['unique_id']}");
if(mysqli_num_rows($profilequery)){
$row = mysqli_fetch_assoc($profilequery);
}
// Name and Nickname
if(!empty($row['nname']))
    echo $row['fname'] . ' ' . $row['lname'] . ' (' . $row['nname'] . ')';
else
    echo $row['fname'] . ' ' . $row['lname'];
echo '<br>';
// Profile Info & View
$width = '168px';
$height = '168px';
echo '<br>';
// Gender
if($row['gender'] == "MALE")
    echo 'Male';
else if($row['user_gender'] == "FEMALE")
    echo 'Female';
echo '<br>';
// Birthdate
echo $row['date'];
echo '<center>'; 
echo'</div>';

$query4 = mysqli_query($conn, "SELECT * FROM users WHERE unique_id =  {$_SESSION['unique_id']}");
if(!$query4){
    echo mysqli_error($conn);
}
if(mysqli_num_rows($query4) > 0){
    echo '<br>';
    echo '<div class="profile">';
    echo '<center class="changeprofile">'; 
    echo 'Phones:';
    echo '<br>';
    while($row4 = mysqli_fetch_assoc($query4)){
        echo $row4['phone'];
        echo '<br>';
    }
    echo '</center>';
    echo '</div>';
}

?>