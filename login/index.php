<?php
include 'header.php';


//retrieve records for the registered students
$rec = mysqli_query($conn, "SELECT * FROM submit;");
$record = mysqli_fetch_array($rec);

$student = $record['student'];
$parent = $record['parent'];
$class = $record['class'];
$phone = $record['phone'];



?>
  <div class="login-form">
  <h2 class="text-center">Log in</h2>

    <form action="includes/login.inc.php" method="post">
    <div class="form-group">
        <input class="form-control" type="text" name="usr" placeholder="user name">
    </div>
    <div class="form-group">
        <input class="form-control" type="password" name="pwd" placeholder="password">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block">LOGIN</button>
    </div>
    </form>
    <?php
        if (isset($_SESSION['id'])) {
            echo "<form action='includes/logout.inc.php' method=''>
            <button type='submit' >LOGOUT</button>
          </form>" .$_SESSION['id'];  
          ?>





        <div style="background-color: white;" class="container">

          
             
          <table style="background-color: white;" class="table table-hover">
          <thead>
            <tr>
              <th scope="col">Parent name</th>
              <th scope="col">student</th>
              <th scope="col">class</th>
              <th scope="col">phone</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $parent; ?></td>
              <td><?php echo $student; ?></td>
              <td><?php echo $class; ?></td>
              <td><?php echo $phone; ?></td>
            </tr>
          </tbody>
        </table>
        </div> 

       <?php } else{
            echo 'you are not logged in';
        }
    ?>
     
     
     

     </div>

</body>
</html>