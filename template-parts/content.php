<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package zuumieTheme2018
 */

?>


<div class="col-md-6">
	<div class="card-group">
		<div id="post-<?php the_ID(); ?>" class="card">

			<?php zuumietheme2018_post_thumbnail(); ?>

			<div class="card-body">

				<div class="card-title">
					<?php
					if ( is_singular() ) :
						the_title( '<h1 class="h5">', '</h1>' );
					else :
						the_title( '<h2 class="h5"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif;
					?>
				</div><!-- .entry-header -->

				<div class="card-text small">
					<?php
					the_excerpt();

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'zuumietheme2018' ),
						'after'  => '</div>',
					) );
					?>
				</div><!-- .entry-content -->

				<div class="card-footer small">
					<?php
					if ( 'post' === get_post_type() ) :
					?>
						<div class="entry-meta">
							<?php
							the_time('y/m/j g:i A');
							the_tags('<p class="tags">', ' ', '</p>');
							?>
						</div><!-- .entry-meta -->
					<?php endif; ?>
				</div><!-- .entry-footer -->
			</div>

		</div><!-- #post-<?php the_ID(); ?> -->
	</div>
</div>
