<?php
include 'connect.php';

if(isset($_POST['submit'])) {
  $title = $_POST['title'];
  $definition = $_POST['definition'];

  $sql = "INSERT INTO definition (title, definition) VALUES ('$title', '$definition')";

  $result = mysqli_query($con, $sql);

  if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panda Dictionary | E&P</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body class="bg-dark">

    <nav class="navbar navbar-expand-lg bg-success">
        <div class="container-sm">
          <a class="navbar-brand text-light" href="#">🐼 Panda Dictionary</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav text-light me-auto mb-2 mb-lg-0">
            </ul>
              <button class="btn btn-outline-light">For Panda only</button>
          </div>
        </div>
    </nav>
    <div class="container-sm mt-5">

        <div class="p-5 mb-5 bg-secondary card">
            <div class="container-fluid py-5">
              <h1 class="display-5 fw-bold text-light">Add a new definition</h1>
              <p class="col fs-4 text-light">Just enter the information, and click the "Add" button. Easy.  </p>

              <form method="post">

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label text-light">Title</label>
                  <div class="col-sm-10 mb-3">
                    <input type="text" class="form-control" placeholder="Enter the definition title..." name="title">
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label text-light">Definition</label>
                  <div class="col-sm-10 mb-3">
                    <textarea class="form-control" rows="3" placeholder="Enter the definition..." name="definition"></textarea>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-sm-10 ">
                    <button type="submit" name="submit" class="btn btn-lg fw-bold btn-success">👍 Add</button>
                  </div>
                </div>

              </form>

            </div>
          </div>


          
    </div>    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>