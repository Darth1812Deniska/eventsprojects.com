<title>Авторизация</title>
<?php
include 'connectbd.php';
?>
<form method="post" action="authorization.php">
<label>Логин</label>
<br><input name="input_login" type="text">
<br>
<label>Пароль</label>
<br>
<input name="input_password" type="password">
<br>
<input  value="Войти" type="submit">
</form>