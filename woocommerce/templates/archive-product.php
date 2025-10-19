<?php
get_header();
?>
<style>
	.logo img {
		width: 4.739583333333333lvw !important;
		height: auto !important;
		max-width: 4.73958333333333lvw !important;
	}
</style>
<style>
    .headhead {
        width: 100lvw;
        position: relative;
        height: 78.5lvh;
        padding-top: 1.5lvh;
    }
    .h_text h1{
        margin-bottom:20vh;
    }
    .vid-f video{
        object-fit: cover;
        width: 100%;
        height: 100%;
        z-index: 10;
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100lvw;
        height: 100lvh;
    }
    .overlay-f{
        background:black;
        opacity:70%;
        width: 100%;
        height: 100%;
        z-index: 10;
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100lvw;
        height: 100lvh;
    }
    .fade {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: black;
        opacity: 0; 
        transition: opacity 1s ease-in-out; 
        z-index: 10;
    }
    .video{
        background:black !important;
        height: 100%;
    }
</style>
    <div class="video">
        <div class="vid-f">
                <video class="vi-vi" autoplay loop muted playsinline>
                    <source src="<?php echo esc_url(get_template_directory_uri() . '/assets/uploads/head-vid.mp4'); ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="fade"></div>
            <div class="overlay-f"></div>
        <div class="h_text">
                <h1>PRODUCTS</h1>
        </div>
    </div>

</div>


<script>
    document.addEventListener('DOMContentLoaded', function () {
        const video = document.querySelector('.vi-vi');
        const fade = document.querySelector('.fade');

        fade.style.opacity = 1; 
        setTimeout(() => {
            fade.style.opacity = 0; 
        }, 1000);

        
        video.addEventListener('timeupdate', () => {
            
            if (video.currentTime >= video.duration - 1) { 
                fade.style.opacity = 1; 
            }
           
            if (video.currentTime < 1 && fade.style.opacity == 1) {
                setTimeout(() => {
                    fade.style.opacity = 0; 
                }, 500); 
            }
        });
    });

</script>



<?php
if ( woocommerce_product_loop() ) {
    woocommerce_product_loop_start();

    while ( have_posts() ) {
        the_post();
        wc_get_template_part( 'content', 'product-custom' ); 
    }

    woocommerce_product_loop_end();
} else {
    do_action( 'woocommerce_no_products_found' );
}

get_footer();
?>
