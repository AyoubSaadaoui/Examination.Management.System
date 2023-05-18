<form method="post" class="form mx-auto" style="width:100%;max-width: 400px;">
    <h4>Add Lecturer</h4>
    <input class="form-control" autofocus type="text" name="name" placeholder="Lecturer Name"><br>
    <button class="btn btn-primary float-end" name="search">Search</button><br>
    <div class="clearfix"></div>
</form>

<div class="container-fluid">
        <?php if(isset($results) && $results):?>
            <?php foreach($results as $row):?>

                <?php include(views_path('user')) ?>

            <?php endforeach ;?>
        <?php else:?>

	 		<?php if(count($_POST) > 0):?>
	 			<center><hr><h4>No results were found</h4></center>
	 		<?php endif;?>

        <?php endif ;?>
</div>