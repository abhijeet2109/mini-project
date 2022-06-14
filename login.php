<?php
$user = $_POST['username'];
$pass = $_POST['password'];
if($user="admin"&& $pass = "Pass@123")
{
    echo "Sucess!!!!";
}
else 
{
    echo "Fail to login";
}
?>