<style>
    nav ul li a:hover{
        background-color: grey;
        color: white !important;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-light bg-light px-4 pb-4">
  <a class="navbar-brand " href="#">
    <img  style="width: 60px;" src="<?=ROOT?>/assets/logo.png" alt="logo">
    My School
  </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link active" href="#">DASHBOARD</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CLASSES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">TESTS</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          USER
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Profile</a>
          <a class="dropdown-item" href="#">Dashboard</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>