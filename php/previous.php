<?php
session_start();
if(isset($_SESSION['unique_id'])){
    include"connect.php";
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
           $role=$row['role'];
            switch($role){
                case 'ADMIN':
                    header('Location:../admin.php');
                    break;
                case 'BUSINESS_OWNER':
                    header('Location: ../BUSINESS.php');
                    break;
                case 'CUSTOMER':
                    header('Location: ../CUSTOMER.php');
                    break;
                default:
                     echo "INVALID ROLE";
            }
        }
        
}
?>