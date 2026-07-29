<?php get_header(); ?>

<main class="page-content">
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>
            <div class="page-inner">
                <h1 class="page-title"><?php the_title(); ?></h1>
                <div class="page-body">
                    <?php the_content(); ?>
                </div>
            </div>
            <?php
        endwhile;
        ?>
    </div>
</main>

<?php get_footer(); ?>
