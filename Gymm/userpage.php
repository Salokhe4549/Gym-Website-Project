<?php

ini_set('display_errors', 1);
include('common_setting.php');
include('DBCONNECT.php');
session_start();


$obj = new DBCONNECT;
$res = $obj->fetch_userpage( $_SESSION['emailU']);
// print_r($res);

?>
<html>
<head>
  <title>Strength Training Page</title>
  <link rel="stylesheet" type="text/css" href="css\userhome.css">
  

</head>
<body>
  <div class="container">
    <h1>Welcome,<?php echo $res[0]['vName']?></h1>
    
    <h2>Account Details:</h2>
    <table>
      <tr>
        <th>Membership Status:</th>
        <td><?php echo $res[0]['vPackage']?></td>
      </tr>
      <tr>
        <th>Email ID:</th>
        <td><?php echo $res[0]['vEmail']?> </td>
        <th>Phone Number:</th>
        <td><?php echo $res[0]['vPhone']?></td>
      </tr>
    </table>
    
    <h2>Training Plans:</h2>
    <table>
      <tr>
        <th>Active Plan:</th>
        <td><?php echo $res[0]['vPackage']?></td>
      </tr>
    
      <tr>
        <th>Start Date:</th>
        <td><?php echo $res[0]['vStartdate']?></td>
      </tr>
     
 
    
   
    
    <h2>Schedule:</h2>
    <table>
      <tr>
        <th>Date</th>
        <th>Time</th>
        <th>Trainer</th>
      </tr>
    
      <tr>
        <td><?php echo $res[0]['vStartdate']?></td>
        <td><?php echo $res[0]['vTime']?></td>
        <td>Tanmay Patil</td>
      </tr>
    </table>
    <br><br>
  
   <span style="display: inline-block; margin-right: 10px;"><a href="login.php" style="background-color: #dc3545; color: #fff; padding: 5px 10px; text-decoration: none;">Log Out</a></span>

   
  </div>
</body>
</html>
