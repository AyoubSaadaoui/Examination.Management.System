<?php $this->view('includes/header'); ?>
<?php $this->view('includes/navbar'); ?>

        <!-- style="width: 1000px;" -->
        <div class="container-fluid w-75 p-4 mx-auto shadow" >
        <?php $this->view('includes/breadcrumb', ['crumbs'=>$crumbs]); ?>

        <?php if($row) :?>
            <div class="row">
                <div class="col-sm-5 col-md-3">
                    <img src="<?=get_image($row->image, $row->gender)?>" alt="<?=$row->gender?>"  class="d-block mx-auto border rounded-circle bg-light" style="width: 130px;">
                    <h5 class="text-center "><?=esc($row->firstname)?> <?=esc($row->lastname)?></h5>
                </div>
                <div class="col-sm-7 col-md-8 bg-light p-2 me-md-2">
                    <table class="table table-hover table-striped table-porder">
                        <tr><th>First Name:</th><th class="font-weight-normal"><?=esc($row->firstname)?></th></tr>
                        <tr><th>Last Name:</th><th class="font-weight-normal"><?=esc($row->lastname)?></th></tr>
                        <tr><th>Email:</th><th class="font-weight-normal"><?=esc($row->email)?></th></tr>
                        <tr><th>Gender:</th><th class="font-weight-normal"><?=esc($row->gender)?></th></tr>
                        <tr><th>Rank:</th><th class="font-weight-normal"><?=esc(ucwords(str_replace("_"," ", $row->rank)))?></th></tr>
                        <tr><th>Date Create:</th><th class="font-weight-normal"><?=esc(get_date($row->date))?></th></tr>
                    </table>
                </div>
            </div>
            <br>
            <div class="container-fluid">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active"  href="#">Basic Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Classes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Tests</a>
                    </li>
                </ul>

                <nav class="navbar navbar-light bg-light">
                    <form class="form-inline">
                        <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i>&nbsp</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="basic-addon1">
                        </div>
                    </form>
                </nav>
            </div>
        <?php else :?>
            <h4 class="text-center">That profile was not found!</h4>
        <?php endif ;?>
        </div>

<?php $this->view('includes/footer'); ?>