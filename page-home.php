<?php
/*
Template Name: Home
*/
get_header(); ?>

<h1>I'm Jon, A Digital Marketer and Web Designer.</h1>

<section class="bkg splash" id="home">
	<p><img class="logo" src="<?= get_template_directory_uri(); ?>/images/logo.png" alt="Jonathan Walker"></p>
	<h2 class="tagline">Your Guide Through a Digital World</h2>
	<p class="action"><a href="#pj-wrapper" class="smoothScroll">See For Yourself</a></p>
	<p class="action "><a href="#home_intro" class="smoothScroll"><img class="action arrow-bounce" src="<?= get_template_directory_uri(); ?>/images/buttons/arrow-dn.png" alt="Learn More About Jon." title="Learn More About Jon."></a></p>
</section>

<!-- **** Container **** -->
<div id="container">

	<!--****  Content Section ****-->
	<section id="home_intro">
		<!-- WP Loop Here Pulls Editor Content -->
	</section>

	<!--**** Projects Index ****-->
	<section class="pj-index">
		<h2>Latest Projects</h2>
	<!-- Create New WP Query Here -->
	<!-- Begin Loop which will run 3 times -->
		<article>
			<h3><a href="#">PJ TITLE</a></h3>
			<p><img src="" alt=""></p>
			<p>Learn More</p>
		</article>
	<!-- Close Loop and WP Query -->
	</section>
	<!-- ==== /section.pj-index ==== -->

	<!--******** SKILLS FEATURES BEGIN ********-->

	<!--**** Strategic Planning Highlight ****-->
	<section class="home_skill home_img-right">
		<h2 class="home_skill_title">Strategic Planning</h2>
		<p>My work begins with trying to grasp the big picture. Where does the organization stand now? Where do we want to go? Research and analysis up front allow me to make better decisions moving forward.</p>
		<!-- New WP Query - Pull PJ with tag of ___ -->
		<article>
			<h3><a href="#">PJ TITLE</a></h3>
			<p><img src="" alt=""></p>
			<p>Learn More</p>
		</article>
		<!-- Close WP Query -->
	</section>

	<!--**** Coding Highlight ****-->
	<section class="home_skill home_img-left">
		<h2 class="home_skill_title">Coding Skills</h2>
		<p>A good plan doesn't mean much if you can't execute it. Fortunately, I have a firm grip on coding languages like CSS, Javascript, and PHP. As a designer, I have built and maintained e-commerce sites for national brands. I even coded the WordPress theme for the site you are on now.</p>
		<!-- New WP Query - Pull PJ with tag of ___ -->
		<article>
			<h3><a href="#">PJ TITLE</a></h3>
			<p><img src="" alt=""></p>
			<p>Learn More</p>
		</article>
		<!-- Close WP Query -->
	</section>

	<!--**** Graphics Highlight ****-->
	<section class="home_skill home_img-right">
		<h2 class="home_skill_title">Graphics Skills</h2>
		<p>Visual impact matters, so you need a designer with graphic skills, too. As a graphic designer for Advantus, I design marketing materials for both print and web every day. I understand how to integrate all of the pieces into a compelling whole.</p>
		<!-- New WP Query - Pull PJ with tag of ___ -->
		<article>
			<h3><a href="#">PJ TITLE</a></h3>
			<p><img src="" alt=""></p>
			<p>Learn More</p>
		</article>
		<!-- Close WP Query -->
	</section>

	<!--**** Closing Arugments ****-->
	<section class="home_skill home_img-right">
		<h2 class="home_skill_title">Ready To Be Part of Your Team</h2>
		<p>All that said, I know my limits, too. As you look around my site, please know that although I'm highlighting my work lots of talented people contributed. I have been a part of some great teams, and I can't wait to be a part of yours.</p>
		<p class="home_contact_button">Contact Me</p>
	</section>
	<!-- ==== /SKILLS FEATURES ==== -->

<!-- ==== /div.container ==== -->
</div>

<?php get_footer(); ?>
