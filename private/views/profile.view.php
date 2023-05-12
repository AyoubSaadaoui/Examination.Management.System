<?php $this->view('includes/header'); ?>
<?php $this->view('includes/navbar'); ?>

        <!-- style="width: 1000px;" -->
        <div class="container-fluid w-75 p-4 mx-auto shadow" >
        <?php $this->view('includes/breadcrumb'); ?>
            <div class="row">
                <div class="col-sm-5 col-md-3">
                    <img src="<?=ASSETS?>/user_female.png" alt="famel" class="d-block mx-auto border rounded-circle bg-light" style="width: 130px;">
                    <h5 class="text-center ">Salma Alami</h5>
                </div>
                <div class="col-sm-7 col-md-8 bg-light p-2 me-md-2">
                    <table class="table table-hover table-striped table-porder">
                        <tr><th>First Name:</th><th>Salma</th></tr>
                        <tr><th>Last Name:</th><th>Alami</th></tr>
                        <tr><th>Gender:</th><th>Female</th></tr>
                    </table>
                </div>
            </div>
            <br>
            <div class="container-fluid">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link " href="#">Basic Info</a>
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
        </div>

<?php $this->view('includes/footer'); ?>