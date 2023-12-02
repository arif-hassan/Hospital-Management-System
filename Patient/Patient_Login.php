<?php

include('../dbConnection.php');
session_start();
if (! isset($_SESSION['is_login'])){

if(isset($_REQUEST['rEmail'])){
  $rEmail=trim($_REQUEST['rEmail']);
  $rPassword=$_REQUEST['rPassword'];

  $sql = "SELECT patient_email,patient_password FROM Patient WHERE
  patient_email='".$rEmail."' AND patient_password='".$rPassword."' limit 1";
  $result=$conn->query($sql);
  if($result->num_rows==1){
    $_SESSION['is_login']=true;
    $_SESSION['rEmail']=$rEmail;
  echo"<script> location.href='Patient_profile.php'; </script>";
  exit;
 } else{
    $msg='<div class="alert alert-warning mt-2"> Enter Valid Email and Password</div>';
 }
}
} else {
    echo"<script> location.href='Patient_profile.php'; </script>";

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS-->
<link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <!-- Font Awsome CSS-->
    <link rel="stylesheet" href="../CSS/all.min.css">






    <title>Login</title>
</head>
<body>
    <div class="mb-3 mt-5 text-center" style="font-size:30px;">
    <i class="fas fa-stethoscope text-danger"> </i>
        <span>Hospital Management System</span>
    </div>

<p class="text-center" style="font-size:20px">
<i class="fas fa-user-secret text-danger"></i>Patient Login Page</p>

<div class="container-fluid">
    <div class="row justify-content-center" >
        <div class="col-sm-6 col-md-4">
            <form action="" class="shadow-lg p-4" method="POST">
                <div class="from-group">
                    <i class="fas fa-user"></i><level for="email" 
                    class="font-weight-bold pl-3 ">Email:</level><input 
                    type="email"class="from-control" placeholder="Email"
                    name="rEmail">
                </div>
                <div>
                  <!-- #region -->
                </div>


                <div class="form-group mt-1  gap-2">
                    <i class="fas fa-key"></i><level for="pass" 
                    class="font-weight-bold pl-3">Password:</level><input 
                    type="password"class="from-control " placeholder="Password"
                    name="rPassword">
                </div>
                <button type="submit" class=" btn btn-danger shadow-sm font-weight-bold mt-3" name="rSignup">Login</button>
                <?php if(isset($msg)) {echo $msg;}
                
                
                
                ?>
            </form>
            <div class="text-center"> <a href="../index.php" class=
            "btn btn-info mt-3 font-weight-bold shadow-sm">Back to Home.</a>

            </div>

        </div>

    </div>

</div>





  <!-- JavaScript Files-->  
  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/jbootstrap.min.js"></script>
  <script src="../js/all.min.js"></script>
</body>
</html>