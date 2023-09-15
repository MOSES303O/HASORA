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
    <title>CUSTOMER</title>
    <link rel="stylesheet" href="css/syy.css">
</head>

<body>
    <?php
     $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
     if(mysqli_num_rows($sql) > 0){
       $row = mysqli_fetch_assoc($sql);
      }
   ?>
    <div id="sidebar">
        <nav>
            <div id="logo">

                <head>
                    <h1>HASORA</h1>
                </head>
            </div>
            <ul>
                <li>
                    <a href="# "><img src="IMAGES/scale.png" alt="">&nbsp;Community</a>
                </li>
                <li>
                    <a href="# "><img src="IMAGES/pilot.png" alt="">&nbsp;Co-pilot Banking</a>
                </li>
                <li>
                    <a href="# "><img src="IMAGES/care.jpg" alt="">&nbsp;Digital-Harambee</a>
                </li>
                <li>
                    <a href="# "><img src="IMAGES/credit.png" alt="">&nbsp;Self-repayment Credit</a>
                </li>
                <li>
                    <a href="# "><img src="IMAGES/copyPaste.png" alt="">&nbsp;Statistics</a>
                </li>
                <li>
                    <a href="# "><img src="IMAGES/complaint.png" alt="">&nbsp;Report</a>
                </li>
                <li>
                    <a href="# "><img src="IMAGES/recent.jpg" alt="">&nbsp;Previous Activities</a>
                </li>
                <li>
                    <a href="# "><img src="IMAGES/st.png" alt="">&nbsp;Settings</a>
                </li>
                <li>
                    <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>"><img src="IMAGES/back.png" alt="">&nbsp;LOGOUT</a>
                </li>
                <br>
                <li>Theme Change</li>
            </ul>
        </nav>
    </div>
    <div id="sidebarbtn"><img src="IMAGES/bar.png" id="menu">
    </div>
    <script>
        var sidebarbtn = document.getElementById("sidebarbtn");
        var sidebar = document.getElementById("sidebar");
        var menu = document.getElementById("menu");
        sidebarbtn.onclick = function() {
            if (sidebar.style.left == "-250px") {
                sidebar.style.left = "0";
                sidebar.style.left = "transparent";
            } else {
                sidebar.style.left = "-250px";
                sidebar.style.left = "transparent";
            }

        }
    </script>
    <div id="container">
        <div  id="header">
            <div id="nav">
            <ul class="notifications"></ul>
                    <form method="get" class="random-div" action="search.php" id="search" onsubmit="return validateField()">
                    <input type="search" id="query" name='jina' placeholder="Search... ">
                    <input type="submit"  id="querybutton" src="IMAGES/search.png" width="" height="" >
                    </form>
                <div class="random-div" id="user">
                    <a href="#" id="btn">Add New</a>
                    <a href="users.php" id="btn"><img src="IMAGES/message.png"></a>                    
                    <div id="imagecase">
                        <a href="profile.php"><img src="IMAGES/account.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="header1">
            <div class="random-div" id="center1">
                <div class="random-div" id="b1">
                    <div id="title">
                        <h1>CREATE INVOICE</h1>
                    </div>
                    <div id="INVOICE"></div>
                </div>
                <div class="random-div" id="b2">
                    <div id="title">
                        <h1>RECENT BUSINESSES</h1>
                    </div>
                    <div id="recent">
    <div class="buttons">
        <button class="btn" id="success">Success</button>
    </div></div>
                </div>
                <div class="random-div" id="b3">
                    <div id="trans">
                        <div id="title">
                            <h1>MAKE PAYMENTS</h1>
                        </div>
                        <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">                       
                    <div class="field input">
                        <label>SERIAL NUMBER:</label>
                        <input type="text" name="Sname" placeholder="serial number" required>
                    </div><div class="field input">
                        <label>ITEM AMOUNT:<select id="lipa">
                       <option value="DIRECT">DIRECT</option>
                       <option value="LOAN">LOAN</option>
                      </select></label>
                    <input type="number" name="AMOUNT" placeholder="K.sh">                    
                    </div><div id="choice">
                        <div id="dip"><a href="#">PAY</a></div>
                            <div id="dip"><a href="#">SCAN</a></div>
                        </div>
                        </form>
                </div>
            </div>
        </div>
         <div id="centerb">
            <div id="C1">
                    <div id="title">
                        <h1>BANKING</h1>
                    </div>
                    <div class="random-div" id="bk">
                        <ul>
                        <li><h2>NAME: <?php echo $row['fname']. " " . $row['lname'] ?></h2></li>
                        <li><h2>SERIAL NUMBER:<?php echo $row['unique_id']?></h2></li>
                        </ul>
                     </div>
                          <div class="random-div" id="acc">
                            <div id="dep"><a href="#">DEPOSIT</a></div>
                            <div id="dep"><a href="#">WITHDRAW</a></div>
                        </div>
             </div>
              <div class="random-div" id="C2">
                <div id="title">
                <h1>TRANSACTION HISTORY</h1>
          </div>
        <div id="histo">NI PESA SINANI PESA SINANI PESA SINANI PESA SINANI PESA SINANI PESA SINANI PESA SINANI PESA SINANI PESA SINANI PESA SINANI PESA SINANI PESA SINANI PESA SINANI PESA SINANI PESA SINANI PESA SINANI PESA SINANI PESA SINANI PESA SINANI PESA SINA</div>
    </div>
        </div>
          <div class="random-div" id="footer"><p>@2023,copyright OCHIENG'S ENTERPRISE </p></div>
    </div>
</div>
<script>
function validateField(){
    var query = document.getElementById("query");
    var button = document.getElementById("querybutton");
    if(query.value == "") {
        query.placeholder = 'Type something!';
        return false;
    }
    return true;
}
</script>
<script src="js/random.js"></script>
<script src="js/scr.js"></script>
</body>