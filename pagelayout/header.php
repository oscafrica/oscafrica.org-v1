<nav class="navbar fixed-top navbar-light bg-faded" id="header">
  <div class="container">
    <a class="navbar-brand special-text" href="/">FOSS Africa</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="<?php if(isset($howto)){echo $howto;} ?> nav-item">
          <a class="nav-link" href="#">ABOUT</a>
        </li>
        <li class="<?php if(isset($about)){echo $about;} ?> nav-item">
          <a class="nav-link" href="#footer">CONTACT</a>
        </li>
      </ul>

      <ul class="navbar-nav my-2 my-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="https://facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
