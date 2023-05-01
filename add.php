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

<div class="px-4 pt-5 my-5 text-center border-bottom">
      <h4 class="display-4 fw-bold text-body-emphasis">Add your notes</h4>
     
      <!-- Wrapper container -->
<div class="container py-4">

    <!-- Bootstrap 5 starter form -->
    <form action="insertnotes.php" method="post">
  
      <!-- Name input -->
      <div class="mb-3">
        <label class="form-label" for="label" >Labels</label>
        <input class="form-control" id="label" type="text" placeholder="Label" name="label" />
      </div>
  
  
      <!-- Message input -->
      <div class="mb-3">
        <label class="form-label" for="message" >Notes</label>
        <textarea class="form-control" name="notes" id="notes" type="text" placeholder="Notes" style="height: 30rem;"></textarea>
      </div>
  
      <!-- Form submit button -->
      
        <button class="btn btn-primary btn-lg" type="submit">Add</button> </form>
		<form action="display.php"><button class="btn btn-primary btn-lg" type="submit">cancel</button></form>
      
  
    </form>
  
  </div>
  
</div>

</body>
</html>