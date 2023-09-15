<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location:customer.php")||header("location:admin.php")||header("location:BUSINESS.php");
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
        <section class="form signup">
            <header>OCHIENG'S ENTERPRISE </header>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="First name" required>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Last name" required>
                    </div>
                    <div class="field input">
                        <label>DATE OF BIRTH</label>
                        <input type="date" name="ddmmyy" required>
                    </div>
                </div>
                <div class="field input">
                    <label>Email Address</label>
                    <input type="text" name="email" placeholder="Enter your email" required>
                </div>
                <div class="field input">
                    <label>Account number</label>
                    <input type="text" name="acc" placeholder="Enter your account no" required>
                </div>
                <div class="field input">
                    <label>phone number</label>
                    <input type="number" name="phone" placeholder="Enter your phone no" required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter new password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div>
                    
                <br/>
                <p>
                        <label><h1>LOCATION</h2><?php echo $row['location'] ?? "";?></label><br>
                        <input type="radio" name="location" <?php if(isset($row['location']) && $row['location']=='AROUND_SIRIBA'){echo 'true';}?> value="AROUND_SIRIBA"/>AROUND_SIRIBA
                        <input type="radio" name="location" <?php if(isset($row['location']) && $row['location']=='AROUND_COLLEGE_CAMPUS'){echo 'true';}?> value="AROUND_COLLEGE_CAMPUS"/>AROUND COLLEGE CAMPUS
                    </p>
                    </br>
                    <p>                        
                        <label><h2>ROLE</h2><?php echo $row['role'] ?? "";?></label><br>
                        <input type="radio" name="ROLE" <?php if(isset($row['role']) && $row['role']=='ADMIN'){echo 'true';}?> value="ADMIN"/>ADMIN
                        <input type="radio" name="ROLE" <?php if(isset($row['role']) && $row['role']=='BUSINESS_OWNER'){echo 'true';}?> value="BUSINESS_OWNER"/>BUSINESS OWNER
                        <input type="radio" name="ROLE" <?php if(isset($row['role']) && $row['role']=='CUSTOMER'){echo 'true';}?> value="CUSTOMER"/>CUSTOMER
                    </p><br/>
                    <p>
                        <label><h1>GENDER</h2><?php echo $row['GENDER'] ?? "";?></label><br>
                        <input type="radio" name="GENDER" <?php if(isset($row['GENDER']) && $row['GENDER']=='FEMALE'){echo 'true';}?> value="FEMALE"/>FEMALE
                        <input type="radio" name="GENDER" <?php if(isset($row['GENDER']) && $row['GENDER']=='MALE'){echo 'true';}?> value="MALE"/>MALE
                    </p>
                </div>
                <div class="field image">
                    <label>ID Image</label>
                    <input type="file" name="img1" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                </div>
                <div class="field image">
                    <label>Passport Image</label>
                    <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
                </div>
                <div class="field button" id="success">
                    <input id="success" type="submit" name="submit" value="REGISTER">
                </div>
            </form>
            <div class="link">Already signed up? <a href="LOGIN.php">Login now</a></div>
            <ul class="notifications"></ul>
        </section>
    </div>
    <script src="js/pass.js"></script>
    <script src="js/signup.js"></script>

</body>

</html>