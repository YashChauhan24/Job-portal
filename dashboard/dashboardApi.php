<?php include 'config.php';?>
<?php
if(isset($_POST['job'])){
    $cname=$_POST['cname'];
    $pos=$_POST['pos'];
    $jDesc=$_POST['jdesc'];
    $skills=$_POST['skill'];
    $CTC=$_POST['ctc'];
    
    $sql= "INSERT INTO jobs (`cname`, `position`, `jdesc`, `skills`, `CTC`) VALUES ('$cname','$pos','$jDesc','$skills','$CTC')";
    if(mysqli_query($conn,$sql)){
        header("location:dashboard.php");
    }
    else{
        echo "ERROR: Failed to Post the Job $sql." . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>