<?php
ini_set('display_errors', 1);
include('DBCONNECT.php');
include('common_setting.php');
print_r($_POST);


$obj = new DBCONNECT();

$res = $obj->insert_signup($_POST['name'],$_POST['email'],$_POST['password'],$_POST['phone'],$_POST['package'],$_POST['startdate'],$_POST['time']);

if ($res == 1) {
?>
    <script>
        alert('Profile Created Successfull...');
        window.location.href = '<?php echo $url; ?>login.php';
        </script>
<?php
} 
else 
{
   
?>

    <script>
        alert('Sign Up failed....\nEmail ID alredy exists');
        window.location.href = '<?php echo $url; ?>signup.php';
    </script>
<?php
}

