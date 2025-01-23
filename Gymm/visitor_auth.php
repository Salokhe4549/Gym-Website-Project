<?php
ini_set('display_errors', 1);
include('common_setting.php');
session_start();
$name =$_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$message= $_POST['message'];

include('DBCONNECT.php');
$obj1 = new DBCONNECT;
$res1 = $obj1->insert_admin_data($name, $email, $mobile ,$message);


if ($res1 == 1) {
?>
    <script>
        alert('Message Sent to Admin....');
        window.location.href = '<?php echo $url; ?>index.php';
    </script>
<?php
} else {
    
?>
    <script>
        alert('Message not sent....!!!');
        window.location.href = '<?php echo $url; ?>index.php';
    </script>
<?php
}
