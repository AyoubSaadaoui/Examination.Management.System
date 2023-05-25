<center><h5>Add Subjective Question</h5></center>

<form method="post" enctype="multipart/form-data">

    <?php if(count($errors) > 0):?>
		<div class="alert alert-warning alert-dismissible fade show p-1" role="alert">
		  <strong>Errors:</strong>
		   <?php foreach($errors as $error):?>
		  	<br><?=$error?>
		  <?php endforeach;?>
		  <span  type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </span>
		</div>
    <?php endif;?>
    
    <label>Question:</label>
    <textarea autofocus class="form-control" name="question" placeholder="Type your question here"><?=get_var('question')?></textarea>
    <div class="input-group mb-3 pt-4">
	  <label class="input-group-text" for="inputGroupFile01"><i class="fa fa-image"></i>image(optional)</label>
	  <input type="file" name="image" class="form-control" id="inputGroupFile01">
	</div>

    <a href="<?=ROOT?>/single_test/<?=$row->test_id?>">
		<button type="button" class="btn btn-primary"><i class="fa fa-chevron-left"></i>Back</button>
	</a>
    <button class="btn btn-danger float-end">Save Question</button>
</form>