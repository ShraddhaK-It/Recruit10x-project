<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project with AOS and Swiper Animations</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            padding: 0;
            background-color: #f7f7f7;
        }

        .container {
            max-width: 1200px;
            margin: 50 auto;
            padding: 5px;
        }

        .two-column {
            display: flex;
            flex-wrap: wrap;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .two-column__row {
            display: flex;
            flex-direction: row;
            width: 100%;
        }

        .two-column__column {
            flex: 1;
            padding: 20px;
        }

        .two-column__column--image {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: transparent; /* Remove the background color */
            padding: 0;
        }

        .two-column__column--image img {
            max-width: 70%; /* Reduce the image size */
            height: auto;
            border-radius: 4px; /* Keep slight rounding for smooth edges */
            margin-top: 10px; /* Adjust vertical alignment */
            margin-bottom: 0; /* Remove any additional bottom margin */
        }

        .two-column__content h2 {
            font-size: 2rem;
            color: #333;
            margin-bottom: 20px;
        }

        .icon-list {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .icon-list__item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .icon-list__item p {
            font-size: 14px;

        }

        .icon-list__item img {
            width: 50px;
            height: 50px;
            margin-right: 15px;
        }

        .icon-list__content {
            flex: 1;
        }

        .icon-list__content .h5 {
            font-size: 1.5rem; /* Updated font size */
        color: #444;
        margin-bottom: 10px; /* Slightly increased margin */
        font-weight: bold;
        font-family: 'Verdana', sans-serif; /* Updated font */
        }

        .icon-list__content p {
            margin: 0;
        font-size: 1.3rem; /* Updated font size */
        color: #555; /* Slightly darker color */
        font-family: 'Georgia', serif; /* Updated font */
        }

        .trainings__intro h2 {
            text-align: center;
            margin-bottom: 20px;
            margin-top:40px;
            color: #333
        }

        .accordion {
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .accordion__trigger {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            padding: 15px;
            cursor: pointer;
            background-color: #fff;
            border-bottom: 1px solid #ddd;
        }

        .accordion__trigger h3 {
            margin: 0;
            font-size: 18px;
            color: #333;
        }

        .accordion__trigger:hover {
            background-color:rgb(161, 206, 223);
        }

        .accordion__trigger p {
            margin: 5px 0 0;
            font-size: 14px;
            color: #333;
        }

        .accordion__trigger::after {
            content: '\25BC'; /* Unicode character for a down-pointing triangle */
            font-size: 16px;
            color: #a35d2a; /* Brown color matching the image */
            align-self: center;
            margin-left: auto; /* Push to the right */
            transform: rotate(0deg);
            transition: transform 0.3s ease;
            margin-top: auto;
}
        .accordion__trigger.active::after {
            transform: rotate(180deg); /* Rotate to point upwards */
}

        .accordion__content {
            display: none;
            padding: 15px;
            background-color: #f9f9f9;
        }

        .accordion__content .training {
            margin-bottom: 20px;
        }

        .training__content h4 {
            margin: 0 0 5px;
            font-size: 16px;
            color: #333;
        }

        .training__content p {
            margin: 0 0 5px;
            font-size: 14px;
            color: black;
        }

        .btn {
            display: inline-block;
            padding: 8px 12px;
            font-size: 14px;
            color: #fff;
            background-color: #5a5a5a;
            text-decoration: none;
            border-radius: 4px;
        }

        .btn:hover {
            background-color:rgb(152, 120, 106);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .accordion__trigger {
                font-size: 16px;
            }

            .accordion__trigger p {
                font-size: 12px;
            }
        }

        .cta-block {
      background-color:rgb(190, 127, 83);
      color: white;
      padding: 40px 20px;
      border-radius: 15px; /* Rounded corners */
      text-align: center;
      position: relative;
      overflow: hidden;
       margin-bottom: 20px;
       box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Adding subtle shadow */
    }

    .cta-block__content h2 {
        font-size: 1.8rem;
    color: white;
    margin: 0 0 20px;
    line-height: 1.4;
    font-family: 'Poppins', sans-serif; /* Font style */
    font-weight: 500; /* Bold weight for the heading */
    text-transform: capitalize; /* Capitalize the first letter of each word */
    }

    .cta-block a {
      display: inline-block;
      background-color: white;
      color: #c16929;
      font-weight: bold;
      text-decoration: none;
      padding: 10px 20px;
      border-radius: 5px;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    .cta-block a:hover {
      background-color: #a3511f;
      color: white;
    }

   

    @media (min-width: 768px) {
      .cta-block__content h2 {
        font-size: 2.5rem;
      }

      .cta-block a {
        padding: 12px 30px;
      }

      .svg-icon svg {
        width: 400px;
      }
    }

    </style>


</head>
<body>
    <section class="two-column">
        <div class="container">
            <div class="two-column__row">
                <div class="two-column__column two-column__column--image">
                    <img src="https://bignerdranch.com/wp-content/uploads/2021/02/yes.-DA405085-1200x1800.jpg" alt="Training Image">
                </div>
                <div class="two-column__column two-column__column--content">
                    <div class="two-column__content">
                        <h2>What’s different about our training?</h2>
                        <ul class="icon-list">
                            <li class="icon-list__item">
                                <img src="https://bignerdranch.com/wp-content/uploads/2021/05/icon-ee-01-more-time.svg" alt="Icon">
                                <div class="icon-list__content">
                                    <span class="h5">Learn more in less time</span>
                                    <p>Our ERP training programs are designed to be concise and impactful, lasting about a week. No need to spend months in a training program that disrupts your business operations or slows down your team's productivity.</p>
                                </div>
                            </li>
                            <li class="icon-list__item">
                                <img src="https://bignerdranch.com/wp-content/uploads/2021/05/icon-ct-02-team.svg" alt="Icon">
                                <div class="icon-list__content">
                                    <span class="h5">The right training for your team</span>
                                    <p>During onboarding, we collaborate with you to understand your business goals and challenges. This allows us to customize the training curriculum to meet your specific ERP implementation and operational needs.</p>
                                </div>
                            </li>
                            <li class="icon-list__item">
                                <img src="https://bignerdranch.com/wp-content/uploads/2021/05/icon-ct-03-learn.svg" alt="Icon">
                                <div class="icon-list__content">
                                    <span class="h5">If you need it, you can learn it</span>
                                    <p>Our expert trainers specialize in Strategic ERP modules, integration, and customization. Whether it’s financial management, supply chain, or customer relationship management, we ensure your team is fully equipped with the skills needed.</p>
                                </div>
                            </li>
                            <li class="icon-list__item">
                                <img src="https://bignerdranch.com/wp-content/uploads/2021/05/icon-ct-04-beyond-book.svg" alt="Icon">
                                <div class="icon-list__content">
                                    <span class="h5">You learn beyond the system</span>
                                    <p>We focus on teaching the strategic ‘why’ behind ERP processes, empowering your team with best practices for successful implementation. This ensures your employees can efficiently handle current projects while staying prepared for future business transformations</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="trainings">
	<div class="container">
	
		<div class="trainings__intro">
			<h2>Our Trainings</h2>
		</div>
		
				
			<div class="accordion trainings__category">
				
				<div class="accordion__trigger">
					<div class="trainings__category__intro">
						<h3>Who Should Attend?</h3>
					</div>
					<!-- <p>Creating User , Manage- Set Workflow,Permission management, Create company,Project and Sub project.</p> -->
				</div>
				
				<div class="accordion__content">
					<div class="spacer">
					
												
							<div class="training">
								
								<div class="training__content">
									<!-- <h4>Aspiring ERP consultants</h4> -->
									<p class="excerpt">
    <ul>
        <li>Aspiring ERP consultants</li>
        <li>Professionals in project management, construction, or real estate</li>
        <li>Freshers aiming for a career in ERP</li>
        <li>Existing ERP users looking to enhance their skills</li>
    </ul>
</p>
								</div>
								
								<!-- <a href="index.html%3Fp=4930.html" class="btn btn--border-brown">Learn More</a> -->
								
							</div>			
					</div>
				</div>
				
			</div>
		
				
			<div class="accordion trainings__category">
				
				<div class="accordion__trigger">
					<div class="trainings__category__intro">
						<h3>Program Highlights </h3>
					</div>
					
				</div>
				
				<div class="accordion__content">
					<div class="spacer">
					
												
							<div class="training">
								
								<div class="training__content">
									<!-- <h4>Advanced Android Corporate Training</h4> -->
									<p class="excerpt">
    <ul>
        <li><b>Comprehensive Modules:</b> Learn ERP Modules including PM, Pre-sales, Sales, HR, Finance, and Admin.</li>
        <li><b>Hands-On Training:</b> Practical sessions on live ERP systems.</li>
        <li><b>Expert Trainers:</b> Delivered by seasoned ERP consultants.</li>
        <li><b>Real-World Scenarios:</b> Industry-relevant case studies.</li>
        <li><b>Certification:</b> Get certified in “Strategic ERP”</li>
    </ul>
</p>
								</div>
								
								<!-- <a class='btn btn--border-brown' href='/training/courses/android-mobile-design-corporate-training'>Learn More</a> -->
								
							</div>			
					</div>
				</div>
			</div>
		
				
			<div class="accordion trainings__category">
				
				<div class="accordion__trigger">
					<div class="trainings__category__intro">
						<h3>Course Outline  </h3>
					</div>
					
				</div>
				
				<div class="accordion__content">
					<div class="spacer">
					
												
							<div class="training">
								
								<div class="training__content">
									<!-- <h4>React Essentials</h4> -->
									<p class="excerpt">
    <ul>
        <li>Introduction to ERP System </li>
        <li>Strategic ERP Overview</li>
        <li>Advanced Functionalities: Reporting and Analytics</li>
        <li>Project Work and POC Creation</li>
    </ul>
</p>
								</div>
								
								<!-- <a href="index.html%3Fp=4927.html" class="btn btn--border-brown">Learn More</a> -->
								
							</div>				
					</div>
				</div>
			</div>		
	</div>
</section> 

<section class="cta-block">
	<div class="container">
		<div class="cta-block__row">
			<div class="cta-block__content">
				<h2>Empowering Your Career with Expert ERP Training and Placement Assistance </h2>
							</div>
			
							<a class="btn btn--white btn--on-white schedule-call">Enroll Now!</a>
						
		</div>
</section>
<script>
        document.querySelectorAll('.accordion__trigger').forEach(trigger => {
            trigger.addEventListener('click', () => {
                const isActive = trigger.classList.contains('active');

                document.querySelectorAll('.accordion__trigger').forEach(item => {
                    item.classList.remove('active');
                    item.nextElementSibling.style.display = 'none';
                });

                if (!isActive) {
                    trigger.classList.add('active');
                    trigger.nextElementSibling.style.display = 'block';
                }
            });
        });
    </script>


</body>
</html>