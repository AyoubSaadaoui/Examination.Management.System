<?php $this->view('includes/header'); ?>
<?php $this->view('includes/navbar'); ?>

  <div class="container-fluid w-75 p-4 mx-auto shadow" >
  <?php $this->view('includes/crumbs', ['crumbs'=>$crumbs]); ?>

    <?php if($row) : ?>
    <div class="card-group justify-content-center">

      <form class="alert alert-danger" method="post">
        <h6 class="mt-2 text-center  ">Are you sure you want to delete?!</h6>

        <input disabled class="form-control mr-sm-2 mb-4 text-center" type="text" name="school" value="<?=get_var('school', $row[0]->school)?>" placeholder="School Name">
        <input class="btn btn-danger col-4 me-2 d-flex justify-content-center float-end" type="submit" value="Delete">
        <input type="hidden" name="id">
        <a class="btn mybtn btn-success text-white col-4 ms-2  d-flex justify-content-center" href="<?=ROOT?>/schools">
          Cancel
        </a>
      </form>
    </div>

    <?php else :?>

    <div style="text-align: center">
      <br>
      <br>
      <h3>that school was not found!</h3><br><br>
      <a class="btn  btn-danger text-white " href="<?=ROOT?>/schools">
        Cancel
      </a>
    </div>
    <?php endif ;?>

  </div>


<?php $this->view('includes/footer'); ?>