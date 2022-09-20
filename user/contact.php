<?php include('header.php');?>


<?php
$msg="";
if (isset($_POST['submit'])){
  
  // $email=$_POST['email'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $message=$_POST['message'];
  $created_on=date("Y-m-d H:i:s");

  $query = "INSERT INTO contactus(name, email, phone, message, created_on) VALUES('$name','$email','$phone','$message','$created_on')";
  // echo $query;
  $result= mysqli_query($con,$query);
   if($result){
    $msg= "Registerd Successfully";
  }else{
    $msg= "failed to choose your courses";
  }

}

?>

<section class="w3l-contact-breadcrum">
  <div class="breadcrum-bg py-sm-5 py-4">
    <div class="container py-lg-3">
      <h2>Contact Us</h2>
      <p><a href="index.html">Home</a> &nbsp; / &nbsp; Contact</p>
    </div>
  </div>
</section>
<!-- contact -->
<section class="w3l-contacts-12" id="contact">
    <div class="contact-top pt-5">
        <div class="container py-md-3">
            
            <div class="row cont-main-top">
               
                <!-- contact form-->
                <div class="contact col-lg-4">
                    <div class="cont-subs">
                        <div class="cont-add">
                            
                           <div class="cont-add-rgt">
                            <h4>Address:</h4>
                            <p class="contact-text-sub">SDM DEGREE COLLEGE,UJIRE</p>
                        </div>
                        <div class="cont-add-lft">
                            <span class="fa fa-map-marker" aria-hidden="true"></span>
                       </div>
                    </div>
                        <div class="cont-add add-2">
                            
                           <div class="cont-add-rgt">
                            <h4>Email:</h4>
                            <a href="mailto:info@example.com">
                                <p class="contact-text-sub">info@suvidyaedu.com</p>
                            </a>
                        </div>
                        <div class="cont-add-lft">
                            <span class="fa fa-envelope" aria-hidden="true"></span>
                       </div>
                    </div>
                        <div class="cont-add">
                           
                            <div class="cont-add-rgt">
                                 <h4>Phone:</h4>
                                 <a href="tel:+7-800-300-500">
                                    <p class="contact-text-sub">+(91) 999-999-9999</p>
                                 </a>
                            </div>
                            <div class="cont-add-lft">
                                <span class="fa fa-phone" aria-hidden="true"></span>
                           </div>
                        </div>
                        <div class="cont-add add-3">
                           
                            <div class="cont-add-rgt">
                                 <h4>Find Us On</h4>
                                 <div class="main-social-1 mt-2">
                                    <a href="#linkedin" class="linkedin"><span class="fa fa-youtube"></span></a>
                                    <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                                    <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                                    <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                                    <a href="#google-plus" class="google-plus"><span class="fa fa-google-plus"></span></a>
                                    <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
                                </div>
                            </div>
                            <div class="cont-add-lft">
                               
                           </div>
                        </div>
                    </div>
                </div>
                <!-- //contact-->
                 <!-- contact form -->
                 <div class="contacts12-main col-lg-8 mt-lg-0 mt-5">
                   <?php 
              if($msg!=""){
              echo '<div class="alert alert-success alert-dismissible fade show">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong></strong>'.$msg.'
              </div>';
                }
              ?> 
                   
                    <form action="" method="post" class="main-input">
                        <div class="top-inputs d-grid">
                            <input type="text" placeholder="Name" name="name" id="name" required="">
                            <input type="email" name="email" placeholder="Email" id="email" required="">
                        </div>
                        <input type="number" placeholder="Phone Number" name="phone" id="phone" required="">
                        <textarea placeholder="Message" name="message" id="message" required=""></textarea>
                        <div class="text-right">
                        <button type="submit" name="submit" class="btn btn-theme2">Submit Now</button>


<!--                         <input type="submit" class="btn btn-theme2" name="submit" value="Submit Now">
 -->                        </div>
                    </form>
          <!-- 
                    <div class="main-input">
                      <div class="top-inputs d-grid">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.707133928913!2d75.33052661479302!3d12.990574190843457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba4b62e58f1b1c9%3A0x4fb9655c47cf1289!2sSDM%20Degree%20College!5e0!3m2!1sen!2sin!4v1601431996943!5m2!1sen!2sin" width="700" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                  </div>
                    </div> -->
                </div>
                <!-- //contact form -->
            </div>
        </div>
        
        
    </div>
</section>
<!-- //contact -->

<?php include('footer.php');?>
