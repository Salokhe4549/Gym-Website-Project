<?php
ini_set('display_errors', 1);
include('common_setting.php');

include('DBCONNECT.php');
$obj = new DBCONNECT;
$res = $obj->fetch_costomer_data();
?>

<!DOCTYPE html>
<html>

<head>
  <title>Gym Members</title>
  <link rel="stylesheet" type="text/css" href="css\admin_gym_member.css">
</head>

<body>
  <h1>SP Gym & Fitness Club</h1>
  <p>Admin: Sahil Sutar | Email: sahilsutar2326@gmail.com</p>
  
  <a href="admin_gym_visitors.php" style="display: inline-block; background-color: #f8f9fa; color: #212529; padding: 10px 20px; text-decoration: none; border: 1px solid #212529;">Visitors</a>


  <h3>Gym Members :-</h3>
  <table>
    <tr>
      <th>Sr. No.</th>
      <th>Name</th>
      <th>Phone Number</th>
      <th>Package</th>
      <th>Time</th>
    </tr>
    <?php
    foreach ($res as $key => $val) {
      ?>
      <tr>
      <td>
          <?php echo $key+1; ?>
        </td>
        <td>
          <?php echo $val['vName']; ?>
        </td>
        <td>
          <?php echo $val['vPhone']; ?>
        </td>
        <td>
          <?php echo $val['vPackage']; ?>
        </td>
        <td>
          <?php echo $val['vTime']; ?>
        </td>
      </tr>
      <?php
    }
    ?>
 
  </table>
  <br><br>
  <span style="display: inline-block; margin-right: 10px;"><a href="admin_login.php" style="background-color: #dc3545; color: #fff; padding: 5px 10px; text-decoration: none;">Log Out</a></span>

</body>

</html>