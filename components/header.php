

<style>


.navbar{
     background: #0F2027;  
     background: -webkit-linear-gradient(to right, #2C5364, #203A43, #0F2027);  
     background: linear-gradient(to right, #2C5364, #203A43, #0F2027); 
     }
    
    .textWhite{
    color:white !important;
    }



</style>
<nav class="navbar navbar-expand-lg bg-body-tertiary text-white">
  <div class="container-fluid">
    <a class="navbar-brand textWhite" href="#">DevDiscuss</a>
    <button class="navbar-toggler textWhite" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon text-white"></span>
    </button>
    <div class="collapse navbar-collapse text-white" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active textWhite" aria-current="page" href="index.php">Feed</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="createPost.php">Create Post</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle textWhite" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Join Forum
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="developer.php">Developer</a></li>
            <li><a class="dropdown-item" href="designer.php">Designer</a></li>
            <li><a class="dropdown-item" href="#">Data Analyst</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="">Donate</a></li>
          </ul>
        </li>
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>