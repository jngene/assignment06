<?php 
$currentPage = "IEEE ・ UofR Chapter";
include "inc/head.inc";
?>

<body>
		<nav class="navbar is-primary">
			<div class="container">
				<div class="navbar-brand">
					<a class="navbar-item" href="index.php" style="font-weight:bold;">
						<img src="images/logo.png" alt="IEEE logo">
					</a>
					<span class="navbar-burger burger" data-target="navMenu">
						<span></span>
						<span></span>
						<span></span>
					</span>
				</div>
				<div id="navMenu" class="navbar-menu">
					<div class="navbar-end">
						<a href="history.php" class="navbar-item">About IEEE</a>
						<a href="ur.php" class="navbar-item is-active">UofR Chapter</a>
						<a href="rochester.php" class="navbar-item">Rochester Section</a>
						<a href="contact.php" class="navbar-item">Contact Us</a>
					</div>
				</div>
			</div>
		</nav>
	<main>
		<figure class = "box1">
				<aside class = "ur-aside">
						<h2 class="subtitle is-4">Our Team</h2>
						<h3>President</h3>
						<span>Clara Martinez Rubio</span>
						<h3>Vice President</h3>
						<span>Eugene Nakamoto</span>
						<h3>Business Manager</h3>
						<span>Duncan Dang</span>
						<h3>Event Chair</h3>
						<span>Abrar Rahman</span>
						<h3>Secretary</h3>
						<span>Rose McDonogh</span>
						<h3>Advisor</h3>
						<span>Madeline Aborn</span>
					</aside>
			<img src="images/ur-ieee.jpg" class="ur-pic" alt="UR Chapter celebrating IEEE day">
			
		</figure>
		<section>
			<h2 class="subtitle is-4">Mission & Vision</h2>
			<p>
				IEEE's core purpose is to foster technological innovation and excellence for the benefit of humanity.
			</p>
			<p>
				IEEE will be essential to the global technical community and to technical professionals everywhere, and be universally recognized for the contributions of technology and of technical professionals in improving global conditions.
			</p>
			<p>
				The University of Rochester Chapter aims to provide a network for young engineers to launch their careers. Through events and activities we strive to provide our members with the best possible resources to suceed in their academic and professional goals.
			</p>
		</section>
		<section>
			<h2 class="subtitle is-4">Upcoming Events</h2>
			<ul>
				<li>
					<h3>Career Center Advising</h3>
					<li>Tuesday, December 10th</li>
					<li>630-8pm</li>
					<li>Douglas 403</li>
					<p>Looking to enhance your career readiness? We are hosting a resume/CV workshop and internship help workshop. Take this opportunity to take a study break and join us to plan for your upcoming job plans.</p>
				</li>
				<li>
					<h3>Project Opportunities at the Med Center</h3>
					<li>Friday, January 17th</li>
					<li>630-8pm</li>
					<li>Wegmans 1400</li>
					<p>Dr. Daniel Brown and Dr. Susan Racter will be joining us to present their current projects and the opportunities that are open to join their team. They work in the Strong Hospital and their research studies how to improve muscle recovery through the use of robotics. Is it possible to predict muscle recovery through the signal reading of muscle pulses? Come join us for an incredible opportunity to get involved in ground-breaking research projects.</p>
				</li>
				</li>
			</ul>
		</section>
		<section>
			<h2 class="subtitle is-4">Past Events</h2>
			<ul>
				<li>
					<h3>Robotics Panel</h3>
					<li>Friday, November 15th</li>
					<li>3-4pm</li>
					<li>Sloan Auditorium</li>
					<p>What does a real-life robotics career look like? We will be hosting a panel of faculty, research, and industry experts in various fields of robotics. We’ll discuss the diverse fields of robotics as well as current and future research trends. Come hear about the robotics work going on at UR and in the area! Free food will be provided.</p>
				</li>
				<li>
					<h3>Climate Change Panel</h3>
					<li>Friday, October 18th</li>
					<li>5-6pm</li>
					<li>Wegmas 1400</li>
					<p>Curious about the current state of Climate Change? Prof. Berger (Earth and Environmental Science Dept.) & Prof. Porosoff (Chemical Engineering Dept.) will present on the current state of climate change, its impact, and possible solutions.</p>
				</li>
				<li>
					<h3>Find your Co-Founders</h3>
					<li>Thursday, October 17th</li>
					<li>6-730pm</li>
					<li>Gowen</li>
					<p>Pitching business ideas/startups for 3-4 mins with the purpose of helping students meet co-founders and practice their pitching skills.</p>
				</li>
			</ul>
		</section>
		
		
	</main>

	<footer class="footer">
			© 2019 Institute of Electrical and Electronics Engineers
		</footer>

		<?php include "inc/is-active.inc";?>

</body>
</html>

