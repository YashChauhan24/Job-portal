<?php include 'config.php';?>
<?php 
session_start();
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT * FROM users WHERE `email`='$email' AND `password`='$password'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    IF(mysqli_num_rows($result)==1){
         header("location:dashboard.php");
    }
    else{
        header("location:login.php");
    }
    $conn->close();
}
?>