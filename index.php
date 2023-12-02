<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
     <!-- Font Awsome CSS -->
    <link rel="stylesheet" href="css/all.min.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
   
   
   
    <title>Hospital</title>
</head>
<body>
   <!-- Start Nevigation--> 
<nav class="navbar navbar-expand-lg navbar-dark bg-danger pl-5 fixed-top">
  <a href="index.php" class="navbar-brand"> UNITED HOSPITAL </a> 
  <span class= "navbar-text">Healing with Heart.</span>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

<div class="collapse navbar-collapse" id= "navbarTogglerDemo01" >
<ul class="navbar-nav pl-5 custom-nav">
   <li class="nav-item" ><a href="index.php"
    class="nav-link">Home</a>
   </li>

  <li class="nav-item"><a href="#Services"
    class="nav-link">Services</a>
  </li>

  <li class="nav-item" > <a href="#registration"
    class="nav-link"> Registration</a>
  </li>

  <li class="nav-item" ><a href="Patient/Patient_Login.php"
    class="nav-link">Login</a>
  </li>

  <li class="nav-item" ><a href="#Contact"
    class="nav-link">Contact</a>
  </li>

</ul>
</div>
</nav>
     <!-- End nevigation--> 

      <!-- Start Header Jumbotorn--> 
      <header class="Jumbotorn back-image" 
      style="background-image:url(images/peakpx.jpg);">

      <div>
       <h1>Welcome to united hospital</h1>
       <p>Customer hapiness is our aim</p>
       <a href="Patient/Patient_Login.php" class="btn btn-success mr-4">Login</a>
       <a href="#registration" class="btn btn-danger mr-4">Signup</a>


      </div>
      </header>
       <!-- End Header Jumbotorn--> 

        <!-- Start service section--> 
      <div class="container">
        <div class="jumbotron">
          <h3 class="text-center">Our Services</h3>
          <p>
          A Hospital provides a range of comprehensive healthcare services to meet the diverse needs of our community.
          Our emergency department is equipped to deliver 24/7 urgent care, trauma intervention, and critical care services.
          Within our medical departments, patients can access specialized care in internal medicine, pediatrics, obstetrics and gynecology, surgery, cardiology, neurology, and orthopedics.
          Our diagnostic services encompass radiology, including X-rays, CT scans, and MRI, as well as laboratory and pathology services.
          Specialized clinics, such as those for diabetes, oncology, and respiratory care, are available to address specific health concerns.
          A Hospital is committed to surgical excellence, offering general surgery, minimally invasive procedures, orthopedic surgery, and cardiovascular surgery.
          Maternity and neonatal care services include prenatal care, labor and delivery, and a neonatal intensive care unit. 
          Rehabilitation services, including physical, occupational, and speech therapy, contribute to our patients' recovery.
          We also prioritize mental health, providing psychiatric services, counseling, and a dedicated behavioral health unit. 
          Our in-house pharmacy ensures convenient access to medications and expert advice. Outpatient services, wellness programs, and preventive care initiatives aim to promote community health. 
          Additionally, we offer home health services, including nursing care and rehabilitation, as well as hospice care for end-of-life support.
          At A Hospital, we are dedicated to delivering quality, compassionate healthcare across a spectrum of medical needs.
          </p>

        
        </div>
      </div>


       <!-- End service section-->


      <!-- Start registration form--> 

     <?php include('UserRegistration.php')?>

 
       <!-- End registration form--> 


         <!-- End Footer--> 
         <footer class="container-fluid bg-dark mt-5 text-white text-center">
          <div class="container">
            <div class="row py-3">
              <div class="col-md-6 text-centre">
              <span class="pr-2">
                <small>
                All rights are reserved | Designed & Develop by Arif Hasan &copy; 2023.
                </small>
                <small class="ml-2"><a href="Admin/admin_login.php">Admin Login</a>

                </small>
              </span>

              </div>

            </div>

          </div>

         </footer>




           <!-- End Footer--> 















     <!-- bootstrap javascript--> 
     <script src="js/jquery.min.js"></script>
     <script src="js/popper.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/all.min.js"></script>

</body>
</html>