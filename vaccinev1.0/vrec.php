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
        if (event.target.classList.contains('d-table')) {
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
<div class="search-container">
    <input type="text" placeholder="Search">
    <button type="submit">Search</button>
  </div>
<div class="d">
<div class="d1">
<p>all vaccines available</p>
<p>13</p></div>
<div class="d1">
    <p>last vaccines </p>
    <p>5</p></div>
    <div class="d1">
        <p>next vaccines </p>
        <p>7</p></div>
        <div class="d1">
            <p>beneficiaries</p>
            <p>2</p>
        </div>
</div>
<div class="d-table"  onclick="handleClick(event)">
<div class="dash">
    <h2>dashboard </h2>
    <a href="vrec.php" target="_self"><p>vaccine record</p></a>
    <a href="patient.php" target="_self"><p>patient</p></a>
    <a href="message.php" target="_self"><p>messages</p></a>
</div>
<div class="bgtab">
                <div class="aboutvac">
                    <h3>vaccine record</h3>
                <form action="admin.php" method="post">
                    <input type="text" placeholder="vaccineid" id="id" name="id" ><br>
                    <input type="text" placeholder="vaccinename" id="vname" name="vname"><br>
                    <input type="text" placeholder="vaccinetype" id="vtype" name="vtype"><br>
                    <input type="text" placeholder="vaccinecategory" id="vcategory" name="vcategory" ><br>
                    <button onclick="document.location=''">upload</button>
                    <button onclick="document.location=''">delete</button>
                </form>
            </div>
</div>
</div>
</body>
</html>
