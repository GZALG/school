<html>
<head>
<title>School</title>
<link rel="stylesheet" href="./bs/css/bootstrap.min.css">
<link rel="stylesheet" href="./bs/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="style.css">
<script src=./bs/js/bootstrap.min.js></script>
</head>
<body>
<?php require_once("header.php");?>
<?php require_once("nav.php");?>
<div id="login">
    <form action="index.php" method="post">
    <table border="0">
    <tr>
        <td>Name : </td><td><input type="text" autocomplete="on"></input></td>
    </tr>
    <tr>
        <td>Password : </td><td><input type="password" autocomplete="on"></input></td>
    </tr>
    <tr>
        <td><input type="submit" value="Log In" class="btn btn-info"></input></td><td><input type="reset" value="Cancel" class="btn btn-info"></input></td>
    </tr>
    </table>
</form>
</div>
<?php require_once("footer.php");?>
</body>
</html>