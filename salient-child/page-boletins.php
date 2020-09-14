<?php
/**
* template name: Boletins
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

<div class="container-wrap">
	<div class="<?php if ( $nectar_fp_options['page_full_screen_rows'] !== 'on' ) { echo 'container'; } ?> main-content">
		<div class="row">
			
      <?php
      echo '<h1 class="page-title">' . get_the_title() . '</h1>';
      echo '<div class="boletins-container">';
        $boletins_query = new WP_Query( array( 
          'post_type'=> 'boletins', 
          'posts_per_page' => -1,
          'meta_key'  => 'data', 
          'orderby'   => 'meta_value_num',
          'order'     => 'DESC', ) );
        
        
        if ( $boletins_query->have_posts() ) :
          while ( $boletins_query->have_posts() ) :
            
            $boletins_query->the_post(); 

            $date = DateTime::createFromFormat('Ymd', get_field('data'));
            $timestamp = strtotime(get_field('data'));
            $parsedDate = strftime('%d %B, %G', $timestamp);

            $date ? $date_output = $parsedDate : $date_output = '-';
            $date ? $year = $date->format('Y') : $year = false;

            if($year && $year != $year_counter){
              $year_counter = $year;
              echo '<h2 class="year-sep">' . $year_counter . '</h2>';
            }
            
            echo '<a class="boletim-block" href="'. get_permalink() .'">';
              echo '<span>Boletim ' . get_field(numero_do_boletim) . '</span>';
              echo '<h3>' . $date_output . '</h3>';
              echo '<h2>' . get_the_title() . '</h2>';
            echo '</a>';
              
          endwhile;
        endif;

      echo '</div>';
			
			?>
			
		</div><!--/row-->
	</div><!--/container-->
</div><!--/container-wrap-->

<?php get_footer(); ?>