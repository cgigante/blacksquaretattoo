<?php
  $page = "Contact Us";
?>


<!DOCTYPE html>
<html lang="en">

 <?php
  include ("_head.php")
  ?>

  <body>

    <?php include( "_navigation.php" ) ?>

    <div class="container" id="contactPage">

      <img src="img/bsqt_logo.png" class="img-responsive animated fadeIn" id="contactImageLogo">
                
      <div class="col-lg-6" id="contactLeft">
          
          <h1 class="pageHeaderText">Get in touch</h1>
          <a href="mailto:BlackSquareTattoo@gmail.com"><p>BlackSquareTattoo@gmail.com</p></a>
          <p>(718) 782-0238</p>
          
          <section id="contact">
            <div class="contact-div">
                <!-- <h2 class="contactUs">Contact Us</h2> -->
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Tell us who you are" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="user@mydomain.com" id="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group floating-label-form-group controls">
                            <label>Message</label>
                            <textarea rows="5" class="form-control" placeholder="If you are interested in getting tattooed, please let us know which artist you would like to work with." id="message" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>

                    <div id="success"></div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-default btn-md">Send</button>
                    </div>

                </form>
            </div>    
          </section>
      </div>
      
      <div class="col-lg-6" id="contactRight">
        <div class="well" id="mapDiv">
          <section id="canvas1" class="map">
            <iframe id="map_canvas1" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.3234171375316!2d-73.94950499999997!3d40.71089630000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2595875fe8d85%3A0x26897b554eda8ca8!2s552+Grand+St%2C+Brooklyn%2C+NY+11211!5e0!3m2!1sen!2sus!4v1439328782269" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <!-- <iframe id="map_canvas1" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12098.459104290821!2d-73.98995099999999!3d40.704480999999994!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a316f3eb0fb%3A0xceb1d92c1cafc9c3!2sDumbo%2C+Brooklyn%2C+NY!5e0!3m2!1sen!2sus!4v1407014358025" width="100%" height="450" frameborder="0" style="border:0"></iframe> -->
          </section>  
        </div>
      </div>

      
    
    

    </div>

    <!-- Footer is placed outside of the wrapper and container and just before the end BODY tag 
    so that it is flush with the bottom of the viewfinder -->    
    <?php include("_footer.php") ?>    


    <!-- The following script prevents Google Maps iframe from capturing the mouse's scrolling wheel behavior  -->
    <script>
      $(document).ready(function () {
          // you want to enable the pointer events only on click;
          $('#map_canvas1').addClass('scrolloff'); // set the pointer events to none on doc ready
          $('#canvas1').on('click', function () {
              $('#map_canvas1').removeClass('scrolloff'); // set the pointer events true on click
          });

          // you want to disable pointer events when the mouse leave the canvas area;

          $("#map_canvas1").mouseleave(function () {
              $('#map_canvas1').addClass('scrolloff'); // set the pointer events to none when mouse leaves the map area
          });
      });
    </script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

  </body>








</html>
