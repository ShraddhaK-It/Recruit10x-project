<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project with AOS and Swiper Animations</title>
    
    <!-- Include AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    
    <!-- Include Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@9/swiper-bundle.min.css">
    
    <!-- Inline CSS for the Project -->
    <style>
       body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        #banner {
            position: relative;
        }

        .swiper-container {
            position: relative;
            width: 100%;
            height: 100%;
            margin-top:60px;
        }

        .swiper-slide img {
            width: 100%;
            height: auto;
        }

        .swiper-caption {
            position: absolute;
            top: 50%;
            left: 70%;
            transform: translate(-50%, -50%);
            color: #fff;
            text-align: center;
        }

        .swiper-caption h3 {
            font-size: 40px;
            margin-bottom: 20px;
        }

        .swiper-caption p {
            font-size: 20px;
        }

        .gray-bg {
            background-color: #f9f9f9;
            padding: 50px 0;
        }
      .company-card {
    border: 1px solid #ddd; /* Light gray border for a clean look */
    border-radius: 16px; /* Increase the rounding for a smoother rectangle */
    padding: 20px; /* Maintain padding for proper spacing */
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Slightly larger shadow for depth */
    background: #fff; /* Ensure a white background */
    text-align: center; /* Center-align text and content */
    transition: all 0.3s ease-in-out; /* Smooth hover transition */
    margin-bottom: 20px;
    font-family: Arial, sans-serif;
}

.company-card:hover {
    background: linear-gradient(to right, rgba(106, 17, 203, 0.3), rgba(37, 117, 252, 0.3)); /* faint gradient */
    transform: translateY(-8px); /* Lift the card slightly on hover */
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15); /* Add a more pronounced shadow on hover */
}

        .company-card i {
            color: #007bff;
        }
        .comapany-card container {
            text-align: center;
        }

        .testimonials img {
            border-radius: 50%;
            width: 50px;
            height: 50px;
        } 
         /* General Section Styling */
.section-padding {
  background: linear-gradient(to bottom right, #1e024d, #11206d);
  color: #fff;
  padding: 50px 20px;
  text-align: center;
}

.section-padding h2 {
  font-size: 2.5rem;
  font-weight: bold;
  margin-bottom: 30px;
}

.section-padding p {
  font-size: 1.2rem;
  margin-bottom: 40px;
  color: #cfcfd8;
}

/* Container for Job Cards */
.row {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 5px;
}

/* Job Cards */
.job-card {
    background: #ffffff; /* default color */
    transition: background 0.3s ease; /* smooth transition effect */
  border-radius: 60px;
  padding: 20px 30px;
  width: 250px;
  box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
  text-align: center;
  color: #000;
  transition: transform 0.3s, box-shadow 0.3s;
  font-family: Arial, sans-serif;
}

.job-card:hover {
    background: linear-gradient(to right, rgba(96, 186, 253, 0.3), rgba(96, 186, 253, 0.3)); /* faint gradient */
    color: white; /* text color change when hovered */
  transform: translateY(-5px);
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
}

.job-card i {
  color: #ADD8E6;
  font-size: 3rem;
  margin-bottom: 15px;
}

.job-card h5 {
  font-size: 1.5rem;
  font-weight: bold;
  margin: 10px 0;
  color: #000;
}

.job-card a {
  color: #fff;
  background: #8e2de2;
  padding: 8px 15px;
  border-radius: 20px;
  text-decoration: none;
  font-weight: bold;
  display: inline-block;
  transition: background 0.3s;
}

.job-card a:hover {
  background: #4a00e0;
  text-decoration: none;
}
/* Responsive Design */
@media (max-width: 768px) {
  .job-card {
    width: 90%;
  }
}

#call-to-action-2 {
    background: linear-gradient(to right, rgba(96, 186, 253, 0.3), rgba(96, 186, 253, 0.3));
    transition: background-color 0.3s ease; /* smooth transition for hover effect */
}

/* Hover effect for the background color */
#call-to-action-2:hover {
    background: linear-gradient(to right, rgba(96, 186, 253, 0.6), rgba(96, 186, 253, 0.6));
}

/* Optional: Adjust text color when hovered */
#call-to-action-2:hover h3, 
#call-to-action-2:hover p {
    color: white; /* change text color when hovered */
}
        
       
</style>
      </head>
      <body>
         <!-- Banner Section -->
    <section id="banner" data-aos="fade-up" data-aos-duration="1000">
        <div class="swiper-container" id="main-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/1174.png" alt="">
                    <div class="swiper-caption">
                        <h3  style="color: #fff;">Empowering Your Next Career Step</h3>
                        <!-- <p>Various career opportunities await you. 
                          Find the right career and connect with companies anytime,anywhere. </p> -->
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo web_root; ?>plugins/home-plugins/img/slides/195.jpg" alt="">
                    <div class="swiper-caption">
                        <!-- <h3>Innovation</h3>
                        <p>We create the opportunities</p> -->
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

  <section id="call-to-action-2" data-aos="fade-right" data-aos-duration="1200">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-sm-9">
          <h3>Partner with Business Leaders</h3>
          <p>Development of successful, long term, strategic relationships between customers and suppliers, based on achieving best practice and sustainable competitive advantage. In the business partner model, HR professionals work closely with business leaders and line managers to achieve shared organisational objectives.</p>
        </div>
       <!--  <div class="col-md-2 col-sm-3">
          <a href="#" class="btn btn-primary">Read More</a>
        </div> -->
      </div>
    </div>
  </section>
  
  <section id="content" class="gray-bg" data-aos="zoom-in-up" data-aos-duration="1500">
  
  
  <div class="container">
  <!-- <div class="container"> -->
            <h2 class="text-center">Our Companies</h2>
            <p class="text-center">Explore the details of our trusted partners and companies.</p>
        <!-- <div class="row"> -->
      <!-- <div class="col-md-12"> -->
        <!-- <div class="aligncenter"><h2 class="aligncenter">Company</h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt eius magni provident, doloribus omnis minus ovident, doloribus omnis minus temporibus perferendis nesciunt..</div> -->
        <!-- <br/> -->
      <!-- </div>
    </div> -->

    <?php 
      $sql = "SELECT * FROM `tblcompany`";
      $mydb->setQuery($sql);
      $comp = $mydb->loadResultList();


      foreach ($comp as $company ) {
        # code...
    
    ?>
    <!--New Code-->
     <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="company-card">
                        <i class="fa fa-building-o fa-3x mb-3"></i>
                       <h3><?php echo '<a href="'.web_root.'index.php?q=hiring&search='.$company->COMPANYNAME.'">'.$company->COMPANYNAME.'</a>';?></h3>
                        <p>
                            <strong>Address:</strong> <?php echo $company->COMPANYADDRESS; ?><br>
                            <strong>Contact:</strong> <?php echo $company->COMPANYCONTACTNO; ?>
                        </p>
                    </div>
                </div>
    <?php } ?> 
  </div>
  </section>
   <!-- Jobs Section -->
   <section class="section-padding gray-bg" data-aos="flip-left" data-aos-duration="1000">
        <div class="container">
            <h2>Popular Jobs</h2>
            <p>Explore job categories and find your dream job!</p>
            <!-- <div class="row"> -->
                <?php 
                    $sql = "SELECT * FROM `tblcategory`";
                    $mydb->setQuery($sql);
                    $cur = $mydb->loadResultList();
                    foreach ($cur as $result) {
                        echo '
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                            <div class="job-card">
                                <i class="fa fa-briefcase fa-2x"></i>
                                <h5><a href="'.web_root.'index.php?q=category&search='.htmlspecialchars($result->CATEGORY).'">'.htmlspecialchars($result->CATEGORY).'</a></h5>
                            </div>
                        </div>';
                    }
                ?>
            </div>
        </div>
    </section>


   <!-- Our Team Section -->
   <section id="content-3-10" class="content-block" data-aos="fade-left" data-aos-duration="1500">
        <div class="container">
            <h3>Our Team</h3>
            <p>At Recruite 10x, our dedicated team works tirelessly to connect job seekers with the right employers. With a shared passion for career development and recruitment innovation, we ensure a seamless hiring experience through personalized support and cutting-edge technology.

</p>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="gray-bg" data-aos="fade-up" data-aos-duration="2000">
        <div class="container">
            <h3>Testimonials</h3>
            <div class="testimonials">
                <blockquote>
                    <p>Finding the right talent was never easier! Thanks to Recruite 10x, we hired top professionals quickly and efficiently.</p>
                    <div>
                        <img src="img/team4.jpg" alt="">
                        <div>
                            <span>Mr. ABC</span><br>
                            <span>Technical Director</span>
                        </div>
                    </div>
                </blockquote>
            </div>
        </div>
    </section>             
      
           
           <!-- Include AOS JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    
    <!-- Include Swiper JS -->
    <script src="https://unpkg.com/swiper@9/swiper-bundle.min.js"></script>
    
    <!-- Custom Scripts -->
    <script>
        AOS.init();
        var swiper = new Swiper('#main-slider', {
            loop: true,
            autoplay: { delay: 5000 },
            pagination: { el: '.swiper-pagination', clickable: true },
            navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
            effect: 'fade',
        });
    </script>
          </body>
          </html>
