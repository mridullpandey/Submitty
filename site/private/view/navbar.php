<?php
if (!isset($name) || $name=="") {
    $name = "Login";
}
?>

<!-- Static navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="?page=home"><img src="resources/rpi.png" height="50"></img></a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            </ul>
            <ul class="nav navbar-nav navbar-right">
                            <li class="login-navbar"><a href="?page=home">Home</a></li>
              <li class="login-navbar"><a href="?page=announcements">Announcements</a></li>
              <li class="login-navbar"><a href="?page=homework">Homework</a></li>
              <li class="login-navbar"><a href="?page=grades">Grades</a></li>
                <li class="login-navbar"><a href="#"><?php echo $name;?></a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>

