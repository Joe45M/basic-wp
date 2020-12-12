<?php

/**
 * This file has the highest priority for homepage display.
 */

get_header();
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h2>Welcome to the homepage!</h2>
        </div>
    </div>
    <?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            ?>
            <div class="row">
                <div class="col-12">echo "# basic-wp" >> README.md
                    <h4 class="font-weight-normal">
                        <a href="<?php the_permalink(); ?>"><?php the_title() ?></a>
                    </h4>
                </div>
            </div>
            <?php
        }
    }
    ?>
</div>

<?php

get_footer();

?>
