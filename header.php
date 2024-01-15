<!DOCTYPE html>
<html lang="en">
<head>
    
  <title><?php the_title() ?></title>

  <!-- <link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
  
  <link rel="stylesheet" type="text/css" href="./assets/css/themify-icons.css">
  
  <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">

  <link rel="stylesheet" type="text/css" href="./assets/vendor/animate/animate.css">
  
  <link rel="stylesheet" type="text/css" href="./assets/vendor/owl-carousel/owl.carousel.css">
  
  <link rel="stylesheet" type="text/css" href="./assets/vendor/perfect-scrollbar/css/perfect-scrollbar.css">
  
  <link rel="stylesheet" type="text/css" href="./assets/vendor/nice-select/css/nice-select.css">
  
  <link rel="stylesheet" type="text/css" href="./assets/vendor/fancybox/css/jquery.fancybox.min.css">
  
  <link rel="stylesheet" type="text/css" href="./assets/css/virtual.css">
  
  <link rel="stylesheet" type="text/css" href="./assets/css/topbar.virtual.css"> -->
</head>

    <!-- Topbar End -->
<body class="theme-red">
<style>
    .page-home::before {
        background: linear-gradient(rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.5)), url('<?php echo esc_url(get_theme_mod('hero_image')); ?>') !important;
        background-size: cover !important;
    }
</style>

<?php get_template_part('includes/navbar', 'content');?>

<?php wp_head();?>
