<?php
include 'connect.php';
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
              <a href="definition.php" class="btn btn-outline-light" role="button" aria-pressed="true">Add a definition</a>
          </div>
        </div>
    </nav>
    <div class="container-sm mt-5">
        <div class="p-5 mb-5 bg-success card">
            <div class="container-fluid py-5">
              <h1 class="display-5 fw-bold text-light">Welcome to 🐼 Panda Dictionary!</h1>
              <p class="col fs-4 text-light">If you ever wanted to understand what Panda is saying, here's a dictionary for you. 🙂 </p>
            </div>
        </div>
    </div>
    
    <div class="container text-left">
      <div class="row">

        <?php
        $sql = "SELECT * FROM `definition`";
        $result = mysqli_query($con, $sql);

        if($result) {
          while($card = mysqli_fetch_assoc($result)) {
            $id = $card['id'];
            $title = $card['title'];
            $definition = $card['definition'];
            $date = $card['date'];

            echo ' <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                  <h2 class="card-title">'.$title.'</h2>
                  <p class="card-text">'.$definition.'</p>
                  <p class="card-text"><small class="text-muted">Posted by <strong>Panda</strong> '.$date.'</small></p>
              </div>
            </div>
          </div> ';

          }
        }
        ?>
      

      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>