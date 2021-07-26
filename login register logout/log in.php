<?php
$con= mysqli_connect('localhost','root','','crud') or die(mysqli_error($con));   //create connection

if(isset($_POST['username'])){
    $username =$_POST['username'];
    $password =$_POST['password'];
$query = "select* from users where user='".$username."' and password='".$password."' "; //limit 1 yamkan khasni nzidha                      
$result=mysqli_query($con,$query) or die(mysqli_error($con));
        
    if(mysqli_num_rows($result)==1)
    {
        echo "You have Succefully logged in";
        header('location:index.php');
    }
    else{
        echo "Incorrect Password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form Method="POST">
        <table>
        <tr>
            <th> User</th>
            <th>Password</th>
        </tr>
        <tr>
            <th><input type="text" id="username" name="username"></th>
            <th><input type="text" id="password" name="password"></th>
        </tr>
</form>
</body>
</html>