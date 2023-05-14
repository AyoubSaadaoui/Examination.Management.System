<?php $this->view('includes/header'); ?>
<?php $this->view('includes/navbar'); ?>

  <div class="container-fluid w-75 p-4 mx-auto shadow" >
  <?php $this->view('includes/breadcrumb'); ?>
    <div class="card-group justify-content-center">
      <table class="table table-striped table-hover">
        <tr>
          <th>School</th>
          <th>Created by</th>
          <th>Date</th>
          <th>
            <a href="<?=ROOT?>/schools/add">
             <button class="btn btn-sm btn-primary"><i class="fa fa-plus">Add New</i></button>
            </a>
          </th>
        </tr>

      <?php if($rows):?>
        <?php foreach($rows as $row):?>
          <tr>
            <th><?=$row->school?></th>
            <th><?=$row->user_id?></th>
            <th><?=$row->date?></th>
            <th>
              <button class="btn btn-sm btn-warning text-white"><i class="fa fa-edit"></i></button>
              <button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
            </th>
          </tr>
        <?php endforeach ;?>
      <?php else :?>
        <h4 >No schools were found at this time</h4>
      <?php endif ;?>
      </table>
    </div>
  </div>


<?php $this->view('includes/footer'); ?>