<?php
$msg="";
if (isset($_POST['submit'])){
  
  $email=$_POST['email'];
  $created_on=date("Y-m-d H:i:s");

  $query = "INSERT INTO email(email, created_on) VALUES('$email','$created_on')";
  // echo $query;
  $result= mysqli_query($con,$query);
   if($result){
    $msg= "You will get News letter soon..";
  }else{
    $msg= "failed to choose your courses";
  }

}

?>


<section class="w3l-footer-29-main">
  <div class="footer-29">
      <div class="container">
          <div class="d-grid grid-col-4 footer-top-29">
              <div class="footer-list-29 footer-1">
                  <h6 class="footer-title-29">Contact Us</h6>
                  <ul>
                      <li><p><span class="fa fa-map-marker"></span> SDM COLLEGE ,SOFTWARE AND APPLICATION DEVELOPMENT</p></li>
                      <li><a href="tel:+7-800-999-800"><span class="fa fa-phone"></span> +(91)-999-999-9999</a></li>
                      <li><a href="mailto:corporate-mail@support.com" class="mail"><span class="fa fa-envelope-open-o"></span> contactus@suvidyaedu.com</a></li>
                  </ul>
                  <div class="main-social-footer-29">
                      <a href="https://www.youtube.com/channel/UC2qk-gX6ftfWrkwrlIz8Iew?view_as=subscriber" class="instagram"><span class="fa fa-youtube"></span></a>
                      <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                      <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                      <a href="#google-plus" class="google-plus"><span class="fa fa-google-plus"></span></a>
                      <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
                  </div>
              </div>
              <div class="footer-list-29 footer-2">
                  <ul>
                      <h6 class="footer-title-29">Featured Links</h6>
                      <li><a href="courses.php">Admissions</a></li>
                      <li><a href="index.phpl">Services</a></li>
                      <li><a href="About.php">Know more</a></li>
                      <li><a href="contact.php">Contact Us</a></li>
                  </ul>
              </div>
              <div class="footer-list-29 footer-3">
                 
                  <h6 class="footer-title-29">Newsletter </h6>
                  <?php 
              if($msg!=""){
              echo '<div class="alert alert-success alert-dismissible fade show">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong></strong>'.$msg.'
              </div>';
                }
              ?>  
          <form action="" class="subscribe" method="post">
            <input type="email" name="email" placeholder="Email" required="">
            <button name="submit" id="sumbit"><span class="fa fa-envelope-o"></span></button>
          </form>
          <p class="text-center">Subscribe and get our weekly newsletter</p>
          <p class="text-muted text-center">We'll never share your email address</p>
        
              </div>
              <div class="footer-list-29 footer-4">
                  <ul>
                      <h6 class="footer-title-29">Quick Links</h6>
                      <li><a href="index.php">Home</a></li>
                      <li><a href="about.php">About</a></li>
                      <li><a href="Courses.php">Courses</a></li>
                      <li><a href="contact.php">Contact</a></li>
                  </ul>
              </div>
          </div>
          <div class="d-grid grid-col-2 bottom-copies">
              <p class="copy-footer-29">© 2020 SUVIDYA EDUCATION. All rights reserved <br> Designed by |  <a href="#"> Accelerlab Pvt Ltd</a></p>
               <ul class="list-btm-29">
                      <li><a href="#">Privacy policy</a></li>
                      <li><a href="#">Terms of service</a></li>
                      
                  </ul>
          </div>
      </div>
  </div>
  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-angle-up"></span>
  </button>
  <script>
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->
</section>
<script src="assets/js/jquery-3.3.1.min.js"></script>
</section>
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

<!--  JavaScript -->
<script src="assets/js/all.js"></script>
<script src="assets/js/owl.carousel.js"></script>

<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: true,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script -->

</body>

</html>
