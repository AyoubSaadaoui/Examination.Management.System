<?php $this->view('includes/header'); ?>

        <div class="container-fluid ">
            <div class="p-4 mt-5 mx-auto shadow rounded" style="width: 100%; max-width: 340px">
                <h2 class="text-center">My School</h2>
                <img
                    class="d-block mx-auto rounded-circle border border-primary pb-3"
                    style="width: 100px;"
                    src="<?=ROOT?>/assets/logo.png"
                    alt="logo"
                >
                <h3>Add User</h3>
                <input class="form-control my-2"type="text" name="firstname" placeholder="Firstname" >
                <input class="form-control my-2"  type="text" name="lastname" placeholder="Lastname" >
                <input class="form-control my-2" type="email" name="email" placeholder="Email" >
                <select class="form-control my-2" name="" >
                    <option value="">--Select a Gender--</option>
                    <option value="">Male</option>
                    <option value="">Female</option>
                </select>
                <select class="form-control my-2" name="" >
                    <option value="">--Select a Rank--</option>
                    <option value="student">Student</option>
                    <option value="reception">Reception</option>
                    <option value="teacher">Teacher</option>
                    <option value="admin">Admin</option>
                    <option value="super_admin">Super Admin</option>
                </select>
                <input class="form-control my-2" type="password" name="password" placeholder="Password" >
                <input class="form-control my-2" type="password" name="password2" placeholder="Retype Password">
                <br>
                <button class="btn mybtn btn-success col-4 me-4 d-flex justify-content-center float-end">Add User</button>
                <button class="btn mybtn btn-danger text-white col-4 ms-4  d-flex justify-content-center ">Cancel</button>
            </div>
        </div>

<?php $this->view('includes/footer'); ?>