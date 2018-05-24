<?php
 include 'header.php';
?>
    <div class="login-form">
  <h2 class="text-center">SIGN UP</h2>

    <form action="includes/signup.inc.php" method="post">
    <div class="form-group">
        <input class="form-control" type="text" name="first" placeholder="first name">
    </div>
    <div class="form-group">
        <input class="form-control" type="text" name="last" placeholder="last name">
    </div>
    <div class="form-group">
        <input class="form-control" type="text" name="usr" placeholder="user name">
    </div>
    <div class="form-group">
        <input class="form-control" type="password" name="pwd" placeholder="password">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">SIGN UP</button>
    </div>
    </form>

    </div>
