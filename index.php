<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<div id="slider">
			<?php echo do_shortcode('[wooslider slide_page="home_page" slider_type="slides"]') ?>
		</div>

		<div id="content" class="site-content" role="main">

		<div class="column_house">
			<div class="column col_1">
				<h3>Sed Sagitis</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse iaculis consequat risus, sed hendrerit eros cursus ac. Donec sed imperdiet eros. Sed sed velit pulvinar, facilisis ante quis, varius sem. Integer lectus felis, auctor non volutpat vel, tempor eget lorem. </p>
			</div>

			<div class="column col_2">
				<h3>Cras Luctus</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse iaculis consequat risus, sed hendrerit eros cursus ac. Donec sed imperdiet eros. Sed sed velit pulvinar, facilisis ante quis, varius sem. Integer lectus felis, auctor non volutpat vel, tempor eget lorem. </p>
			</div>

			<div class="column col_3">
				<h3>Donec Vestibulum</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse iaculis consequat risus, sed hendrerit eros cursus ac. Donec sed imperdiet eros. Sed sed velit pulvinar, facilisis ante quis, varius sem. Integer lectus felis, auctor non volutpat vel, tempor eget lorem. </p>
			</div>
			</div>
		</div><!-- #content -->
		
	</div><!-- #primary -->
<?php get_sidebar(); ?>

<?php get_footer(); ?>