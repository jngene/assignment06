<?php 
$currentPage = "IEEE ・ Rochester Section";
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
						<a href="ur.php" class="navbar-item">UofR Chapter</a>
						<a href="rochester.php" class="navbar-item is-active">Rochester Section</a>
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
						<span>Bo Yuan</span>
						<h3>Vice President</h3>
						<span>Peter Anderson</span>
						<h3>Business Manager</h3>
						<span>Karl Hirschman</span>
						<h3>Event Chair</h3>
						<span>Eric Brown</span>
						<h3>Secretary</h3>
						<span>Sean Rommel</span>
						<h3>Advisor</h3>
						<span>Thomas Howard</span>
					</aside>
			<div class="arch"><img src="images/roc-section.jpg" alt="Rochester Section header picture"></div>
		</figure>
		<section>
			<h2 class="subtitle is-4"> Mission & Vision</h2>
			<p>
				IEEE's core purpose is to foster technological innovation and excellence for the benefit of humanity.
			</p>
			<p>
				IEEE will be essential to the global technical community and to technical professionals everywhere, and be universally recognized for the contributions of technology and of technical professionals in improving global conditions.
			</p>
		</section>
		<section>
			<h2 class="subtitle is-4">Upcoming Events</h2>
			<ul>
				<li>
					<h3>Rochester Section EXCOM meeting</h3>
					<li>Saturday, December 16th</li>
					<li>1150am-1pm</li>
					<li>Tandoor of India</li>
					<p>The monthly Rochester IEEE Executive Committee meeting brings together all of the leaders of the Section, Chapters, and Groups.   ExCom members: Please send your updates on past and upcoming events to Eric to be included on the agenda prior to the meeting. We review plans for upcoming Rochester meetings within our Section, Chapters, and groups at this meeting.</p>
				</li>
			</ul>
		</section>
		<section>
			<h2 class="subtitle is-4">Past Events</h2>
			<ul>
				<li>
					<h3>2019 Western New York Image and Signal Processing Workshop</h3>
					<li>Saturday, October 4th</li>
					<li>830am-5pm</li>
					<li>Room: 1100, Bldg: GLE</li>
					<p>The Western New York Image and Signal Processing Workshop (WNYISPW) is a venue for promoting image and signal processing research in our area and for facilitating interaction between academic researchers, industry researchers, and students. The workshop comprises both oral and poster presentations.</p>
				</li>
				<li>
					<h3>Tackling the Cocktail Party Problem for Hearing Devices: Solutions, Challenges and Opportunities</h3>
					<li>Friday, September 28th</li>
					<li>4-6pm</li>
					<li>Room: 1100, Bldg: GLE</li>
					<p>The cocktail party problem has remained to be one of the most challenging problems for hearing devices even after decades of extensive research. In this talk, we will introduce and discuss our research on the multi-microphone speech enhancement with an emphasis on robust and practical real-time algorithms for hearing devices. </p>
				</li>
				<li>
					<h3>NVIDIA Fundametals of Deep Learning For Natural Language Processing</h3>
					<li>Wednesday, September 26</li>
					<li>12-6pm</li>
					<li>Room: 1100, Bldg: GLE</li>
					<p>Explore how to convert text to machine understandable representation and train Machine Translators from one language to another using natural language processing (NLP).</p>
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

