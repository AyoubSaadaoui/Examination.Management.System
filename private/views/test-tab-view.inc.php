<nav class="navbar">
	<center>
		<h5>Test Questions</h5>
		<p><b>Total Questions:</b></p>
	</center>
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="fa fa-bars"></i>Add
  </button>
  <ul class="dropdown-menu  dropdown-menu-end">
    <li><a class="dropdown-item addquestion" href="<?=ROOT?>/single_test/addsubjective/<?=$row->test_id?>">
    	Add Multiple choice Question</a>
	</li>
    <li><a class="dropdown-item addquestion" href="<?=ROOT?>/single_test/addsubjective/<?=$row->test_id?>">
    	Add Objective Question</a>
	</li>
    <li><hr class="dropdown-divider "></li>
    <li><a class="dropdown-item addquestion" href="<?=ROOT?>/single_test/addsubjective/<?=$row->test_id?>">
    	Add Subjective Question</a>
	</li>
  </ul>
</div>
</nav>

<hr>

