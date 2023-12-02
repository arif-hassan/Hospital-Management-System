<?php

include('../dbConnection.php');
session_start();
if (! isset($_SESSION['is_adminlogin'])){

if(isset($_REQUEST['aEmail'])){
  $aEmail=trim($_REQUEST['aEmail']);
  $aPassword=$_REQUEST['aPassword'];

  $sql = "SELECT admin_email,admin_password FROM admin_login WHERE
  admin_email='".$aEmail."' AND admin_password='".$aPassword."' limit 1";
  $result=$conn->query($sql);
  if($result->num_rows==1){
    $_SESSION['is_adminlogin']=true;
    $_SESSION['aEmail']=$aEmail;
  echo"<script> location.href='dashboard.php'; </script>";
  exit;
 } else{
    $msg='<div class="alert alert-warning mt-2"> Enter Valid Email and Password</div>';
 }
}
} else {
    echo"<script> location.href='dashboard.php'; </script>";

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
<i class="fas fa-user-secret text-danger"></i>Admin Login Page</p>

<div class="container-fluid">
    <div class="row justify-content-center" >
        <div class="col-sm-6 col-md-4">
            <form action="" class="shadow-lg p-4" method="POST">
                <div class="from-group">
                    <i class="fas fa-user"></i><level for="email" 
                    class="font-weight-bold pl-3 ">Email:</level><input 
                    type="email"class="from-control" placeholder="Email"
                    name="aEmail">
                </div>
                <div>
                  <!-- #region -->
                </div>


                <div class="form-group mt-1  gap-2">
                    <i class="fas fa-key"></i><level for="pass" 
                    class="font-weight-bold pl-3">Password:</level><input 
                    type="password"class="from-control " placeholder="Password"
                    name="aPassword">
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