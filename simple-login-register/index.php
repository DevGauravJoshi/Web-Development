<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://creatoromod.000webhostapp.com/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" ></script>
    <script>
        window.onload = function(){
            document.getElementById("container").style.display = "none";
            document.getElementById("content").style.display = "block";
        }
        $(window).load(function(){
            $('#loading').fadeOut();
            $('#loading-img').delay(150).fadeOut('slow');
        }),4000;
    </script>
</head>
<body>
    <div id="container">
        <div id="loading">
            <span id="loading-img">Loading...</span>
        </div>
    </div>
    <div id="content">
<!Your code pls>
Welcome to This Page<br>
Choose one action<br>
<a href ="reg.php">Register</a><br><br>
<a href = "login.php">Login</a>
</div>
</body>
</html>