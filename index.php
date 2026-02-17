<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>77 healing</title>
    <link rel="stylesheet" href="style.css">
</head>
<body style="text-align:center; margin-top:100px; font-family:Arial;">
     <h3 class="text"> Type any number from 1 to 77 and receive<br> 
                a heartfelt message </h3>
    <h2>Enter a number (1-77) 💜</h2>
      <div class="container">
 <form action="show.php" method="post">
        <input type="number" name="number" min="1" max="77" required class="input">
        <br><br>
        <button type="submit" class="btn">Get Message</button>
    </form>
      </div>
   

</body>
</html>
