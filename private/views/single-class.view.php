<?php $this->view('includes/header'); ?>
<?php $this->view('includes/navbar'); ?>

        <!-- style="width: 1000px;" -->
        <div class="container-fluid w-75 p-4 mx-auto shadow" >
        <?php $this->view('includes/breadcrumb', ['crumbs'=>$crumbs]); ?>

        <?php if($row) :?>
            <div class="row">
                <center><h4><?=esc(ucwords($row->class))?></h4></center>
                <table class="table table-hover table-striped table-porder">
                    <tr><th>Class Name:</th><th class="font-weight-normal"><?=esc($row->class)?></th></tr>
                    <tr><th>Create By:</th><th class="font-weight-normal"><?=esc($row->user->firstname)?> <?=esc($row->user->lastname)?></th></tr>
                    <tr><th>Date Create:</th><th class="font-weight-normal"><?=esc(get_date($row->date))?></th></tr>
                </table>

            </div>
            <br>

                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link <?=$page_tab=='lecturers'?'active':'';?> " href="<?=ROOT?>/single_class/<?=$row->class_id?>?tab=lecturers">Lecturers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?=$page_tab=='students'?'active':'';?> " href="<?=ROOT?>/single_class/<?=$row->class_id?>?tab=students">Students</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?=$page_tab=='tests'?'active':'';?> " href="<?=ROOT?>/single_class/<?=$row->class_id?>?tab=tests">Tests</a>
                    </li>
                </ul>
                <?php

                switch ($page_tab) {
                    case 'lecturers':
                        // code...
                        include(views_path('class-tab-lecturers'));
                        break;

                    case 'students':
                        // code...
                        include(views_path('class-tab-students'));
                        break;

                    case 'tests':
                        // code...
                        include(views_path('class-tab-tests'));

                        break;
                    case 'lecturer-add':
                        // code...
                        include(views_path('class-tab-lecturers-add'));

                        break;
                    // case 'lecturer-remove':
                    //     // code...
                    //     include(views_path('class-tab-lecturers-remove'));

                    //     break;

                    case 'students-add':
                        // code...
                        include(views_path('class-tab-students-add'));

                        break;
                    case 'tests-add':
                        // code...
                        include(views_path('class-tab-tests-add'));

                        break;

                    default:
                        // code...
                        break;
		 			}


		 		?>



        <?php else :?>
            <h4 class="text-center">That class was not found!</h4>
        <?php endif ;?>
        </div>

<?php $this->view('includes/footer'); ?>