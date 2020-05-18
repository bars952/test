<?php
/*
Template Name: Test
*/
?>

<?php get_header(); ?>
 
<main id="content"> 
 
<?php 

$akcii = new WP_Query(array('post_type' => 'akcii','orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => -1)); 
 
?>
 <div class="akcii-all">
	<div class="akcii-all-header-wrap">
	<h1 class="akcii-all-header">Акции и скидки</h1>
	</div>
	<div class="akcii-all-button-wrap">
	<a class="akcii-all-button" href="#">Все акции и скидки <span></span></a>
	</div>
</div>
 
<div class="akcii-wrap">
 
    <?php $ak_num = 1 ?>
    <?php if ( $akcii->have_posts() ) : while ( $akcii->have_posts() ) : $akcii->the_post(); ?>
	<div class="akciiya-container ak_num<?php echo $ak_num?>" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>);">
	  <div class="akcii-left-side">
        <div class="akcii-label">Акция</div> 
        <h2 class="akcii-card-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="akcii-old-price"><?php number_format_i18n(the_field('old_price')) ?> руб</div>
        <div class="akcii-new-price"><?php number_format_i18n(the_field('new_price')) ?> <span>руб</span></div>
	  </div>
	</div>
	<?php if ( $ak_num == 4 ) {$ak_num = 0;} ?>
	<?php $ak_num++ ?>
    <?php endwhile; ?>
    <?php endif; ?>
 
</div>
</main>
<?php get_footer(); ?>