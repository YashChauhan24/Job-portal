<?php include 'header.php'?>
<div class="content">
<p>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Post Job
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <form action="dashboardApi.php" method="POST">
  <div class="mb-3">
    <label for="companyName" class="form-label">Company Name</label>
    <input type="text" class="form-control" id="" name="cname">
  </div>
  <div class="mb-3">
    <label for="position" class="form-label">Position</label>
    <input type="text" class="form-control" id="position" name="pos">
  </div>
  <div class="mb-3">
    <label for="jobDesc" class="form-label">Job Description</label>
    <input type="text" class="form-control" id="jobDesc" name="jdesc">
  </div>
  <div class="mb-3">
    <label for="skills" class="form-label">Skills</label>
    <input type="text" class="form-control" id="skills" name="skill">
  </div>
  <div class="mb-3">
    <label for="CTC" class="form-label">CTC</label>
    <input type="text" class="form-control" id="CTC" name="ctc">
  </div>
  <button type="submit" class="btn btn-primary" name="job">Submit</button>
</form>
</div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company Name</th>
      <th scope="col">Position</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
    <?php $sql = "Select cname,position,CTC from jobs";
    $result = mysqli_query($conn,$sql);
    $i=0;
    if($result->num_rows > 0){
    while ($rows=$result->fetch_assoc()){
    echo"
    <tbody>
    <tr>
    <td>".++$i."</td>
          <td>" . $rows['cname']."</td>
          <td>" . $rows['position']."</td>
          <td>" . $rows['CTC']."</td>
    </tr>";
    }}
    else{
      echo "";
    }
    ?>
  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>