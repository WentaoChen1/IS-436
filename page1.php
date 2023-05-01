<?php
include 'member.php';
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
	<link href="custom.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<title>Main</title>
</head>
<body>

    <!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #e3f2fd;">
  <div class="container-fluid">
  
    <a class="navbar-brand" href="#">
      <img src="logo.png" alt="Logo" width="90" height="72">
      NoteTaking
    </a>
	
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
	
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	  
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="page1.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="display.php">Display</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="add.php">Add Notes</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="contactus.php">Contact Us</a>
        </li>
        
      </ul>
	  
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
		<a href="logout.php"> Logout </a>
	  </ul>
    </div>
  </div>
</nav>

<div
	class = "masterhead"
	style="background-image: url('background-image.jpg');"
>
	<div class="color-overlay d-flex 
	justify-content-center align-items-center">
	<div class="px-4 pt-5 my-5 text-center border-bottom">
      <h1 class="display-4 fw-bold text-body-emphasis">Welcome to NoteTaking Website</h1>
      <div class="col-lg-6 mx-auto bg-dark-subtle">
        <p class="lead mb-4">Quickly create, customize, and store the notes in NoteTaking, the world’s most popular tool for notes taking and easy to store .</p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5 .col-6">
		<form action="add.php">
          <button type="submit" class="btn btn-info btn-lg px-4 me-sm-3">Get Started</button></form>
        </div>
      </div>
    
</div>
	</div>
</div>


<!-- Footer Code -->
    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      <div class="row">
        <div class="col-12 col-md">
         
        </div>
        <div class="col-6 col-md">
          <h5>Features</h5>
          <ul class="list-unstyled text-small">
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
           
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Membership</h5>
          <ul class="list-unstyled text-small">
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Premium</a></li>
           
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
           
          </ul>
        </div>
      </div>
    </footer>

      
    
</div>
</body>
</html>
