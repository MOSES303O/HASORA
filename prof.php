<?php 
  session_start();
  include_once "php/connect.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: LOGIN.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YOUR PROFILE</title>
    <link rel="stylesheet" href="css/proff.css">
</head>
<body>
    <section>
    <header>
        <?php          
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id ={$_SESSION['unique_id']}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }
        ?>
        <a href="php/previous.php" class="back-icon"><i>previous</i></a>
        <div id="mg"><img src="php/images/<?php echo $row['img']; ?>" alt=""></div>                
            <ul id="mg">
                <li>MAME:<?php echo $row['fname']. "        " . $row['lname'] ?></li>
                <li>PHONE:<?php echo $row['phone']?></li>
                <li>EMAIL:<?php echo $row['email']?></li>
            </ul>      
      </header>
    </section>
</body>
</html>