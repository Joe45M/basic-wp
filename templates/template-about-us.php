<?php

/**
 * Template name: About template
 */

get_header();
?>

<div class="container">
    About us content!

    <?php the_title() ?>
    <div class="page-content">
        <?php the_content() ?>
    </div>
</div>

<?php
get_footer();