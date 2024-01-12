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
    <p>last vaccines </p>
    <p>0</p></div>
    <div class="d1">
        <p>next vaccines </p>
        <p>0</p></div>
        <div class="d1">
            <p>beneficiaries</p>
            <p>0</p>
        </div>
</div>
<div class="d-table">
<div class="dash">
    <h2>dashboard </h2>
    <a href="vrec.php" target="_self"><p>vaccine record</p></a>
    <a href="patient.php" target="_self"><p>patient</p></a>
    <a href="message.php" target="_self"><p>messages</p></a>
</div>
<div class="bgtab">

                <div class="about">
                    <h3>patient/vaccinee</h3>
                <form action="admin.php" method="post">
                    <input type="text" placeholder="patid" name="id" value="id"><br>
                    <input type="text" placeholder="patname" name="fname" value="fname"><br>
                    <input type="text" placeholder="patlname" name="lname" value="lname"><br>
                    <input type="text" placeholder="vaccinetype" name="vaccinetype" value="vaccinetype"><br>
                    <input type="text" placeholder="dose" name="dose" value="dose"><br>
                    <button onclick="document.location=''">upload</button>
                    <button onclick="document.location=''">delete</button>
                </form>
</div>
</div>
</div>
</body>
</html>
