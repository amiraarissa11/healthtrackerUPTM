<?php include "autch.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title> Form  </title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans);

* {box-sizing: border-box;}

body { 
  font-family: Verdana, sans-serif;
  width: 100%;
  height:100%;
    margin: 0;
  padding: 10px;
    display: flex;
  justify-content: center;
  align-items: center;
  font-family: 'Open Sans', sans-serif;
  background: #092756;
  background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
  background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
  background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
  background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
  background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
  filter: (startColorstr='#3E1D6D',endColorstr='#092756',GradientType=1);
}

.button {
  background-color:#f1f1f1; 
  border-radius: 6px;
  color: black;
  padding: 24px 24px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 20px;
  font-family:verdana;
  font-weight: bold;
  margin: 4px 2px;
  cursor: pointer;
} 

a {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

a:hover {
  background-color: #ddd;
  color: black;
}
.navbar {
  width: 100%;
  overflow: auto;
  background-color: black;
}

.navbar a {
  float: left;
  padding: 12px;
  color: black;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: dimgrey;
}


/* Three columns side by side */
.column {
  float: left;
  width: 44.4%;
  margin-bottom: 16px;
  padding: 0 8px;
}

/* Display the columns below each other instead of side by side on small screens */
@media screen and (max-width: 230px) {
  .column {
    width : 200; 
  height :200;
  display: block;
  background-color:#FFFFFF;
  }
}

/* Navbar */
.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

/* Navbar*/

.button:hover {
  background-color: #555;
}

/*Navbar */
a:link, a:visited {
  color: white;
  padding: 8px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

h1{
  font-family: "Poppins", sans-serif;
  font-weight: 900;
  text-align: center;
}

/* Header img */
.bg-img {
/* The image used */
background-image: url("img/BannerHomePage.png");

min-height: 150px;

/* Center and scale the image nicely */
background-position: left;
background-repeat: no-repeat;
background-size: cover;

/* Needed to position the navbar */
position: relative;
}

.main{
  width:70%;
  height: 1200px;
  background-color: white;
  overflow: hidden;
  border-radius: 10px;
  box-shadow: 5px 20px 50px #000;
}

* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
  font-size: 15px;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.back{
 
  background-color: #0407aa4f;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: left;

}
.back:hover {
  background-color: #4551a099;
}

input[type=reset] {
  background-color: white;
  color: black;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=reset]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

h2, h3 {
  font-family: "Poppins", sans-serif;
  font-size: 16px;
  font-weight: 750;
}

.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
.footer {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 120px;
  background-color: White;
  color: black;
  text-align: center;
   }
</style>

<!-- Back button -->
<script type="text/javascript">

function change(){ 
var click_me = document.getElementById('click_me'); 
if(click_me){ 
document.getElementById('Lainlain').innerHTML="<input type = 'text' placeholder = 'Lain-lain'>"; 
} 
} 
</script>

</head>

<body>


<div class="main">

    <div class="navbar">
    <a href="home.php" target="_self">Home Page</a> 
    <a href="logout.php" target="_self">Log Out</a>
    </div>

    <div class="bg-img"></div>

    <h1>Student Sick Leave Form</h1>

    
    <?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
    <div class="container">
      <form action="AccessF.php" method="POST" enctype="multipart/form-data" >
        
        <div class="row">
            <div class="col-25">
            <label >Student Name</label>
            </div>
            <div class="col-75">
            <input type="text"  name="name" required="true">
            </div>

           
        </div>

        <div class="row">
          <div class="col-25">
          <label for="ic">IC Number</label>
        </div>
        <div class="col-75">
          <input type="text" id="ic" name="ic" required="true"maxlength="12">
          </div>
        </div>
    
        <div class="row">
          <div class="col-25">
          <label for="ndp">Student Id Number</label>
        </div>
        <div class="col-75">
          <input type="text" id="ndp" name="ndp"required="true" maxlength="12">
          </div>
        </div>

        <div class="row">
          <div class="col-25">
          <label for="Bengkel">Course</label>
        </div>
        <div class="col-75">
          <input type="radio"  id="Diploma in Computer Science" name="bengkel" value="Diploma in Computer Science" required="true">
          <label >DIPLOMA IN COMPUTER SCIENCE</label>

          <input type="radio" id="BACHELOR OF ARTS IN 3D ANIMATION AND DIGITAL MEDIA" name="bengkel" value="BACHELOR OF ARTS IN 3D ANIMATION AND DIGITAL MEDIA" required="true">
          <label >Boa IN 3D ANIMATION AND DIGITAL MEDIA</label>
          <br>
          <input type="radio" id="BACHELOR OF INFORMATION TECHOLOGY (HONOURS) IN COMPUTER APPLICATION DEVELOPMENT" name="bengkel" value="BACHELOR OF INFORMATION TECHOLOGY (HONOURS) IN COMPUTER APPLICATION DEVELOPMENT" required="true">
          <label >BoIT IN COMPUTER APPLICATION DEVELOPMENT</label>

          <input type="radio" id="BACHELOR OF INFORMATION TECHNOLOGY (HONOURS) IN CYBER SECURITY" name="bengkel" value="BACHELOR OF INFORMATION TECHNOLOGY (HONOURS) IN CYBER SECURITY" required="true">
          <label>BoIT IN CYBER SECURITY </label><br>

          <input type="radio" id="BACHELOR OF INFORMATION TECHNOLOGY (HONOURS) IN BUSINESS COMPUTING" name="bengkel" value="BACHELOR OF INFORMATION TECHNOLOGY (HONOURS) IN BUSINESS COMPUTING" required="true">
          <label >BoIT IN BUSINESS COMPUTING </label>
          </div>
        </div>

        <div class="row">
          <div class="col-25">
          <label for="Tarikh Mula Cuti"required="true">Start Date</label>
        </div>
        <div class="col-75">
          <input type="Date"  name="tarikhmula" required="true" >
          </div>
        </div>

        <div class="row">
          <div class="col-25">
          <label for="Tarikh Tamat Cuti"required="true">End Date</label>
        </div>
        <div class="col-75">
          <input type="Date"  name="tarikhtamat" required="true" >
          </div>
        </div>

        <div class="row">
          <div class="col-25">
          <label for="Semester"required="true">Semester</label>
        </div>
        <div class="col-75"  >
        <input type="radio" id="sem1" name="semester" value="Semester 1" required="true">
        <label for="sem1">Semester 1</label>
        <input type="radio" id="sem2" name="semester" value="Semester 2"required="true">
        <label for="sem2">Semester 2</label>
        <input type="radio" id="sem3" name="semester" value="Semester 3"required="true">
        <label for="sem3">Semester 3</label>
        <input type="radio" id="sem4" name="semester" value="Semester 4"required="true">
        <label for="sem4">Semester 4</label><br>
        <input type="radio" id="sem5" name="semester" value="Semester 5"required="true">
        <label for="sem5">Semester 5</label>
        <input type="radio" id="sem6" name="semester" value="Semester 6"required="true">
        <label for="sem6">Semester 6</label>
        <input type="radio" id="sem7" name="semester" value="Semester 7"required="true">
        <label for="sem7">Semester 7</label>
      
      </div></div>

        <div class="row">
          <div class="col-25">
          <label for="sebabcuti">Reasons for absent </label>
        </div>
        <div class="col-75">
          <input type="text" id="sebabcuti" name="sebab" required="true">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
          <label for="sijl mc"required="true">Attach Medical Certificate</label>
        </div>
        <div class="col-75">
          <input type="file" id="image" name="image" >
          </div>
        </div>
      <div class="row">
        &nbsp;<a href="home.php" class="back">Back</a>
        <input type="submit" name="submit">
        <input type="reset" value="Clear All"/>
      </div>
  </form>
</div>

<div class="footer">
  <img src="img/footer.png"><br>
  <a>ALL RIGHT RESERVED BY &copy; Student Health Tracker UPTM</a>
      </div>
</div>

</body>
</html>