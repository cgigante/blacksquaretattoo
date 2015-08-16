
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" rel="home" href="index.php" title="Black Square Tattoo">
            BSQT
            <!-- <img style="max-width:200px; margin-top: 1px;" src="/img/bsqt_logo.png"> -->
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li <?php if ($page=="Welcome") : ?> class="active" <?php endif; ?> ><a class="navA" href="index.php">HOME<span class="sr-only">(current)</span></a></li>
            <li 
              <?php if ($page=="LOUIS BRENGARD") : ?> class="active" <?php endif; ?>
              <?php if ($page=="NOEL CHANYUNGCO") : ?> class="active" <?php endif; ?>
              <?php if ($page=="RUKUS") : ?> class="active" <?php endif; ?>
              <?php if ($page=="MEIA") : ?> class="active" <?php endif; ?> 
              <?php if ($page=="KNARLY GAV") : ?> class="active" <?php endif; ?>
            class="dropdown">
              <a href="#" class="dropdown-toggle navA" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ARTISTS<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="louis.php">LOUIS BRENGARD</a></li>
                <li><a href="noel.php">NOEL CHANYUNGCO</a></li>
                <li><a href="rukus.php">RUKUS</a></li>
                <li><a href="meia.php">MEIA</a></li>
                <li><a href="knarlygav.php">KNARLY GAV</a></li>
              </ul>
            </li>
            <li <?php if ($page=="Contact Us") : ?> class="active" <?php endif; ?> ><a class="navA" href="contact.php">CONTACT</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>