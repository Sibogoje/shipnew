<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['zid']))
{
$gg = $_SESSION['user'];
require_once '../scripts/connection.php';
//$ids=$_POST['id'];
//$ids = $_REQUEST['id'];
$ids = $_GET['id'];

$email = "";

?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>View Shipstar</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../icon.png" rel="icon">
  <link href="../icon.png" rel="apple-touch-icon">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
 <link href='select2/dist/css/select2.min.css' rel='stylesheet' type='text/css'>
  <script src='select2/dist/js/select2.min.js' type='text/javascript'></script>
  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
<?php include '../header.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Shipstar Update</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Shipstar</a></li>
          <li class="breadcrumb-item active">Update</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
<!-- New beneficiary form-->
<div class="card">
            <div class="card-body">
              <h5 class="card-title">View, Edit and Delete Order</h5>

              <form class="row g-3 needs-validation" method="post" action="" enctype="multipart/form-data" novalidate>
	<?php 
$stmt = $conn->prepare("SELECT * FROM `orders` where `orderid`=?");
$stmt->bind_param("s", $ids);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
  // output data of each row
while($row = $result->fetch_assoc()) {
	
	$email = $row['username'];
?>		    
<div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="ff" placeholder="Order ID" value="<?php echo $row['orderid']; ?>" name="DeceasedID" readonly>
                    <label for="floatingName">Order ID:</label>
				  <div class="valid-feedback">
                    Looks good!
                  </div>
                  </div>
				  </div>
                <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="ff" placeholder="Client Email" value="<?php echo $row['username']; ?>" name="DeceasedSurname" required>
                    <label for="floatingName">Client Email:</label>
				  <div class="valid-feedback">
                    Looks good!
                  </div>
                  </div>
				  </div>
				  
 <?php 
$stmt2 = $conn->prepare("SELECT `name` FROM `newlogin` where `email` LIKE '%$email%'");
//$stmt2->bind_param("s", $email);
$stmt2->execute();
$result2 = $stmt2->get_result();
if ($result2->num_rows > 0) {
  // output data of each row
while($row2 = $result2->fetch_assoc()) {
?>        
          <div class="col-md-3">
                  <div class="form-floating">
                    <input type="date" class="form-control" id="ff" placeholder="Pickup Date" value="<?php echo $row2['name']; ?>" name="DeceasedFirstnames" required>
                    <label for="floatingName">Full Name:</label>
          <div class="valid-feedback">
                    Looks good!
                  </div>
                  </div>
          </div>
<?php
}
} else { ?>
  <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="ff" placeholder="Pickup Date" value="Name Unknown" name="DeceasedFirstnames" required>
                    <label for="floatingName">Full Name:</label>
          <div class="valid-feedback">
                    Looks good!
                  </div>
                  </div>
          </div>
<?php
} 
?>

           <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="ff" placeholder="Box Size" value="<?php echo $row['box']; ?>" name="DateOfDeath" required>
                    <label for="floatingName">Box Size:</label>
          <div class="valid-feedback">
                    Looks good!
                  </div>
                  </div>
          </div>
				  
				  <div class="col-md-9">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="ff" placeholder="Deceased IDnumber" value="<?php echo $row['description']; ?>" name="DeceasedIDnumber" required>
                    <label for="floatingName">Item Description</label>
				  <div class="valid-feedback">
                    Looks good!
                  </div>
                  </div>
				  </div>

          <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="ff" placeholder="Shop/Pickup Name" value="<?php echo $row['shop']; ?>" name="DateOfDeath" required>
                    <label for="floatingName">Shop/Pickup Name:</label>
          <div class="valid-feedback">
                    Looks good!
                  </div>
                  </div>
          </div>

         <div class="col-md-12">
          <label style="font-weight: bold;">Pickup Address Details</label>
         </div>
         
				  
				  <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="ff" placeholder="Pickup Country" value="<?php echo $row['pcountry']; ?>" name="DateOfDeath" required>
                    <label for="floatingName">Pickup Country:</label>
				  <div class="valid-feedback">
                    Looks good!
                  </div>
                  </div>
				  </div>
				  
				  <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="ff" placeholder="Total Funds" value="<?php echo $row['pregion']; ?>" name="TotalFunds" required>
                    <label for="floatingName">Pickup Region:</label>
				  <div class="valid-feedback">
                    Looks good!
                  </div>
                  </div>
				  </div>
				  
				  
				  <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="ff" placeholder="Pickup Town" value="<?php echo $row['picktown']; ?>" name="RetirementFundID" required>
                    <label for="floatingName">Pickup Town:</label>
				  <div class="valid-feedback">
                    Looks good!
                  </div>
                  </div>
				  </div>
				  
				  <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="ff" placeholder="Pickup Location" value="<?php echo $row['pickup_address']; ?>" name="EmployerID" required>
                    <label for="floatingName">Pickup Location:</label>
				  <div class="valid-feedback">
                    Looks good!
                  </div>
                  </div>
				  </div>

           <div class="form-floating mb-12">
                      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px;" value="<?php echo $row['pickup_notes']; ?>"></textarea>
                      <label for="floatingTextarea">Pickup Notes</label>
                    </div>
				  
				  
				   <div class="col-md-12">
          <label style="font-weight: bold;">Destination Address Details</label>
         </div>  



              <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="ff" placeholder="Destination Country" value="<?php echo $row['dcountry']; ?>" name="DateOfDeath" required>
                    <label for="floatingName">Destination Country:</label>
          <div class="valid-feedback">
                    Looks good!
                  </div>
                  </div>
          </div>
          
          <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="ff" placeholder="Destination Region" value="<?php echo $row['dregion']; ?>" name="TotalFunds" required>
                    <label for="floatingName">Destination Region:</label>
          <div class="valid-feedback">
                    Looks good!
                  </div>
                  </div>
          </div>
          
          
          <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="ff" placeholder="Destination Town" value="<?php echo $row['droptown']; ?>" name="RetirementFundID" required>
                    <label for="floatingName">Destination Town:</label>
          <div class="valid-feedback">
                    Looks good!
                  </div>
                  </div>
          </div>
          
          <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="ff" placeholder="Destination Location" value="<?php echo $row['drop_off_address']; ?>" name="EmployerID" required>
                    <label for="floatingName">Destination Location:</label>
          <div class="valid-feedback">
                    Looks good!
                  </div>
                  </div>
          </div>

            

          <div class="form-floating mb-12">
                      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px;" value="<?php echo $row['delivery_notes']; ?>"></textarea>
                      <label for="floatingTextarea">Delivery Notes</label>
                    </div>



 <div class="col-md-12">
          <label style="font-weight: bold;">Contact Details</label>
         </div> 


                <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="ff" placeholder="Pickup Contact" value="<?php echo $row['contact_person']; ?>" name="DateOfDeath" required>
                    <label for="floatingName">Pickup Contact:</label>
          <div class="valid-feedback">
                    Looks good!
                  </div>
                  </div>
          </div>
          
          <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="ff" placeholder="Pickup Contact Number" value="<?php echo $row['contact_number']; ?>" name="TotalFunds" required>
                    <label for="floatingName">Pickup Number:</label>
          <div class="valid-feedback">
                    Looks good!
                  </div>
                  </div>
          </div>
          
          
          <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="ff" placeholder="Destination Contact" value="<?php echo $row['contactpick']; ?>" name="RetirementFundID" required>
                    <label for="floatingName">Dest. Contact:</label>
          <div class="valid-feedback">
                    Looks good!
                  </div>
                  </div>
          </div>
          
          <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="ff" placeholder="Destination Phone" value="<?php echo $row['contactphone_pick']; ?>" name="EmployerID" required>
                    <label for="floatingName">Desti. Phone:</label>
          <div class="valid-feedback">
                    Looks good!
                  </div>
                  </div>
          </div>
          
          
      <div class="col-md-12">
          <label style="font-weight: bold;">
          Other</label>
         </div> 


              <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="ff" placeholder="Pickup Country" value="<?php echo $row['insurance']; ?>" name="DateOfDeath" required>
                    <label for="floatingName">Insurance:</label>
          <div class="valid-feedback">
                    Looks good!
                  </div>
                  </div>
          </div>
          
          <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="ff" placeholder="Total Funds" value="<?php echo $row['premium']; ?>" name="TotalFunds" required>
                    <label for="floatingName">Premium Member:</label>
          <div class="valid-feedback">
                    Looks good!
                  </div>
                  </div>
          </div>
          
          
          <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="ff" placeholder="Pickup Town" value="<?php echo $row['rewards']; ?>" name="RetirementFundID" required>
                    <label for="floatingName">Promotion:</label>
          <div class="valid-feedback">
                    Looks good!
                  </div>
                  </div>
          </div>
          
          <div class="col-md-3">
                  <div class="form-floating">
                    <input type="text" class="form-control" id="ff" placeholder="Pickup Location" value="<?php echo $row['document']; ?>" name="EmployerID" required>
                    <label for="floatingName">Documents:</label>
          <div class="valid-feedback">
                    Looks good!
                  </div>
                  </div>
          </div>
                
<div class="col-md-12">
          <label style="font-weight: bold;">Assignment</label>
         </div>


          <div class="col-md-6">
        <label for="floatingName">Assign To Pickup Driver:</label>
                  <div class="form-floating">
          
           <select type="text" class="form-control" id="single"    placeholder="MemberID" name="MemberID"  required>
          <option value="" selected></option>
            <?php 
            $stmt12 = $conn->prepare("SELECT DISTINCT * FROM `drivers` ");
            $stmt12->execute();
            $result12 = $stmt12->get_result();
            if ($result12->num_rows > 0) {
              // output data of each row
            while($row12 = $result12->fetch_assoc()) {
            ?>
          <option value="<?php echo $row12['id']; ?>"><?php echo $row12['fullname']." - ".$row12['company'] ; ?></option>
            <?php   }
            } else {
              echo "0 results";
            } ?> 
          </select>
                 
          <div class="valid-feedback">
                    Looks good!
                  </div>
                  </div>
          </div>  
          
         <div class="col-md-6">
        <label for="floatingName">Status:</label>
                  <div class="form-floating">
          
           <select type="text" class="form-control" id="single2"    placeholder="MemberID" name="MemberID"  required>
             <option value=""></option>
          <option value="Confirmed">Ready For Collection</option>
          <option value="Parcel Picked Up" >Declined</option>
          
          
            
          </select>
                 
          <div class="valid-feedback">
                    Looks good!
                  </div>
                  </div>
          </div> 

                
                <div class="text-center">
                  <button type="submit"  class="btn btn-warning" style="width: 100%; font-weight: bold;" name="submit">Update Order Info</button>
                  
                </div>
								<?php   }
} else {
?> 

  <?php
} ?> 
              </form><!-- End floating Labels Form -->

            </div>
          </div>

<!-- end of new beneficiary form -->
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ --
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
 
<script>
$(document).on("click",".dnew",function(e){
 // your code goes here
  window.location.href = $(this).data('link');
});
</script>
<script>
$(document).ready(function(){

$('#single').select2({
    width: '100%',
    allowClear: false,
    height: '100%',
});

$('#single2').select2({
    width: '100%',
    allowClear: false,
    height: '100%',
});

});
</script>
</body>

</html>
<?php
}else{
    header('Location: https://fairlife.liquag.com/fair/index.php');
}

?>