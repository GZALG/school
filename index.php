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
    
<script src="https://cdn.adf.ly/js/display.js"></script> 
<?php 
    if(empty($_SESSION))
    {
        //etudiant upload TP
    }
    else
    {
        //prof upload le TP   
    }
?>
<?php require_once("footer.php");?>
</body>
</html>