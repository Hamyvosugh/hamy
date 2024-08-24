<?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_content(); // This is where Elementor will inject its content
    endwhile;
else :
    echo '<p>No content found</p>';
endif;
?>