<?php $this->view('includes/header'); ?>
<?php $this->view('includes/navbar'); ?>

  <div class="container-fluid w-75 p-4 mx-auto shadow" >
  <?php $this->view('includes/breadcrumb', ['crumbs'=>$crumbs]); ?>
    <div class="card-group justify-content-center">
      <form method="post">
        <h5 class="mt-2 text-center">Add New Class</h5>
        <?php if(count($errors) > 0) :?>
            <div class="alert alert-warning alert-dismissible fade show p-2" role="alert">
                <strong>Error:</strong>
                <?php foreach($errors as $error) : ?>
                    <br><?=$error." !"?>
                <?php endforeach; ?>
                <span type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </span>
            </div>
        <?php endif; ?>
        <input class="text-center form-control mr-sm-2 mb-4" type="text" name="class" value="<?=get_var('class')?>" placeholder="Class Name">
        <input class="btn btn-success col-4 me-2 d-flex justify-content-center float-end" type="submit" value="Create">
        <a class="btn mybtn btn-danger text-white col-4 ms-2  d-flex justify-content-center" href="<?=ROOT?>/classes">
          Cancel
        </a>
      </form>
    </div>
  </div>


<?php $this->view('includes/footer'); ?>