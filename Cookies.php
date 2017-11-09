<?php
/**
 * Created by PhpStorm.
 * User: bruno
 * Date: 08-Nov-17
 * Time: 23:18
 */

if (isset($_POST) && count($_POST) > 0) {
    if (isset($_POST["cookie1"])) {
        setcookie("cookie1", $_POST["cookie1"], time() + 3600, null, null, null, false);
        setcookie("cookie2", $_POST["cookie2"], time() + 3600, null, null, null, true);
    }
    if (isset($_POST["cookie3"])) {
        setcookie("cookie3", $_POST["cookie3"], time() + 3600, null, null, false, null);
        setcookie("cookie4", $_POST["cookie4"], time() + 3600, null, null, true, null);
    }
    header("Refresh:0");
}
?>

<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1>Http-only & secure flags</h1>
<h2>Status cookies</h2>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Type</th>
            <th>Waarde</th>
        </tr>
        </thead>
        <tr>
            <td>Cookie zonder http-only</td>
            <td><?php echo isset($_COOKIE["cookie1"])?$_COOKIE["cookie1"]:"(Cookie niet gezet)";?></td>
        </tr>
        <tr>
            <td>Cookie met http-only</td>
            <td><?php echo isset($_COOKIE["cookie2"])?$_COOKIE["cookie2"]:"(Cookie niet gezet)";?></td>
        </tr>
        <tr>
            <td>Cookie zonder secure</td>
            <td><?php echo isset($_COOKIE["cookie3"])?$_COOKIE["cookie3"]:"(Cookie niet gezet)";?></td>
        </tr>
        <tr>
            <td>Cookie met secure</td>
            <td><?php echo isset($_COOKIE["cookie4"])?$_COOKIE["cookie4"]:"(Cookie niet gezet)";?></td>
        </tr>
    </table>
<button onclick="alert(document.cookie)">Toon cookies via Javascript</button>
<p></p>
<h2>Cookies aanpassen</h2>
    <h3>Http-only</h3>
<form class="form-group" method="post">
    Cookie zonder http-only: <input type="text" name="cookie1" class="form-control"/>
    Cookie met http-only: <input type="text" name="cookie2" class="form-control"/>
    <br>
    <button type="submit" class="form-control">Opslaan</button>
</form>
</div>
<div class="container">
    <h3>Secure</h3>
    <form class="form-group" method="post">
        Cookie zonder secure: <input type="text" name="cookie3" class="form-control"/>
        Cookie met secure: <input type="text" name="cookie4" class="form-control"/>
        <br>
        <button type="submit" class="form-control">Opslaan</button>
    </form>
</div>
</body>
</html>
