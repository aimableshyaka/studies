<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">User Name</label><br>
        <input type="text" name="username"><br>
        <label for="">Password</label><br>
        <input type="password" name="password"><br>
        <button type="submit" name="login">Login</button>
        <a href="account.php">Create Account</a>
    </form>
</body>
</html>
<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){

// }

// if(isset($_POST['login'])){
    // connect to database 

    include 'connection.php';
    // retrieve data from URL into Variable

    $name=$_POST['username'];
    $pass=$_POST['password'];
    
    $check=mysqli_query($conn,"SELECT * FROM shopkeeper where username='$name' AND password='$pass' ");
    $num=mysqli_num_rows($check);

    if($num){
        session_start();
        $_SESSION['bonheur']=$name;
        header("location:dashboard.php");

    }
    else{
        echo "Invalid credentials";
    }}

?>