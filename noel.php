<?php
  $page = "NOEL CHANYUNGCO";
?>

<!DOCTYPE html>
<html lang="en">
  <?php include("_head.php") ?>

  <body>
    <?php include( "_navigation.php" ) ?>

    <div class="container artistPage">
      
      <img src="img/bsqt_logo.png" class="img-responsive" id="artistImageLogo4">
      
      <div class="artist row col-md-12">
        
        <h1>
          <span class="artistNameToggle"><a href="louis.php"><i class="glyphicon glyphicon-menu-left"></i></a></span>
          <?php echo $page; ?>
          <span class="artistNameToggle"><a href="rukus.php"><i class="glyphicon glyphicon-menu-right"></i></a></span>
        </h1>
        
        <div class="questionsAppointmentsDiv">
        	<p>
            <i class="fa fa-envelope-o fa-fw"></i> Questions/Appointments: <a href="mailto:nmctattoo@gmail.com">nmctattoo@gmail.com</a>
            <br>
            <i class="fa fa-instagram fa-fw"></i> Instagram: <a href="http://www.instagram.com/nolc" target="_blank">@NOLC</a>
          </p>
      	</div>

      </div>

      <div class="col-md-12">
        <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" style="display: none;" data-use-bootstrap-modal="false">
          <!-- The container for the modal slides -->
          <div class="slides"></div>
          <!-- Controls for the borderless lightbox -->
          <h3 class="title"></h3>
          <a class="prev">‹</a>
          <a class="next">›</a>
          <a class="close">×</a>
          <a class="play-pause"></a>
          <ol class="indicator"></ol>
          <!-- The modal dialog, which will be used to wrap the lightbox content -->
          <div class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" aria-hidden="true">&times;</button>
                  <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default pull-left prev">
                      <i class="glyphicon glyphicon-chevron-left"></i>
                      Previous
                  </button>
                  <button type="button" class="btn btn-primary next">
                      Next
                      <i class="glyphicon glyphicon-chevron-right"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        
        <div class="artistPhotos">
          <!-- Photos - Row 1 -->
          <a href="img/artists/noel/1.jpg" title="<?php echo $page; ?>" data-gallery>
              <img class="thumbnailPhoto" src="img/artists/noel/thumbnails/1.jpg" alt="<?php echo $page; ?>">
          </a>

          <a href="img/artists/noel/2.jpg" title="<?php echo $page; ?>" data-gallery>
              <img class="thumbnailPhoto" src="img/artists/noel/thumbnails/2.jpg" alt="<?php echo $page; ?>">
          </a>

          <a href="img/artists/noel/3.jpg" title="<?php echo $page; ?>" data-gallery>
              <img class="thumbnailPhoto" src="img/artists/noel/thumbnails/3.jpg" alt="<?php echo $page; ?>">
          </a>

          <a href="img/artists/noel/4.jpg" title="<?php echo $page; ?>" data-gallery>
              <img class="thumbnailPhoto" src="img/artists/noel/thumbnails/4.jpg" alt="<?php echo $page; ?>">
          </a>


          <!-- Photos - Row 2 -->
          <a href="img/artists/noel/5.jpg" title="<?php echo $page; ?>" data-gallery>
              <img class="thumbnailPhoto" src="img/artists/noel/thumbnails/5.jpg" alt="<?php echo $page; ?>">
          </a>

          <a href="img/artists/noel/6.jpg" title="<?php echo $page; ?>" data-gallery>
              <img class="thumbnailPhoto" src="img/artists/noel/thumbnails/6.jpg" alt="<?php echo $page; ?>">
          </a>

          <a href="img/artists/noel/7.jpg" title="<?php echo $page; ?>" data-gallery>
              <img class="thumbnailPhoto" src="img/artists/noel/thumbnails/7.jpg" alt="<?php echo $page; ?>">
          </a>

          <a href="img/artists/noel/8.jpg" title="<?php echo $page; ?>" data-gallery>
              <img class="thumbnailPhoto" src="img/artists/noel/thumbnails/8.jpg" alt="<?php echo $page; ?>">
          </a>



          <!-- Photos - Row 3 -->
          <a href="img/artists/noel/9.jpg" title="<?php echo $page; ?>" data-gallery>
              <img class="thumbnailPhoto" src="img/artists/noel/thumbnails/9.jpg" alt="<?php echo $page; ?>">
          </a>

          <a href="img/artists/noel/10.jpg" title="<?php echo $page; ?>" data-gallery>
              <img class="thumbnailPhoto" src="img/artists/noel/thumbnails/10.jpg" alt="<?php echo $page; ?>">
          </a>

          <a href="img/artists/noel/11.jpg" title="<?php echo $page; ?>" data-gallery>
              <img class="thumbnailPhoto" src="img/artists/noel/thumbnails/11.jpg" alt="<?php echo $page; ?>">
          </a>

          <a href="img/artists/noel/12.jpg" title="<?php echo $page; ?>" data-gallery>
              <img class="thumbnailPhoto" src="img/artists/noel/thumbnails/12.jpg" alt="<?php echo $page; ?>">
          </a>

        </div>
      </div>

    </div><!-- End Container -->

<!-- Image Gallery JS files -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/jquery.blueimp-gallery.min.js"></script>


	  <!-- Footer is placed outside of the wrapper and container and just before the end BODY tag 
	  so that it is flush with the bottom of the viewfinder -->
	  <?php include("_footer.php") ?>		
  </body>

</html>