Hello Doctors.
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dahsbard</title>
<?php 
include('includes/header.php');
include('../dbConnection.php');


session_start();
if(isset($_SESSION['is_adminlogin'])){
    $aEmail=$_SESSION['aEmail'];
} else{
    echo "<script> location.href='login.php'</script>";
}
?>
<!--start 2nd column-->
<div class="col-sm-9 col-md-10 mt-5 text-center">
    <p class="bg-dark text-white p-2">List Of Doctors</p>
    <?php
    $sql="SELECT * FROM doctors";
    $result=$conn->query($sql);
    if($result->num_rows > 0){
        echo'<table class="table">';
        echo'<thread>';
        echo'<tr>';
        echo'<th scope="col"> Doctor Id</th>';
        echo'<th scope="col"> Name</th>';
        echo'<th scope="col"> Specialization</th>';
        echo'<th scope="col"> Gender</th>';
        echo'<th scope="col"> Email</th>';
        echo'<th scope="col"> Action</th>';
        echo'</tr>';
        echo'</thread>';
        echo'<tbody>';
          while($row = $result->fetch_assoc()){
            echo'<tr>';
             echo '<td>'.$row["doctor_id"].'</td>';
             echo '<td>'.$row["doctor_name"].'</td>';
             echo '<td>'.$row["specialization"].'</td>';
             echo '<td>'.$row["gender"].'</td>';
             echo '<td>'.$row["doctor_email"].'</td>';
             echo '<td>';
             echo '<form action="editdoctor.php" class="d-inline"
             method="POST">';
             echo '<input type="hidden" name="id" 
             value='.$row["doctor_id"].'> <button type=
             "submit" class="btn btn-info mr-3" name="edit"
             value="Edit"><i class="fas fa-pen"></i></button>';
             echo'</form>';
             echo'<form action="" method="POST"
             class="d-inline">';

             echo '<input type="hidden" name="id" 
             value='.$row["doctor_id"].'> <button type=
             "submit" class="btn btn-secondary mr-3" name="delete"
             value="DELETE"><i class="far fa-trash-alt"></i></button>';
             echo'</form>';
             echo'</td>';
             echo'</tr>';
          }
          echo'</tbody>';
          echo'</table>';
        }else{echo'0 Result';

             




        }


?>
</div>
<?php
if(isset($_REQUEST['delete'])){
    $sql= "DELETE FROM doctors where doctor_id=
    {$_REQUSET['id']}";
if($conn->query($sql)==TRUE){
    echo '<meta http=equiv="refresh" 
    content="0;URL=?deleted">';}else
    {echo 'Unabel to delete';}


}
?>
</div><!--end row-->
<div class="float-right"><a href="insertdoctor.php"
class="btn btn-danger">
<i class="fas fa-plus fa-2x"></i></a></div>

</div>  <!--end container-->



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

