<?php get_header("interna");?>

<main class='container my-3'>
    <?php if(have_posts()){
            while(have_posts()){
                the_post();
            ?>
                <h1 class='my-5'><?php the_title() ?></h1>
                <div class="row">
                    <div class="col-7">
                        <?php the_content(); ?>
                    </div> 
                    <div class="col-5">
                        <p>Sidebar</p>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut fugiat similique dolorem hic suscipit ullam magni ipsum quis, quas sint, fuga recusandae eveniet deleniti iure totam dignissimos, asperiores voluptate dolores. Adipisci nulla vitae inventore repudiandae eos suscipit laudantium labore voluptates repellendus voluptatibus delectus./p>
                        <?php // the_post_thumbnail('large'); ?>
                    </div>
                </div>
            <?php
            }
    } ?>

</main>
<?php get_footer(); ?>