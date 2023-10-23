<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package bimwerx
 */

get_header();
?>

	<main id="primary" class="site-main mt-28">
		<div class="container mx-auto px-4">
			<h1 class="text-4xl">So Sorry!</h1>
			<div class="w-20 border-b-4 border-orange-dark mt-4"></div>
			<div class="prose-lg">
				<h2>The page you are looking for cannot be found</h2>
				<p>Error code: 404</p>
				<p>Here are some helpful links instead</p>
				<ul>
					<li><a href="/">Home</a></li>
					<li><a href="/services/">Services</a></li>
					<li><a href="/case-study/">Case Studies</a></li>
					<li><a href="/news/">News</a></li>
					<li><a href="/about-bimwerx/">About Us</a></li>
				</ul>
			</div>
		</div>
	</main>

<?php
get_footer();
