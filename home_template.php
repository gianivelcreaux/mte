<?php
/*
Template Name: Home Template
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

	<div class="statistics_home">

		<div class="stat_content">

		<h2>Week of <?php 

			echo date('F j, Y') ;

			?>
			</h2>

			<div class="stat">
				<a href="" class="stat_link_big">12 Desktop support positions posted in Greater Milwaukee.</a> 
				<p class="stat_link"><a href="" class="stat_link">Find Desktop Support Jobs</a></p>
				
			</div>


			<div class="stat">
				<a href="" class="stat_link_big">6 jobs require MCPs.</a>
				<p class="stat_link"><a href="" class="stat_link_small">Learn About Certifications</a></p>
			</div>

			
			<div class="stat">
				<a href="" class="stat_link_big">5 positions listed in Milwaukee County, 10 in Waukesha.</a>
				<p class="stat_link"><a href="" class="stat_link_small">Search Jobs in the Milwaukee Area</a></p>
				
			</div>


			<div class="stat">
				<a href="" class="stat_link_big">25 jobs listing salaries of at least $50,000.</a>
				<p class="stat_link"><a href="" class="stat_link_small">Click Here to Read About Salary Ranges</a></p>
				
			</div>

		</div>

	</div>

<?php 
	if ( is_front_page() ) {
    include('footer_home.php');
} else {
    get_footer();
}
 ?>