
<?php
session_start();
if(isset($_SESSION['xid']))
{
$gg = $_SESSION['user'];
require_once 'scripts/connection.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Shippii - Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="logo.png" rel="icon">
  <link href="logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <?php include 'header.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dash.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">



<!-- /////////////////////////Revenue Card//////////////////////////////////////////// -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>
<?php

$result1 = mysqli_query($conn, 'SELECT COUNT(`orderno`) AS `ALL` FROM `order_in` '); 
$row1 = mysqli_fetch_assoc($result1); 
$sum1 = $row1['ALL'];


$result2 = mysqli_query($conn, 'SELECT COUNT(`orderno`) AS `PICKED` FROM `picked` '); 
$row2 = mysqli_fetch_assoc($result2); 
$sum2 = $row2['PICKED'];
?>
                <div class="card-body">
                  <h5 class="card-title">Shipster <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="ri ri-group-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo "Total ". $sum1; ?></h6>
                      <span class="text-danger small pt-1 fw-bold"><?php echo $sum2; ?></span> <span class="text-muted small pt-2 ps-1">Active</span><br>
             <span class="text-success small pt-1 fw-bold"><?php echo $sum1 - $sum2; ?></span> <span class="text-muted small pt-2 ps-1">Processed to Locker</span>

                    </div>
                  </div>
                </div>

              </div>
            </div>
<!-- //////////////////////////End Shipster Card//////////////////////////////////////////////// -->

<!-- /////////////////////////Warehouse Card//////////////////////////////////////////// -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>
<?php

$result1 = mysqli_query($conn, 'SELECT COUNT(`orderno`) AS `ALL` FROM `warehouse` '); 
$row1 = mysqli_fetch_assoc($result1); 
$sum1 = $row1['ALL'];


$result2 = mysqli_query($conn, 'SELECT COUNT(`orderno`) AS `PARCEL` FROM `warehouse` WHERE `status` NOT LIKE "%Parcel/s delivered%" AND `status` NOT LIKE "%Order Completed%"'); 
$row2 = mysqli_fetch_assoc($result2); 
$sum2 = $row2['PARCEL'];
?>
                <div class="card-body">
                  <h5 class="card-title">Warehouse <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="ri ri-group-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo "Total ". $sum1; ?></h6>
                      <span class="text-danger small pt-1 fw-bold"><?php echo $sum2; ?></span> <span class="text-muted small pt-2 ps-1">Active</span><br>
             <span class="text-success small pt-1 fw-bold"><?php echo $sum1 - $sum2; ?></span> <span class="text-muted small pt-2 ps-1">Processed to Locker</span>

                    </div>
                  </div>
                </div>

              </div>
            </div>
<!-- //////////////////////////End Revenue Card//////////////////////////////////////////////// -->



<!-- /////////////////////////Revenue Card//////////////////////////////////////////// -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>
<?php

$result1 = mysqli_query($conn, 'SELECT COUNT(`orderno`) AS `ALL` FROM `locker` '); 
$row1 = mysqli_fetch_assoc($result1); 
$sum1 = $row1['ALL'];


$result2 = mysqli_query($conn, 'SELECT COUNT(`orderno`) AS `PARCEL` FROM `locker` WHERE `status` NOT LIKE "%Parcel/s delivered%" AND `status` NOT LIKE "%Order Completed%"'); 
$row2 = mysqli_fetch_assoc($result2); 
$sum2 = $row2['PARCEL'];
?>
                <div class="card-body">
                  <h5 class="card-title">Locker <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="ri ri-group-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6><?php echo "Total ". $sum1; ?></h6>
                      <span class="text-danger small pt-1 fw-bold"><?php echo $sum2; ?></span> <span class="text-muted small pt-2 ps-1">Active</span><br>
             <span class="text-success small pt-1 fw-bold"><?php echo $sum1 - $sum2; ?></span> <span class="text-muted small pt-2 ps-1">Completed</span>

                    </div>
                  </div>
                </div>

              </div>
            </div>
<!-- //////////////////////////End Revenue Card//////////////////////////////////////////////// -->


<!-- /////////////////////////Revenue Card//////////////////////////////////////////// -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

 

            <!-- Reports -->
            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Reports <span>/Today</span></h5>

                  <!-- Line Chart -->
                  <div id="reportsChart"></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'F',
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: 'Re',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                          name: 'Cu',
                          data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'datetime',
                          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          },
                        }
                      }).render();
                    });
                  </script>
                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->



           

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Recent Activity -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Recent Activity <span>| Today</span></h5>

              <div class="activity">



                <div class="activity-item d-flex">
                  <div class="activite-label">56 min</div>
                  <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                  <div class="activity-content">
                    Admin - Beneficiary Tables
                  </div>
                </div><!-- End activity item-->








              </div>

            </div>
          </div><!-- End Recent Activity -->

          <!-- Budget Report -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Expenditure <span>| This Month</span></h5>

              <div id="budgetChart" style="min-height: 400px;" class="echart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                    legend: {
                      data: ['Requested', 'Completed']
                    },
                    radar: {
                      // shape: 'circle',
                      indicator: [{
                          name: 'SWZ',
                          max: 6500
                        },
                        {
                          name: 'SA',
                          max: 16000
                        },
                        {
                          name: 'NMB',
                          max: 30000
                        },
                        {
                          name: 'BW',
                          max: 38000
                        },
                        {
                          name: 'Other',
                          max: 52000
                        }
                      ]
                    },
                    series: [{
                      name: 'Budget vs spending',
                      type: 'radar',
                      data: [{
                          value: [4200, 3000, 20000, 35000, 50000, 18000],
                          name: 'Requested'
                        },
                        {
                          value: [5000, 14000, 28000, 26000, 42000, 21000],
                          name: 'Completed'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Budget Report -->

          <!-- Website Traffic -->
        

          <!-- News & Updates Traffic -->
        

        </div><!-- End Right side columns -->

      </div>
    </section>

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
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<script>
    
   $("#login").click(function(){
     
    var user = $('#username').val(); 
    var pass = $('#password').val();

  var data = $("#loginform").serialize();
 //  $("html").addClass("loading");
    $.ajax({
      data: data,
      type: "post",
      url: "lo.php",
      success: function(dataResult){
          var dataResult = JSON.parse(dataResult);
          if(dataResult.statusCode==200){
              var success = (dataResult.success);
              
              
          }else if(dataResult.statusCode==201){
              var exception = (dataResult.exception);
              alert(exception);
              
          }else{
              var error = (dataResult.error);
              alert(error);
              
          }
      }
    });

    });
</script>
</body>

</html>
<?php
}else{
    header('Location: index.php');
}

?>