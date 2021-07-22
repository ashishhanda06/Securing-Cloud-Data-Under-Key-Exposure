<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
td, th {
  border: 1px solid black;
  text-align: left;
  padding: 8px;
}
tr:nth-child(even) {
  background-color: white;
}
tr:nth-child(odd) {
  background-color: orange;
}
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block  ;
  border: none;
  background: black;
}
input[type=text]:focus, input[type=password]:focus {
  background-color:orange;
  outline: none;
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
/* Set a style for all buttons */
button {
  background-color: green;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
button:hover {
  opacity:1;
}
/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: blue;
}
/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}
/* Add padding to container elements */
.container {
  padding: 16px;
}
/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
<style>
body {
  background-image: url('wp3929791-cloud-computing-wallpapers.jpg');
}
</style>

<body style="background-color:powderblue;">
<form action="/action_page.php" style="border:1px solid #ccc">
  <div class="container">
                                   <h2 style="font-size:50px;">DATA USER REGISTRATION</h2>
    <h2 style="font-size:41px;">Register</h2>
    
    <hr>

   <label for="Name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="Name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="Mobile Number"><b>Mobile Number</b></label>
    <input type="text" placeholder="Enter Mobile Number" name="Mobile Number" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

    <label for="City"><b>City</b></label>
    <input type="text" placeholder="Enter City" name="City" required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form>
</body>
</html>
