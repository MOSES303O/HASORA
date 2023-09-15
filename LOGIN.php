<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: user.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME PAGE</title>
    <link rel="stylesheet" href="css/generall.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>
<body>
  <div class="wrapper">
    <section class="form login">
      <header>OCHIENG'S ENTERPRISE</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="LOGIN">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="general.php">Signup now</a></div>
    </section>
  </div>
  
  <script src="js/pass.js"></script>
  <script src="js/login.js"></script>

</body>
</html>