<?php 
include('includes_sidebar/header.php');
include('../dbConnection.php');
session_start();
if($_SESSION['is_login']){
    $rEmail=$_SESSION['rEmail']; 
 } else{
     echo "<script> location.href='Patient_Login.php'</script>";
 }
 $rEmail=$_SESSION['rEmail']; 
 
 if(isset($_REQUEST['passupdate'])){
     if($_REQUEST['rPassword']==""){
        $passmsg='<div class="alert alert-warning col-sm-6 ml-6 mt-2">
         Fill All The Fields </div>';
    }
    $rPass=$_REQUEST['rPassword'];
    $sql="UPDATE Patient SET patient_password='$rPass' WHERE
    patient_email='$rEmail'";
    if($conn->query($sql)==TRUE){
       $passmsg='<div class="alert alert-success col-sm-6 ml-6 mt-2">
            Updated Successfully </div>';
   
    } else {
       $passmsg='<div class="alert alert-danger col-sm-6 ml-6 mt-2">
            Update Faied </div>';
   
   
    }
 }


?>

<div class="col-sm-9 col-md-10">
    <form class="mt-5 mx-5"action="" method="POST">

    <div class="form-group">
                <label for="inputEmail">Email</label> 
                <input type="email"
                 class="form-control"  id="inputEmail" 
                 value="<?php echo $rEmail   ?>" readonly>
            </div>
            <div class="form-group">
            <label for="inputnewpassword">New Password</label> <input type="password"
            class="form-control" id="inputnewpassword" name="rPassword">
            </div>

            <button
            type="submit" class=" btn btn-danger shadow-sm font-weight-bold mt-3"
             name="passupdate"> Update</button>
             <button type="reset" class="btn btn-secondary mt-3"> Reset</button>
             <?php if(isset($passmsg)){echo $passmsg;}?>
    </form>



</div>


                  

<?php 
include('includes_sidebar/footer.php');
?>


