<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php 
        $descripcion = get_field('descripcion', 'option');
        $imgOG = get_field('imagen_og', 'option');
    ?>
    <!-- OGt -->
    <meta property="og:title" content="<?php bloginfo('name'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_ES">
    <meta property="og:image" content="<?php echo $imgOG; ?>">
    <meta property="og:description" content="<?php echo $descripcion; ?>">
    <meta property="og:image:type" content="image/jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="628">
    <!-- /OG -->

  <?php wp_head(); ?>
  <link rel='stylesheet' id='dashicons-css'  href='<?php bloginfo('template_url'); ?>/bower_components/OwlCarousel/owl-carousel/owl.carousel.css' type='text/css' media='all' />   
</head>
