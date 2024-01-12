<html>
    <head>
    <link rel="stylesheet" href="lstyle.css">
    <title class="title">Login</title>
    <script>
        function handleClick(event) {
            // Check if the click target is the form container or one of its child elements
            if (event.target.classList.contains('wrapper')) {
                history.back(); // Redirect to the homepage
            }
        }
    </script>
<?php
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
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

    // Prepare a SQL statement to check if the user exists in the users table
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // User exists in the users table
        // Redirect to home.php
        header("Location: lhome.php");
        exit;
    } else {
        // User does not exist in the users table
        echo "Invalid username or password.";
    }

    // Close the database connection
    mysqli_close($conn);
}
?>
</head>
<body>
    

    <div class="wrapper" onclick="handleClick(event)">
        <form action="login.php" class="form">
        <h2>Login</h2>
        <input type="text" placeholder="username" required name="username" id="username"><br>
        <input type="Password" placeholder="Password" required name="password" id="password"><br>
        <label><input type="checkbox">Remember me</label>
        <a href="#">Forgot password?</a><br>
        <p>Don't you have an account? ----<a href="register.php" class="llink">Register</a></p>
        <button type="submit"  name="submit" id="submit" class="btn" >Login</button>
    </form> 
    </div>
    
</body>
    
    </html>