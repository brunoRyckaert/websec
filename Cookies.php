<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 08-Nov-17
 * Time: 23:18
 */
if (isset($_POST["cookie1"])) {
    setcookie("cookie1",$_POST["cookie1"],time()+3600,null,null,null,false);
    setcookie("cookie2",$_POST["cookie2"],time()+3600,null,null,null,true);

    //Cookies zijn pas beschikbaar vanaf eerstvolgende keer dat pagina geladen wordt.
    $_COOKIE["cookie1"] = $_POST["cookie1"];
    $_COOKIE["cookie2"] = $_POST["cookie2"];
}
?>

<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1>Http-only</h1>
<h2>Status cookies</h2>
<p>Cookie1: <?php echo isset($_COOKIE["cookie1"])?$_COOKIE["cookie1"]:"(Cookie niet gezet)";?></p>
<p>Cookie2: <?php echo isset($_COOKIE["cookie2"])?$_COOKIE["cookie2"]:"(Cookie niet gezet)";?></p>
<button onclick="alert(document.cookie)">Toon cookies via Javascript</button>
<p></p>
<h2>Cookies aanpassen</h2>
<form class="form-group" method="post">
    Cookie zonder http-only: <input type="text" name="cookie1" class="form-control"/>
    Cookie met http-only: <input type="text" name="cookie2" class="form-control"/>
    <br>
    <button type="submit" class="form-control">Opslaan</button>
</form>
</div>
</body>
</html>
