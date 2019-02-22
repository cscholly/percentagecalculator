<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Percentage Calculator</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li <?php if ($page=='index.php' ) { ?>class="nav-item active"
      <?php } ?>><a class="nav-link" href="index.php">Try it!</a></li>
      <li <?php if ($page=='percentage-calculator-info.php' ) { ?>class="nav-item active"
      <?php } ?>><a class="nav-link" href="percentage-calculator-info.php">Percentage Calculator Info</a></li>
    </ul>
    <span class="navbar-text">
      Easily Calculate the % of any amount - it's quick!
    </span>
  </div>
</nav>
