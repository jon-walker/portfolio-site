<div class="pj_container">
<?php
$project_loop = new WP_Query(array(
    'post_type' => 'projects',
    'order_by'  => 'date'
));
if ($project_loop -> have_posts()) :
    $i = 0;
    while ($project_loop -> have_posts() && $i < 3) :
        $project_loop -> the_post();
?>

    <article class="pj">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></p>
        <p class="pj_see-more"><a href="<?php the_permalink(); ?>" target="_blank">Learn More</a></p>
    </article>

<?php $i++; endwhile;
endif; ?>
</div>
