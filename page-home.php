<?php
/*
Template Name: Home
*/
get_header(); ?>

<h1>I'm Jon, A Digital Marketer and Web Designer.</h1>

<section class="bkg splash" id="home">
	<p><img class="logo" src="<?= get_template_directory_uri(); ?>/img/logo.png" alt="Jonathan Walker"></p>
	<h2 class="tagline">Your Guide Through a Digital World</h2>
    <div class="home_call-to-action">
        <p class="home_action_text"><a href="#home_intro" class="smoothScroll">See For Yourself</a></p>
    	<p class="home_action"><a href="#home_intro" class="smoothScroll"><img class="action arrow-bounce" src="<?= get_template_directory_uri(); ?>/img/arrow-dn.png" alt="Learn More About Jon." title="Learn More About Jon."></a></p>
    </div>
</section>

<!-- **** Container **** -->
<div id="container">

	<!--****  Content Section ****-->
	<section id="home_intro">
		<!-- WP Loop Here Pulls Editor Content -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		the_content();
		endwhile;
		endif;?>
        <p class="home_cta">Where to Next?</p>
        <div class="home_cta_buttons">
            <p class="button"><a href="#skill1">Tell Me More</a></p>
            <p class="button"><a href="<?php echo home_url(); ?>/projects/">Show Me Your Work</a></p>
        </div>
	</section>

	<!--******** SKILLS FEATURES BEGIN ********-->

	<!--**** Strategic Planning Highlight ****-->
	<section class="home_skill home_img-right">
        <figure  id="skill1">
		    <img src="<?= get_template_directory_uri(); ?>/img/strategy-doodle.jpg" alt="Planning the Perfect Design">
            <figcaption></figcaption>
		</figure>
        <h2 class="home_skill_title">Strategic Planning</h2>
		<p>My work begins with trying to grasp the big picture. Where does the organization stand now? Where do we want to go? Research and analysis up front allow me to make better decisions moving forward.</p>
	</section>

	<!--**** Coding Highlight ****-->
	<section class="home_skill home_img-left">
        <figure>
		    <img src="<?= get_template_directory_uri(); ?>/img/code-inspector.jpg" alt="Coding Robot Takes a Peek">
            <figcaption></figcaption>
		</figure>
		<h2 class="home_skill_title">Coding Skills</h2>
		<p>A good plan doesn't mean much if you can't execute it. Fortunately, I have a firm grip on coding languages like CSS, Javascript, and PHP. As a designer, I have built and maintained e-commerce sites for national brands. I even coded the WordPress theme for the site you are on now.</p>
	</section>

	<!--**** Graphics Highlight ****-->
	<section class="home_skill home_img-right">
		<h2 class="home_skill_title">Graphics Skills</h2>
		<p>Visual impact matters, so you need a designer with graphic skills, too. As a graphic designer for Advantus, I design marketing materials for both print and web every day. I understand how to integrate all of the pieces into a compelling whole.</p>
        <figure>
		    <img src="<?= get_template_directory_uri(); ?>/img/graphics-doodle.jpg" alt="Graphics">
            <figcaption></figcaption>
		</figure>
	</section>

	<!--**** Closing Arugments ****-->
	<section class="home_skill">
		<h2 class="home_skill_title">Ready To Be Part of Your Team</h2>
		<p>All that said, I know my limits, too. As you look around my site, please know that although I'm highlighting my work lots of talented people contributed. I have been a part of some great teams, and I can't wait to be a part of yours.</p>
		<p class="home_contact button"><a href="<?php echo home_url(); ?>/contact/>">Contact Me</a></p>
	</section>
	<!-- ==== /SKILLS FEATURES ==== -->

<!-- ==== /div.container ==== -->
</div>

<?php get_footer(); ?>
