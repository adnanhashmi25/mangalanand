<?php
/**
 * Header file.
 * 
 * @package custom-theme
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<title> Mangalanand Hospital</title>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-0PCJ7ZXV3S"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-0PCJ7ZXV3S');
	gtag('config', 'AW-10928539975');
</script>
	<!-- Event snippet for Website lead conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-10928539975/GTN9COaptcYDEMeSkdso',
      'event_callback': callback
  });
  return false;
}
	document.addEventListener( 'wpcf7mailsent', function( event ) {
		gtag_report_conversion()
}, false );
</script>


</head>
<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
<header>
    <?php get_template_part('template-parts/header/header-info') ?>
    <?php get_template_part('template-parts/header/header-info1') ?>
    <?php get_template_part('template-parts/header/header-nav') ?>
</header>