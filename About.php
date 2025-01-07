 <!DOCTYPE html>
 <head>
<style>
	
	.center-page {
		display: flex;
    position: absolute;
     top: 50%;
    left: 500px; 
    transform: translate(-50%, -50%);
    text-align: center; /* Optional, centers text alignment */
  }
  
.panel-collapse {
      display: none; /* Hidden by default */
       margin-top: 10px; 
      padding: 10px;
      background-color: #f9f9f9;
      /* border: 1px solid #ddd; */
      border-radius: 20px;
	  box-sizing: border-box;
      width: 100%; /* Match the box width */
	  height: 100%;
    }

    .panel-collapse.active {
      display: block; /* Show only the active panel */
    }
/* Hero Section Styles */
.hero-section {
    position: relative;
    background-color: #6488a0; /* Background color */
    padding: 50px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    color: #ffffff;
	width: 400%;
}

.hero-section::before {
    content: "ERP Evaluation";
    position: absolute;
    top: 20%;
    left: 5%;
    font-size: 8rem;
    color: rgba(255, 255, 255, 0.1); /* Light transparent text */
    z-index: 1;
    white-space: nowrap;
    pointer-events: none;
}

.hero-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 120%;
    z-index: 2;
    position: relative;
}

.text-container {
    max-width: 40%;
    padding-right: 20px;
}

.text-container h1 {
    font-size: 2.5rem;
    font-weight: bold;
    margin-bottom: 15px;
    z-index: 2;
}

.text-container h1 a {
    color: black;
    text-decoration: none; /* Removes the underline */
  }
  .text-container h1 a:hover {
    color: darkgray; /* Optional: Change color on hover */
  }

.text-container .subheading {
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 10px;
    z-index: 2;
}

.text-container p {
    margin-bottom: 20px;
    line-height: 1.5;
	
}

.image-container {
    max-width: 20%;
	/* order: -1; This places the image on the left */
    position: relative;
	left:-400px;
	top:10px;
}

.image-container img {
    max-width: 100%;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}
.hero-section, .new-hero-section, .third-hero-section, .fourth-hero-section  {
    margin-bottom: 50px; /* Adjust both sections */
}
/* New Hero Section Styles */
.new-hero-section {
    position: relative;
    background-color: #6488a0; /* Background color */
    padding: 50px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    color: #ffffff;
	width: 400%;
}

.new-hero-section::before {
    content: "ERP Implementation";
    position: absolute;
    top: 20%;
    right: 25%;
    font-size: 8rem;
    color: rgba(255, 255, 255, 0.1); /* Light transparent text */
    z-index: 1;
    white-space: nowrap;
    pointer-events: none;
}

.new-hero-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: -800px;
    z-index: 2;
    position: relative;
}

.new-text-container {
    max-width: 40%;
    padding-left: 20px;
    text-align: left;
	position: relative;
	left:-310px; /* Align text to the right */
}

.new-text-container h1 {
    font-size: 2.5rem;
    font-weight: bold;
    margin-bottom: 15px;
    z-index: 2;
}

.new-text-container h1 a {
    color: black;
    text-decoration: none; /* Removes the underline */
  }
  .new-text-container h1 a:hover {
    color: darkgray; /* Optional: Change color on hover */
  }

.new-text-container .subheading {
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 10px;
    z-index: 2;
}

.new-text-container p {
    margin-bottom: 20px;
    line-height: 1.5;
}

.new-cta-button:hover {
    background-color: #ffffff;
    color: #6488a0;
}

.new-image-container {
    max-width: 56%;
    order: -1; /* This places the image on the left */
	right:400px;
}

.new-image-container img {
    max-width: 40%;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}
/* Third Hero Section */
.third-hero-section {
    position: relative;
    background-color: #6488a0; /* Background color */
    padding: 50px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    color: #ffffff;
	width: 400%;
}

.third-hero-section::before {
    content: "Training";
    position: absolute;
    top: 20%;
    left: 5%;
    font-size: 8rem;
    color: rgba(255, 255, 255, 0.1); /* Light transparent text */
    z-index: 1;
    white-space: nowrap;
    pointer-events: none;
}
.third-hero-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: 120%;
    z-index: 2;
    position: relative;
}

.third-text-container {
    max-width: 40%;
    padding-right: 20px;
}

.third-text-container h1 {
    font-size: 2.5rem;
    font-weight: bold;
    margin-bottom: 15px;
    z-index: 2;
}

.third-text-container h1 a {
    color: black;
    text-decoration: none; /* Removes the underline */
  }
  .third-text-container h1 a:hover {
    color: darkgray; /* Optional: Change color on hover */
  }

.third-text-container .subheading {
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 10px;
    z-index: 2;
}

.third-text-container p {
    margin-bottom: 20px;
    line-height: 1.5;
	
}

.third-image-container {
    max-width: 20%;
	/* order: -1; This places the image on the left */
    position: relative;
	left:-400px;
	top:10px;
}

.third-image-container img {
    max-width: 100%;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}
/* New Hero Section Styles */
.fourth-hero-section {
    position: relative;
    background-color: #6488a0; /* Background color */
    padding: 50px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    color: #ffffff;
	width: 400%;
}

.fourth-hero-section::before {
    content: "ERP Audit";
    position: absolute;
    top: 20%;
    right: 40%;
    font-size: 8rem;
    color: rgba(255, 255, 255, 0.1); /* Light transparent text */
    z-index: 1;
    white-space: nowrap;
    pointer-events: none;
}

.fourth-hero-content {
    display: flex;
    align-items: center;
    justify-content: space-between;
    width: -800px;
    z-index: 2;
    position: relative;
}

.fourth-text-container {
    max-width: 40%;
    padding-left: 20px;
    text-align: left;
	position: relative;
	left:-310px; /* Align text to the right */
}

.fourth-text-container h1 {
    font-size: 2.5rem;
    font-weight: bold;
    margin-bottom: 15px;
    z-index: 2;
}
.fourth-text-container h1 a {
    color: black;
    text-decoration: none; /* Removes the underline */
  }
  .fourth-text-container h1 a:hover {
    color: darkgray; /* Optional: Change color on hover */
  }

.fourth-text-container .subheading {
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 10px;
    z-index: 2;
}

.fourth-text-container p {
    margin-bottom: 20px;
    line-height: 1.5;
}

.fourth-cta-button:hover {
    background-color: #ffffff;
    color: #6488a0;
}

.fourth-image-container {
    width: 900px;
    order: -1; /* This places the image on the left */
	right:500px;
}

.fourth-image-container img {
    max-width: 40%;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

 

body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 20px;
}
.team-section {
    text-align: center; /* Centers the heading and container */
    margin: 20px 0; /* Adds space above and below the section */
}

.team-heading {
    font-size: 2.5em; /* Sets the font size */
    color: #333; /* Sets the text color */
    margin-bottom: 20px; /* Adds spacing below the heading */
    font-weight: bold; /* Makes the text bold */
    text-transform: uppercase; /* Optional: Transforms text to uppercase */
    /* letter-spacing: 1px; Adds spacing between letters */
    text-align: right;
    margin-right: -400px;
}


.team-container {
    display: flex;
    flex-wrap: nowrap;
    gap: 20px;
    justify-content: center;
    padding: 20px;
    position: relative;
    left:400px;
    max-width: 1500px; /* Limits container width */
    margin: 0 auto;
}

.team-card {
    flex: 1 1 650px;
    max-width: 550px;
    height: 350px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    /* overflow: hidden; */
    text-align: center;
    width: 1000px;
    margin: 0 auto;
    padding: 40px;
}

.team-card img {
    border-radius: 50%;
    width: 100px;
    height: 100px;
    object-fit: cover;
    margin-bottom: 15px;
}

.team-card h3 {
    font-size: 20px;
    margin: 10px 0;
}

.team-card p {
    font-size: 14px;
    color: #777;
    margin: 10px 0;
}

.social-icons {
    display: flex;
    justify-content: center;
    gap: 10px;
}

.social-icons a {
    color: #555;
    font-size: 20px;
    text-decoration: none;
    transition: color 0.3s;
}

.social-icons a:hover {
    color: #007bff;
}


#call-to-action-2 {
    background: linear-gradient(to right, rgba(96, 186, 253, 0.3), rgba(96, 186, 253, 0.3));
    transition: background-color 0.3s ease; /* smooth transition for hover effect */
}

/* Hover effect for the background color */
#call-to-action-2:hover {
    background: linear-gradient(to right, rgba(115, 16, 160, 0.6), rgba(64, 152, 219, 0.6));
}

/* Optional: Adjust text color when hovered */
#call-to-action-2:hover h3, 
#call-to-action-2:hover p {
    color: black; /* change text color when hovered */
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
					 <img class="img-fluid" src="plugins/home-plugins/img/About_Us/aboutus.jpg" alt=" " style="width: 100%; margin-top: 5%;">
				</div>
				
				<div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
					<div class="about-text" >
						<h3 style="margin-bottom: 5px;">We Help To Get The Best Job And Find A Talent</h3>
						<p>At Recruit10x, we bridge the gap between job seekers and employers, creating opportunities for both to thrive. 
							Whether you're looking for your dream job or the perfect candidate, we're here to help.</p>
						 <!-- <p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo..</p> -->
				        <h3 style="margin-bottom: 5px;">For Job Seekers:</h3> <!-- Reduce the margin below the heading -->
						<ul style="margin-top: 0; margin-bottom: 10px; padding-left: 20px;"> <!-- Adjust margins and padding -->
    <li>Explore thousands of exciting job opportunities across diverse industries.</li>
    <li>Build your career with personalized job recommendations and guidance.</li>
    <li>Access tools to create a professional resume and ace your interviews.</li>
</ul>
<h3 style="margin-bottom: 5px;">For Employers:</h3>
<ul style="margin-top: 0; margin-bottom: 10px; padding-left: 20px;">
	<li>Discover top talent from a pool of skilled professionals.</li>
	<li>Streamline your hiring process with our advanced recruitment tools.</li>
</ul>
						</div>
				</div>
			</div>
		</div>
	</section>
	
	
    <section id="call-to-action-2" data-aos="fade-right" data-aos-duration="1200">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-9">
                    <h3>Why Choose Us?</h3>
                    <p>We blend innovation and expertise to deliver recruitment solutions that drive results. 
						Join the thousands who trust Recruit10x to unlock potential and achieve success.</p>
                </div>
            </div>
        </div>
    </section>
	 <div class="about"> 
						 <div class="row"> 
							 <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
								<div class="block-heading-two">
									<h2  style="text-align: right; margin-right: -500px; font-size: 2.5em;">Solutions We Provide</h2>
								</div>		
								
	<div class="hero-section"  data-aos="fade-in">
    <div class="hero-content">
        <div class="text-container" data-aos="fade-up">
            <h1><a href="erp-evalue.php">ERP Evaluation</a></h1>
            <!-- <p class="subheading">You've got the idea. We'll help bring it to life.</p> -->
            <p>ERP evaluation is a comprehensive process that involves analyzing a business’s specific needs, assessing available ERP solutions, and selecting the most suitable system to streamline operations and support organizational goals.</p>
        </div>
        <div class="image-container" data-aos="fade-up"  data-aos-delay="400">
            <img src="plugins/home-plugins/img/About_Us/business.jpg" alt="">
        </div>
    </div>
</div>

<div class="new-hero-section" data-aos="fade-in">
<div class="new-hero-content">
        <div class="new-text-container" data-aos="fade-up">
            <h1><a href="erp-implement.php">ERP Implementation</a></h1>
            <!-- <p class="subheading">You've got the idea. We'll help bring it to life.</p> -->
            <p>ERP implementation for project management streamlines and integrates key project processes such as resource allocation, budgeting, scheduling, and reporting into a centralized system. By providing real-time data and improved collaboration tools, it helps project teams manage tasks efficiently, track progress, control costs, and mitigate risks.</p>      
        </div>
        <div class="new-image-container" data-aos="fade-up"  data-aos-delay="600">
            <img src="plugins/home-plugins/img/About_Us/implement.jpg" alt="">
        </div>
    </div>
</div>

<div class="third-hero-section" data-aos="fade-in">
    <div class="third-hero-content">
        <div class="third-text-container" data-aos="fade-up">
            <h1><a href="training.php">Training</a></h1>
            <!-- <p class="subheading">You've got the idea. We'll help bring it to life.</p> -->
            <p>With highly experienced experts, 
				our team can assist you with planning and executing training initiatives for ERP projects, 
				third-party apps, and other software products.</p>
        </div>
        <div class="third-image-container" data-aos="fade-up"  data-aos-delay="800">
            <img src="plugins/home-plugins/img/About_Us/training.jpg" alt="">
        </div>
    </div>
</div>

<div class="fourth-hero-section" data-aos="fade-in">
    <div class="fourth-hero-content">
        <div class="fourth-text-container" data-aos="fade-up">
        <h1><a href="erp-audit.php">ERP Audit</a></h1>
        <!-- <h1><a href="<?php echo web_root; ?>index.php?q=audit">ERP Audit</a></h1> -->
            <!-- <p class="subheading">You've got the idea. We'll help bring it to life.</p> -->
            <p>ERP auditing is the assessment of enterprise resource planning functions to 
                evaluate their efficiency. The aim is to examine how well each ERP component 
        addresses issues and streamlines processes to make enhancements and reinforce the system.</p>
        </div>
        <div class="fourth-image-container" data-aos="fade-up"  data-aos-delay="900">
            <img src="plugins/home-plugins/img/About_Us/erp.jpg" alt="">
        </div>
    </div>
</div>

<div class="team-section" data-aos="fade-up" data-aos-delay="200">
        <h2 class="team-heading">Meet Our Team</h2>
<div class="team-container">
        <?php
        // Example PHP array of team members (replace with database data)
        $team = [
            ["name" => "Dipak Thakare", "role" => "Regional Head", "image" => "plugins/home-plugins/img/Team/img1.jpg"],
            ["name" => "Rajshri Marathe", "role" => "Associate Software Engineer", "image" => "plugins/home-plugins/img/Team/img2.jpg"],
            ["name" => "Shraddha Kamble", "role" => "Associate Software Engineer", "image" => "plugins/home-plugins/img/Team/img3.jpeg"],
            ["name" => "Shreyas Bhuskade", "role" => "ERP Functional Consultant", "image" => "plugins/home-plugins/img/Team/img4.jpg"],
                           
        ];

        foreach ($team as $member) {
            echo "
            <div class='team-card'>
                <img src='{$member['image']}' alt='{$member['name']}'>
                <h3>{$member['name']}</h3>
                <p>{$member['role']}</p>
                <div class='social-icons'>
                    <a href='#'><i class='fab fa-facebook'></i></a>
                    <a href='#'><i class='fab fa-linkedin'></i></a>
                    <a href='#'><i class='fab fa-instagram'></i></a>
                </div>
            </div>";
        }
        ?>
    </div>

    <div class="team-container">
        <?php
        // Example PHP array of team members (replace with database data)
        $team = [
            ["name" => "Vibhavari Dhotre", "role" => "ERP Functional Consultant", "image" => "plugins/home-plugins/img/Team/img5.jpg"],
            ["name" => "Prathmesh Kumbhar", "role" => "ERP Functional Consultant", "image" => "plugins/home-plugins/img/Team/img6.jpg"],
            ["name" => "Vaibhavi Parab", "role" => "Inside Sales Manager", "image" => "plugins/home-plugins/img/Team/img7.jpg"],
        
                        
        ];

        foreach ($team as $member) {
            echo "
            <div class='team-card'>
                <img src='{$member['image']}' alt='{$member['name']}'>
                <h3>{$member['name']}</h3>
                <p>{$member['role']}</p>
                <div class='social-icons'>
                    <a href='#'><i class='fab fa-facebook'></i></a>
                    <a href='#'><i class='fab fa-linkedin'></i></a>
                    <a href='#'><i class='fab fa-instagram'></i></a>
                </div>
            </div>";
        }
        ?>
    </div>
    </div>

 
						<!-- Our team ends -->
					  
						
					<!-- </div> -->
									
				<!-- </div> -->
				<!-- Include AOS CSS and JS -->
                <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

                <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
                <script src="js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

<script>
    
    AOS.init({
        duration: 1000,
        easing: 'ease-in-out',
    });
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


	</section> 
</body>
</html>