<ul class="projects_skills">
    <?php

    $pj_skills_tags = get_the_terms( $post->ID, 'jw_skills' );

    $pj_skills_terms = array();
    foreach ($pj_skills_tags as $term ) {
        $pj_skills_terms[] = $term->name;
    };
    $pj_post_link = get_the_permalink();

    // Add Photoshop Icon If Listed As a Skill
    if ( in_array('Photoshop', $pj_skills_terms ) ) {
        $ps_icon_path = get_template_directory_uri() . '/img/photoshop-icon.png';
        echo '<li class="pj_skills_icon"><a href="'. $pj_post_link .'"><img src="' . $ps_icon_path . '" alt="Photoshop" title="Photoshop"></a></li>';
    }
    // Add Illustrator Icon If Listed
    if ( in_array('Illustrator', $pj_skills_terms ) ) {
        $ai_icon_path = get_template_directory_uri() . '/img/illustrator-icon.png';
        echo '<li class="pj_skills_icon"><a href="'. $pj_post_link .'"><img src="' . $ai_icon_path . '" alt="Illustrator" title="Illustrator"></a></li>';
    }
    // Add InDesign Icon If Listed
    if ( in_array('Indesign', $pj_skills_terms ) ) {
        $id_icon_path = get_template_directory_uri() . '/img/indesign-icon.png';
        echo '<li class="pj_skills_icon"><a href="'. $pj_post_link .'"><img src="' . $id_icon_path . '" alt="Indesign" title="Indesign"></a></li>';
    }
    // Add HTML Icon If Listed
    if ( in_array('HTML', $pj_skills_terms ) ) {
        $html_icon_path = get_template_directory_uri() . '/img/html5-icon.png';
        echo '<li class="pj_skills_icon"><a href="'. $pj_post_link .'"><img src="' . $html_icon_path . '" alt="HTML" title="HTML"></a></li>';
    }
    // Add CSS Icon If Listed
    if ( in_array('CSS', $pj_skills_terms ) ) {
        $css_icon_path = get_template_directory_uri() . '/img/css-icon.png';
        echo '<li class="pj_skills_icon"><a href="'. $pj_post_link .'"><img src="' . $css_icon_path . '" alt="CSS" title="CSS"></a></li>';
    }
    // Add Javascript Icon If Listed
    if ( in_array('Javascript', $pj_skills_terms ) ) {
        $js_icon_path = get_template_directory_uri() . '/img/js-icon.png';
        echo '<li class="pj_skills_icon"><a href="'. $pj_post_link .'"><img src="' . $js_icon_path . '" alt="Javascript" title="Javascript"></a></li>';
    }
    // Add PHP Icon If Listed
    if ( in_array('PHP', $pj_skills_terms ) ) {
        $php_icon_path = get_template_directory_uri() . '/img/php-icon.png';
        echo '<li class="pj_skills_icon"><a href="'. $pj_post_link .'"><img src="' . $php_icon_path . '" alt="PHP" title="PHP"></a></li>';
    }
    // Add Analytics Icon If Listed
    if ( in_array('Google Analytics', $pj_skills_terms ) ) {
        $ga_icon_path = get_template_directory_uri() . '/img/analytics-icon.png';
        echo '<li class="pj_skills_icon"><a href="'. $pj_post_link .'"><img src="' . $ga_icon_path . '" alt="Google Analytics" title="Google Analytics"></a></li>';
    }
    // Add Social Media Marketing Icon If Listed
    if ( in_array('Social Media Marketing', $pj_skills_terms ) ) {
        $fb_icon_path = get_template_directory_uri() . '/img/fb-icon.png';
        echo '<li class="pj_skills_icon"><a href="'. $pj_post_link .'"><img src="' . $fb_icon_path . '" alt="Social Media Marketing" title="Social Media Marketing"></a></li>';
    }
    // Add Email Marketing Icon If Listed
    if ( in_array('Email Marketing', $pj_skills_terms ) ) {
        $email_icon_path = get_template_directory_uri() . '/img/email-icon.png';
        echo '<li class="pj_skills_icon"><a href="'. $pj_post_link .'"><img src="' . $email_icon_path . '" alt="Email Marketing" title="Email Marketing"></a></li>';
    }
    // Add Git Icon If Listed
    if ( in_array('Git', $pj_skills_terms ) ) {
        $git_icon_path = get_template_directory_uri() . '/img/git-icon.png';
        echo '<li class="pj_skills_icon"><a href="'. $pj_post_link .'"><img src="' . $git_icon_path . '" alt="Git" title="Git"></a></li>';
    }
    // Add WooCommerce Icon If Listed
    if ( in_array('WooCommerce', $pj_skills_terms ) ) {
        $woo_icon_path = get_template_directory_uri() . '/img/woo-icon.png';
        echo '<li class="pj_skills_icon"><a href="'. $pj_post_link .'"><img src="' . $woo_icon_path . '" alt="WooCommerce" title="WooCommerce"></a></li>';
    }
    // Add SEO Icon If Listed
    if ( in_array('SEO', $pj_skills_terms ) ) {
        $seo_icon_path = get_template_directory_uri() . '/img/seo-icon.png';
        echo '<li class="pj_skills_icon"><a href="'. $pj_post_link .'"><img src="' . $seo_icon_path . '" alt="SEO" title="SEO"></a></li>';
    }// Add SEM Icon If Listed
    if ( in_array('SEM', $pj_skills_terms ) ) {
        $sem_icon_path = get_template_directory_uri() . '/img/sem-icon.png';
        echo '<li class="pj_skills_icon"><a href="'. $pj_post_link .'"><img src="' . $sem_icon_path . '" alt="SEM including AdWords" title="SEM including AdWords"></a></li>';
    }
    // Add User Research Icon If Listed
    if ( in_array('UX', $pj_skills_terms ) ) {
        $ux_icon_path = get_template_directory_uri() . '/img/ux-icon.png';
        echo '<li class="pj_skills_icon"><a href="'. $pj_post_link .'"><img src="' . $ux_icon_path . '" alt="UX" title="UX"></a></li>';
    }
    ?>
</ul>
