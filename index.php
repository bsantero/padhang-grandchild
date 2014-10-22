<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Padhang
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


			<div class="Table navisquares">
			    <div class="Row">
			        <div class="Cell">
			            <a href="who"><span class="nav-square genericon genericon-user"></span></a>
			        </div>
			        <div class="Cell">
			            <a href="media"><span class="nav-square genericon genericon-book"></span></a>
			        </div>
			        <div class="Cell">
			            <a href="contact"><span class="nav-square genericon genericon-comment"></span></a>
			        </div>
			    </div>
			    <div class="Row">
			        <div class="Cell">
			            <a href="who" class="nav-square-caption">About Us</a>
			        </div>
			        <div class="Cell">
			            <a href="media" class="nav-square-caption">Our Stuff</a>
			        </div>
			        <div class="Cell">
			            <a href="contact" class="nav-square-caption">Contact</a>
			        </div>
			    </div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.2.js"></script>
<script>
	$(document).ready(setHeight);
	$(window).resize(setHeight);

	function setHeight(){
	    var cw = $('.Cell').width();
	    $('.nav-square').css({
		    'height': cw/1.5 + 'px',
		    'font-size': cw/2 + 'px'});
	    $('.nav-square-caption').css({
		    'font-size': cw/6 + 'px'});
	}
</script>



<?php get_footer(); ?>
