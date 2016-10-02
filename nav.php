<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">School</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="year1.php">Year 1</a></li>
      <li><a href="year2.php">Year 2</a></li> 
      <li><a href="year3.php">Year 3</a></li> 
      <li><a href="year4.php">Year 4</a></li>
    </ul>
      <ul class="nav navbar-nav" id="right">
          <?php
            if(empty($_SESSION))
            {
          ?>
          <li><a href="login.php">Log In</a></li>
          <?php
            }
            else
            {
          ?>
          <li><a href="#">Log out</a></li>
          <?php
            }
          ?>
      </ul> 
  </div>
</nav>