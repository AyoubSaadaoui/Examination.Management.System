<?php
	 	$image = get_image($row->image,$row->gender);
	 ?>
<div class="card m-2 shadow bg-muted" style="max-width: 12rem;min-width: 12rem; background-color: url("https://images.unsplash.com/photo-1511207538754-e8555f2bc187?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=88672068827eaeeab540f584b883cc66&auto=format&fit=crop&w=1164&q=80") !important;">
	  <img src="<?=$image?>" class="  rounded-circle card-img-top w-75 d-block mx-auto mt-1 pt-1  border border-primary rounded-circle" alt="Card image cap">
  <div class="card-body">
    <center><h5 class="card-title"><?=$row->firstname?> <?=$row->lastname?></h5></center>
    <center><p class="card-text mb-1"><?=str_replace("_", " ", $row->rank)?></p></center>

    <div class="d-flex justify-content-center mb-2">
      <?php if(Auth::access('teacher') || Auth::i_own_content($row)):?>
        <a href="<?=ROOT?>/profile/<?=$row->user_id?>" class="btn btn-outline-primary mt-2">Profile</a>
      <?php endif;?>

      <?php if(isset($_GET['select'])):?>
        <button name="selected" value="<?=$row->user_id?>" class="float-end btn btn-outline-success ms-1 mt-2 ">Select</button>
      <?php endif;?>
    </div>
  </div>
</div>