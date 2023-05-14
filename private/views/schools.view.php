<?php $this->view('includes/header'); ?>
<?php $this->view('includes/navbar'); ?>

  <div class="container-fluid w-75 p-4 mx-auto shadow" >
  <?php $this->view('includes/breadcrumb'); ?>
    <div class="card-group justify-content-center">
      <?php if($rows):?>
        <?php foreach($rows as $row):?>

        <?php endforeach ;?>
      <?php else :?>
        <h4 >No schools were found at this time</h4>
      <?php endif ;?>

    </div>
  </div>


<?php $this->view('includes/footer'); ?>