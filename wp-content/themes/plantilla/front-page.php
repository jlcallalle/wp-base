<?php get_header(); ?>
<main class='container'>

    <div class="lista-productos my-5">
        <h2 class='text-center'>PUBLICACIONES</h2>
        <div class="row">
        <?php
        $args = array(
            'post_type' => 'producto',
            'post_per_page' => -1, 
            'order'         => 'ASC',
            'orderby'       => 'title'
        );

        $productos = new WP_Query($args);

        if($productos->have_posts()){
            while($productos->have_posts()){
                $productos->the_post();
                ?>
                <div class="col-12 col-md-4">
                    
                    <h4 class='box-item border my-3 p-3 '>
                        <?php the_post_thumbnail('large'); ?>
                        <div class="box-text">
                            <div class="date"><?php echo get_the_date( 'd-m-Y' ); ?></div>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title();?>
                            </a>
                        </div>
                    </h4>
                </div>
           <?php }
        }
        ?>
      </div>
    </div>
</main>

<br>
<br>
<br>


<?php get_footer(); ?>