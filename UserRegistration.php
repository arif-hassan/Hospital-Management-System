<?php
include("dbConnection.php");
if(isset($_REQUEST['rSignup'])){
    if(($_REQUEST["rname"]=="")||($_REQUEST["rEmail"]=="")||($_REQUEST["rPassword"]=="")){
        $regmsg= '<div class="alert alert-warning mt-2"
        role="alter">All Fields are Required.</div>';
    } else{
        $sql="SELECT Patient_email From Patient WHERE Patient_email
        ='".$_REQUEST['rEmail']."'";
        $result=$conn->query($sql);
        if($result->num_rows==1){
            $regmsg='<div class="alert alert-warning mt-2"
            role="alter">Email ID Already Registered.</div>'; 
         }
    else{

        $rName = $_REQUEST["rname"];
        $rEmail = $_REQUEST["rEmail"];
        $rPassword= $_REQUEST["rPassword"];
        $sql= "INSERT INTO patient(patient_name,patient_email,patient_password)
        VALUES('$rName','$rEmail','$rPassword')";
        if($conn->query($sql)==TRUE){
          $regmsg= '<div class="alert alert-success mt-2"
          role="alter">Account Created Successfully.</div>';
          }else{
           $regmsg= '<div class="alert alert-danger mt-2"
           role="alter">Unable to Create Account.</div>';
   
          }

        }
    }
}

?>



<!-- Start registration form--> 
<div  class="container pt-5" id="registration">
        <h2 class="text-'center"> Create an Account</h2>
       <div class="row mt-4 mb-4">
        <div class="col-md-6 offset-md-3">
          <form action="" class="shadow-lg p-4" method="POST">
             <div class="form-group">
              <i class="fas fa-user"></i> <lebel for="Name" 
              class="font-weight-bold pl-2">Name</lebel><input type="text" class="form-control" placeholder="Name"
              name="rname">
             </div>
             <div class="form-group">
              <i class="fas fa-user"></i> <lebel for="Email" 
              class="font-weight-bold pl-2">Email</lebel><input type="email" class="form-control" placeholder="Email"
              name="rEmail">
              <small class="form-text">We'll never share youe email with anyone else.</small>

             </div>
             <div class="form-group">
              <i class="fas fa-key"></i> <lebel for="pass" 
              class="font-weight-bold pl-2">New Password</lebel><input type="password" class="form-control" placeholder="Password"
              name="rPassword">

             </div>
             <div class="mt-3 d-grid gap-2">
             <button type="submit" class="btn btn-danger shadow-sm font-weight-bold" name="rSignup">Signup
</div>
             </button>
               <em style="font-size:10px;">Note- By clicking Sigb up,you are agree to our Terns,Data Policy and Cookies Policy</em>
          <?php if(isset($regmsg)){echo $regmsg;} ?>
            </form>
        </div>
       </div> 
      </div>
          

 
       <!-- End registration form--> 