<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand" target="_blank" href="https://github.com/kaustubhk24/EasyURLs">EasyURLs</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php if(isset($index)){echo "active";}?>" aria-current="page" href="index.php">Manage Links</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if(isset($users)){echo "active";}?>"  href="users.php">Manage Users</a>
        </li>    
        <li class="nav-item">
          <a class="nav-link <?php if(isset($profile)){echo "active";}?>" href="profile.php">My Profile</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link <?php if(isset($api)){echo "active";}?>" href="api.php">API </a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">About EasyURLs</a>
        </li>
      </ul>
      <form class="d-flex text-white">
          Hello <?php  echo $_SESSION['username']; ?> &nbsp;<a href="../logout.php"> Logout?</a>
        </form>
    </div>
  </div>
</nav>