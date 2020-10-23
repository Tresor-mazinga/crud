<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <title>Essaikomeka</title>
</head>

<body class="bg-dark">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 m-auto">
        <!-- Card--->
        <div class="card mt-5">
          <div class="card-title">
            <h3 class="bg-success text-white text-center py-3 ">Registration form in PHP</h3>
          </div>
          <div class="card-body">
            <!-- Form--->
            <form action="insert.php" method="post" class="px-4">
              <input type="text" class="form-control mb-2" placeholder="User Name" name="name">
              <input type="email;" class="form-control mb-2" placeholder="User Email" name="email">
              <input type="text" class="form-control mb-2" placeholder="User Age" name="age">
              <button class="btn btn-primary" name="submit">Submit</button>
            </form>
            <!-- Form End--->
          </div>

        </div>
        <!-- Card End--->
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>