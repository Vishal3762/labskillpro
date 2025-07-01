<?php
	/*
		Template Name:Blog
        
	*/
?>


<?php  get_header();?>


<section class="container py-5">
    <h1 class="mb-4">Latest Blog Posts</h1>
    
    <div class="row">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium', ['class' => 'card-img-top']); ?>
                        </a>
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        <?php endwhile; else : ?>
            <p>No blog posts found.</p>
        <?php endif; ?>
    </div>
</section>


<?php get_footer(); ?>