<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Equality_Child
 */

get_header();
?>

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>



		<div class="container-fluid">
		    <!-- Control the column width, and how they should appear on different devices -->
		    <div class="row">
		      <div class="col-sm-6 justify-content-center">
		            <h1>La forma más fácil y segura de manejar tu dinero </h1>
		            <hr/>
		            <p>Solicita tu tarjeta desde la app y disfruta de todas las ventajas que tiene para ti, sin comisiones y sin anualidades.</p>

		      </div>
		      <div class="col-sm-6  justify-content-center">
		      		<img src="/" alt="Peibo">
		      </div>
		    </div>
		</div>

<?php
get_footer();
