<html>
    <head>
    <link rel="stylesheet" href="lstyle.css">
    <title class="title">register</title>
    <script>
        function handleClick(event) {
            if (event.target.classList.contains('rwrapper')) {
                history.back();
            }
        }
    </script>
</head>
<body>
    
<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "onvaccine";
$con = mysqli_connect($server, $user, $password, $db);

if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $sex = $_POST['sex'];
    $dob = $_POST['dob'];
    $motherName = $_POST['mother_name'];
    $fatherName = $_POST['father_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "INSERT INTO users (firstname, lastname, username,sex, dob, mother_name, father_name, email, password)
        VALUES ('$firstname', '$lastname', '$username','$sex', '$dob', '$motherName', '$fatherName', '$email', '$password')";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
}

mysqli_close($con);
?>
    <div class="rwrapper" onclick="handleClick(event)">
        <form action="" method="post" class="rform">
        <h3>Register</h3>
        <input type="text" placeholder="Firstname" name="firstname" required><br>
        <input type="text" placeholder="Lastname" name="lastname" not null><br>
        <input type="text" placeholder="username" name="username" not null><br>
        <h2>sex:</h2><br><input type="radio" id="option1" name="sex" value="option1">
            <label for="option1">male</label><br>
        <input type="radio" id="option2" name="sex" value="option2">
            <label for="option2">female</label><br>
        <h2>date of birth</h2><br><input type="date" placeholder="Date Of Birth" name="dob" not null><br>
        <input type="text" placeholder="Mother's name" name="mother_name" not null><br>
        <input type="text" placeholder="Father's name" name="father_name" not null><br>
        <input type="email" placeholder="Email" name="email" not null><br>
        <input type="Password" placeholder="Password" name="password" required><br>
        <input type="Password" placeholder="Confirm Password" required><br>
        <p>Already have an account? ----<a href="login.php" class="llink">Login</a></p>
        
        <button type="submit" class="btn" name="submit">Register</button>
    </form> 
    </div>

</body>
    
    </html>