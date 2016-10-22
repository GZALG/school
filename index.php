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
<?php
    if(!empty($_SESSION))
    {
        ?>
        <form method="post">
            <table id="login">
            <tr>
                <td>Year : </td><td><input type="text" name="year"></input></td>
            </tr>
            <tr>
                <td>Link : </td><td><input type="text" name="link"></input></td>
            </tr>
            <tr>
                <td><input type="submit" name="save" class="btn btn-default" value="Upload"/></td><td><input type="reset" name="cancel" class="btn btn-default" value="cancel"/></td><td><input type="submit" name="delete" class="btn btn-default" value="Delete All"/></td>
            </tr>
            </table>
        </form>
        <?php
        if(isset($_POST['save']))//a refaire PDO
        {
            if((isset($_POST['year']))&&(isset($_POST['link'])))
            {
                try
                {
                    Person::upload($_POST['year'],$_POST['link']);
                }
                catch(Exception $e)
                {
                    ?>
                    <script>alert("exception");</script>
                    <?php
                }
            }
            else
            {
             ?>
             <script>alert("Give informations next time");</script>   
             <?php
            }
        }
        if(isset($_POST['delete']))
        {
            try
            {
                Person::delete();
            }
            catch(Exception $e)
            {
                
            }
        }
    }
?>
<?php require_once("footer.php");?>
</body>
</html>