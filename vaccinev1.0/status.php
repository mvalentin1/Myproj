<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style></style>  
   <link rel="stylesheet"  href="llstyle.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<title></title>
<body>
    <nav>
       
        <a href="lhome.php">Home</a>
        <a href="service.php">service</a>
        <a href="feedback.php">contact</a> 
        <a href="trending.php">Trending</a>
        <a href="status.php">Status</a>
       
    </nav>
    <h3 class="h">my status</h3>
<div class="wrapper">
    <form action="" class="form">
    <h2>Login to see status</h2>
    <input type="text" placeholder="username" required><br>
    <input type="Password" placeholder="Password" required><br>
    <label><input type="checkbox">Remember me</label>
    <a href="#">Forgot password?</a><br>
    <p>Don't you have an account? ----<a href="register.php" class="llink">Register</a></p>
   <button  class="btn" onclick="document.location='stat.php'">Login </button>
</form>
</div>
</body>
</html>
