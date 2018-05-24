<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Course - Contact</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
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
			<div class="home_background prlx" style="background-image:url(images/contact_background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Contact</h1>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					
					<!-- Contact Form -->
					<div class="contact_form">
						<div class="contact_title">Get in touch</div>
							<!-- success message after submission form -->
									<?php if (isset($_SESSION['msg'])):  ?>
								      <div class="msg">
								        <?php
								          echo $_SESSION['msg'];
								          unset($_SESSION['msg']);
								        ?>
								      </div>
								<?php endif ?>
						<div class="contact_form_container">
							<form action="db/cont.php" method="post">
								<input id="contact_form_name" class="input_field contact_form_name" type="text" placeholder="Name" required="required"  name="name">
								<input id="contact_form_email" class="input_field contact_form_email" type="email" placeholder="E-mail" required="required" name="email">
								<textarea id="contact_form_message" class="text_field contact_form_message" name="message" placeholder="Message" required="required" name="message"></textarea>
								<button id="contact_send_btn" type="submit" class="contact_send_btn trans_200" name="submit">send message</button>

								
							</form>
						</div>
					</div>
						
				</div>

				<div class="col-lg-4">
					<div class="about">
						<p class="about_text">The Blessed Junior Academy was a brainchild of Madam Eunice Atieno which came to be actualized and realized with the help of Madam Grace Omoro who has a vast experience in child education.</p>

						<div class="contact_info">
							<ul>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									Blvd Libertad, 34 m05200 Arévalo
								</li>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									0034 37483 2445 322
								</li>
								<li class="contact_info_item">
									<div class="contact_info_icon">
										<img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>hello@company.com
								</li>
							</ul>
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