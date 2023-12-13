<?php get_header("interna");?>

<main class='container'>
    <?php if(have_posts()){
            while(have_posts()){
                the_post(); ?>
            <h1 class='my-3'><?php the_title(); ?></h1>

            <?php the_content(); ?>

         <?php }
    }?>

    <?php 
    if( is_page( 'contacto' )) { ?>
        <p>Contacto</p>
    <?php } ?>
</main>

<?php get_footer(); ?>