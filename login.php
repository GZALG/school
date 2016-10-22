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
    <form method="post">
        <table id="login">
            <tr>
                <td>Name : </td><td><input type="text" name="name"></input></td>
            </tr>
            <tr>
                <td>Password : </td><td><input type="password" name="pw"></input></td>
            </tr>
            <tr>
            <td><input type="submit" name="submit" class="btn btn-default" value="Log In"/></td><td><input type="reset" name="reset" class="btn btn-default" value="Cancel"/></td>
            </tr>
        </table>
    <?php
    if(isset($_POST['submit']))
    {
        if(($_POST['name']==="admin")&&($_POST['pw']==="admin"))
        {
            $p = new Person();
            $_SESSION['person'] = serialize($p);
            $p->logIn($p);
        }
        else
        {
            ?>
            <script>alert("Wrong identification");</script>
            <?php
        }
    }
    ?>
    </form>
<?php require_once("footer.php");?>
</body>
</html>