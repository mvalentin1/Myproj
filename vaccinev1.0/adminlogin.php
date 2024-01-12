<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
   <link rel="stylesheet"  href="llstyle.css">
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   <title>lhome page</title>
   <script>
    function handleClick(event) {
        if (event.target.classList.contains('admin-login')) {
          history.back();
        }
    }
</script>
</head>

<body>
    <nav>
       
            <a href="lhome.php">Home</a>
            <a href="service.php">service</a>
            <a href="feedback.php">contact</a> 
            <a href="trending.php">Trending</a>
            <a href="status.php">Status</a>
    
    </nav>
    <div class="admin-login" onclick="handleClick(event)">
        <div class="frm"> 
            <h2>admin Login</h2>   
            <form action="admin.php" method="post">
    <input type="text" placeholder="username" id="username" class="in" name="username" required><br>
    <input type="email" placeholder="email" id="email" class="in" name="email" required><br>
    <input type="password" placeholder="Password" id="password" name="password" class="in" required><br>
    <a href="#" class="in">Forgot password?</a><br>
    <button type="submit">Login</button>
</form> 
        </div>
    </div>
</body>
</html>
<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Database connection details
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "onvaccine";

    // Establish a database connection
    $conn = mysqli_connect($hostname, $username, $password, $database);

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // Prepare a SQL statement to check if the user exists in the admin table
    $sql = "SELECT * FROM admin WHERE username = '$username' AND email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // User exists in the admin table
        // Redirect to admin.php or perform any other action
        header("Location: admin.php");
        exit;
    } else {
        // User does not exist in the admin table or invalid credentials
        echo "Invalid username, email, or password.";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>

