<div class="card-group justify-content-center">

<div class="table-responsive container-fluid p-0" >
	<table class="table table-striped table-hover border table-bordered">
		<tr>
			<th></th>
			<th>Class</th>
			<th>Test Name</th>
			<th >Student</th>
			<th>Date Submitted</th>
			<th>Marked by</th><th>Date Marked</th>
			<th>Answered</th>
			<th>Score</th>
			<th></th>
		</tr>
		<?php if(isset($test_rows) && $test_rows):?>

			<?php foreach ($test_rows as $test_row):?>

			 <tr>
			 	<td>
			 		<?php if(Auth::access('teacher')):?>
			 		<a href="<?=ROOT?>/marked_single/<?=$test_row->test_id?>/<?=$test_row->user->user_id?>">
			 			<button class="btn btn-sm btn-primary d-flex ">View  <i class="fa fa-chevron-right ps-1 pt-1"></i></button>
			 		</a>
			 		<?php endif;?>
			 	</td>
				<td><?= $class?></td>
			 	<td><?=$test_row->test_details->test?></td>
			 	<td class="col-md-2"><?=$test_row->user->firstname?> <?=$test_row->user->lastname?></td>
			 	<td><?=get_date($test_row->submitted_date)?></td>

			 	<td class="col-md-2">

			 		<?php
			 			$user = new User();
			 			$my_marker = $user->whereOne('user_id',$test_row->marked_by);
			 			if($my_marker){
			 				echo $my_marker->firstname . ' ' . $my_marker->lastname;
			 			}
			 		?>

			 	</td>
			 	<td><?=get_date($test_row->marked_date)?></td>

			 	<td>
			 		<?php
			 			$percentage = get_answer_percentage($test_row->test_id,$test_row->user_id);
			 		?>
 					<?=$percentage?>%
			 	</td>
			 	<td>
			 		<?= get_score_percentage($test_row->test_details->test_id,$test_row->user->user_id)?>%
			 	</td>
				<td>
			 		<?php if(can_take_test($test_row->test_id)):?>
			 		<a href="<?=ROOT?>/take_test/<?=$test_row->test_id?>">
			 		 <button class="btn btn-sm btn-primary">Take this test</button>
			 		</a>
			 		<?php endif;?>

			 	</td>

			 </tr>

 			<?php endforeach;?>
			<?php else:?>
				<tr><td colspan="9"><center>No tests were found at this time</center></td></tr>
			<?php endif;?>

	</table>
</div>
</div>