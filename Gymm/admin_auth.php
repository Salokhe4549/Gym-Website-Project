<?php
ini_set('display_errors', 1);
include('common_setting.php');
session_start();
$email = $_POST['username'];
$password = $_POST['password'];


if ($email == "sahil" && $password == "sahil123") {
?>
    <script>
        alert('login successfull....');
        window.location.href = '<?php echo $url; ?>admin_gym_member.php';
    </script>
<?php
} else {
    
?>
    <script>
        alert('Invalid Details....!!!');
        window.location.href = '<?php echo $url; ?>admin_login.php';
    </script>
<?php
}
