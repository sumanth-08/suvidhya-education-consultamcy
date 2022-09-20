<?php include('header.php');?>


<section class="w3l-main-slider" id="home">
  <!--slider -->
  <div class="companies20-content">
   
    <div class="owl-one owl-carousel owl-theme">
      
      <div class="item">
        <li>
          <div class="slider-info  banner-view banner-top1 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>Explore The World Of Our Graduates</h5>
                  <p>Change is the end result of all true learning.</p>
                  <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="about.php">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info banner-view bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>Better Education For A Better World</h5>
                  <p>An investment in knowledge pays the best interest.</p>
                 <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="about.php">Read More</a>
                </div>
                
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info banner-view banner-top2 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>Exceptional People, Exceptional Care</h5>
                  <p>They know enough who know how to learn.</p>
                 <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="about.php">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
      <div class="item">
        <li>
          <div class="slider-info banner-view banner-top3 bg bg2" data-selector=".bg.bg2">
            <div class="banner-info">
              <div class="container">
                <div class="banner-info-bg mx-auto text-center">
                  <h5>Explore The World Of Our Graduates</h5>
                  <p>The learning process continues until the day you die.</p>
                  <a class="btn btn-secondary btn-theme2 mt-md-5 mt-4" href="about.php">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </li>
      </div>
    </div>
  </div>

</div>


  <script src="assets/js/owl.carousel.js"></script>
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
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
  
  <!-- /main-slider -->
</section>
<section class="w3l-feature-3" id="features">
	<div class="grid top-bottom mb-lg-5 pb-lg-5">
		<div class="container">
			
			<div class="middle-section grid-column text-center">
				<div class="three-grids-columns">
					<span class="fa fa-laptop"></span>
					<h4>Learn Courses Online</h4>
					<p>You can learn best of our education through online, thats change your life of lockdowns and corona. </p>
					<a href="courses.php" class="btn btn-secondary btn-theme3 mt-4">Read More </a>
				</div>
				<div class="three-grids-columns">
					<span class="fa fa-users"></span>
					<h4>Highly Qualified Teachers</h4>
					<p>They inspire you, they entertain you, and you end up learning a ton even when you don't know it.</p>
					<a href="courses.php" class="btn btn-secondary btn-theme3 mt-4">Read More </a>
				</div>
				<div class="three-grids-columns">
					<span clas


          s="fa fa-book"></span>

          
					<h4>Book Library & Stores</h4>
					<p>Let us remember: One book, one school, one pen, one child, and one teacher can change the world.</p>
					<a href="courses.php" class="btn btn-secondary btn-theme3 mt-4">Read More </a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- aboit- -->
<section class="w3l-index1" id="about">
	<div class="calltoaction-20  py-5 editContent">
		<div class="container py-md-3">
		
			<div class="calltoaction-20-content row">
				<div class="column center-align-self col-lg-6 pr-lg-5">
					<h5 class="editContent">About Us</h5>
					<p class="more-gap editContent">Education is at the center of everything that’s good in our world today. Without education, we would not have advances in education, computers, mathematics, psychology, engineering and any other fields.</p>
						<p class="more-gap editContent">Education is no longer thought of as a preparation for adult life, but as a continuing process of growth and development from birth until death. </p>
							<a class="btn btn-secondary btn-theme2 mt-3" href="about.php"> Read More</a>
				</div>
				<div class="column ccont-left col-lg-6">
					<img src="assets/images/dw2.jpg" class="img-responsive" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<!--about -->
<section class="services-12" id="course">
	<div class="form-12-content">
		<div class="container">
			<div class="grid grid-column-2 ">
				
				<div class="column1">
					<div class="heading">
						<h3 class="head text-white">Register Now</h3>
						<h4>Choose among various courses and colleges</h4>
						<p class="my-3 text-white"> You wish more people would be register your register or take the next step toward your change life. But that is only possible if you register to us.</p>
					  </div>
					</div>
					<div class="column2">
						<a class="btn btn-secondary btn-theme2 mt-3" href="../register.php"> Register Now</a>
					</div>
			</div>
		</div>
	</div>
</section>

<!--
<section class="w3l-form-12">
		<div class="form-12-content py-5" id="services">
			<div class="container py-md-3">
				<div class="grid grid-column-2 py-md-5">
						
					<div class="column1">
						<h4 class="tagline">REGISTER NOW</h4>
						<p>Fill in below form to find your courses</p>
							<form action="/" method="Get">
								<div class="">
									<input type="text" name="name" class="form-input" placeholder="Course Name">
								</div>
								<div class="">
									<select id="sel1">
										<option>Category</option>
										<option>Computer</option>
										<option>Science</option>
										<option>History</option>
										<option>Economics</option>
									  </select>
								</div>
								
								
								<button type="submit" class="btn btn-secondary btn-theme2"><a href="colleges single.html">Submit</a></button>
							</form>
				
					
						</div>
								<div class="column ccont-left col-lg-6">
					<img src="assets/images/dw3.jpg" class="img-responsive" alt="">
				</div>
						</div>
				</div>
			</div>
		</div>
	</section>-->




 <!-- statistics -->
 <br>
 <br>
 <center><h5 class="editContent" style="letter-spacing: 5px; font-size: 34px;">STATISTICS</h5></center>
    <section class="w3l-index2">
        <div class="main-w3 py-5" id="stats">
            <div class="container py-lg-3">
               <div class="row main-cont-wthree-fea">
                    <div class="col-lg-3 col-sm-6 mt-sm-0 mt-4">
                        <div class="grids-speci1">
                            <h3 class="title-spe">18</h3>
                            <p> NEW COURSES <br>EVERY YEAR</p>
                        </div>
                      </div>
                    <div class="col-lg-3 col-sm-6">
                      <div class="grids-speci1">
                          <h3 class="title-spe">60</h3>
                          <p>PROFESSIONAL <br>INSTRUCTORS</p>
                      </div>
                  </div>
                    <div class="col-lg-3 col-sm-6  mt-lg-0 mt-4">
                        <div class="grids-speci1">
                            <h3 class="title-spe">34</h3>
                            <p>LIVE SESSIONS <br>EVERY MONTH</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mt-lg-0 mt-4">
                        <div class="grids-speci1">
                            <h3 class="title-spe">96</h3>
                            <p>REGISTERED <br>STUDENTS</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- //statistics -->
    </section>
    <section class="w3l-features-4">
	<!-- /services-->
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
						<p>  The difference between who you are and what is the who you want to be is what you do. </p>
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
						<p> Education is our passportto the future, for tomarrow belongsto the people who prepare for it today.  </p>
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
						<p>  The ones who are crazy enough to think they can change the world, are the ones that do. </p>
<!-- 						<a href="#" class="red mt-3">Read More <span class="fa fa-angle-right pl-1"></span></a>
 -->					</div>
			 </div> 
				<div class="float-rt feature-gd col-lg-4 col-md-6 mt-5">	
					 <div class="icon"> <span class="fa fa-spinner" aria-hidden="true"></span></div>
					 <div class="icon-info">
						<h5><a href="#">24 H Support</a>
						</h5>
						<p>  The ones who are crazy enough to think they can change the world, are the ones that do.  </p>
<!-- 						<a href="#" class="red mt-3">Read More <span class="fa fa-angle-right pl-1"></span></a>
 -->					</div>
			 </div>		 				 
		  </div>  
		 </div>
	   </div>
   <!-- //services -->
</section>
<!-- customers4 block -->
<section class="w3l-customers-4" id="testimonials">
  <div id="customers4-block" class="py-5">
    <div class="container py-md-3">
  
     <div class="section-title align-center row">
      <div class="item-top col-md-6 pr-md-5">
        <div class="heading">
          <h3 class="head text-white">Hear what our students have to say</h3>
          <p class="my-3 head text-white">Give a girl an education and introduce her properly into the world, and ten to one but she has the means of settling well, without further expense to anybody. 
            turpis sodales quis. Integer sit amet mattis quam.</p>
            <p class="my-3 head text-white"> Do you know the difference between education and experience? Education is when you read the fine print; experience is what you get when you d I don’t want revenge on the Taliban, I want education for sons and daughters of the Taliban.on’t.</p>
          </div>
     </div>
          <div class="item-top col-md-6 mt-md-0 mt-4">
            <div class="item text-center">
             <div class="imgTitle">
               <img src="assets/images/c3.jpg" class="img-responsive" alt="" />
              </div>
              <h6 class="mt-3">Pavitra Nair</h6>
              <p class="">Student</p>
              <p>By three methods we may learn wisdom: First, by reflection, which is noblest; Second, by imitation, which is easiest; and third by experience, which is the bitterest. The difference between who you are and who you want to be is what you do.</p>
              
          </div>
         </div>
    </div>
  </div>
  </div>
  
 
</section>

<?php include('footer.php');?>

