<?php
define('TITLE','Patient Profile');
include('../dbConnection.php');
session_start();
if($_SESSION['is_login']){
   $rEmail=$_SESSION['rEmail']; 
} else{
    echo "<script> location.href='Patient_Login.php'</script>";
}
$sql="SELECT patient_name,patient_email FROM Patient WHERE
patient_email='$rEmail'";
// $rname = "tor ma";
$result=$conn->query($sql);

if($result->num_rows>0){
   $row= $result->fetch_assoc();
   $rname=$row['patient_name'];  
}
if(isset($_REQUEST['nameupdate'])){
    if($_REQUEST['rname']==""){
       $passmsg= '<div class="alert alert-warning col-sm-6 ml-5 mt-2"
       role="alert">
       Fill All Fields</div>';
    } else {

        $rname=$_REQUEST['rname'];
        $sql="UPDATE Patient SET patient_name='$rname' WHERE
        patient_email='$rEmail'";
        if($conn->query($sql)==TRUE){
            $passmsg='<div class="alert alert-success
            col-sm-6 ml-5 mt-2" role="alert"> Succussfully Updated
            </div>';
        } else {
            $passmsg='<div class="alert alert-danger
            col-sm-6 ml-5 mt-2" role="alert"> Unable to Update
            </div>';

        }
    }

} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="../css/bootstrap.min.css">
     <!-- Font Awsome CSS -->
    <link rel="stylesheet" href="../css/all.min.css">
     <!-- Custom CSS -->
     <link rel="stylesheet" href="../css/custom.css">




  <!-- side container -->
  <div class="container-fluid" style="margin-top:30px;">
    <div class="row"> <!-- side row -->
        <nav class="col-sm-2 bg-light sidebar P-5">  <!-- Start side bar start col 1 -->
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="Patient_profile.php">
                            <i class="fas fa-user">

                            </i>Profile
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="PatientAppointment.php">
                            <i class="fab fa-accessible-icon">

                            </i>Submit Appointment
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="Appointment_status.php">
                            <i class="fas fa-align center">
                            </i>Check Appointment Status
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="Change_password.php">
                            <i class="fas fa-key">
                            </i>Change Password
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-sign-out-alt">
                            </i>Logout
                        </a>
                    </li>

                </ul>
            </div>

        </nav>  <!-- End side bar 1st col-->
        <div class="col-sm-6">  <!-- start profile area 2nd col--> 
        <form action="" method Post>
            <div class="form-group">
                <label for="rEmail">Email</label> <input type="Email"
                 class="form-control" name="rEmail" id="rEmail" value="<?php 
                 echo $rEmail
                 ?>"
                 reqdonly>
            </div>
            <div class="form-group">
            <label for="rname">Name</label> <input type="Name"
            class="form-control" name="rname" id="rname"  value="<?php 
                 echo $rname
                 ?>">
            </div>

            <button
            type="submit" class=" btn btn-danger shadow-sm font-weight-bold mt-3"
             name="nameupdate"> Update</button>
             <?php if(isset($passmsg))
             {echo $passmsg;}
             ?>

             
        </form>

        </div> <!-- End profile area 2nd col--> 

    </div><!-- End Row-->

  </div><!-- End Container-->

    <title>Profile</title>
</head>
<body>


                  







   <!-- JavaScript -->
   <script src="../js/jquery.min.js"></script>
   <script src="../js/popper.min.js"></script>
   <script src="../js/jbootstrap.min.js"></script>
   <script src="../js/all.min.js"></script>

</body>
</html>