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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <link rel="stylesheet" href="css/styly.css">
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
                    <a href="# "><img src="IMAGES/copyPaste.png" alt="">&nbsp;Loans</a>
                </li>
                <li>
                    <a href="# "><img src="IMAGES/credit.png" alt="">&nbsp;Customers</a>
                </li>
                <li>
                    <a href="# "><img src="IMAGES/copyPaste.png" alt="">&nbsp;Payments</a>
                </li>
                <li>
                    <a href="# "><img src="IMAGES/complaint.png" alt="">&nbsp;Reports</a>
                </li>
                <li>
                    <a href="# "><img src="IMAGES/recent.jpg" alt="">&nbsp;Previous Activities</a>
                </li>
                <li>
                    <a href="# "><img src="IMAGES/st.png" alt="">&nbsp;Settings</a>
                </li>
                <li>
                    <a href="php/logout.php?logout_id=<?php echo $row['unique_id'];?>"><img src="IMAGES/back.png" alt="">&nbsp;LOGOUT</a>
                </li>
                <br>

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
        <div id="header">
            <div id="nav">
                <div id="search">
                    <input type="text" placeholder="Search... ">
                    <button type="submit"><img src="IMAGES/search.png " alt=" "></button>
                </div>
                <div id="user">
                    <a href="#" id="btn">Add New</a>
                    <a href="users.php" id="btn"><img src="IMAGES/message.png"></a> 
                    <div id="imagecase">
                        <a href="profile.php"><img src="IMAGES/account.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="bottom">
            <div id="A">
                <div id="A1">
                    <div id="card">
                        <div id="box">
                            <h1>$.25000</h1>
                            <h3>ASSETS</h3>
                        </div>
                        <div id="iconcase">
                            <img src="IMAGES/income.png" alt="">
                        </div>
                    </div>
                    <div id="card">
                        <div id="box">
                            <h1>$.25000</h1>
                            <h3>LIABILITY</h3>
                        </div>
                        <div id="iconcase">
                            <img src="IMAGES/income.png" alt="">
                        </div>
                    </div>
                    <div id="card">
                        <div id="box">
                            <h1>$.25000</h1>
                            <h3>EXPENSE</h3>
                        </div>
                        <div id="iconcase">
                            <img src="IMAGES/income.png" alt="">
                        </div>
                    </div>
                </div>
                <div id="A2">
                    <div id="title">
                        <h1>PERFOMANCE STATISTICS</h1>
                    </div>
                    <div id="stat"></div>
                </div>
                <div id="A3">
                    <div id="title">
                        <h1>PAYMENT REQUESTS</h1>
                    </div>
                    <div id="table">
                        <table>
                            <thead>
                                <tr>
                                    <th>SERIAL NUMBER FROM</th>
                                    <th>AMOUNT -K.sh</th>
                                    <th>SERIAL NUMBER TO</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>5vttfb</th>
                                    <td>9009</td>
                                    <td>4fvtdt</td>
                                </tr>
                                <tr>
                                    <th>6refdv</th>
                                    <td>8000</td>
                                    <td>3vdfb</td>
                                </tr>
                                <tr>
                                    <th>7gb5vb</th>
                                    <td>7100</td>
                                    <td>9zgjfg</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div id="B">
                <div id="B1">
                    <div id="title">
                        <h1>ACTIVE USERS</h1>
                    </div>
                    <div id="table">
                        <table>
                            <thead>
                                <tr>
                                    <th>SERIAL NUMBER</th>
                                    <th>NUMBER OF TRANSACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>5vttfb</th>
                                    <td>99</td>
                                </tr>
                                <tr>
                                    <th>6refdv</th>
                                    <td>80</td>
                                </tr>
                                <tr>
                                    <th>7gb5vb</th>
                                    <td>71</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="B2">
                    <div id="title">
                        <h1>TOP BUSINESSES</h1>
                    </div>
                    <div id="table">
                        <table>
                            <thead>
                                <tr>
                                    <th>SERIAL NUMBER</th>
                                    <th>BUSINESS NAME</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>5vttfb</th>
                                    <td>Mama Faridah</td>
                                </tr>
                                <tr>
                                    <th>6refdv</th>
                                    <td>KAMBIKUU</td>
                                </tr>
                                <tr>
                                    <th>7gb5vb</th>
                                    <td>Mama Obama</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="B3">
                    <div id="title">
                        <h1>TRANSACTION HISTORY</h1>
                    </div>
                    <div id="table">
                        <table>
                            <thead>
                                <tr>
                                    <th>SERIAL NUMBER</th>
                                    <th>AMOUNT K.sh
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>5vttfb</th>
                                    <td>9900</td>
                                </tr>
                                <tr>
                                    <th>6refdv</th>
                                    <td>2000</td>
                                </tr>
                                <tr>
                                    <th>7gb5vb</th>
                                    <td>350</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>