<form method='POST'>
    <label>Username</label><br>
    <input type="text" name="usname"><br>
    <label>Password</label><br>
    <input type="password" name="pass"><br>

    <input type="submit" name="login" value="login">
</form>

<?php
error_reporting(0);

$Username = $_POST['usname'];
$Password = $_POST['pass'];
$login = $_POST['login'];
if(isset($login)){
    echo 'Hallo'.$Username. '<br> Password anda '.$Password;
}

?>