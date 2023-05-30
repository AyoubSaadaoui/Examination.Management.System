<style>

    nav ul li a:hover{
        wisth: 110px;
        text-align: center;
        border-left: solid thin #eee;
        /* border-right: solid thin #fff; */
    }
    nav ul li a:hover{
        background-color: black;

    }
    .logo{
      font-family: Rubik, sans-serif;
      font-size: 26px;
      font-family: Spectral, serif;

    }
    
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light px-4 pb-4 navbar-dark bg-dark">
  <a style="height: 40px;" class="navbar-brand schadow d-flex" href="<?=ROOT?>">
    <img  style="width: 60px;" class="my-auto me-1  rounded-circle bg-white py-1" src="<?=ROOT?>/assets/logo.png" alt="logo">
    <p class="logo text-warning pe-2 text-white pt-1"><?=Auth::getSchool_name()?></p>
  </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNavDropdown">
    <ul class="navbar-nav pt-3">

      <li class="nav-item">
        <a class="nav-link  <?=($this->controller_name() == 'Home') ? ' active ':''?>  " href="<?=ROOT?>">DASHBOARD</a>
      </li>

      <?php if(Auth::access('super_admin')):?>
        <li class="nav-item">
          <a class="nav-link <?=($this->controller_name() == 'Schools') ? ' active ':''?> " href="<?=ROOT?>/schools">SCHOOLS</a>
        </li>
      <?php endif;?>

      <?php if(Auth::access('admin')):?>
        <li class="nav-item">
          <a class="nav-link <?=($this->controller_name() == 'Users') ? ' active ':''?> " href="<?=ROOT?>/users">STAFF</a>
        </li>
      <?php endif;?>

      <li class="nav-item">
        <a class="nav-link <?=($this->controller_name() == 'Classes') ? ' active ':''?> " href="<?=ROOT?>/classes">CLASSES</a>
      </li>

      <?php if(Auth::access('reception')):?>
        <li class="nav-item">
          <a class="nav-link <?=($this->controller_name() == 'Students') ? ' active ':''?> " href="<?=ROOT?>/students">STUDENTS</a>
        </li>
      <?php endif;?>

      <li class="nav-item">
        <a class="nav-link <?=($this->controller_name() == 'Tests') ? ' active ':''?> " href="<?=ROOT?>/tests">TESTS</a>
      </li>

      <?php if(Auth::access('teacher')):?>
         <li class="nav-item" style="position: relative;">
          <a class="nav-link <?=($this->controller_name() == 'To_mark') ? ' active ':''?>   " href="<?=ROOT?>/to_mark">TO MARK
            <?php
              $to_mark_count = (new Tests_model())->get_to_mark_count();
            ?>
            <?php if($to_mark_count):?>
              <span class="badge bg-danger text-white" style="position: absolute;top:0px;right:0px"><?=$to_mark_count?></span>
            <?php endif;?>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link <?=($this->controller_name() == 'Marked') ? ' active ':''?>  "href="<?=ROOT?>/marked">MARKED</a>
        </li>
      <?php endif;?>
    </ul>
    <ul class="navbar-nav ms-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?=Auth::getFirstname()?>
        </a>
        <div class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="<?=ROOT?>/profile">Profile</a>
          <a class="dropdown-item" href="<?=ROOT?>">Dashboard</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?=ROOT?>/logout">Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>