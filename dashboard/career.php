<?php include 'careerApi.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
  <title>Career</title>
  <style>
     body{
        background-image: url("back.jpg");
        background-size: cover;
      }
      .jumbotron {
        padding: top 5%;;
      }
      .row{
        padding-bottom: 50px;
         margin-left: 3%;
         margin-right: 3%;
      }
      .jobs{
        background-color: white;
        padding: 5%;
        margin: 5%;
      }
  </style>
</head>
<body>
  <div class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="career.php">Dashboard</a>
    </div>
  </nav>
  <div>
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1>Post Job</h1><br>
        <p>Best Jobs available matching your Skills</p><br>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <?php
  $sql = "SELECT cname, position, jdesc, skills, CTC FROM jobs";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows>0) {
    while ($rows=$result->fetch_assoc()) {
      echo '
      <div class="col-md-4">
      <div class="jobs">
        <h3 style="text-align: center;">'.$rows['position'].'</h3>
        <h4 style="text-align: center;">'.$rows['cname'].'</h4>
        <p style="color: black; text-align: justify;">'.$rows['jdesc'].'</p>
        <p style="color: black;"><b>Skills Required:</b>'.$rows['skills'].'</p>
        <p style="color: black;"><b>CTC:</b>'.$rows['CTC'].'</p>
        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-expanded="false" aria-controls="collapseExample">
          Apply Now
        </button>
      </div>
      </div>
      ';
    }
  }
  ?>
  <div  class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apply forJob</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="careerApi.php" method="POST">
          <div class="mb-3">
            <label for="name" class="col-form-label">Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Applying For</label>
            <input type="text" class="form-control" name="apply">
          </div>
          <div class="mb-3">
            <label for="qualification" class="col-form-label">Qualification</label>
            <input type="text" class="form-control" name="qual">
          </div>
          <div class="mb-3">
            <label for="name" class="col-form-label">Year passout</label>
            <input type="text" class="form-control" name="year">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Apply</button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>