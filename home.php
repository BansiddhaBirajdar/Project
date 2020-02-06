<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
	<style>
    body {font-family: Arial, Helvetica, sans-serif;
  background-image: url('book.jpg');
  background-attachment: fixed;
  background-repeat: no-repeat,repeat;
  background-size: cover; 
}
/* Navbar links */
.topnav a {
  float: left;
  color: #AAFF00;
  text-align: center;
  padding: 20px 20px;
  text-decoration: none;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 15px;
}
/* The navbar */
.topnav {
  overflow: hidden;
  background-color: rgba(0,0,0,0.5);
}
.topnav a:hover {
  background-color: #AAFF00;
  color: black;
}
.centered {
  text-decoration: underline;
  text-decoration-color: red;
  color:black;
  position: absolute;
  font-size: 100px;
  font-family:Agency FB;
  top: 480%;
  left: 60%;
  transform: translate(-40%, -40%);
}
.container {
  
  position: absolute;
  margin: 50px;
  width: auto;
}
* {
  margin: 0;
  padding: 0;
  max-height: 999999px; }
	</style>
    </head>
    <body >
        <div id="home">
        <div class="bg-img">
        <div class="container">
        <div class="centered">Book Record Management</div>
        <div class="topnav">
        <a href="insertForm.php">Insert Book</a>
        <a href="view.php">View Book Record  </a>
        <a href="deleteForm.php">Delete Book Record</a>
        <a href="updateForm.php">Update Book Record</a>
        </div>
        </div>
        </div>
        </div>
    </body>
</html>