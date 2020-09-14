<?php
/**
* The template for displaying pages.
*
* @package Salient WordPress Theme
* @version 10.5
*/

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header();
nectar_page_header( $post->ID );
$nectar_fp_options = nectar_get_full_page_options();
setlocale(LC_ALL, 'pt_BR');

?>

<div class="container-wrap single-boletim">
	<div class="<?php if ( $nectar_fp_options['page_full_screen_rows'] !== 'on' ) { echo 'container'; } ?> main-content">
		<div class="row">
			
			<?php
			
			nectar_hook_before_content(); 
			
			if ( have_posts() ) :
				while ( have_posts() ) :

					$date = DateTime::createFromFormat('Ymd', get_field('data'));
					$timestamp = strtotime(get_field('data'));
					$parsedDate = strftime('%d %B, %G', $timestamp);

					$date ? $date_output = $parsedDate : $date_output = '-';
					
					the_post();
					echo '<div style="display: none;">' . get_the_content() . '</div>';
					echo '<a href="javascript:history.back()" class="page-voltar-button">Voltar</a>';
					echo '<span>Boletim ' . get_field(numero_do_boletim) . '</span>';
					echo '<h1 class="page-title ">' . get_the_title() . '</h1>';
					echo '<h3>' . $date_output . '</h3>';
					echo '<iframe class="boletim-container" src="' . get_field(url). '"></iframe>';
					
						
				endwhile;
			endif;
			
			nectar_hook_after_content();
			
			?>
			
		</div><!--/row-->
	</div><!--/container-->
</div><!--/container-wrap-->

<?php get_footer(); ?>