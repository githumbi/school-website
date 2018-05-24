<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'school');
//initialize variables

   $name= "";
  $email = "";
  $message = "";
//connect to database


//retrieve records
$results = mysqli_query($db, "SELECT * FROM contact ORDER BY name");


?>

<!DOCTYPE html>
<html>
<head>
  <title>Kag Maua |Welcome</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/styles-merged.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/vendor/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/vendor/icomoon.css">
</head>
<body>
  <nav class="navbar navbar-default probootstrap-navbar">
   
        <div class="container">
          
            
          
          <div class="navbar-header">
            <div class="btn-more js-btn-more visible-xs">
              <a href="#"><i class="icon-dots-three-vertical "></i></a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <img class="img-responsive" src="logo.png">
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">

            <ul class="nav navbar-nav navbar-right">
              <li><a href="admin.php">Registration</a></li>
              <li class="active"><a href="#">Messages</a></li>
              <li ><a href="../index.php">BACK TO HOME</a></li>
            </ul>
              </div>

                                  </div>
                               
      </nav>


     <div class="background">

<div class="container">
  
   <div class="container">
          <div class="row">
            <div class="col-md-12 ">
              <h2 style="color: white; text-align: center;">CONGREGATIONS DETAILS </h2>
            </div>
          </div>
        </div>

<table style="background-color: white;" class="table table-bordered">
  <thead>
    <tr>
      <th>No.</th>
      <th>Name Messenger</th>
      <th>Email</th>
      <th>Message</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $i=1;
     while ($row = mysqli_fetch_array($results)) { ?>
      <tr>   
             <td> <?php
                echo $i;
                $i++;
            ?>
          </td>
             <td><?php echo $row['name']; ?></td>
             <td><?php echo $row['email']; ?></td>
             <td><?php echo $row['message']; ?></td>
    </tr>
    <?php }


    ?>
    
  </tbody>
</table>

</div>
</div>





    

</body>
</html>