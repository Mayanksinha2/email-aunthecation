<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Get post Tutorial</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body style="background-color: seashell;">
  <ul class="nav navbar-dark bg-dark">
    <li class="nav-item ">
      <a class="nav-link active" aria-current="page" href="#">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">About</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Contact us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link disabled">Feedback</a>
    </li>
  </ul>
  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['pass'];
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Your email address is ' . $email . ' and your password is ' . $password . '
      </div>';
  }
  ?>

  <div class="container mx-3 my-5">
    <form action="/phpLearning/get_post.php" method="post">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" name="email" class="form-control" id="mail" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="pass" id="pass">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" name="checkbox" class="form-check-input" id="check">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary" id="btn">Submit</button>
    </form>
  </div>
  </div>
</body>
<script>
  (function() {
    var button = document.getElementById('btn');

    button.disabled = true;

    var f = document.getElementById('check');

    f.addEventListener('change', function() {

      if (f.value === '') {

        button.disabled = true;

      } else {
        button.disabled = false;
      }
    });

  })();

  (function() {
    var checkbox = document.getElementById('check');

    checkbox.disabled = true;

    var d = document.getElementById('pass');

    d.addEventListener('change', function() {
      if (d.value === '') {
        checkbox.disabled = true;
      } else {
        checkbox.disabled = false;
      }
    });

  })();

  (function() {
    var password = document.getElementById('pass');

    password.disabled = true;

    var g = document.getElementById('mail');

    g.addEventListener('change', function() {

      if (g.value === '') {
        password.disabled = true;
      } else {
        password.disabled = false;
      }
    });
  })();
</script>

</html>