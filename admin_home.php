
<!DOCTYPE html>
<html>
<head>
  <title> Admin Home Page  </title>
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

}


.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
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

/* Create a right-aligned (split) link inside the navigation bar */
.navbar a.split {
  float: right;
  background-color: #04AA6D;
  color: white;
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

/* Add some shadows to create a card effect */
.card {
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);
  width : 100px; 
  height :100px;
  background-color:#DBDFE1;
 
}

/* Some left and right padding inside the container */
.container {
  width : 230; 
  height :230;
}

/* Clear floats */
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

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

.button:hover {
  background-color: #555;
}

a:link, a:visited {
  color: white;
  padding: 8px 16px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

h1{
  font-size: 35px;
  font-family: Brush Script MT;
}

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
  height: 1400px;
  background-color: white;
  overflow: hidden;
  border-radius: 10px;
  box-shadow: 5px 20px 50px #000;
}

.container {
  padding: 10px;
}

.column-66 {
  float: center;
}

.large-font {
  font-size: 48px;
  text-align: center;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 400px;
  margin: 50px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}

body .container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  max-width: 1200px;
  margin: 40px 0;
}

/* outside box */
body .container .card {
  position: relative;
  min-width: 320px;
  height: 450px;
  box-shadow: inset 5px 5px 5px rgba(0, 0, 0, 0.2),
    inset -5px -5px 15px rgba(255, 255, 255, 0.1),
    5px 5px 15px rgba(0, 0, 0, 0.3), -5px -5px 15px rgba(255, 255, 255, 0.1);
  border-radius: 15px;
  margin: 30px;
  transition: 0.5s;
  
}

body .container .card:nth-child(1) .box .content a {
  background: #005A92;
}

body .container .card:nth-child(2) .box .content a {
  background: #005A92;
}


body .container .card .box {
  position: absolute;
  top: 20px;
  left: 20px;
  right: 20px;
  bottom: 20px;
  background: #292929;
  border-radius: 20px;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
  transition: 0.5s;
}

body .container .card .box:hover {
  transform: translateY(-50px);
}

body .container .card .box:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 50%;
  height: 50%;
  background: rgba(255, 255, 255, 0.03);
}

body .container .card .box .content {
  padding: 20px;
  text-align: center;
}

body .container .card .box .content h2 {
  position: absolute;
  top: -10px;
  right: 30px;
  font-size: 8rem;
  color: rgba(255, 255, 255, 0.1);
}

body .container .card .box .content h3 {
  font-size: 1.8rem;
  color: #fff;
  z-index: 1;
  transition: 0.5s;
  margin-bottom: 15px;
}

body .container .card .box .content p {
  font-size: 1rem;
  font-weight: 300;
  color: rgba(255, 255, 255, 0.9);
  z-index: 1;
  transition: 0.5s;
}

body .container .card .box .content a {
  position: relative;
  display: inline-block;
  padding: 8px 20px;
  background: black;
  border-radius: 5px;
  text-decoration: none;
  color: white;
  margin-top: 20px;
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
  transition: 0.5s;
}

body .container .card .box .content a:hover {
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.6);
  background: #fff;
  color: #000;
}

h2, h3 {
  font-family: "Poppins", sans-serif;
  font-weight: 900;
  text-align: center;
}
.footer {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 140px;
  background-color: white;
  color: black;
  text-align: center;
   }
</style>
</head>

<body>

<div class="main">

     <!-- Navigation Bar -->
    <div class="navbar">
    <a href="admin_home.php" >Home Page</a>  
    <a href="Alogout.php" >Log Out</a>
    </div>

    <!-- Header and scrolling text -->
    <div class="bg-img" width="100%"></div>
    <marquee behavior="scroll" direction="left"><h1 align="center" style="text-shadow: 2px 2px white; color:#005A92;">
    Welcome to Student Health Tracker UPTM</h1></marquee>

      <div class="slideshow-container">

      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="img/Slide 1.png" style="width:100%">
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="img/Slide 2.png" style="width:100%">
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="img/Slide 3.png"style="width:100%">
      </div>

    </div>
     <br><div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
      </div>

          <!-- Menu Section -->
    <div class="container" style="background-color:#f1f1f1">
      <div class="row">
        <div class="column-66">
            <h2>Admin</h2>
          
       
              <div align="center">
              <div class="card">
                  <div class="box">
                    <div class="content">
                
                      <h3>Student Record</h3>
                      <img src="img/Form.png"><br>
                      <a href="admin_table.php">Record</a>
                    </div>
                  </div>
                </div>          
                </div>
        </div>
       
  <br>

  <script>

  let slideIndex = 0;
  showSlides();

  function showSlides() 
    {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 5000); // Change image every 5 seconds
    }

  </script>
 <div class="footer">
  <img src="img/footer.png"><br>
  <a>ALL RIGHT RESERVED BY &copy; Student Health Tracker UPTM </a>
      </div>
</div>
</body>
</html> 
