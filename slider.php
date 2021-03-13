<div class="slider">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php 
                $args = array(
                    'posts_per_page'  => -1,
                    'post_status' => 'publish', // Chỉ lấy những bài viết được publish
                    'post_type' => 'slider', // Lấy những bài viết thuộc slider
                    'showposts' => 12, // số lượng bài viết
                    // 'cat' => 1, // lấy bài viết trong chuyên mục có id là 1
                );
            ?>
            <?php $getposts = new WP_query($args); $i=1;?>
            <?php global $wp_query; $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <div class="carousel-item <?php echo $i==1?'active':''; ?>">
                    <?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' =>'thumnail') ); ?>
                </div>
                <!-- <div class="carousel-item">
                    <img class="d-block w-100" src="<?php bloginfo('stylesheet_directory'); ?>/images/baner-02.png" alt="Second slide">
                </div> -->
                <?php $i++;?>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>
</div>