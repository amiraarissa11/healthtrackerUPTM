<?php include "autch.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title> View File </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--bootstrap CSS-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="DataTables\css\dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="">
    <!-- bootstrap untuk icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
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

body,
.intro {
  height: 100%;
}

table td,
table th {
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
  min-width: 200px;
  max-width: 200px;
}

tbody td {
  font-weight: 500;
  color: #999999;
}




.footer {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  height: 100px;
  background-color: White;
  color: black;
  text-align: center;
   }
   .main{
    width: auto;
    height: auto;
    
   }

  .tulisanfooter{
    color: #000;
  }

  .gambarfile{
width: 100%;
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
    
    <h1>Student Health Tracker</h1>
    <div id="FullImageView">
                <img id="FullImage" />
                <span id="CloseButton" onclick="CloseFullView()">&times;</span>
            </div> 

            <script type="text/javascript">
                function FullView(ImgLink) {
                    document.getElementById("FullImage").src = ImgLink;
                    document.getElementById("FullImageView").style.display = "block";
                }
                function CloseFullView() {
                    document.getElementById("FullImageView").style.display = "none";
                }
           
</script>
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="table-responsive bg-white" data-mdb-perfect-scrollbar="true" style="position: relative; height: 100%">
            <table id="example" class="table table-secondary table-striped " style="width:100%" >
                    <thead>
                    
                         											
			            </tr>
                    </thead>
                    <?php
              include "conn.php";
              if(isset($_GET['view']))
                {                

            $id= $_GET['view'];

              $query= "SELECT * FROM userform WHERE id={$id}";
              $view = mysqli_query($conn,$query);
              $i=1; 
              if (mysqli_num_rows($view) > 0) {
              while($row = mysqli_fetch_assoc($view)){
                $id=$row['id'];
                $name=$row['name'];
                $tarikhmula=$row['tarikhmula'];
                $tarikhtamat=$row['tarikhtamat'];
                $ic = $row['ic'];
                $ndp = $row['ndp'];
                $bengkel = $row['bengkel'];
                $semester = $row['semester'];
                $sebab = $row['sebab'];
              
                echo "<tr>";
                ?>
                 <td rowspan='7' > <img onclick="FullView(this.src)" src="./image/<?php echo $row['filename']; ?>" class="gambarfile"></td>
                <?php
               
                echo "<td>Nama: $name</td>";
            
                echo "</tr>";
                echo "<tr>";
                echo "<td>No Kad Pengenalan: $ic</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>NDP: $ndp</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Bengkel: $bengkel</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Semester: $semester</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Tarikh Mula: $tarikhmula</td>";
                echo "</tr>"; 
                echo "<tr>";
                echo "<td>Tarikh Tamat: $tarikhtamat</td>";
                echo "</tr>";
                
              $i++;
           
            
              ?>
                <td></td>
                 <td><button class="print_link fa fa-print" href="print.php" onClick="window.print()"></button></td>
              <?php echo "</tr>";
                 }
                }}
                ?>
                </table>
            </div>
          </div>
        </div>
        <div class="footer">
  <img src="img/footer.png"><br>
  <a class="tulisanfooter">ALL RIGHT RESERVED BY &copy; Student Health Tracker UPTM </a>
      </div>
      <a href="table.php" class="back"><<</a>
      </div>
</div>

</body>
</html> 
