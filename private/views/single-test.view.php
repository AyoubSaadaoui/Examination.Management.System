<?php $this->view('includes/header'); ?>
<?php $this->view('includes/navbar'); ?>

        <!-- style="width: 1000px;" -->
        <div class="container-fluid w-75 p-4 mx-auto shadow" >
        <?php $this->view('includes/crumbs', ['crumbs'=>$crumbs]); ?>

        <?php if($row) :?>
            <div class="row">
                <center><h4><?=esc(ucwords($row->test))?></h4></center>
                <table class="table table-hover table-striped table-porder">
                    <tr>
                        <th>Create By:</th><th class="font-weight-normal"><?=esc($row->user->firstname)?> <?=esc($row->user->lastname)?></th>
                        <th>Date Create:</th><th class="font-weight-normal"><?=esc(get_date($row->date))?></th>
						<td>
							<a href="<?=ROOT?>/single_class/<?=$row->class_id?>?tab=tests">
								<button class="btn btn-sm btn-primary"><i class="fa fa-chevron-right"></i>View class</button>
							</a>
						</td>
                    </tr>

					<?php $active = $row->disabled ? "No":"Yes";?>
					<tr><td><b>Active:</b> <?=$active?></td>
                    <td colspan="5"><b>Test Description:</b><br><?=esc($row->description)?></td></tr>
                </table>

            </div>

                <?php

                switch ($page_tab) {
                    case 'view':
                        // code...
                        include(views_path('test-tab-view'));

                        break;

                    case 'add-question':
                        // code...
                        include(views_path('test-tab-add-question'));

                        break;

                    case 'edit-question':
                        // code...
                        include(views_path('test-tab-edit-question'));

                        break;

                    case 'delete-question':
                        // code...
                        include(views_path('test-tab-delete-question'));

                        break;

                    case 'edit':
                        // code...
                        include(views_path('test-tab-edit'));

                        break;

                    case 'delete':
                        // code...
                        include(views_path('test-tab-delete'));

                        break;

                    default:
                        // code...
                        break;
		 			}


		 		?>



        <?php else :?>
            <h4 class="text-center">That test was not found!</h4>
        <?php endif ;?>
        </div>

<?php $this->view('includes/footer'); ?>