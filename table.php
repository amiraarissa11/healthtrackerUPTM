<?php include "autch.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title> Student Record</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--bootstrap CSS-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="DataTables\css\dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="">
    <!-- bootstrap untuk icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
       <!--bootstrap CSS-->
       <link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="DataTables\css\dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="">
    <!-- bootstrap untuk icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <!--datatables CSS-->
    <!-- <link rel="stylesheet" type="text/css" href="DataTables\css\jquery.dataTables.min.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="DataTables\css\dataTables.dataTables.min.css"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">-->
    <!--end bootstrap CSS-->
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

body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }


    #myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
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

</style>

<!-- Back button -->
<script type="text/javascript">

$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});


function change(){ 
var click_me = document.getElementById('click_me'); 
if(click_me){ 
document.getElementById('Lainlain').innerHTML="<input type = 'text' placeholder = 'Lain-lain'>"; 

function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}

} 
} 


</script>

</head>

<body>
<? session_start()?>

<div class="main">

    <div class="navbar">
    <a href="home.php" target="_self">Home Page</a> 
    <a href="logout.php" target="_self">Log Out</a>
    </div>

    <div class="bg-img"></div>

    <h1>List Absence</h1>
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="table-responsive bg-white"  style="position: relative; height: 735px;">
            <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                    <tr>
                            <th>No</th>
                            <th>Name</th>
				                    <th>Semester</th>
                            <th>Course</th>
                            <th>Start Date</th>
                            <th>End Date</th>		
                            <th>Reasons</th>	
                            <th></th>	
                      </tr>
                    </thead>
                    <tbody>
                    <?php include('conn.php'); 
        $i=1;
        $sql = "SELECT * FROM userform"; //Call form table from db
        $query = $conn->query($sql);
            while($row = $query->fetch_assoc())
            {
              $id=$row['id'];
                echo 
                "<tr>
                <td scope='row'>$i</td>
                <td>".htmlspecialchars($row['name']). "</td>
                <td>".htmlspecialchars($row['semester']). "</td>
                <td>".htmlspecialchars($row['bengkel']). "</td>
                <td>".htmlspecialchars($row['tarikhmula']). "</td>
                <td>".htmlspecialchars($row['tarikhtamat']). "</td>
                <td>".htmlspecialchars($row['sebab']). "</td>
                    <td>
                    <a href='view.php?view={$id}' class='btn btn-warning'> <i class='bi bi-eye'></i></a>
                    </td>
                </tr>";
                $i++;
  
            }
            
?>
    
    </tbody>
                </table>
            </div>
          </div>
        </div>
        <br>
       
      </div>
      <div>
        &nbsp;<a href="home.php" class="back">Back</a>
      </div>
      <div class="footer">
  <img src="img/footer.png"><br>
  <a>ALL RIGHT RESERVED BY &copy; Student Health Tracker UPTM </a>
      </div>
   <!-- Datatable JS -->
<script type="text/javascript" language="javascript" src="jquery\jquery-3.6.1.js"></script>
<script type="text/javascript" language="javascript" src="DataTables\js\jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="DataTables\js\dataTables.bootstrap5.min.js"></script>
<script type="text/javascript" language="javascript" src="bootstrap\js\bootstrap.bundle.min.js"></script>


<script>            
    $(document).ready(function () {
    $('#example').DataTable({
	order: [[0, 'asc']],
	});
	});

</script>
</div> 
</div>

</body>
</html> 
