<!DOCTYPE html>
<html lang="en">

  <head>
    <!--Load Head View-->
    <?php $this -> load -> view("admin/_partials/head.php") ?>
  </head>
  <body id="page-top">
    <!--Load Navbar View-->
    <?php $this -> load -> view("admin/_partials/navbar.php") ?>
    <div id="wrapper">
      <!--Load Sidebar View-->
      <?php $this -> load -> view("admin/_partials/sidebar.php") ?>

      <div id="content-wrapper">

        <div class="container-fluid">


          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-comments"></i>
                  </div>
                  <div class="mr-5">TASK LIST MONITORING</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="Tasklists/index">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-list"></i>
                  </div>
                  <div class="mr-5">COST SAVING SUMMARY</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="CostMonitor/index">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                  <div class="mr-5">COST SAVING LOG</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="CostSaving/index">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-life-ring"></i>
                  </div>
                  <div class="mr-5">TASK LIST DONE</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="TasklistLog/index">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>

        <!-- Sticky Footer -->
        <?php $this->load->view("admin/_partials/footer.php") ?>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <?php $this -> load -> view("admin/_partials/scrolltop.php") ?>
    <!-- Logout Modal-->
    <?php $this -> load -> view("admin/_partials/modal.php") ?>

    <!-- Bootstrap core JavaScript-->
    <?php $this -> load -> view("admin/_partials/js.php") ?>

  </body>

</html>
