<?php $this->view('includes/header'); ?>
<?php $this->view('includes/navbar'); ?>

  <div class="container-fluid w-75 p-4 mx-auto shadow" >
      <?php $this->view('includes/breadcrumb', ['crumbs'=>$crumbs]); ?>
      
      <h5 class="card-group justify-content-center">Classes</h5><br>

      <?php include(views_path('classes'))?>

  </div>


<?php $this->view('includes/footer'); ?>