<?php
include "conn.php";
//echo"delete";
if(isset($_GET['delete']))
{
    $id=$_GET['delete'];

    // JavaScript confirmation dialog
    echo "<script>
            var result = confirm('Are you sure you want to delete this record?');
            if (result) {
                window.location.href = 'admin_delete.php?confirmed_delete=$id';
            } else {
                window.location.href = 'admin_table.php';
            }
          </script>";
}

// If confirmed, proceed with deletion
if(isset($_GET['confirmed_delete'])) {
    $id = $_GET['confirmed_delete'];

    $query = "DELETE FROM userform WHERE id = {$id}";
    $delete_query= mysqli_query($conn,$query);
    header("Location: admin_table.php");
}
?>
