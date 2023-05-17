<?php include 'config.php';?>
<?php 
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $apply=$_POST['apply'];
    $qual=$_POST['qual'];
    $year=$_POST['year'];
    
    $sql= "INSERT INTO candidate(`name`, `apply`, `qual`, `year`) VALUES ('$name','$apply','$qual','$year')";
    if(mysqli_query($conn,$sql)){
        header("location:career.php");
    }
    else{
        echo "ERROR: Failed to Apply for Job $sql." . mysqli_error($conn);
    }
}
?>