 <!DOCTYPE html>
 <head>
<style>
	


 .team-member-wrapper {
    display: flex;
    flex-direction: column;
    align-items: left; /* Center-aligns the content */
    gap: 40px; /* Space between members */
}

/*Add horizontal box*/ 
.team-box-horizontal {
    width: 100%; /* Full width for horizontal boxes */
    max-width: 900px; /* Optional: Limit box width */
    background-color: #f9f9f9; /* Light background for the box */
    border: 1px solid #ddd; /* Optional: Border for the box */
    border-radius: 10px; /* Rounded corners */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); /* Subtle shadow effect */
    padding: 10px;
    transition: box-shadow 0.3s ease; /* Smooth hover effect */
	margin-bottom: 20px; /* Add space below each box */
}

.team-box-horizontal:hover {
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2); /* Enhanced shadow on hover */
	background-color:rgb(205, 106, 227)
}

.team-box-content {
    display: flex; /* Align content horizontally */
    align-items: center; /* Vertically align content */
    gap: 15px; /* Space between image and details */
}

.team-image {
    width: 300px; /* Fixed size for the image */
    height: 300px;
    border-radius: 50%; /* Circular images */
    object-fit: cover; /* Ensure image fits the circle */
}

.team-details {
    text-align: left; /* Align text to the left */
}

.team-details h4 {
    margin: 0 0 5px;
    font-size: 1.2rem;
    color: #333;
}

.team-details .deg {
    font-size: 1rem;
    color: #555;
}
/*Add team members information*/ 
.team-details .info {
    font-size: 0.95rem;
    color: #666;
    margin-top: 5px;
    line-height: 1.5;
}

/* Hover Effect */
.team-box-horizontal:hover {
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2); /* Enhanced shadow on hover */
}

/* Responsive Design */
@media (max-width: 768px) {
    .team-box-content {
        flex-direction: column; /* Stack content vertically on smaller screens */
        align-items: center;
        text-align: center;
    }

    /* .team-image {
        margin-bottom: 10px; /* Space below image */
    } */


/*Add simple box*/ 
.team-box {
    width: 300px; /* Box width */
    padding: 10px;
    background-color: #f9f9f9; /* Light background color for the box */
    border: 2px solid #ddd; /* Optional: Border for the box */
    border-radius: 10px; /* Rounded corners for the box */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3); /* Adds shadow for a subtle 3D effect */
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth hover effect */
}

.team-box:hover {
    transform: translateY(-10px); /* Moves the box up slightly on hover */
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2); /* Enhances the shadow on hover */
	background-color: #a13db3
}

.team-box img {
    width: 100%; /* Ensures the image fits the box */
    height: auto; /* Maintains aspect ratio */
    border-radius: 50%; /* Optional: Circular images */
    margin-bottom: 15px;
}

.team-box h4 {
    margin: 10px 0 5px;
    font-size: 1.2rem;
    color: #333;
}

.team-box .deg {
    font-size: 1rem;
    color: #555;
}

.team-member {
    text-align: center;
    max-width: 300px; /* Optional: Set a fixed width */
}

.team-member img {
    width: 100%; /* Ensures responsiveness */
    height: auto; /* Maintain aspect ratio */
    border-radius: 10px; /* Optional: Add rounded corners */
}

h4 {
    margin: 10px 0 5px;
    font-size: 1.2rem;
    color: #333;
}

.deg {
    font-size: 1rem;
    color: #777;
}

.hover-box {
            width: 300px;
            height: 120px;
            padding: 20px;
            text-align: center;
            border-radius: 20px;
            background: linear-gradient(to right, #8a2be2, #6200ea);
            transition: background-color 0.3s, transform 0.3s ease;
            color: white;
            font-weight: bold;
            font-size: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .hover-box:hover {
            background: linear-gradient(to right, #4caf50, #2e7d32);
            cursor: pointer;
            transform: scale(1.05);
        }
</style>
</head>
<body>
<section id="content">
	<section class="section-padding">
		<!-- <div class="container"  data-aos="fade-in" style="background-image: url('plugins/home-plugins/img/collage1.png'); background-size: cover; background-position: center; padding: 20px; border-radius: 10px;"> -->
			<div class="container"  data-aos="fade-in">
		<div class="row showcase-section">
				<div class="col-md-6" data-aos="fade-up">
					 <img class="img-fluid" src="plugins/home-plugins/img/collage.png" alt=" " style="width: 100%; margin-top: 5%;">
				</div>
				
				<div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
					<div class="about-text">
						<h3>We Help To Get The Best Job And Find A Talent</h3>
						<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Vivamus suscipit tortor eget felis porttitor volutpat. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar.</p>
						 <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo..</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<div class="container" data-aos="fade-in">
					<div class="about">
						<div class="row">
							<div class="col-md-4" data-aos="fade-up">
								<!-- Heading and para -->
								<div class="block-heading-two">
									<h3><span>Why Choose Us?</span></h3>
								</div>
								<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur. <br/><br/>Sed ut perspiciaatis iste natus error sit voluptatem probably haven't heard of them accusamus.</p>
							</div>
							<div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
								<div class="block-heading-two">
									<h3><span>Our Solution</span></h3>
								</div>		
								<!-- Accordion starts -->
								<div class="panel-group" id="accordion-alt3">
									
								 <!-- Panel. Use "panel-XXX" class for different colors. Replace "XXX" with color. -->
								  <div class="panel">
								  	
									<!-- Panel heading -->
									 <div class="panel-heading">
									 <!-- <div class="hover-box"> -->
										<h4 class="panel-title">
										
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseOne-alt3">
											<i class="fa fa-angle-right"></i> Accordion Heading Text Item # 1
										  </a>
										</h4>
									 </div>
									 <div id="collapseOne-alt3" class="panel-collapse collapse">
										<!-- Panel body -->
										<div class="panel-body">
										  Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
										</div>
									 </div>
								  </div>
								  <div class="panel">
									 <div class="panel-heading">
									 <!-- <div class="hover-box"> -->
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseTwo-alt3">
											<i class="fa fa-angle-right"></i> Accordion Heading Text Item # 2
										  </a>
										</h4>
									 </div>
									 <div id="collapseTwo-alt3" class="panel-collapse collapse">
										<div class="panel-body">
										  Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
										</div>
									 </div>
								  </div>
								  <div class="panel">
									 <div class="panel-heading">
									 <!-- <div class="hover-box"> -->
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseThree-alt3">
											<i class="fa fa-angle-right"></i> Accordion Heading Text Item # 3
										  </a>
										</h4>
									 </div>
									 <div id="collapseThree-alt3" class="panel-collapse collapse">
										<div class="panel-body">
										  Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
										</div>
									 </div>
								  </div>
								  <div class="panel">
									 <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion-alt3" href="#collapseFour-alt3">
											<i class="fa fa-angle-right"></i> Accordion Heading Text Item # 4
										  </a>
										</h4>
									 </div>
									 <div id="collapseFour-alt3" class="panel-collapse collapse">
										<div class="panel-body">
										  Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
										</div>
									 </div>
								  </div>
								</div>
								<!-- Accordion ends -->
								
							</div>
							
							<div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
								<div class="block-heading-two">
									<h3><span>Our Expertise</span></h3>
								</div>								
								<h6>Web Development</h6>
								<div class="progress pb-sm">
								  <!-- White color (progress-bar-white) -->
								  <div class="progress-bar progress-bar-red" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
									 <span class="sr-only">40% Complete (success)</span>
								  </div>
								</div>
								<h6>Designing</h6>
								<div class="progress pb-sm">
								  <div class="progress-bar progress-bar-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
									 <span class="sr-only">40% Complete (success)</span>
								  </div>
								</div>
								<h6>User Experience</h6>
								<div class="progress pb-sm">
								  <div class="progress-bar progress-bar-lblue" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
									 <span class="sr-only">40% Complete (success)</span>
								  </div>
								</div>
								<h6>Development</h6>
								<div class="progress pb-sm">
								  <div class="progress-bar progress-bar-yellow" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
									 <span class="sr-only">40% Complete (success)</span>
								  </div>
								</div>
							</div>
							
						</div>
						
						 						
						 
						<br>
						<!-- Our Team starts -->
				
						<!-- Heading -->
						<div class="block-heading-six" data-aos="fade-in">
							<h3 class="bg-color">Our Team</h3>
						</div>
						<br>
						
						<!-- Our team starts -->
						
						<div class="team-six">
							<div class="team-member-wrapper">
							<div class="row">
								<!-- <div class="col-md-3 col-sm-6" data-aos="fade-up"> -->
									<!-- Team Member -->
									
										<div class="team-box-horizontal" data-aos="fade-up">
											<!-- <div class="team-box" data-aos="fade-up"> -->
									<div class="team-box-content">
									<!-- <div class="team-member"> -->
										<!-- Image -->
										<!-- <div class="team-member" data-aos="fade-up" data-aos-delay="400"> -->
										<img class="team-image" src="plugins/home-plugins/img/team1.jpg" alt="">
										<!-- Name -->
										<!-- <div class="team-details"> -->
										<h4>Johne Doe</h4>
										<span class="deg">Creative</span> 
										<p class="info">
                                         Johne Doe is a seasoned UX/UI designer, known for crafting intuitive user experiences and stunning visual designs.
                                        </p>
									</div>
								</div>
								<!-- <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="200"> -->
									<!-- Team Member -->
									<div class="team-box-horizontal" data-aos="fade-up" data-aos-delay="200">
									<!-- <div class="team-box" data-aos="fade-up" data-aos-delay="200"> -->
									<div class="team-box-content">
									<!-- <div class="team-member"> -->
										<!-- Image -->
										<!-- <div class="team-member" data-aos="fade-up" data-aos-delay="400"> -->
										<img class="team-image" src="plugins/home-plugins/img/team2.jpg" alt="">
										<!-- Name -->
										<h4>Jennifer</h4>
										<span class="deg">Programmer</span> 
										<p class="info">
                                         Jennifer is a Software Developer, known for crafting intuitive user experiences and stunning visual designs.
                                        </p>
										
									</div>
								</div>
								<!-- <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="400"> -->
									<!-- Team Member -->
									<div class="team-box-horizontal" data-aos="fade-up" data-aos-delay="400">
									<!-- <div class="team-box" data-aos="fade-up" data-aos-delay="400"> -->
									<div class="team-box-content">
									<!-- <div class="team-member"> -->
										<!-- Image -->
										<!-- <div class="team-member" data-aos="fade-up" data-aos-delay="600"> -->
										<img class="team-image" src="plugins/home-plugins/img/team3.jpg" alt="">
										<!-- Name -->
										<h4>Christean</h4>
										<span class="deg">CEO</span> 
										<p class="info">
                                         Christean is a CEO.
                                        </p>
									</div>
								</div>
								<!-- <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="600"> -->
									<!-- Team Member -->
									<div class="team-box-horizontal" data-aos="fade-up" data-aos-delay="400">
									<!-- <div class="team-box" data-aos="fade-up" data-aos-delay="600"> -->
									<div class="team-box-content">
									<!-- <div class="team-member"> -->
										<!-- Image -->
										<!-- <div class="team-member" data-aos="fade-up" data-aos-delay="400"> -->
										<img class="team-image" src="plugins/home-plugins/img/team4.jpg" alt="">
										<!-- Name -->
										<h4>Kerinele rase</h4>
										<span class="deg">Manager</span> 
										<p class="info">
                                         Michael is a Manager, known for user experiences and stunning visual designs.
                                        </p>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Our team ends -->
					  
						
					</div>
									
				</div>
				<!-- Include AOS CSS and JS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
    });
</script>
	</section> 
</body>
</html>