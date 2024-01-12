<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style></style> <title></title> 
   <link rel="stylesheet"  href="llstyle.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   <script>
    function handleClick(event) {
        if (event.target.classList.contains('search-container')) {
          history.back();
        }
    }
</script>

</head>
<body>
    <nav>
       
        <a href="lhome.html">Home</a>
        <a href="service.html">service</a>
        <a href="feedback.html">contact</a> 
        <a href="trending.html">Trending</a>
        <a href="status.html">Status</a>
       
</nav>
<div class="search-container" onclick="handleClick(event)">
    <input type="text" placeholder="Search">
    <button type="submit">Search</button>
  </div>
<div class="d">
<div class="d1">
<p>all vaccines available</p>
<p>0</p></div>
<div class="d1">
    <p>messages</p>
    <p>0</p></div>
    <div class="d1">
        <p>users</p>
        <p>0</p></div>
        <div class="d1">
            <p>beneficiaries/vaccinee</p>
            <p>0</p>
        </div>
</div>
<div class="d-table" >
<div class="dash">
    <h2>dashboard </h2>
    <a href="admin.php" target="_self"><p>admin</p></a>
    <a href="vrec.php" target="_self"><p>vaccine record</p></a>
    <a href="patient.php" target="_self"><p>patient</p></a>
    <a href="message.php" target="_self"><p>messages</p></a>
</div>
<div class="bgtab">
                <div class="aboutvac">
                    <h3>edit admin</h3>
                <form action="admin.php" method="post">
                    <input type="text" placeholder="username" id="username" name="username"><br>
                    <input type="email" placeholder="email" id="email" name="email"><br>
                    <input type="password" placeholder="password" id="password" name="password" ><br>
                    <button >send</button>
            
                </form>
            </div>
                </div>
                </div>
                </body>
</html>
                <?php               
// Establish a database connection
$hostname = "localhost";
$username = "root";
$password = "";
$database = "onvaccine";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Insert the data into the admin table
    $sql = "INSERT INTO admin (username, email, password) VALUES ('$username', '$email', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "Record inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the database connection
mysqli_close($conn);
?>