<?php
include 'member.php';
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>

<body>   
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
          <a class="nav-link" href="add.php">Add</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="contactus.php">Contact Us</a>
        </li>
        
      </ul>
	  
      <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
		<a href=logout.php> Logout </a>
	  </ul>
    </div>
  </div>
</nav>
   
    <div class="px-4 pt-5 my-5 text-center border-bottom">
      <h3 class="display-4 fw-bold text-body-emphasis">Contact Us</h3>
     
      <!-- Wrapper container -->
<div class="container py-4">

    <!-- Bootstrap 5 starter form -->
    <form id="contactForm">
  
      <!-- Name input -->
      <div class="mb-3">
        <label class="form-label" for="name">Name</label>
        <input class="form-control" id="name" type="text" placeholder="Name" />
      </div>
  
      <!-- Email address input -->
      <div class="mb-3">
        <label class="form-label" for="emailAddress">Email Address</label>
        <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" />
      </div>
  
      <!-- Message input -->
      <div class="mb-3">
        <label class="form-label" for="message">Message</label>
        <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;"></textarea>
      </div>
  
      <!-- Form submit button -->
      <div class="d-grid">
        <button class="btn btn-primary btn-lg" type="submit">Submit</button>
      </div>
  
    </form>
  
  </div>
  
      </div>
     
    </div>

    
      </div>
    
    </div>

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
  </body>
</html>