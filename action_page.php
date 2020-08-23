<style>
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  position: fixed;
  height: 30%;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: lightblue ; 
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: lightblue ;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 400px;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
body, html {
  height: 100%;
  background-color:powderblue;
}

.bg-img {
  /* The image used */
  background-image: url("image2.jpg");

  /* Control the height of the image */
  min-height: 380px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

</style>
<html>
<body>
<div class="bg-img">

<form>
<title>Purity Banking Ltd. </title>
<h1 style="background-color:powderblue;"> Welcome to Purity Banking Ltd.</h1>
<h3 style="font:bold;"> Hello <?php echo $_POST["name"]; ?>! You logged in successfully!!! </h3><br> <br>
<div class="sidebar">
  <a class="active" href="#home">Home</a>
  <a href="#accounts">Accounts</a>
  <a href="transactions.php">Transactions</a>
  <a href="logout.html">Logout</a>
</div>



</form>
</div>
</div>
</body>
</html>
