<?php $this->view('includes/header'); ?>

        <div class="container-fluid ">
            <form action="" method="post">
            <div class="p-4 mt-5 mx-auto shadow rounded" style="width: 100%; max-width: 340px">
                <h2 class="text-center">My School</h2>
                <img
                    class="d-block mx-auto rounded-circle border border-primary pb-3"
                    style="width: 100px;"
                    src="<?=ROOT?>/assets/logo.png"
                    alt="logo"
                >
                <h3>Add User</h3>
                <?php if(count($errors) > 0) :?>
                    <div class="alert alert-warning alert-dismissible fade show p-2" role="alert">
                        <strong>Errors:</strong>
                        <?php foreach($errors as $error) : ?>
                            <br><?=$error." !"?>
                        <?php endforeach; ?>
                        <span type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </span>
                    </div>
                <?php endif; ?>
                <input class="form-control my-2" value="<?=get_var('firstname')?>" type="text" name="firstname" placeholder="Firstname" >
                <input class="form-control my-2" value="<?=get_var('lastname')?>" type="text" name="lastname" placeholder="Lastname" >
                <input class="form-control my-2" value="<?=get_var('email')?>" type="email" name="email" placeholder="Email" >
                <select class="form-control my-2" name="gender" >
                    <option <?=get_selected('gender', '')?> value="">--Select a Gender--</option>
                    <option <?=get_selected('gender', 'male')?> value="male">Male</option>
                    <option <?=get_selected('gender', 'female')?> value="female">Female</option>
                </select>
                <select class="form-control my-2" name="rank" >

                    <option <?=get_selected('rank', '')?> value="">--Select a Rank--</option>
                    <option <?=get_selected('rank', 'student')?> value="student">Student</option>
                    <option <?=get_selected('rank', 'reception')?> value="reception">Reception</option>
                    <option <?=get_selected('rank', 'teacher')?> value="teacher">Teacher</option>
                    <option <?=get_selected('rank', 'admin')?> value="admin">Admin</option>
                    <?php if(Auth::getRank() == 'super_admin'): ?>
                    <option <?=get_selected('rank', 'super_admin')?> value="super_admin">Super Admin</option>
                    <?php endif ;?>

                </select>
                <input class="form-control my-2" value="<?=get_var('password')?>" type="password" name="password" placeholder="Password" >
                <input class="form-control my-2" value="<?=get_var('password2')?>" type="password" name="password2" placeholder="Retype Password">
                <br>
                <button class="btn mybtn btn-success col-4 me-4 d-flex justify-content-center float-end">Add User</button>
                <a style="text-decoration: none;" href="<?=ROOT?>/users">
                    <button type="button" class="btn btn-danger text-white col-4 ms-4  d-flex justify-content-center ">Cancel</button>
                </a>

            </div>
            </form>
        </div>

<?php $this->view('includes/footer'); ?>