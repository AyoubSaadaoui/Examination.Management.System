<style>

    .navb{

      background-color: #0a1457 !important;
      padding: 0rem 1rem;

    }
    .dropmenu:hover{

      background-color: #0a1457 !important;
      color: white;
      font-weight: 500;

    }

    nav ul li a:hover{
        wisth: 110px;
        text-align: center;
        font-weight: 500;

    }

    .logo{
      font-family: Rubik, sans-serif;
      font-size: 26px;
      font-family: Spectral, serif;

    }

    .hoverable{
      display:inline-block !important;
      backface-visibility: hidden !important;
      vertical-align: middle !important;
      position:relative !important;
      box-shadow: 0 0 1px rgba(0,0,0,0) !important;
      tranform: translateZ(0) !important;
      transition-duration: .3s !important;
      transition-property:transform !important;
    }

    .hoverable:before{
      position:absolute !important;
      pointer-events: none !important;
      z-index:-1 !important;
      content: '' !important;
      top: 100% !important;
      left: 5% !important;
      height:10px !important;
      width:90% !important;
      opacity:0 !important;
      background: -webkit-radial-gradient(center, ellipse, rgba(255, 255, 255, 0.35) 0%, rgba(255, 255, 255, 0) 80%) !important;
      background: radial-gradient(ellipse at center, rgba(255, 255, 255, 0.35) 0%, rgba(255, 255, 255, 0) 80%) !important;
      /* W3C */
      transition-duration: 0.3s !important;
      transition-property: transform, opacity !important;
    }

    .hoverable:hover, .hoverable:active, .hoverable:focus{
      transform: translateY(-5px) !important;
    }
    .hoverable:hover:before, .hoverable:active:before, .hoverable:focus:before{
      opacity: 1 !important;
      transform: translateY(-5px) !important;
    }



    @keyframes bounce-animation {
      16.65% {
        -webkit-transform: translateY(8px) !important;
        transform: translateY(8px) !important;
      }

      33.3% {
        -webkit-transform: translateY(-6px) !important;
        transform: translateY(-6px) !important;
      }

      49.95% {
        -webkit-transform: translateY(4px) !important;
        transform: translateY(4px) !important;
      }

      66.6% {
        -webkit-transform: translateY(-2px) !important;
        transform: translateY(-2px) !important;
      }

      83.25% {
        -webkit-transform: translateY(1px) !important;
        transform: translateY(1px) !important;
      }

      100% {
        -webkit-transform: translateY(0) !important;
        transform: translateY(0) !important;
      }
    }

    .bounce {
      animation-name: bounce-animation !important;
      animation-duration: 2s !important;
    }


</style>
<nav class="navb navbar navbar-expand-lg navbar-light bg-light px-4 pb-4 navbar-dark  sticky-top shadow">
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
        <a id="len1" class="hoverable nav-link  <?=($this->controller_name() == 'Home') ? ' active ':''?>  " href="<?=ROOT?>">DASHBOARD</a>
      </li>

      <?php if(Auth::access('super_admin')):?>
        <li class="nav-item">
          <a id="len2" class="hoverable nav-link <?=($this->controller_name() == 'Schools') ? ' active ':''?> " href="<?=ROOT?>/schools">SCHOOLS</a>
        </li>
      <?php endif;?>

      <?php if(Auth::access('admin')):?>
        <li class="nav-item">
          <a id="len3" class="hoverable nav-link <?=($this->controller_name() == 'Users') ? ' active ':''?> " href="<?=ROOT?>/users">STAFF</a>
        </li>
      <?php endif;?>

      <li class="nav-item">
        <a id="len4" class="hoverable nav-link <?=($this->controller_name() == 'Classes') ? ' active ':''?> " href="<?=ROOT?>/classes">CLASSES</a>
      </li>

      <?php if(Auth::access('reception')):?>
        <li class="nav-item">
          <a id="len5" class="hoverable nav-link <?=($this->controller_name() == 'Students') ? ' active ':''?> " href="<?=ROOT?>/students">STUDENTS</a>
        </li>
      <?php endif;?>

      <?php if(Auth::getRank() != "reception" && Auth::getRank() != "super_admin"):?>
      <li class="nav-item"  style="position: relative;">
        <a id="len6" class="hoverable nav-link <?=($this->controller_name() == 'Tests') ? ' active ':''?> " href="<?=ROOT?>/tests"> TESTS


        <?php
          $unsubmitted_count = get_unsubmitted_tests();
        ?>
        <?php if($unsubmitted_count):?>
          <span class="badge bg-danger text-white" style="position: absolute;top:0px;right:0px"><?=$unsubmitted_count?></span>
        <?php endif;?>

        </a>
      </li>
      <?php endif;?>
      <?php if(Auth::access('teacher') && Auth::getRank() != "super_admin"):?>
         <li class="nav-item" style="position: relative;">
          <a id="len7" class="hoverable nav-link <?=($this->controller_name() == 'To_mark') ? ' active ':''?>   " href="<?=ROOT?>/to_mark">TO MARK
            <?php
              $to_mark_count = (new Tests_model())->get_to_mark_count();
            ?>
            <?php if($to_mark_count):?>
              <span class="badge bg-danger text-white" style="position: absolute;top:0px;right:0px"><?=$to_mark_count?></span>
            <?php endif;?>
          </a>
        </li>

        <li class="nav-item">
          <a id="len8" class="hoverable nav-link <?=($this->controller_name() == 'Marked') ? ' active ':''?>  "href="<?=ROOT?>/marked">MARKED</a>
        </li>
      <?php endif;?>
    </ul>
    <ul class="navbar-nav ms-auto ">
      <li class="nav-item dropdown py-auto">
        <a id="len9" class="hoverable nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <?php if(isset($_SESSION['USER'])):?>
           <img src="<?=get_image($_SESSION['USER']->image, $_SESSION['USER']->gender)?>" width="40" height="40" class="rounded-circle">
          <?php endif;?>
          <?=Auth::getFirstname()?>
        </a>
        <div class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdownMenuLink">
          <a class="dropmenu dropdown-item" href="<?=ROOT?>/profile">Profile</a>
          <a class="dropmenu dropdown-item" href="<?=ROOT?>">Dashboard</a>
          <div classdropmenu ="dropdown-divider"></div>
          <a class="dropmenu dropdown-item" href="<?=ROOT?>/logout">Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>