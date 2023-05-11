<?php $this->view('includes/header'); ?>

        <div class="container-fluid ">
            <div class="p-4 mt-5 mx-auto shadow rounded" style="width: 100%; max-width: 340px">
                <h2 class="text-center">My School</h2>
                <img class="d-block mx-auto rounded-circle border border-primary pb-3" style="width: 100px;" src="<?=ROOT?>/assets/logo.png" alt="logo">
                <h3>Login</h3>
                <input class="form-control mb-4" type="email" name="email" placeholder="Email" autofocus >
                <input class="form-control" type="password" name="password" placeholder="Password" autofocus>
                <br>
                <button class="btn mybtn btn-primary col-8 d-flex justify-content-center mx-5">Login</button>
            </div>
        </div>

<?php $this->view('includes/footer'); ?>