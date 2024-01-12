<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
   <link rel="stylesheet"  href="llstyle.css">
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
   <title>lhome page</title>
</head>

<body>
    <nav >
       
            <a href="lhome.php">Home</a>
            <a href="service.php">service</a>
            <a href="feedback.php">contact</a> 
            <a href="trending.php">Trending</a>
            <a href="status.php">Status</a>
           
                <button class="bt" onclick="document.location='login.php'">login</button>
                <button class="bt" onclick="document.location='register.php'">register</button>
                <tr><td><i class="fa-solid fa-house"></i></td><td><button class="btt" onclick="document.location='adminlogin.php'">admin</button></td></tr>
    </nav>
    <h3>welcome to vaccination system management</h3>
    <h1 id="demo"></h1>
    <script>
        const hour = new Date().getHours(); 
        let greeting;
        
        if (hour>=1 && hour<12) {
          greeting = "Good morning,welcome to our website!";
        } else if(hour>=12 && hour<18){
          greeting = "Good afternoon,welcome to our website!";
        }
        else{
            greeting="Good evening,welcome to our website!";
        }
        document.getElementById("demo").innerHTML = greeting;
        setTimeout(()=>{
            var text=document.getElementById('demo');
            text.style.display='none';
        },3000
        );
     </script>
    <div class="card">
        <div class="card0">
            <img src="v1.jpeg">
            <div class="text">
            <h2><b>Get vaccinated.Stay protected</b></h2>
            <button onclick="document.location='login.php'">get your vaccine</button>
        </div>
        </div>
        <div class="card0">
            <img src="v2.jpg">
            <div class="text">
                <h2><b>Get vaccinated.Stay protected</b></h2>
                <button onclick="document.location='login.php'">get your vaccine</button>
            </div>
        </div>
        <div class="card0">
        <img src="v3.jpg">
        <div class="text">
            <h2><b>Get vaccinated.Stay protected</b></h2>
            <button onclick="document.location='login.php'">get your vaccine</button>
        </div>
        </div>
        <div class="card0">
        <img src="v4.jpeg">
        <div class="text">
            <h2><b>Get vaccinated.Stay protected</b></h2>
            <button onclick="document.location='login.php'">get your vaccine</button>
        </div>
        </div>
        <div class="card0">
        <img src="v5.jpeg">
        <div class="text">
            <h2><b>Get vaccinated.Stay protected</b></h2>
            <button onclick="document.location='login.php'">get your vaccine</button>
        </div>
        </div>
        <div class="card0">
        <img src="v6.jpeg">
        <div class="text">
            <h2><b>Get vaccinated.Stay protected</b></h2>
            <button onclick="document.location='login.php'">get your vaccine</button>
        </div>
        
        </div>
    </div>
        
    
    <footer class="ft">
      <div class="social">
      <p>about</p>
      <p>contact</p>
      <ul class="social-icons">
  <li><a href="https://www.facebook.com/yourprofile"><i class="fab fa-facebook-f"></i></a></li>
  <li><a href="https://www.twitter.com/muhirevale1"><i class="fab fa-twitter"></i></a></li>
  <li><a href="https://www.instagram.com/yourprofile"><i class="fab fa-instagram"></i></a></li>
  <li><a href="https://www.youtube.com/yourchannel"><i class="fab fa-youtube"></i></a></li>
  </ul>
      </div>
      <div class="abc">
      <div class="ab">
      <h1> accessibility</h1>
      <h1> external links</h1>
      <h1> privacy</h1>
      <h1> policies</h1>
      </div>
      <div class="ab">
      <h1> tel:</h1>
      <h1> +250791398885</h1>
      <h1> kigali</h1>
      <h1> rwanda</h1>
      </div>
      <div class="ab">
      <h1>@online vaccination system management</h1>
      <h1>&copy; 2023 Vaccination System. All rights reserved.</h1>
      </div>
      </div>
      </footer>
</body>
</html>
