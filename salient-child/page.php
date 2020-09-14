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

?>

<div class="container-wrap">
	<div class="<?php if ( $nectar_fp_options['page_full_screen_rows'] !== 'on' ) { echo 'container'; } ?> main-content">
		<div class="row">
			
			<?php
			
			nectar_hook_before_content(); 
			
			if ( have_posts() ) :
				while ( have_posts() ) :
					
					echo '<a href="javascript:history.back()" class="page-voltar-button">Voltar</a>';
					echo '<h1 class="page-title">' . get_the_title() . '</h1>';
					the_post();
					the_content();

							if( have_rows('coordenadores') ): 
								echo '<div class="coordenadores-container">';

									while( have_rows('coordenadores') ) : the_row();
										echo '<div class="c__coordenador">';
											echo '<div class="c__foto" style="background-image: url('. get_sub_field(foto) .')"></div>';

											echo '<div class="c__texto">' . get_sub_field(nome) .'</div>';
											echo '<div class="c__links">
															<a href="mailto:'.get_sub_field(email).'" target="_blank"><img src="http://dev.observatoriodasmetropoles.net.br/wp-content/uploads/2020/07/mail.png" /></a>
															<a href="'.get_sub_field(link).'" target="_blank"><img src="http://dev.observatoriodasmetropoles.net.br/wp-content/plugins/team-members/inc/img/links/website.png" /></a>
														</div>';
										echo '</div>';
									endwhile; 
									
								echo '</div>';
							endif;
						
				endwhile;
			endif;
			
			nectar_hook_after_content();
			
			?>
			
		</div><!--/row-->
	</div><!--/container-->
</div><!--/container-wrap-->

<?php get_footer(); ?>