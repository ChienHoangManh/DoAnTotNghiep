	    <?php
if ( function_exists('yoast_breadcrumb') ) {
  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
}
?>
<?php
if ( is_single() ) {
	echo '<h1 class="entry-title">' . get_the_title() . '</h1>';
} else {
	echo '<h2 class="entry-title"><a href="' . get_the_permalink() . '" rel="bookmark" class="plain">' . get_the_title() . '</a></h2>';
}
?>
<div class="thong-tin-them">
    <span class="far fa-clock"></span><span class="ngay-cap-nhat"> <?php flatsome_posted_on(); ?></span>
    <span class="far fa-folder"></span><span class="thu-muc-bv"> <?php echo get_the_category_list( __( ', ', 'flatsome' ) ) ?></span>
    <span class="far fa-eye"></span><span class="luot-xem"> <?php echo getPostViews(get_the_ID()); ?> </span>
</div>

<div class="entry-divider is-divider small"></div>

<?php
$single_post = is_singular( 'post' );
if ( $single_post && get_theme_mod( 'blog_single_header_meta', 1 ) ) : ?>
	<div class="entry-meta uppercase is-xsmall">
		<?php flatsome_posted_on(); ?>
	</div><!-- .entry-meta -->
<?php elseif ( ! $single_post && 'post' == get_post_type() ) : ?>
	<div class="entry-meta uppercase is-xsmall">
		<?php flatsome_posted_on(); ?>
	</div><!-- .entry-meta -->
<?php endif; ?>
