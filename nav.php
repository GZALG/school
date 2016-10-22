<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">المدرسة</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">صفحة البداية</a></li>
      <li><a href="year1.php">سنة أولى متوسط</a></li>
      <li><a href="year2.php">سنة ثانية متوسط</a></li> 
      <li><a href="year3.php">سنة ثالثة متوسط</a></li> 
      <li><a href="year4.php">سنة رابعة متوسط</a></li>
    </ul>
      <ul class="nav navbar-nav" id="right">
          <?php
            if(empty($_SESSION))
            {
                echo "<li><a href='login.php'>Log In</a></li>";
            }
            else
            {
                echo "<li><a href='logout.php'>Log out</a></li>";
            }   
          ?>
      </ul> 
  </div>
</nav>