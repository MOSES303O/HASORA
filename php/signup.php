<?php
    session_start();
    include_once "connect.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $role = mysqli_real_escape_string($conn, $_POST['ROLE']);
    $tarehe = mysqli_real_escape_string($conn, $_POST['ddmmyy']);
    $gender = mysqli_real_escape_string($conn, $_POST['GENDER']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $acc = mysqli_real_escape_string($conn, $_POST['acc']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    if(!empty($fname) &&!empty($gender) &&!empty($location) &&!empty($phone) &&!empty($acc) && !empty($lname) && !empty($email) && !empty($role) &&!empty($tarehe) && !empty($password)){
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){
                echo "$email - This email already in use!";
            }else{
                if(isset($_FILES['image'])){
                    $img_name = $_FILES['image']['name'] OR $_FILES['img1']['name'];
                    $img_type = $_FILES['image']['type'] OR $_FILES['img1']['type'];
                    $tmp_name = $_FILES['image']['tmp_name'] OR $_FILES['img1']['tmp_name'];
                    
                    $img_explode = explode('.',$img_name);
                    $img_ext = end($img_explode);
    
                    $extensions = ["jpeg", "png", "jpg"];
                    if(in_array($img_ext, $extensions) === true){
                        $types =["image/jpeg", "image/jpg" , "image/png"] OR ["img1/jpeg","img1/jpg", "img1/png"];
                        if(in_array($img_type, $types) === true){
                            $time = time();
                            $new_img_name = $time.$img_name;
                            if(move_uploaded_file($tmp_name,"images/".$new_img_name)){
                                $ran_id = rand(time(), 99999999);
                                $status = "Active now";
                                $encrypt_pass = md5($password);
                                $insert_query = mysqli_query($conn, "INSERT INTO users (date,unique_id,role, fname, lname,phone,account,location,gender, email, password, img,img1,status)
                                VALUES ('{$tarehe}', '{$ran_id}', '{$role}', '{$fname}','{$lname}','{$phone}','{$acc}','{$location}','{$gender}','{$email}','{$encrypt_pass}','{$new_img_name}', '{$new_img_name}', '{$status}')");
                                if($insert_query){
                                    $select_sql2 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                    if(mysqli_num_rows($select_sql2) > 0){
                                        $result = mysqli_fetch_assoc($select_sql2);
                                        $_SESSION['unique_id'] = $result['unique_id'];                                        
                                        echo "success";
                                    }else{
                                        echo "Correct the email address!";
                                    }
                                }else{
                                    echo "Something went wrong. Please try again!";
                                }
                            }
                        }else{
                            echo "Please upload an image file - jpeg, png, jpg";
                        }
                    }else{
                        echo "Please upload an image file - jpeg, png, jpg";
                    }
                }
            }
        }else{
            echo "$email is not a valid email!";
        }
    }else{
        echo "All input fields are required!";
    }
?>