<!DOCTYPE html>
<?php
session_start();
if(isset($_SESSION['zid']))
{
$gg = $_SESSION['user'];
require_once '../scripts/connection.php';



?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Locker - Collect</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../icon.png" rel="icon">
  <link href="../icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
<script src=" https://code.jquery.com/jquery-3.5.1.js"></script>
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

    <div class="pagetitle">
      <h1>Locker</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Locker</a></li>
          <li class="breadcrumb-item active">Collect</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
<!-- New beneficiary form-->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Collect - Orders</h5>
              <!-- Table with stripped rows -->
               <div class="table-responsive">
              <table class="table datatable" id="jj">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Parcel</th>
                    <th scope="col">D. Address</th>
                    <th scope="col">Size</th>
                    <th scope="col">Status</th>
                    <th scope="col">Promo</th>
                    <th scope="col">Driver</th>
                    
          <th scope="col" colspan="1" >Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
$stmt = $conn->prepare("SELECT * FROM `locker_details` where `status` = 'collect'  ");

$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
  // output data of each row
while($row = $result->fetch_assoc()) {


$date = strtotime($row['pickup_date']);
$rr  =  date('Y-m-d', $date);
?>
                  <tr>
                    <th scope="row"><?php echo $row['orderno']; ?></th>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['fulname']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['datein']; ?></td>
                    <td><?php echo $row['size']; ?></td>
                    <td><?php echo $row['quantity']; ?></td>
                     <td><?php echo $row['value']; ?></td>
                      <td><?php echo $row['insurance']; ?></td>
                       <td><?php echo $row['del_type']; ?></td>
                        <td><?php echo $row['status']; ?></td>
          <td>
      <button type="button" data-link="editassign.php?id=<?php echo $row['orderno']; ?>" title="Update" class="btn btn-warning edit" data-id="<?php echo $row['orderno']; ?>"><i class="bi bi-pencil-square"></i></button>
              
          </td>


          
                  </tr>
<?php   }
} else {
  //echo "0 results";
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

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>

  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>


      <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>
<script>
//$(document).ready(function(){
/*	
	$('.edit').click(function(){
   window.location.href = $(this).data('link');
});
});
*/
$(document).on("click",".edit",function(e){
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
        
       
        
    } );
    
  
} );
</script>
</script>
</body>

</html>
<?php
}else{
    header('Location: https://super.shippii.online');
}

?>