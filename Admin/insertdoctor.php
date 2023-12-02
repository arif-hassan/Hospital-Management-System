<?php 
include('includes/header.php');
include('../dbConnection.php');


session_start();
if(isset($_SESSION['is_adminlogin'])){
    $aEmail=$_SESSION['aEmail'];
} else{
    echo "<script> location.href='login.php'</script>";
}
if(isset($_REQUEST['empsubmit'])){
    if(($_REQUEST['doctor_name'] == "") ||
        ($_REQUEST['doctor_email']=="")||
        ($_REQUEST['specialization']=="")||
        ($_REQUEST['gender']=="")){
    $msg='<div class="alert alert-warning col-sm-6 ml-5
    mt-2" role="alert">Fill All The Fields.</div>';

} else{
    $dname=$_REQUEST['doctor_name'];
    $demail=$_REQUEST['doctor_email'];
    $dspecialization=$_REQUEST['specialization'];
    $dgender=$_REQUEST['gender'];
    $sql="INSERT INTO doctors 
    (doctor_name,specialization,gender,doctor_email)
    VALUES 
    ('$dname','$demail','$dspecialization', '$dgender')";
    if($conn->query($sql)==TRUE){
        $msg= '<div class="alert alert-success col-am-6
        ml-5 mt-2" role="alert">
        Added Successfully
        </div>';

} else {
    $msg= '<div class="alert alert-danger col-am-6
    ml-5 mt-2" role="alert">
    Unable to Add
    </div>';
     }
  }
}

?>

<!--start  2nd column-->
<div class="col-sm-6 mt-5 mx-3 jumborton"> 
 <h3 class="text-center">Add a New Doctor</h3>
 <form action="" method="POST">
    <div class="form-group">
        <lebel for="doctor_name">Name</lebel>
        <input type="text" class="form-control"
          id="doctor_name" name="doctor_name">
    </div>

    <div class="form-group">
        <lebel for="doctor_email">Email</lebel>
        <input type="email" class="form-control"
          id="doctor_email" name="doctor_email">
    </div>

    <div class="form-group">
        <lebel for="specialization">Specialization</lebel>
        <input type="text" class="form-control"
          id="specialization" name="specialization">
    </div>

    <div class="form-group">
        <lebel for="gender">Gender</lebel>
        <input type="text" class="form-control"
          id="gender" name="gender">
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-danger"
            id="empsubmit" name="empsubmit">Submit
        </button>
        <a href="doctor.php">Close</a>

    </div>
    <?php 
    if(isset($msg)) {echo $msg;}
    ?>
   
 </form>

</div>


<!-- Bootstrap CSS -->
     <link rel="stylesheet" href="../css/bootstrap.min.css">
     <!-- Font Awsome CSS -->
    <link rel="stylesheet" href="../css/all.min.css">
     <!-- Custom CSS -->
     <link rel="stylesheet" href="../css/custom.css">


<!-- JavaScript Files-->  
<script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/jbootstrap.min.js"></script>
  <script src="../js/all.min.js"></script>

