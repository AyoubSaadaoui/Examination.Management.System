<?php $this->view('includes/header'); ?>

    <form method="post">
        <div class="container-fluid ">
            <div class="p-4 mt-5 mx-auto shadow rounded" style="width: 100%; max-width: 340px">
                <h2 class="text-center">My School</h2>
                <img class="d-block mx-auto rounded-circle border border-primary pb-3" style="width: 100px;" src="<?=ROOT?>/assets/logo.png" alt="logo">
                <h3>Login</h3>

                <?php if(count($errors) > 0) :?>
                    <div class="alert alert-warning alert-dismissible fade show p-2" role="alert">
                        <strong>Holy guacamole!</strong>
                        <?php foreach($errors as $error) : ?>
                            <br><?=$error." !"?>
                        <?php endforeach; ?>
                        <span type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </span>
                    </div>
                <?php endif; ?>
                
                <input class="form-control mb-4" type="email" name="email" value="<?=get_var('email')?>"  placeholder="Email" autofocus >
                <input class="form-control" type="password" name="password" value="<?=get_var('password')?>"  placeholder="Password" autofocus>
                <br>
                <button class="btn mybtn btn-primary col-8 d-flex justify-content-center mx-5">Login</button>
            </div>
        </div>
    </form>


<?php $this->view('includes/footer'); ?>