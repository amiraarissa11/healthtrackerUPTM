<html>
<head>
<title>Access Admin</title>
</head>

<body><br>
<?php
include "conn.php";
session_start();

// Function to log events
function logEvent($event) {

    $timestamp = date('Y-m-d H:i:s');
    $logMessage = "$timestamp - $event" . PHP_EOL;
   
    file_put_contents('log.txt', $logMessage, FILE_APPEND | LOCK_EX);
}

if(isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Checking if user exists in the database
    $query = "SELECT * FROM admin WHERE username='{$username}'";
    $result = mysqli_query($conn, $query);

    if($result) {
        $rows = mysqli_num_rows($result);

        if($rows == 1) {
            $user = mysqli_fetch_assoc($result);
            $dbPassword = $user['password'];

            // Check if the password 
            if($password === $dbPassword) {
                $_SESSION['username'] = $username;
                $_SESSION['password'] = $password;
                header("Location: admin_home.php");
                //successful login
                logEvent("Successful login for username: $username");
            } 
            else {
                // Incorrect password
                echo "<script type='text/javascript'>alert('Wrong Password')</script>";
                echo "<script type='text/javascript'> document.location ='admin_login.php';</script>";
                // Log failed login attempt
                logEvent("Failed login attempt for username: $username");
            }
        } else {
            // User not found
            header("Location: error.php?message=User not found");
            logEvent("Failed login attempt for non-existing username: $username");
        }
    } else {
        // Error querying database
        echo "<script type='text/javascript'>alert('Error occurred while logging in')</script>";
        echo "<script type='text/javascript'> document.location ='admin_login.php';</script>";
        // database error
        logEvent("Database error occurred while logging in");
    }
}
?>

</body>