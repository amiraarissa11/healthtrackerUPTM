<html>
<head>
<title>Access User</title>
</head>

<body><br>
<?php
include "conn.php";
session_start();

// log events to database
function logEventToDatabase($event, $conn) 
{
    $sql = "INSERT INTO log_events (event) VALUES (?)";
    
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 's', $event);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
}

if(isset($_POST['submit']))
{
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // hashed password from the database
    $query = "SELECT * FROM user WHERE username='{$username}'";
    $result = mysqli_query($conn, $query);

    if($result && mysqli_num_rows($result) > 0){
        $user = mysqli_fetch_assoc($result);
        $hashedPassword = $user['password'];

        
        if(password_verify($password, $hashedPassword))
        {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header("Location: home.php");
            
            //Log in database
            logEventToDatabase("Login from: $username", $conn);
        }
        else {
            // Incorrect password
            echo "<script type='text/javascript'>alert('Wrong Password')</script>";
            echo "<script type='text/javascript'> document.location ='index.php';</script>";
            
            // login attempt to database
            logEventToDatabase("Failed login attempt for username: $username", $conn);
        }
    } else {
        // User not found
        echo "<script type='text/javascript'>alert('Username does not exist')</script>";
        echo "<script type='text/javascript'> document.location ='index.php';</script>";
        
        // login attempt to database
        logEventToDatabase("Failed login attempt for non-existing username: $username", $conn);
    }
}

// logging access to sensitive resources
if(isset($_SESSION['username'])) {
  logEventToDatabase("User {$_SESSION['username']} accessed a sensitive resource", $conn);
}

// logging potential security incidents
if($someCondition) {
  logEventToDatabase("Potential security incident detected: {Description of incident}", $conn);
}

//redirect to the error page
function redirectToErrorPage($errorMessage) {
  header("Location: error.php?message=" . urlencode($errorMessage));
  exit(); // script stops executing after redirection
}

?>

</body>