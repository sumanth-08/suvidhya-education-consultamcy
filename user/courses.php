<?php include('header.php');?>
 


<?php
$msg="";
if (isset($_POST['submit'])){
  
  // $email=$_POST['email'];
  $name=$_POST['name'];
  $category=$_POST['category'];
  $created_on=date("Y-m-d H:i:s");

  $query = "INSERT INTO courses(name, category, created_on) VALUES('$name','$category','$created_on')";
  // echo $query;
  $result= mysqli_query($con,$query);
   if($result){
    $msg= "Registerd Successfully";
  }else{
    $msg= "failed to choose your courses";
  }

}

?>



<section class="w3l-service-breadcrum">
  <div class="breadcrum-bg py-sm-5 py-4">
    <div class="container py-lg-3">
      <h2>COURSES</h2>
      <p><a href="index.html">Home</a> &nbsp; / &nbsp; Courses</p>
    </div>
  </div>
</section>
<section class="w3l-form-12">
    <div class="form-12-content py-5" id="services">
      <div class="container py-md-3">
        <div class="grid grid-column-2 py-md-5">
            
          <div class="column1">
            <h4 class="tagline">Choose your course</h4>
            <p>Fill in below form to choose your courses</p>
              <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              <?php 
              if($msg!=""){
              echo '<div class="alert alert-success alert-dismissible fade show">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong></strong>'.$msg.'
              </div>';
                }
              ?>  
                <div class="">
                  <input type="text" name="name" class="form-input" placeholder="Course Name" required>
                </div>
                <div class="">
                  <select name="category" id="sel1">
                    <option>Category</option>
                    <option>Socialogy</option>
                    <option>Business</option>
                    <option>Web Dev</option>
                    <option>Science</option>
                    <option>Economics</option>
                    <option>Biology</option>
                    <option>Computing</option>
                    <option>Web Design</option>


                    </select>
                </div>
                
          <input type="submit" class="btn btn-warning btn-theme2 btn-block" name="submit" id="submit" value="Submit" style="margin-top: 10px">      
<!--                 <button type="submit" class="btn btn-secondary btn-theme2">Submit</button>
 -->              </form>
            </div>
            <div class="column2">
            <div class="row">
              <div class="col-md-3 col-sm-6 col-6">
                <a href="colleges single.php"><div class="courses-item">
                  <span class="fa fa-male"></span>
                  <p>Socioligy</p>
                </div></a>
              </div>
              <div class="col-md-3 col-sm-6 col-6">
                <a href="colleges single.php"><div class="courses-item">
                  <span class="fa fa-suitcase"></span>
                  <p>Business</p>
                </div></a>
              </div>
              <div class="col-md-3 col-sm-6 col-6 mt-md-0 mt-4">
                <a href="colleges single.php"><div class="courses-item">
                  <span class="fa fa-code"></span>
                  <p>Web Dev</p>
                </div></a>
              </div>
              <div class="col-md-3 col-sm-6 col-6 mt-md-0 mt-4">
                <a href="colleges single.php"><div class="courses-item">
                  <span class="fa fa-flask"></span>
                  <p>Science</p>
                </div></a>
              </div>
              <div class="col-md-3 col-sm-6 col-6 mt-4">
                <a href="colleges single.php"><div class="courses-item mt-2">
                  <span class="fa fa-money"></span>
                  <p>Ecomomics</p>
                </div></a>
              </div>
              <div class="col-md-3 col-sm-6 col-6 mt-4">
                <a href="colleges single.php"><div class="courses-item mt-2">
                  <span class="fa fa-gg"></span>
                  <p>Biology</p>
                </div></a>
              </div>
              <div class="col-md-3 col-sm-6 col-6 mt-4">
                <a href="colleges single.php"><div class="courses-item mt-2">
                  <span class="fa fa-desktop"></span>
                  <p>Computing</p>
                </div></a>
              </div>
              <div class="col-md-3 col-sm-6 col-6 mt-4">
                <a href="colleges single.php"><div class="courses-item mt-2">
                  <span class="fa fa-mouse-pointer"></span>
                  <p>Web Design</p>
                </div></a>
              </div>
            </div>
            </div>
        </div>
      </div>
    </div>
  </section>

</section>
<section class="w3l-pricing-7" id="pricing">
  <div class="w3l-pricing-7_sur py-5">
    <div class="container py-md-3">
      <div class="heading text-center mx-auto">
        <h3 class="head">See Our Packages</h3>
        <p class="my-3 head"> Do you know the difference between education and experience? Education is when you read the fine print; experience is what you get when you don’t.</p>
      </div>
      <div class="row w3l-pricing-7-gd-top pt-3 mt-5">
        <div class="col-lg-4 col-md-6 w3l-pricing-7-gd-left">
          <div class="w3l-pricing-7  pric-7-1">
            <h6>Basic Pack</h6>
            <div class="w3l-pricing-7-top">
              <h3 class="title-sub">39999.00/-</h3>
              <p>1 Month</p>
            </div>
            <div class="w3l-pricing-7-bottom">
              <div class="w3l-pricing-7-bottom-bottom">
                <ul class="links">
                  <li class="tick-info">
                    Python introduction basic
                  </li>
                  <li class="tick-info">
                    JAva introduction
                  </li>
                  <li class="tick-info">
                    Photoshope introduction
                  </li>
                  <li class="tick-info">
                    Kotlin introduction
                  </li>
                  <li class="tick-info">
                    Mini project design
                  </li>
                  <li class="tick-info">
                    Bootstarp introduction
                  </li>
                </ul>
              </div>
              <div class="buy-button text-center mt-5">
                 <a href="contact.php" class="btn btn-secondary btn-theme2">
                  <div class="anim"></div><span>Request Now</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-md-0 mt-4 w3l-pricing-7-gd-left active">
          <div class="w3l-pricing-7 pric-7 active">
            <h6>Standard  Pack</h6>
            <div class="w3l-pricing-7-top">
              <h3 class="title-sub">69299.00/-</h3>
              <p>1 Month</p>
           </div>
            <div class="w3l-pricing-7-bottom">
              <div class="w3l-pricing-7-bottom-bottom">
                <ul class="links">
                  <li class="tick-info">
                    App development
                  </li>
                  <li class="tick-info">
                    Mini website design
                  </li>
                  <li class="tick-info">
                    Logo design tutorial
                  </li>
                  <li class="tick-info">
                    basic photo editing
                  </li>
                  <li class="tick-info">
                    Graphic designs
                  </li>
                  <li class="tick-info">
                    Php indtroduction
                  </li>
                </ul>
              </div>
              <div class="buy-button text-center mt-5">
                <a href="contact.php" class="btn btn-secondary btn-theme2">
                  <div class="anim"></div><span>Request Now</span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-lg-0 mt-4 w3l-pricing-7-gd-left">
          <div class="w3l-pricing-7 pric-7-2">
            <h6>Exclusive  Pack</h6>
            <div class="w3l-pricing-7-top">
             <h3 class="title-sub">99399.00/-</h3>
             <p>1 Month</p>
            </div>
            <div class="w3l-pricing-7-bottom">
              <div class="w3l-pricing-7-bottom-bottom">
                <ul class="links">
                  <li class="tick-info">
                    Software designing
                  </li>
                  <li class="tick-info">
                    Website designing
                  </li>
                  <li class="tick-info">
                    Photoshop tutorial
                  </li>
                  <li class="tick-info">
                    Animations
                  </li>
                  <li class="tick-info">
                    Video editing
                  </li>
                  <li class="tick-info">
                    Reatail management
                  </li>
                </ul>
              </div>
              <div class="buy-button text-center mt-5">
                <a href="contact.php" class="btn btn-secondary btn-theme2">
                  <div class="anim"></div><span>Request Now</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="w3l-features-4">
	<!-- /features -->
		<div class="features py-5" id="services">
            <div class="container py-md-3">
			<div class="heading text-center mx-auto">
				<h3 class="head">Amazing Services</h3>
				<p class="my-3 head"> Do you know the difference between education and experience? Education is when you read the fine print; experience is what you get when you don’t.</p>
			  </div>
			<div class="fea-gd-vv row mt-5 pt-3">	
			   <div class="float-lt feature-gd col-lg-4 col-md-6">	
					 <div class="icon"> <span class="fa fa-file-text-o" aria-hidden="true"></span></div>
					 <div class="icon-info">
						<h5><a href="#">
							Best Certificate</a></h5>
						<p> The difference between who you are and what is the who you want to be is what you do. </p>
<!-- 						<a href="#" class="red mt-3">Read More <span class="fa fa-angle-right pl-1"></span></a>
 -->					</div>
					 
				</div>	
				<div class="float-mid feature-gd col-lg-4 col-md-6 mt-md-0 mt-5">	
					 <div class="icon"> <span class="fa fa-trophy" aria-hidden="true"></span></div>
					 <div class="icon-info">
						<h5><a href="#">National Awards
						</a></h5>
						<p> The ones who are crazy enough to think they can change the world, are the ones that do.  </p>
<!-- 						<a href="#" class="red mt-3">Read More <span class="fa fa-angle-right pl-1"></span></a>
 -->					</div>
			 </div> 
				<div class="float-rt feature-gd col-lg-4 col-md-6 mt-lg-0 mt-5">	
					 <div class="icon"> <span class="fa fa-clone" aria-hidden="true"></span></div>
					 <div class="icon-info">
						<h5><a href="#">Qualifier Teacher</a></h5>
						<p> Education is our passportto the future, for tomarrow belongsto the people who prepare for it today. </p>
<!-- 						<a href="#" class="red mt-3">Read More <span class="fa fa-angle-right pl-1"></span></a>
 -->					</div>
			 </div>	 
			 <div class="float-lt feature-gd col-lg-4 col-md-6 mt-5">	
					 <div class="icon"> <span class="fa fa-bullseye" aria-hidden="true"></span></div>
					 <div class="icon-info">
						<h5><a href="#">Dedicated Courses</a>
						</h5>
						<p> Education is our passportto the future, for tomarrow belongsto the people who prepare for it today.  </p>
<!-- 						<a href="#" class="red mt-3">Read More <span class="fa fa-angle-right pl-1"></span></a>
 -->					</div>
					 
				</div>	
				<div class="float-mid feature-gd col-lg-4 col-md-6 mt-5">	
					 <div class="icon"> <span class="fa fa-cube" aria-hidden="true"></span></div>
					 <div class="icon-info">
						<h5><a href="#">
							Over 4 k Stuedents</a>
						</h5>
						<p> The ones who are crazy enough to think they can change the world, are the ones that do.  </p>
<!-- 						<a href="#" class="red mt-3">Read More <span class="fa fa-angle-right pl-1"></span></a>
 -->					</div>
			 </div> 
				<div class="float-rt feature-gd col-lg-4 col-md-6 mt-5">	
					 <div class="icon"> <span class="fa fa-spinner" aria-hidden="true"></span></div>
					 <div class="icon-info">
						<h5><a href="#">24 H Support</a>
						</h5>
						<p> The ones who are crazy enough to think they can change the world, are the ones that do.  </p>
<!-- 						<a href="#" class="red mt-3">Read More <span class="fa fa-angle-right pl-1"></span></a>
 -->					</div>
			 </div>		 				 
		  </div>  
		 </div>
	   </div>
   
<?php include('footer.php');?>
