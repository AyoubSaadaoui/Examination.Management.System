<div class="card-group justify-content-center">
      <form method="post">
        <h5 class="mt-2 text-center">Add A Test</h5>
        <?php if(count($errors) > 0) :?>
            <div class="alert alert-warning alert-dismissible fade show p-2" role="alert">
                <strong>Error:</strong>
                <?php foreach($errors as $error) : ?>
                    <br><?=$error." !"?>
                <?php endforeach; ?>
                <span type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </span>
            </div>
        <?php endif; ?>
        <input class="text-center form-control mr-sm-2 mb-4" type="text" name="test" value="<?=get_var('test')?>" placeholder="Test Title">
        <textarea name="description" class="form-control" placeholder="Add a description for this test"><?=get_var('description')?></textarea><br>
        
        <input class="btn btn-primary col-4 me-2 d-flex justify-content-center float-end" type="submit" value="Create">
        <a class="btn mybtn btn-danger text-white col-4 ms-2  d-flex justify-content-center" href="<?=ROOT?>/single_class/<?=$row->class_id?>?tab=tests">
          Cancel
        <a>
      </form>
    </div>