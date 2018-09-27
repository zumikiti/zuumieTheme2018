<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zuumieTheme2018
 */

?>


<div class="col-md-6 mb-5">
	<div id="post-<?php the_ID(); ?>" class="card border-white">

		<?php zuumietheme2018_post_thumbnail(); ?>

		<div class="card-body m-0 p-0">

			<div class="card-title">
				<?php
				if ( is_singular() ) :
					the_title( '<h1 class="h5">', '</h1>' );
				else :
					the_title( '<h2 class="h5"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;
				?>
			</div><!-- .entry-header -->

			<div class="card-footer m-0 p-0 bg-while">
				<?php if ( 'post' === get_post_type() ) : ?>
						<ul class="list-inline text-muted">
							<li class="list-inline-item content-card-footer-list"><?php the_category(','); ?></li>
							<li class="list-inline-item content-card-footer-list"><?php the_time('Y/m/j'); ?></li>
						</ul>
				<?php endif; ?>
			</div><!-- .entry-footer -->
		</div>

	</div><!-- #post-<?php the_ID(); ?> -->
</div>
