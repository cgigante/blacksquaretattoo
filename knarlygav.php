<?php
  $page = "KNARLY GAV";
?>

<!DOCTYPE html>
<html lang="en">
  <?php include("_head.php") ?>

  <body>
	<?php include( "_navigation.php" ) ?>
	  	

    <div class="container artistPage animated fadeIn">
      
      <img src="img/bsqt_logo.png" class="img-responsive" id="artistImageLogo3">

        


      <div class="artist row col-md-12 animated fadeIn">
        
        <h1>
          <span class="artistNameToggle animated infinite pulse"><a href="meia.php"><i class="glyphicon glyphicon-menu-left"></i></a></span>
          <?php echo $page; ?>
          <span class="artistNameToggle animated infinite pulse"><a href="louis.php"><i class="glyphicon glyphicon-menu-right"></i></a></span>
        </h1>
        
        <div class="questionsAppointmentsDiv">        
        	<p>
            <i class="fa fa-envelope-o fa-fw"></i> Questions/Appointments: <a href="mailto:Gavan55@gmail.com">Gavan55@gmail.com</a>
            <br>
            <i class="fa fa-instagram fa-fw"></i> Instagram: <a href="http://www.instagram.com/KnarlyGav" target="_blank">@KnarlyGav</a>
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

        
        <div class="artistPhotos animated fadeIn">

            <a href="img/artists/knarlygav/1.jpg" title="<?php echo $page; ?>" data-gallery>
                <img class="thumbnailPhoto" src="img/artists/knarlygav/thumbnails/1.jpg" alt="<?php echo $page; ?>">
            </a>

            <a href="img/artists/knarlygav/2.jpg" title="<?php echo $page; ?>" data-gallery>
                <img class="thumbnailPhoto" src="img/artists/knarlygav/thumbnails/2.jpg" alt="<?php echo $page; ?>">
            </a>

            <a href="img/artists/knarlygav/3.jpg" title="<?php echo $page; ?>" data-gallery>
                <img class="thumbnailPhoto" src="img/artists/knarlygav/thumbnails/3.jpg" alt="<?php echo $page; ?>">
            </a>


            <a href="img/artists/knarlygav/5.jpg" title="<?php echo $page; ?>" data-gallery>
                <img class="thumbnailPhoto" src="img/artists/knarlygav/thumbnails/5.jpg" alt="<?php echo $page; ?>">
            </a>

            <a href="img/artists/knarlygav/6.jpg" title="<?php echo $page; ?>" data-gallery>
                <img class="thumbnailPhoto" src="img/artists/knarlygav/thumbnails/6.jpg" alt="<?php echo $page; ?>">
            </a>

            <a href="img/artists/knarlygav/7.jpg" title="<?php echo $page; ?>" data-gallery>
                <img class="thumbnailPhoto" src="img/artists/knarlygav/thumbnails/7.jpg" alt="<?php echo $page; ?>">
            </a>



            <a href="img/artists/knarlygav/9.jpg" title="<?php echo $page; ?>" data-gallery>
                <img class="thumbnailPhoto" src="img/artists/knarlygav/thumbnails/9.jpg" alt="<?php echo $page; ?>">
            </a>

            <a href="img/artists/knarlygav/10.jpg" title="<?php echo $page; ?>" data-gallery>
                <img class="thumbnailPhoto" src="img/artists/knarlygav/thumbnails/10.jpg" alt="<?php echo $page; ?>">
            </a>

            <a href="img/artists/knarlygav/11.jpg" title="<?php echo $page; ?>" data-gallery>
                <img class="thumbnailPhoto" src="img/artists/knarlygav/thumbnails/11.jpg" alt="<?php echo $page; ?>">
            </a>


            <a href="img/artists/knarlygav/4.jpg" title="<?php echo $page; ?>" data-gallery>
                <img class="thumbnailPhoto" src="img/artists/knarlygav/thumbnails/4.jpg" alt="<?php echo $page; ?>">
            </a>
            <a href="img/artists/knarlygav/8.jpg" title="<?php echo $page; ?>" data-gallery>
                <img class="thumbnailPhoto" src="img/artists/knarlygav/thumbnails/8.jpg" alt="<?php echo $page; ?>">
            </a>   
            <a href="img/artists/knarlygav/12.jpg" title="<?php echo $page; ?>" data-gallery>
                <img class="thumbnailPhoto" src="img/artists/knarlygav/thumbnails/12.jpg" alt="<?php echo $page; ?>">
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