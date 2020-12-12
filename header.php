<?php
/**
 * Every WordPress theme has a header file - it is used to prepare the <head> and open the body.
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Basic theme</h1>
                <p>In the header.php file.</p>
            </div>
        </div>
    </div>
</header>