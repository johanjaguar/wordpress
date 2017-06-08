<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?> class="no-js">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
        <title><?php if (is_home()) {
                    echo bloginfo('name');
                } elseif (is_404()) {
                    echo '404 No Encontrado';
                } elseif (is_category()) {
                    echo 'Categoria:';
                    wp_title('');
                } elseif (is_search()) {
                    echo 'Resultados de la Busqueda';
                } elseif (is_day() || is_month() || is_year()) {
                    echo 'Archivos:';
                    wp_title('');
                } else {
                    echo wp_title('');
                } ?></title>

                <link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/cdn/css/bootstrap.min.css">
                <link rel="stylesheet" href="<?php echo get_bloginfo('template_url'); ?>/style.css">

                <link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>

        <!--        <script src="<?php echo get_bloginfo('template_url'); ?>/js/modernizr-menu.custom.js"></script>-->
        <?php wp_head(); ?>
        <?php if (is_search()) { ?><meta name="robots" content="noindex, nofollow" /> <?php } ?>
    </head>
