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
        <button type="submit">Create Account </button>

    </form>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    // Part 1: connection to database 
      $conn=mysqli_connect("localhost","root","","berwa");

      // retrive data from URL and keep into variable

      $user=$_POST['username'];
      $pass=$_POST['password'];

     // INSERT INTO DATABASE 
     
     $query=mysqli_query($conn,"INSERT INTO shopkeeper(username,password) values('$user','$pass')");

     if($query){
        echo "<script>alert('Account created successfull'),location='index.php'</script>";
     }
     else{
        echo "<script>alert('try Again!!!!')</script>";
     }

}
?>

