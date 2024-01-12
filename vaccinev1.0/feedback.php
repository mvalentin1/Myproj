<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
   <link rel="stylesheet"  href="llstyle.css">
   <script>
    function handleClick(event) {
        if (event.target.classList.contains('txt')) {
          history.back();
        }
    }
</script>
</head>
<title></title>
<body>

    <nav>
       
        <a href="lhome.php">Home</a>
        <a href="service.php">service</a>
        <a href="feedback.php">contact</a> 
        <a href="trending.php">Trending</a>
        <a href="status.php">Status</a>
        <button class="bt" onclick="document.location='login.php'">login</button>
        <button class="bt" onclick="document.location='register.php'">register</button>
    </nav>
 
    <div class="suggest">
    <div class="ask">
    <p>🌟 Ask Me Anything! 🌟</p>

    <p>💡 Suggestions:</p>
    <ol>
      <li>What is vaccine?</li>
      <li>why vaccination?</li>
      <li>how many dose to take for cure?</li>
      <li>are extra dose harmful?</li>
      <li>How can I contact you?</li>
    </ol></div>
    <p>📝 Ask your question here:</p>
    <textarea class="question"></textarea><br><button>send</button>
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
