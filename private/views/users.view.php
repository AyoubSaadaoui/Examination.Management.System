<?php $this->view('includes/header'); ?>
<?php $this->view('includes/navbar'); ?>

  <div class="container-fluid w-75 p-4 mx-auto shadow" >
  <?php $this->view('includes/breadcrumb'); ?>
    <div class="card-group justify-content-left">
      <?php if($rows):?>
        <?php foreach($rows as $row):?>
          <div class="card m-2 shadow-sm" style="max-width: 14rem; min-width: 14rem;">
            <img src="<?=ASSETS?>/user_female.png" alt="famel" class="card-img-top" ">
            <div class="card-body">
              <h5 class="card-title"><?=$row->firstname?> <?=$row->lastname?></h5>
              <p class="card-text"><?=ucfirst(str_replace("_"," ",$row->rank))?></p>
              <a href="#" class="btn btn-primary">Profile</a>
            </div>
          </div>
        <?php endforeach ;?>
      <?php endif ;?>

    </div>
  </div>


<?php $this->view('includes/footer'); ?>