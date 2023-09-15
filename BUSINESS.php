<?php 
  session_start();
  include_once "php/connect.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: LOGIN.php");
  }
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>HOME</title>
    <link href="css/styll.css" type="text/css" rel="stylesheet" />
</head>

<body>
<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "customer";

$con = mysqli_connect($hostname, $username, $password, $dbname);

    $profilequery = mysqli_query($con, "SELECT * FROM companydata WHERE user_id =111111");
    if(mysqli_num_rows($profilequery)){
    $ruw = mysqli_fetch_assoc($profilequery);
    }
    ?>
<?php
     $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
     if(mysqli_num_rows($sql) > 0){
       $row = mysqli_fetch_assoc($sql);
      }
   ?>
    <div id="sidebar">
        <div id="brandname">
            <h1>HASORA</h1>
        </div>
        <ul>
            <li><a href="# "><img src="IMAGES/pay.png" alt="">&nbsp;Payments</a></li>
            <li><a href="# "><img src="images/pilot.png" alt="">&nbsp;Co-pilot Banking</a></li>
            <li><a href="# "><img src="IMAGES/icon7.png" alt="">&nbsp;Loans</a></li>
            <li><a href="# "><img src="IMAGES/care.png" alt="">&nbsp;Ditigal Harambee</a></li>
            <li><a href="# "><img src="IMAGES/mini.png" alt="">&nbsp;Mini-statement</a></li>
            <li><a href="# "><img src="IMAGES/care.jpg" alt="">&nbsp;Customer care</a></li>
            <li><a href="# "><img src="IMAGES/st.png" alt="">&nbsp;Settings</a></li>
            <li><a href="php/logout.php?logout_id=<?php echo $row['unique_id'];?>"><img src="IMAGES/back.png" alt="">&nbsp;Log Out</a></li>
        </ul>
    </div>
    <div id="container">
        <div id="header">
            <div id="nav">
                <div id="search">
                    <input type="text" placeholder="Search... ">
                    <button type="submit"><img src="IMAGES/search.png " alt=" "></button>
                </div>
                <div id="user">
                    <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>"id="btn">LOG OUT</a>
                    <a href="users.php" id="btn"><img src="IMAGES/message.png"></a> 
                    <div id="imagecase">
                    <a href="prof.php"><img src="IMAGES/account.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div id="content">
            <div id="cards">
                <div id="card">
                    <div id="box">
                        <h1>$.<?php echo $ruw['assets'] ?></h1>
                        <h3>INCOME</h3>
                    </div>
                    <div id="iconcase">
                        <img src="IMAGES/income.png" alt="">
                    </div>
                </div>
                <div id="card">
                    <div id="box">
                        <h1>$.<?php echo $ruw['accbalance'] ?></h1>
                        <h3>BANKING</h3>
                    </div>
                    <div id="iconcase">
                        <img src="IMAGES/bank.png" alt="">
                    </div>
                </div>
                <div id="card">
                    <div id="box">
                        <h1>$.500</h1>
                        <h3>EXPENSES</h3>
                    </div>
                    <div id="iconcase">
                        <img src="IMAGES/buy.png" width="35" height="35" alt="">
                    </div>
                </div>
                <div id="card">
                    <div id="box">
                        <h1>$.<?php 
                        $BB=3/4*$ruw['accbalance'];
                        echo $BB;
                        ?></h1>
                        <h3>WITHDRAWABLE</h3>
                    </div>
                    <div id="iconcase">
                        <img src="IMAGES/pay.png" width="40" height="40" alt="">
                    </div>
                </div>
            </div>
            <div id="content-2">
                <div id="component-21">
                    <div id="stat">
                        <div id="title">
                            <h2>STATISTICS</h2>
                        </div>
                     
                        <div id="GRAPH">                           
                          
                        </div>                        
                    </div>                
                    <div id="ctrans">
                        <div id="title">
                            <h2>CUSTOMERS TRANSACTION</h2>
                            <a href="#" id="btn" View All></a>
                        </div>
                        <div id="table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>SERIAL NUMBER</th>
                                        <TH>TRANSACTION ID</TH>
                                        <th>DATE</th>
                                        <th>TIME</th>
                                        <th>AMOUNT</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php 
                                    $ruuw=mysqli_fetch_array(mysqli_query($con,"SELECT*FROM TRANSACTION"));
                                    for($i=mysqli_num_rows(mysqli_query($con,"SELECT*FROM TRANSACTION"));0<$i;$i--){
                                        echo'<tr>';
                                       echo '<th>'.$ruuw['user_id'].'</th>';
                                       echo '<td>'.$ruuw['date'].'</td>';
                                       $date=date('Y-m-d');
                                       echo '<td>'.$date.'</td>';
                                       echo '<td>'.$date.'</td>';
                                       echo '<td>'.$ruuw['liability'].'</td>';
                                  echo'</tr>';
                                    }
                                    ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
                <div id="component-22">
                    <div id="right1">
                        <div id="title">
                            <h2>TOP CUSTOMERS</h2>
                            <a href="#" id="btn" View All></a>
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
                        <div id=" right2">
                            <div id="title ">
                                <h2>TODAYS CUSTOMERS</h2>
                                <a href="# " id="btn " View All></a>
                            </div>
                            <div id="table">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>SERIAL NUMBER</th>
                                            <th>TRANSACTION ID </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>5vttfb</th>
                                            <td>gvgh445</td>
                                        </tr>
                                        <tr>
                                            <th>6refdv</th>
                                            <td>fyrtfgh</td>
                                        </tr>
                                        <tr>
                                            <th>7gb5vb</th>
                                            <td>fhdtb</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div id="right3">
                            <div id="title">
                                <h2>WITHDRAW</h2>
                            </div>
                            <div id="withd">
                                <form mthod="post" action=" ">
                                    <pre>
                                        <p>ENTER AMOUNT <input type="number" name="WITHDRAWABLE"></p>
                                        <p>ACCOUNT NUMBER <input type="text" name="accountno"></p>
                                        <p>CONFIRM SERIAL<input type="text" name="serial"></p>
                                        <p><input type="submit" name="WITHDRAW" value="WITHDRAW"></p>
                                    </pre>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>