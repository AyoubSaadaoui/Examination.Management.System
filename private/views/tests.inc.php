<div class="card-group justify-content-center">
<div class="table-responsive container-fluid p-0" >

	<table class="table table-striped table-hover">
		<tr>
			<th></th>
			<th>Test Name</th>
			<th>Created by</th>
			<th>Active</th>
			<th>Date</th>
			<?php if($_SESSION['USER']->rank != 'teacher'):?>
			<th>Answered</th>
			<th></th>
			<?php endif;?>
		</tr>

		<?php if(isset($test_rows) && $test_rows):?>

			<?php foreach ($test_rows as $test_row):?>

			 <tr >
			 	<td>
				 	<?php if(Auth::access('teacher')):?>
						<a href="<?=ROOT?>/single_test/<?=$test_row->test_id?>">
							<button class="btn btn-sm btn-primary"><i class="fa fa-chevron-right"></i></button>
						</a>
					<?php endif;?>
			 	</td>
			 	<?php $active = $test_row->disabled ? "No":"Yes";?>
			 	<td><?=$test_row->test?></td><td><?=$test_row->user->firstname?> <?=$test_row->user->lastname?></td><td><?=$active?></td><td><?=get_date($test_row->date)?></td>

				<?php if($_SESSION['USER']->rank != 'teacher'):?>
					<td>

							<?php
								$myid = get_class($this) == "Profile" ? $row->user_id : Auth::getUser_id();
								$percentage = get_answer_percentage($test_row->test_id,$myid);
							?>
							<?=$percentage?>%

					</td>
					<td>
						<?php if(can_take_test($test_row->test_id)):?>
						<a href="<?=ROOT?>/take_test/<?=$test_row->test_id?>">
						<button class="btn btn-sm btn-primary">Take this test</button>
						</a>
						<?php endif;?>

					</td>
				<?php endif;?>
			 </tr>

 			<?php endforeach;?>
			<?php else:?>
				<tr><td colspan="10"><center>No tests were found at this time</center></td></tr>
			<?php endif;?>

	</table>
</div>
</div>