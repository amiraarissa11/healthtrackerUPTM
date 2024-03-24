<?php
if (isset($_POST['submit'])) {
    include "conn.php"; 
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
    $tarikhmula = htmlspecialchars($_POST['tarikhmula'], ENT_QUOTES, 'UTF-8');
    $tarikhtamat = htmlspecialchars($_POST['tarikhtamat'], ENT_QUOTES, 'UTF-8');
    $ic = htmlspecialchars($_POST['ic'], ENT_QUOTES, 'UTF-8');
    $ndp = htmlspecialchars($_POST['ndp'], ENT_QUOTES, 'UTF-8');
    $bengkel = htmlspecialchars($_POST['bengkel'], ENT_QUOTES, 'UTF-8');
    $semester = htmlspecialchars($_POST['semester'], ENT_QUOTES, 'UTF-8');
    $sebab = htmlspecialchars($_POST['sebab'], ENT_QUOTES, 'UTF-8');
    $filename = htmlspecialchars($_FILES["image"]["name"], ENT_QUOTES, 'UTF-8');
    $tempname = $_FILES["image"]["tmp_name"];
    $folder = "./image/" . $filename;

    // Insert into Database
    $sql = "INSERT INTO userform(name,tarikhmula,tarikhtamat,ic,ndp,bengkel,semester,sebab,filename) 
            VALUES('$name','$tarikhmula','$tarikhtamat','$ic','$ndp','$bengkel','$semester','$sebab','$filename')";
    mysqli_query($conn, $sql);
    if (move_uploaded_file($tempname, $folder)) {
        echo "<script type='text/javascript'>alert('Submission Successful')</script>";
        echo "<script type='text/javascript'> document.location ='table.php';</script>";
    } 
}
?>
