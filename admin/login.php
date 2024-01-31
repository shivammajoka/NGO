<?php 
include('includes/config.php');
if(isset($_POST['submit'])){
$username =$_POST['user'];
$password =$_POST['pass'];
$sql = "SELECT * FROM `login` where username ='$username ' and password='$password'";
$result= mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count= mysqli_num_rows($result);
if($count==1){
     session_start();
    $_SESSION['AdminloginId']=$_POST['user'];
    header("Location:admin.php");
}
else{
    echo"<script> alert('incorrect pas') </script>";
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sewabharti</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="shortcut icon" href="assets/images/logosewa.png">
    <link rel="stylesheet" href="assets/css/login2.css">
</head>
<body >
    <div class="wrapper">
        <form action="" method="POST">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="user" name="user" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="pass" name="pass" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot password?</a>
            </div>

            <button type="submit" class="btn" name="submit">Login</button>

            <div class="register-link">
                <p>Don't have an account? <a href="#">Regeister</a></p>
            </div>
        </form>
</body>
</html>