<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['zid']))
{
$gg = $_SESSION['user'];
require_once '../scripts/connection.php';

if (isset($_POST['savenew'])){
  $id = $_POST['use'];
  $name = $_POST['name'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $type = $_POST['type'];

  
  
  $stmt = $conn->prepare("REPLACE into partner_companies (`id`,  `name`, `address`, `email`, `phone`, `type`)VALUES ( ?,?,?,?,?,?);");
  $stmt->bind_param("ssssss",  $id,  $name,   $address, $email, $phone,   $type);
  $stmt->execute();

  //echo "New records created successfully";
  header ('Location: partners.php');
  $stmt->close();
  $conn->close();
  }else{
  
  }
  if (isset($_POST['delete'])){
	  $id = $_POST['id'];
    $stmt = $conn->prepare("DELETE FROM `partner_companies` where `id`='$id' ");
    $stmt->execute();
    
    //echo "New records created successfully";
    header ('Location: partners.php');
    $stmt->close();
    $conn->close();
    }else{
    
    }
    
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Shippii Mall</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="../icon.png" rel="icon">
  <link href="../icon.png" rel="apple-touch-icon">


  <script src=" https://code.jquery.com/jquery-3.5.1.js"></script>


  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/b-2.2.3/b-html5-2.2.3/b-print-2.2.3/date-1.1.2/fh-3.2.4/r-2.3.0/rg-1.2.0/sc-2.0.7/sb-1.3.4/sp-2.0.2/sl-1.4.0/datatables.min.js"></script>


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

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/b-2.2.3/b-html5-2.2.3/b-print-2.2.3/date-1.1.2/fh-3.2.4/r-2.3.0/rg-1.2.0/sc-2.0.7/sb-1.3.4/sp-2.0.2/sl-1.4.0/datatables.min.css"/>


  <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" rel="stylesheet">
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



  <div class="modal fade" id="modalDialogScrollable" tabindex="-1">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Add New Partner</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      
			<form class="row g-3" method="post" action="" autocomplete="off">
			    <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="id" name="id" id="use" autocomplete="new-text" required readonly>
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Partner Name" name="name" id="name" autocomplete="new-text" required>
                </div>
				<div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Address" autocomplete="new-text" id="address" name="address" required>
                </div>
                <div class="col-md-12">
                  <input type="phone" class="form-control" placeholder="Phone" autocomplete="new-text" id="phone" name="link" required>
                </div>
                <div class="col-md-12">
                  <input type="email" class="form-control" placeholder="Email" autocomplete="new-text" id="email" name="email" required>
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" placeholder="Type of Business" autocomplete="new-text" id="type" name="link" required>
                </div>
             
				
                <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="savenew">Add</button>
                  <button type="reset" class="btn btn-secondary">Clear</button>
                  <button type="submit" class="btn btn-danger" name="delete" id="delete" >Delete</button>
				  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
              </form><!-- End No Labels Form -->
					  
					  
                    </div>
                   
                  </div>
                </div>
              </div><!-- End Modal Dialog Scrollable-->

    <div class="pagetitle">
      <h1>Manage Partners</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
          <li class="breadcrumb-item active">Partners</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
<!-- New beneficiary form-->
    <section class="section">
      <div class="row">

                <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <div style="100%;" class="row"> 
              <div class="col-md-6">
              <h5 class="card-title">Malls</h5>
              </div>
              <!-- Table with stripped rows -->
<div class="col-md-6 text-end">
              <button style="margin-top: 10px; margin-bottom: 10px;" type="button" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable" data-link="" title="View" class="btn btn-success" data-id=""><i class="bi bi-union"></i>Add New</button>
              </div>
              </div>
               <div class="table responsive">
               <table class="table table-striped datatable nowrap" id="jj" style="width: 100%;" >
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Type</th>
                    
          <th scope="col" >Action</th>
                  </tr>
                </thead>
                <tbody>
        <?php 
$stmt = $conn->prepare("SELECT * FROM `partner_companies`");

$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
  // output data of each row
while($row = $result->fetch_assoc()) {
//$date = strtotime($row['pickup_date']);
//$rr  =  date('Y-m-d', $date);

?>
                  <tr>
                    <th scope="row"><?php echo $row['id']; ?></th>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['address'];  ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['type']; ?></td>
          <td>
  <button type="button"  class="btn btn-outline-primary edit"  title="Edit" 
			data-id="<?php echo $row['id']; ?>"
			data-name="<?php echo $row['name']; ?>"
			data-address="<?php echo $row['address']; ?>"
      data-phone="<?php echo $row['phone']; ?>"
      data-email="<?php echo $row['email']; ?>"
      data-type="<?php echo $row['type']; ?>"

			data-bs-toggle="modal" data-bs-target="#modalDialogScrollable"
			><i class="bi bi-eye"></i></button>
              
          </td>
          
                  </tr>
<?php   }
} else {
 // echo "0 results";
} ?>                 
                </tbody>
              </table>
              </div>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>

      </div>
    </section>

<!-- end of new beneficiary form -->
    

  </main><!-- End #main -->

  <!-- ======= Footer ======= -
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
     All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ --
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer>End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="../assets/vendor/php-email-form/validate.js"></script>
 


<script src="../assets/js/main.js"></script>

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>

    <script>
    
    $('.edit').click(function(){
        
        $('#delete').show();
        
       // alert('clickeds');
       var id = $(this).data("id");
       var name = $(this).data("name");
       var type = $(this).data("type");
       var email = $(this).data("email");
       var phone = $(this).data("phone");
       var address = $(this).data("address");

       $('#name').val(name);
       $('#use').val(id);
        $('#type').val(type);
        $('#email').val(email);
        $('#phone').val(phone);
        $('#address').val(address);
       
       
       
        
    });
    
</script>	
<script>
//$(document).ready(function(){
/*	
	$('.edit').click(function(){
   window.location.href = $(this).data('link');
});
});
*/
$(document).on("click",".editss",function(e){
 // your code goes here
  window.location.href = $(this).data('link');
});
</script>


<script>
  $(document).ready(function() {
    $('#jj').DataTable( {
        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, 'All'],
        ],
        dom: 'Blfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        responsive: true,
} );
});
</script>

</body>

</html>
<?php
}else{
    header('Location: https://super.shippii.online/logout.php');
}

?>