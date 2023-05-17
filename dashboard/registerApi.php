<?php include 'config.php';?>
<?php 
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['phone_no'];
    $password=$_POST['password'];

    $sql = "INSERT INTO users( `name`, `email`, `password`,`phone_no`) VALUES ('$name','$email','$password','$number')";
    // echo $sql;
    if($conn->query($sql)===TRUE){
        echo "Records inserted successfully.";
    }
    else{
        echo "ERROR: ". $sql. $conn->error;
    }
    $conn->close();
}
?>