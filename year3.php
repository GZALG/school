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
        <table id="login" border="2">
            <tr><th>الدرس</th><th>الرابط</th></tr>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "school";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            } 
            $sql = "SELECT * FROM cours where year='3'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) 
            {
                $i = 1;
                while($row = $result->fetch_assoc()) 
                {
                    echo "<tr><td>".$i."</td><td><a href=".$row['link']." target='_blank'>".$row['link']."</a></td></tr>";
                    $i++; 
                }
            }
            else
            {
                echo "<tr><td>ليس الان</td><td>ليس الان</td></tr>";
            }
            $conn->close();
        ?>
        </table>
    </form>
<?php require_once("footer.php");?>
</body>
</html>