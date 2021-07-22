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
<button class="tablink" onclick="openPage('Owner_Details', this, 'tomato')">Owner_Details</button>
<button class="tablink" onclick="openPage('File_upload', this, 'tomato')">File_upload</button>
<button class="tablink" onclick="openPage('File_Details', this, 'tomato')">File_Details</button>

<div id="Home" class="tabcontent video">
  <h3> <video width="800" height="500" autoplay muted loop id="myVideo">
  <source src="23_document.mp4" type="video/mp4">
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
<div id="Owner_Details" class="tabcontent">
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
    <style>
details > summary {
  padding: 4px;
  width: 200px;
  background-color: black;
  border: none;
  box-shadow: 1px 1px 2px #bbbbbb;
  cursor: pointer;
}

details > p {
  background-color: blue;
  padding: 4px;
  margin: 0;
  box-shadow: 1px 1px 2px #bbbbbb;
}
</style>

<details>
  <summary>Owner_Details</summary>
  <table><tr></tr><tr><td>Ashish Handa</td></tr><tr><td>Manish</td></tr><tr><td>Monika Kumari</td></tr></table>
  
</details></div>
</div>

<div id="File_upload" class="tabcontent">
  <h3><img src="pexels-sora-shimazaki-5673489.jpg" style="width:900px">
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
    <form action="" method="post" enctype="multipart/form-data" class="container">
<h2>File_Upload</h2>
    <img src="wp7312400-folder-wallpapers.jpg" alt="Avatar" style="width:300px">
    <br><label for="Private_Key"><b>Private_Key</b></label>
    <input type="password" value="" id="myInput"><br>

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
       <br><label for="File_Name"><b>File_Name</b></label>
    <input type="text" placeholder="Enter File_Name" name="File_Name" required><br>

    
     <br><label for="Caption"><b>Caption</b></label>
    <input type="text" placeholder="Enter Caption" name="Caption" required><br>
    
         <br><label for="File"><b>File</b></label>
    <input type="file"   id="File" name="File" required><br>
             
                          <button type="submit" class="btn">Upload</button><button type="submit" class="btn">Reset</button><br>    
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


<div id="File_Details" class="tabcontent">
<style>
h3 {text-align: center;}

</style>
  <h3><strong></strong>
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
    <style>
details > summary {
  padding: 4px;
  width: 200px;
  background-color: black;
  border: none;
  box-shadow: 1px 1px 2px #bbbbbb;
  cursor: pointer;
}

details > p {
  background-color: blue;
  padding: 4px;
  margin: 0;
  box-shadow: 1px 1px 2px #bbbbbb;
}
</style>

<details>
  <summary>File_Details</summary>
  
  <table><tr></tr><tr><td>Image </td></tr><tr><td>Word File</td></tr><tr><td>PDF</td></tr>
  <tr><td>Presentation </td></tr></table>
  
</details>
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
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: white;
}
tr:nth-child(odd) {
  background-color: pink;
}
</style>


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
<?php
$filename = $_FILES["File"]["name"];
$tempname = $_FILES["File"]["tmp_name"];
$folder = "student/".$filename;
echo $folder;
move_uploaded_file($tempname,$folder);

?>