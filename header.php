<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://kit.fontawesome.com/80f31deb85.js" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />    <title>Yosh</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
    <link rel="stylesheet" href="style/style.css">
    <!-- Mobile Css -->
    <link rel="stylesheet" href="style/mobileStyle.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light ">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="image/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item px-2">
          <a class="nav-link" aria-current="page" href="index.php">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link" href="about-us.php">About Us</a>
        </li>   

        <li class="nav-item dropdown px-2">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Service1</a></li>
            <li><a class="dropdown-item" href="#">Service12</a></li>
            </ul>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link" href="downloads.php">Downloads</a>
        </li>
        <li class="nav-item px-2">
          <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#contact">Contact Us</a>
        </li>     
      </ul>
      <div class="d-flex">
        <button class="loginBtn ml-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Log-in</button>
        <button class="signBtn" data-bs-toggle="modal" data-bs-target="#signUp">Signup</button>
      </div>
    </div>
  </div>
</nav>
</header>

<!-- login form -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Log-in</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="dashboard/action/login.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-outline-secondary">Login</button>
</form>
      </div>
     
    </div>
  </div>
</div>


<!-- SignUp form -->
<div class="modal fade" id="signUp" tabindex="-1" aria-labelledby="signUp" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" >
        <h5 class="modal-title" id="exampleModalLabel">Sign-Up</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" >
        <form action="dashboard/action/signup.php" method="POST">
        <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    <input type="text" class="form-control" id="" name="name" aria-describedby="">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="" name="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Mobile No.</label>
    <input type="number" class="form-control" id="" name="mobile" aria-describedby="phone">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="" name="password">
  </div>
  
  <button type="submit" class="btn btn-outline-secondary">Sign-Up</button>
</form>
      </div>
     
    </div>
  </div>
</div>


<!-- Contact Us Form -->


<div class="modal fade" id="contact" tabindex="-1" aria-labelledby="contact" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contact Us</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" >
        <form action="dashboard/action/contact.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Full Name</label>
    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Eamil </label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Mobile No.</label>
    <input type="number" class="form-control" name="mobile" id="mobile" aria-describedby="phone">
  </div>
  <div class="form-floating">
    <textarea class="form-control" name="message" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
    <label for="floatingTextarea" class="text-dark">Message...</label>
</div>
  <br>
  <button type="submit" class="btn btn-outline-secondary">Send</button>
</form>
      </div>
     
    </div>
  </div>
</div>

