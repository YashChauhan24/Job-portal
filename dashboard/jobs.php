<?php include 'header.php'?>
<div class="content">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Candidate Name</th>
        <th scope="col">Position</th>
        <th scope="col">Year Passout</th>
      </tr>
    </thead>
    <?php $sql = "Select name,apply,year from candidate";
    $result = mysqli_query($conn,$sql);
    $i=0;
    if($result->num_rows > 0){
    while ($rows=$result->fetch_assoc()){
    echo"
    <tbody>
    <tr>
    <td>".++$i."</td>
          <td>" . $rows['name']."</td>
          <td>" . $rows['apply']."</td>
          <td>" . $rows['year']."</td>
    </tr>";
    }}
    else{
      echo "";
    }
    ?>
    </tbody>
  </table>
      
</div>
