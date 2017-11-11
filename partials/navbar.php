<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
  <a class="navbar-brand" href="/">Kishore</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php echo $page === 'home' ? 'active' : ''; ?>">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item <?php echo $page === 'about' ? 'active' : ''; ?>">
        <a class="nav-link" href="/about.php">About</a>
      </li>
      <li class="nav-item <?php echo $page === 'contact' ? 'active' : ''; ?>">
        <a class="nav-link" href="/contact.php">Contact</a>
      </li>
      
    </ul>
  </div>
</div>
</nav>