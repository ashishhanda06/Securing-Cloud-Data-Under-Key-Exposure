<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
  height: 100%;
  margin: 0;
  font-family: Elephant;
}

/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}

.active {
  background: #ff6347;
}

.tablink:hover {
  background-image: url('x.jpg');
         background-repeat: no-repeat;
         background-attachment: fixed;
         background-position: center;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 100px 20px;
  height: 100%;
}

.video {
display: block;
}


</style>
</head>
<body>
<button class="tablink " onclick="openPage('Home',this,'tomato')">Home</button>
<button class="tablink" onclick="openPage('Data_Owner', this, 'tomato')">Data_Owner</button>
<button class="tablink" onclick="openPage('User', this, 'tomato')">User</button>

<button class="tablink" onclick="openPage('Admin', this, 'tomato')">Admin</button>

<div id="Home" class="tabcontent video">
  <h3> <video width="800" height="500" autoplay muted loop id="myVideo">
  <source src="ICON_VERSION2.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
<style>
body {
  background-image: url('wp3929803-cloud-computing-wallpapers.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style></h3>


  
</div>
<div id="Data_Owner" class="tabcontent">
<h3><img src="sigmund-elHKkgom1VU-unsplash.jpg" style="width:700px">
  <style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
</style>


<div class="bg-image"></div>

<div class="bg-text">
    <form action="/action_page.php" class="container"><h2>Data OwnerLogin </h2>
    
<img src="male-1354358_640.png" alt="Avatar" style="width:320px">
    <br><label for="Username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="Username" required><br>

    <br><label for="psw"><b>   Password</b></label>
    <input type="password" value="" id="myInput"><br><br>
<input type="checkbox" onclick="myFunction()">Show Password

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

    
<style>
.btn {
  background-color: #ddd;
  border: none;
  color: black;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  transition: 0.3s;
}

.btn:hover {
  background-color: #3e8e41;
  color: white;
}
</style>

    <button type="submit" formaction="http://localhost/login/login.php"class="btn">Login</button><button type="submit" class="btn">Reset</button><br>
<p> New User<br> For SIGNUP Click the Below LINK<br></p>
<p><a href="http://localhost/login/login.php">Click here to register!!!</a></p>

  </form>
</div>
<style>
body {
  background-image: url('network-2402637_960_720.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>

  
</div>
</div>

<div id="User" class="tabcontent">
  <h3><img src="sigmund-UmaojK7erQo-unsplash.jpg" style="width:700px">
<style>
body {
  background-image: url('network-2402637_960_720.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style></h3>
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
</style>


<div class="bg-image"></div>

<div class="bg-text">
    <form action="/action_page.php" class="container">
<h2> User Login </h2>
    <img src="computer-1331579_640.png" alt="Avatar" style="width:200px">
    <br><label for="Username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="Username" required><br>

    <br><label for="psw"><b>   Password</b></label>
    <input type="password" value="" id="myInput"><br><br>
<input type="checkbox" onclick="myFunction()">Show Password

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
<style>
.btn {
  background-color: #ddd;
  border: none;
  color: black;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  transition: 0.3s;
}

.btn:hover {
  background-color: #3e8e41;
  color: white;
}
</style>
    <button type="submit" formaction="http://localhost/loginuser/login.php" class="btn">Login</button><button type="submit" class="btn">Reset</button><br>
<p> New User<br> For SIGNUP Click the Below LINK<br></p>
<p><a href="http://localhost/loginuser/login.php">Click here to register!!!</a></p>

  </form>
</div>
<style>
body {
  background-image: url('network-2402637_960_720.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>

  
</div>  
  

</div>


<div id="Admin" class="tabcontent">
<style>
h3 {text-align: center;}

</style>
  <h3><strong>ADMIN LOGIN</strong>
<style>
body {
  background-image: url('network-2402637_960_720.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
</style>

</h3>
  
<style>
* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>




<div class="row">
  <div class="column" style="background-color:#000000;">

   
    <p>
  <h3> <video width="400" height="260" autoplay muted loop id="myVideo">
  <source src="ICON_VERSION9.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

           <div class="container">
  <h2></h2>
           

</div>
</p>
  </div>

  <div class="column" style="background-color:	#000000">
    
<br><img src="avatar-1577909_640.png"  style="width:120px"><br>
    <br><label for="User_name"><b>User_name</b></label>
    <input type="text" placeholder="Enter User_name" name="User_name" required><br>

    <br><label for="psw"><b>   Password</b></label>
    <input type="password" value="" id="myInput"><br><br>
<input type="checkbox" onclick="myFunction()">Show Password

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

    
              
<button type="submit" class="btn">Login</button>
<button type="submit" class="btn">Reset</button><br>
  </div>
</div>

</div>
<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 