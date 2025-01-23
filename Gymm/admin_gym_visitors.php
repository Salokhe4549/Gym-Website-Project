<?php
ini_set('display_errors', 1);
include('common_setting.php');

include('DBCONNECT.php');
$obj = new DBCONNECT;
$res = $obj->fetch_feedback_data();
?>

</pre>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css\visitor.css">
</head>
<body>
  <h1>SP Gym & Fitness Club</h1>
  <p>Admin: Sahil Sutar | Email: sahilsutar2326@gmail.com</p>
  
  <h2>Visitors :-</h2>
  <table>
    <tr>
      <th>Sr. No.</th>
      <th>Name</th>
      <th>Email</th>
      <th>Mobile Number</th>
      <th>Message</th>
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
          <?php echo $val['vEmail']; ?>
        </td>
        <td>
          <?php echo $val['vMobile']; ?>
        </td>
        <td>
          <?php echo $val['vMessage']; ?>
        </td>
      </tr>
      <?php
    }
    ?>
    
  </table>
</body>
</html>
