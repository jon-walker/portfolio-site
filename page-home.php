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

			<section class="home_skill home_img-right">
				<h2 class="home_skill_title"></h2>
				<p>Blurb</p>
				<!-- New WP Query - Pull PJ with tag of ___ -->
				<article>
					<h3><a href="#">PJ TITLE</a></h3>
					<p><img src="" alt=""></p>
					<p>Learn More</p>
				</article>
				<!-- Close WP Query -->
			</section>

			<section class="home_skill home_img-left">
				<h2 class="home_skill_title"></h2>
				<p>Blurb</p>
				<!-- New WP Query - Pull PJ with tag of ___ -->
				<article>
					<h3><a href="#">PJ TITLE</a></h3>
					<p><img src="" alt=""></p>
					<p>Learn More</p>
				</article>
				<!-- Close WP Query -->
			</section>
		<!-- ==== /div.container ==== -->
		</div>

<?php get_footer(); ?>
