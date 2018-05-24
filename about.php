<!DOCTYPE html>
<html lang="en">
<head>
<title>About Us</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/news_post_styles.css">
<link rel="stylesheet" type="text/css" href="styles/news_post_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/elements_styles.css">
<link rel="stylesheet" type="text/css" href="styles/elements_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/courses_styles.css">
<link rel="stylesheet" type="text/css" href="styles/courses_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<?php
		include 'include/navbar.php';
	?>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/news_background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>About Us</h1>
		</div>
	</div>

	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">
				
				<!-- News Post Column -->

				<div class="col-lg-8">
					
					<div class="news_post_container">
						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image">
								<img src="images/images/img1.jpg" alt="Pupils">
							</div>
							<!--
								<div class="news_post_top d-flex flex-column flex-sm-row">
								<div class="news_post_date_container">
									<div class="news_post_date d-flex flex-column align-items-center justify-content-center">
										<div>18</div>
										<div>dec</div>
									</div>
								</div>
								<div class="news_post_title_container">
									<div class="news_post_title">
										<a href="news_post.php">Why do you need a qualification?</a>
									</div>
									<div class="news_post_meta">
										<span class="news_post_author"><a href="#">By Christian Smith</a></span>
										<span>|</span>
										<span class="news_post_comments"><a href="#">3 Comments</a></span>
									</div>
								</div>
							</div>
							 -->
							<div class="news_post_text">
								<p><span>The Blessed Junior Academy </span>was a brainchild of <span>Madam Eunice Atieno</span> which came to be actualized and realized with the help of <span>Madam Grace Omoro</span> who has a vast experience in child education.</p>
								<p>The school was started on 7th of May 2012 with 7 pupils and 3 teachers.
									In November 2012, the school had grown to a population of 40 pupils.</p>
									<p>At the beginning of 2018, the school realized a population of <span>399 pupils</span> and hopes to increase the population in the coming years and to ensure its motto of <span>‘Pride in Excellence’</span> is achieved.
								</p>
							</div>


							
						</div>

					</div>
					
					
				</div>

				<!-- Sidebar Column -->

				<div class="col-lg-4">
					<!-- Accordions -->
						<div class="elements_accordions">

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center"> Early childhood education (ECDE)</div>
								<div class="accordion_panel">
									<ul class="list-group list-group-flush">
										<li class="list-group-item">Kindergarten year 1 (BABY CLASS)</li>
										<li class="list-group-item">Kindergarten year 2 (NURSERY)</li>
										<li class="list-group-item">Kindergarten year 3 (PRE-UNIT) </li>

									</ul>
								</div>
							</div>

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center"> Basic education (KCPE)</div>
								<div class="accordion_panel">
									<ul class="list-group list-group-flush">
										<li class="list-group-item">Lower primary: 4 years (STANDARD ONE-FOUR)</li>
										<li class="list-group-item"> Upper primary: 4 years (STANDARD FIVE-EIGHT)</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="news_post_quote">
								<p class="news_post_quote_text"><span>E</span>ducation is the key to unlocking success, nurture the Young for the better future</p>
							</div>
				</div>
			</div>
		</div>
	</div>


<!-- Milestones -->
		
		<div class="milestones">
			
			<div class="milestones_container">
				<div class="milestones_background" style="background-image:url(images/milestones_background.jpg)"></div>
				
				<div class="container">
					<div class="row">
						
						<!-- Milestone -->
						<div class="col-lg-4 milestone_col">
							<div class="milestone text-center">
								<div class="milestone_icon"><img src="images/milestone_1.svg" alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
								<div class="milestone_counter" data-end-value="400">0</div>
								<div class="milestone_text">Current Students</div>
							</div>
						</div>

						<!-- Milestone -->
						<div class="col-lg-4 milestone_col">
							<div class="milestone text-center">
								<div class="milestone_icon"><img src="images/milestone_2.svg" alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
								<div class="milestone_counter" data-end-value="20">0</div>
								<div class="milestone_text">Certified Teachers</div>
							</div>
						</div>

						<!-- Milestone -->
						<!--
							<div class="col-lg-3 milestone_col">
							<div class="milestone text-center">
								<div class="milestone_icon"><img src="images/milestone_3.svg" alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
								<div class="milestone_counter" data-end-value="39">0</div>
								<div class="milestone_text">Approved Courses</div>
							</div>
						</div>
						-->

						<!-- Milestone -->
						<div class="col-lg-4 milestone_col">
							<div class="milestone text-center">
								<div class="milestone_icon"><img src="images/milestone_4.svg" alt="https://www.flaticon.com/authors/zlatko-najdenovski"></div>
								<div class="milestone_counter" data-end-value="150" data-sign-before="+">0</div>
								<div class="milestone_text">Graduate Students</div>
							</div>
						</div>

					</div>
				</div>
			</div>

		</div>

<!-- Popular -->

	<div class="popular page_section">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h1>Extra activities</h1>
					</div>
				</div>
			</div>

			<div class="row course_boxes">
				
				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/images/extra1.jpg" alt="">
						<div class="card-body text-center">
							<div class="card-title">Orphans and vulnerlable children</div>
						</div>
						<div class="elements_accordions">
							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center">more details</div>
								<div class="accordion_panel">
									<p>The Blessed Junior Academy is a community based organization that not only educates the children but also caters for the needs of the less fortunate in the society. The school has sixty orphans and vulnerable children who are fully catered for in terms of education, meals in the school and whose well-being is sensitive to the management especially when they go home after school. This orphans were identified and certified by a thorough background check to ensure they fully qualify for the school’s support program. The process of identification of the vulnerable and orphaned children is done annually by the help of local authorities.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/images/extra2.jpg" alt="">
						<div class="card-body text-center">
							<div class="card-title"><a> Environment Conservation</a></div>
						</div>
						<div class="elements_accordions">
							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center"> more details</div>
								<div class="accordion_panel">
									<p>Global warming is a major concern in Kenya and the world as a whole. Unpredicted weather patterns which includes long periods of drought and flash floods has hit Kenya due to terrible loss of forest cover. Owing to this factor the management of The Blessed Junior Academy has put in place various environmental conservation activities to take care of the Mother Nature. We have a tree planting day where children are taught and given an opportunity to contribute to the environmental conservation. Equally, there has been consecutive days set aside for collection of rubbish around the school neighboring community to instill tidiness not only to our pupils but also our community; this act has been greatly supported by the area Chief and the members of the community at large.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Popular Course Item -->
				<div class="col-lg-4 course_box">
					<div class="card">
						<img class="card-img-top" src="images/images/extra3.jpg" alt="">
						<div class="card-body text-center">
							<div class="card-title"><a>The Elderly</a></div>
						</div>
						<div class="elements_accordions">
							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center">more details</div>
								<div class="accordion_panel">
									<p>Besides the orphans, the school management is also interested in ensuring the well-being of the elderly who are not able to support themselves in the community. That said, the school management representatives visits the elderly in their homes providing food and clothing as a way of giving back to the community for accommodating the school and supporting its vision and mission. The management also provides shelter to the elderly by constructing houses for them. Our vision to this act of kindness is to have a capacity home for the elderly where they can all stay together and have proper and keen attention.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				

			</div>
		</div>		
	</div>


	<!-- Footer -->

	<?php
		include 'include/footer.php';
	?>
	<script src="js/elements_custom.js"></script>