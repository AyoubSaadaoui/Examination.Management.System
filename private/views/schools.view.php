<?php $this->view('includes/header'); ?>
<?php $this->view('includes/navbar'); ?>

  <div class="container-fluid w-75 p-4 mx-auto shadow" >
  <?php $this->view('includes/crumbs', ['crumbs'=>$crumbs]); ?>
    <div class="card-group justify-content-center ">

    <h5>Schools</h5><br>
      <table class="table table-striped table-hover">
        <thead>
        <tr>
          <th></th>
          <th>School</th>
          <th>Created by</th>
          <th>Date</th>
          <th>
            <a href="<?=ROOT?>/schools/add">
             <button class="btn btn-sm btn-outline-success float-right"><i class="fa fa-plus">Add New</i></button>
            </a>
          </th>
        </tr>
        </thead>

      <?php if($rows):?>
        <tbody>
        <?php foreach($rows as $row):?>
          <tr>
            <th><button class="btn btn-sm btn-outline-primary">Details </Details><i class="fa fa-chevron-right"></i></button></th>
            <th class="font-weight-normal"><?=$row->school?></th>
            <th class="font-weight-normal"><?=$row->user->firstname?> <?=$row->user->lastname?></th>
            <th class="font-weight-normal"><?=get_date($row->date)?></th>
            <th class="float-right">

              <a href="<?=ROOT?>/schools/edit/<?=$row->id?>" style="text-decoration: none;">
                <button class="btn btn-sm btn-warning text-white"><i class="fa fa-edit"></i></button>
              </a>
              <a href="<?=ROOT?>/schools/delete/<?=$row->id?>" style="text-decoration: none;">
                <button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
              </a>
              <a href="<?=ROOT?>/switch_school/<?=$row->id?>" style="text-decoration: none;">
                <button class="btn btn-sm  btn-success">Switch<i class="fas fa-chevron-right"></i></button>
              </a>

            </th>
          </tr>
        <?php endforeach ;?>
        </tbody>
      <?php else :?>
        <h4 >No schools were found at this time</h4>
      <?php endif ;?>
      </table>
    </div>
  </div>


<?php $this->view('includes/footer'); ?>