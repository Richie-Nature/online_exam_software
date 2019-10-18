<?php require_once("includes/admin-header.php");?>
<?php require_once("includes/admin-navbar.php");?>
<div class="container-fluid">
<?php  require_once("includes/admin-sidebar.php"); ?>
   <div class="col-sm-8 col-md-8 col-lg-9 col-xl-10 col-6 content-area">
      <div class="row">
        <div class="col-sm-4 col-6">
          <h3>Dashboard</h3>
        </div>                  
        <div class="col-sm-6 col-6 offset-sm-2 ">
          <p id="clock" class="text-danger lead"></p>
        </div>
    </div><!--row-->
    <div class="row">
      <div class="col-sm-8">
        <ul class="breadcrumb breadul">
          <li class="breadcrumb-item "><a href="#" class = "bread">Home</a></li>
          <li class="breadcrumb-item active"><a href="#" class = "bread">Dashboard</a></li>
      </ul>
      </div>
    </div><!--row-->
    <div class="row">
      <div class="col-xs-12 col-md-6 col-lg-4 col-xl-3 mb-2 ">
        <div class="card bg-danger cust-card">
          <div class="card-body text-center">
            <h5 class="card-title text-light">Revenue</h5>
            <hr class="my-4">
            <div class="flex-fas">
                <i class = "fas fa-arrow-up"></i><i class="fas fa-arrow-down"></i>
              <p class="card-text "></p>
            </div>
          </div>
        </div>
      </div><!--cardstrt-->
      <div class="col-xs-12 col-md-6 col-lg-4 col-xl-3 mb-2 ">
        <div class="card bg-warning cust-card">
          <div class="card-body text-center">
          <h5 class="card-title text-light">Certificates</h5>
          <hr class="my-4">
          <div class="flex-fas">
                <i class = "fas fa-certificate"></i>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
      </div><!--cardstrt-->
      <div class="col-xs-12 col-md-6 col-lg-4 col-xl-3 mb-2 ">
        <div class="card bg-primary cust-card">
          <div class="card-body text-center">
          <h5 class="card-title text-light">Users</h5>
          <hr class="my-4">
          <div class="flex-fas">
                <i class = "fas fa-users"></i>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
      </div><!--cardstrt-->
      <div class="col-xs-12 col-md-6 col-lg-4 col-xl-3 mb-2 ">
        <div class="card bg-success cust-card">
          <div class="card-body text-center">
          <h5 class="card-title text-light">Comments & Ratings</h5>
          <hr class="my-4">
          <div class="flex-fas">
                <i class = "fas fa-comments"></i>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
      </div><!--cardstrt-->
    <!-- </div>card row -->
    <!-- <div class="row"> -->
      <div class="col-xs-12 col-md-6 col-lg-4 col-xl-3 mb-2 ">
        <div class="card bg-success cust-card">
          <div class="card-body text-center">
            <h5 class="card-title text-light">Sales</h5>
            <hr class="my-4">
            <div class="flex-fas">
                <i class = "fas fa-shopping-cart"></i>
              <p class="card-text "></p>
            </div>
          </div>
        </div>
      </div><!--cardstrt-->
      <div class="col-xs-12 col-md-6 col-lg-4 col-xl-3 mb-2 ">
        <div class="card bg-info cust-card">
          <div class="card-body text-center"  >
          <h5 class="card-title text-light">To-do-List</h5>
          <hr class="my-4">
          <div class="flex-fas">
                <i class = "fas fa-sticky-note"></i>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
      </div><!--cardstrt-->
      <div class="col-xs-12 col-md-6 col-lg-4 col-xl-3 mb-2 ">
        <div class="card bg-danger cust-card">
          <div class="card-body text-center">
          <h5 class="card-title text-light">lorem</h5>
          <hr class="my-4">
          <div class="flex-fas">
                <i class = "fas fa-truck"></i>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
      </div><!--cardstrt-->
      <div class="col-xs-12 col-md-6 col-lg-4 col-xl-3 mb-2 ">
        <div class="card bg-primary cust-card">
          <div class="card-body text-center">
          <h5 class="card-title text-light">lorem</h5>
          <hr class="my-4">
          <div class="flex-fas">
                <i class = "fas fa-eye"></i>
              <p class="card-text"></p>
            </div>
          </div>
        </div>
      </div><!--cardstrt-->
    </div> <!--card row-->
    <div class="row">
      <div class="col-8">
        <?php #require_once("includes/calendar.php"); ?>
      </div>
    </div>
   </div><!--colsm8major-->
    
</div><!--rowmajor-->
</div>


<?php require_once("includes/admin-footer.php"); ?>