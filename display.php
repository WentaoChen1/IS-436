<?php
include 'member.php';


require 'dbcon.php';
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

<?php
$sql = "SELECT nid, label, notes
FROM  tblnotes";
$result = $conn->query($sql);

echo "<Center>";
echo "<BR>";
echo "<BR>";
echo "<BR>";
echo "<HR>";

echo "<h2>Data from notes table</h2> <Br>";

echo "<Table border=0 width=50%>";
echo "<TR style='background-color:#53eff5; text-align:center; font-weight:bold;'>";
echo "<TD> nid </TD><TD> label </TD><TD> message </TD> <TD> Delete </TD>";
echo "</TR>";

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<TR>";
		echo "<TD>";
        echo $row["nid"];
		echo "</TD>";
		echo "<TD>";
        echo $row["label"];
		echo "</TD>";
		echo "<TD>";
        echo $row["notes"];
		echo "</TD>";
		echo "<TD>";
		echo "<A href=del.php?nid=$row[nid]> <img src=delete.jpg width=25 height=25  onclick=\"return confirm('Are you sure you want to delete this item?');\"> </A> ";
		echo "</TD>";		
		echo "</TR>";
		
		
    }
} else {
    echo "0 results";
}


echo "</Table>";
echo "</Center>";

$conn->close();



?>
