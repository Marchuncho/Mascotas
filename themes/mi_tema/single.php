<?php get_header() ?>

<?php if ( have_posts() ) { ?>
	<?php while ( have_posts() ) { ?>
		<?php the_post(); ?>
      <div class="container my-3">
<a href="index.html" class="btn btn-info btn-sm my-5">Volver a <i class="fas fa-home"></i></a>

		<?php the_post_thumbnail('detail', array('class' => 'w-100 h-auto my-4')) ?>
        <h2 class="text-center my-3"><?php the_title() ?></h2>
		<!-- <time datetime="<?php the_time('Y-m-d') ?>"><?php the_time('d \d\e F \d\e Y') ?></time> -->


      <?php the_content() ?>

</div>
<?php
if(in_category('perro')){
    foreach ((get_the_category()) as $category) {
        echo '<p class="card-text text-center"><small class="text-muted"><i class="fas fa-dog"></i> <a href="'.get_category_link($category->cat_ID).'" class="text-warning">'.$category->cat_name.'</a></small></p>';
    }
}elseif(in_category('gato')){
    foreach ((get_the_category()) as $category) {
        echo '<p class="card-text text-center"><small class="text-muted"><i class="fas fa-cat"></i> <a href="'.get_category_link($category->cat_ID).'" class="text-warning">'.$category->cat_name.'</a></small></p>';
    }
}
?>
	<?php } ?>
<?php } else { ?>
	<!-- Content -->
<?php } wp_reset_query(); ?>


<?php get_footer() ?>
