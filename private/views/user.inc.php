<div class="card m-2 shadow-sm" style="max-width: 14rem; min-width: 14rem;">
    <img src="<?=get_image($row->image, $row->gender)?>" alt="<?=$row->gender?>" class="card-img-top" ">
    <div class="card-body">
        <h5 class="card-title"><?=$row->firstname?> <?=$row->lastname?></h5>
        <p class="card-text"><?=ucwords(str_replace("_"," ",$row->rank))?></p>
        <a href="<?=ROOT?>/profile/<?=$row->user_id?>" class="btn btn-primary">Profile</a>
    </div>
</div>