<title>Авторизация</title>
<?php
include 'connectbd.php';
$inputLogin = $_POST['input_login']; 
echo $inputLogin.'<br>';
$inputPassword = $_POST['input_password'];
echo $inputPassword;
$queryForLogin = "SELECT * FROM `members`";
$sql = "SELECT `ID`, `Password` FROM `members` WHERE `Login`= \'admin\' LIMIT 0, 30 ";
$membersTable = mysql_query($queryForLogin);

?>