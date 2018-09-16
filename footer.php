        <footer>
            <p><small>&copy; Jonathan Walker <?= get_the_date('Y'); ?></small></p>
            <p><small><a href="<?= get_home_url(); ?>/privacy-policy/" target="_blank">Privacy Policy</a></small></p>
        </footer>

        <?php wp_footer(); ?>

		<!-- SCRIPTS-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/main.min.js"></script>
	</body>
</html>
