<?php
// Template Name: Products All
get_header();
?>
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
    .bottom-head{
        width: 100lvw;
        display:flex;
        position:relative;
        height:21.5lvh;
        z-index:3;
    }
    .bh_first{
        width: 100%;
        display:flex;
        justify-content:center;
        align-items:center;
        background:#31487D;
    }
    .bt_second{
        width: 50%;
        display:flex;
        justify-content:center;
        align-items:center;
        background:#31487D;
    }
    .bh_first h1{
        color:white;
        font-family:'Avenir Ultra Light',lighter;
        font-weight:lighter;
        font-size:5.555555555555556lvh;
        text-transform:uppercase;

    }
    .bt_second p{
        color:white;
        width: 60%;
        font-family:'Avenir Ultra Light',lighter;
        font-weight:light;
        font-size:1.851851851851852lvh;
        
    }
    .nav1 .menu-item-product a, .nav2 .menu-item-product a {
		color: white; 
	}

	.nav1 .menu-item-product a::after, .nav2 .menu-item-product a::after{
		content: '';
		display: block;
		width: 120%;
		height: .2lvh;
		background: lightgray;
		position: absolute;
		bottom: -1lvh;
		border-radius:1lvh;
		opacity:100%;
		
	}


	.nav1 .menu-item-product a::before, .nav2 .menu-item-product a::before{
		content: '';
		display: block;
		width: 80%;
		height: .2lvh;
		background: lightgray;
		position: absolute;
		bottom: -1.7lvh;
		border-radius:1lvh;
		opacity:50%;
		
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
        <div class="reveal h_text">
                <h1>PRODUKTET</h1>
        </div>
    </div>
</div>

    <div class="reveal bottom-head">
        <div class="bh_first">
            <h1>

            <?php 
            
            $category_slug = get_query_var('product_cat'); 

           
            if ($category_slug) {
                $category = get_term_by('slug', $category_slug, 'product_cat'); 
               
                if ($category) {
                    echo esc_html($category->name); 
                } else {
                    echo __('All Products'); 
                }
            } else {
                echo __('All Products'); 
                wp_redirect(home_url('/products/'));
                exit;
            }
            ?>

            </h1>
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




<style>


.product-popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7); 
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
}


.popup-content {
    background: #2C4D7F;
    width: 95.83333333333333lvw;
    height: 92.96296296296296lvh;
    display: flex;
    padding: 0px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
    border: 0px;
    box-sizing: border-box;
    position: relative;
}


.close-popup {
    position: absolute;
    top: 1lvh;
    right: 2.3lvw;
    font-size: 10lvh;
    color: white;
    cursor: pointer;
}


#popup-product-image {
    flex: 1;
    padding: 3lvh 2lvw;
    display: flex;
    justify-content: center;
    align-items: center;
}

#popup-product-image img {
    object-fit: cover;
    border-radius: 0px;
    width: 100%;
    height: 100%;
}

#popup-product-name {
    flex: 1;
    color: white;
    font-size: 7.12962962962963lvh;
    font-family: 'Avenir Ultra Light', lighter;
    font-weight: lighter;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    letter-spacing: .6lvh;
    text-transform: uppercase;
}


</style>

<style>

    .custom-shop-wrapper{
        width: 100lvw;
        
    }
    .custom-product-grid{
        width: 97%;
        padding:3% 1.5%;
        display:flex;
        flex-wrap: wrap;
        justify-content: flex-start;
    }
    .open-popup{
        width: 33.333333333%;
        height:45.09259259259259lvh;
        position:relative;
        text-decoration:none;
        margin-bottom:3%;
    }
    .open-popup:hover .custom-product-image img{
        transform: scale(1.2);
    }
    .custom-product-item{
        width: 90%;
        height:100%;
        position:relative;
        overflow:hidden;
        display:flex;
        justify-content:center;
        align-items:center;
        margin:0px 5%;
    }
    .custom-product-image{
        position:absolute;
        top:0px;
        left:0px;
        width: 100%;
        height:100%;
        
    }
    .c-p-over{
        position:absolute;
        top:0px;
        left:0px;
        width: 100%;
        height:100%;
        z-index:1;
        background:black;
        opacity:.3;

    }
    .custom-product-image img{
        width: 100%;
        height:100%;
        object-fit:cover;
        z-index:0;
        transition: transform 0.5s ease; 
        transform-origin: center;
    }
    .custom-product-name{
        position:relative;
        z-index:2;
        margin:0px;
        padding:0px;
        font-family:'Avenir Light',lighter;
        font-weight:lighter;
        font-size:4.166666666666667lvh;
        color:white;
        text-transform:uppercase;
    }
    .custom-product-item svg{
        width: 10.333333333333333lvh;
        height:10.333333333333333lvh;
        position:absolute;
        right:0%;
        bottom:0%;
        opacity:1;
        z-index:3;
    }
</style>
<div class="custom-shop-wrapper">
<div class="custom-shop-wrapper">
    <div class="custom-product-grid">
        <?php
       
        $category_slug = get_query_var('product_cat'); 

        
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => -1,
        );

        
        if ($category_slug) {
            $args['tax_query'] = array(
                array(
                    'taxonomy' => 'product_cat',
                    'field'    => 'slug',
                    'terms'    => $category_slug,
                ),
            );
        }

        $loop = new WP_Query($args);

        if ($loop->have_posts()) {
            while ($loop->have_posts()) : $loop->the_post();
                global $product; ?>
                <a href="" class="reveal open-popup" data-product-id="<?php echo $product->get_id(); ?>">
                    <div class="custom-product-item">
                        <div class="c-p-over"></div>
                        <div class="custom-product-image">
                            <?php echo wp_get_attachment_image($product->get_image_id(), 'medium'); ?>
                        </div>
                        <h2 class="custom-product-name"><?php the_title(); ?></h2>
                        <svg xmlns="http://www.w3.org/2000/svg" width="89" height="89" viewBox="0 0 89 89">
                            <g id="Group_15" data-name="Group 15" transform="translate(-526 -2431.36)">
                                <rect id="Rectangle_24" data-name="Rectangle 24" width="89" height="89" transform="translate(526 2431.36)" fill="#1f2f3d"/>
                                <g id="Group_12" data-name="Group 12" transform="translate(556.571 2461.571)">
                                    <line id="Line_16" data-name="Line 16" y1="28.219" x2="28.219" transform="translate(0 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="5"/>
                                    <line id="Line_17" data-name="Line 17" y1="24.188" transform="translate(28.219 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="5"/>
                                    <line id="Line_18" data-name="Line 18" x2="24.188" transform="translate(4.031 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="5"/>
                                </g>
                            </g>
                        </svg>
                    </div>
                </a>

            <?php endwhile;
        } else {
            echo __('No products found');
        }

        wp_reset_postdata();
        ?>
    </div>
        

    <div id="product-popup" class="product-popup" style="display:none;">
        <div class="popup-content">
            <span class="close-popup">&times;</span>
            <div id="popup-product-image"></div>
            <h2 id="popup-product-name"></h2>
        </div>
    </div>

</div>


<script>
jQuery(document).ready(function($) {
    
    $('.open-popup').on('click', function(e) {
        e.preventDefault();
        
        var productID = $(this).data('product-id');
        var productName = $(this).find('.custom-product-name').text();
        var productImage = $(this).find('.custom-product-image').html();

       
        $('#popup-product-name').text(productName);
        $('#popup-product-image').html(productImage);

        
        $('#product-popup').fadeIn();
    });

    
    $('.close-popup').on('click', function() {
        $('#product-popup').fadeOut();
    });
});
</script>



<style>
    @media screen and (max-width:1000px) {
        .h_text h1 {
            margin-bottom: 0px;
        }
        .bottom-head {
            width: 100lvw;
            display: flex;
            position: relative;
            flex-direction: column;
            bottom: 0px;
            left: 0px;
            height: 20svh;
            overflow: hidden;
            z-index: 3;
        }
		.scroll-wrapper {
			display: none;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			cursor: pointer;
			margin-top: 8lvh;
		}
        .headhead {
            width: 100lvw;
            position: relative;
            height: 80svh;
            padding-top: 1.5lvh;
        }
		.bhf-three{
			display: none !important;
		}
		.bh_first {
            height: 100%;
			width: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
			background: #31487D;
		}
		
        .bt_second {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #31487D;
        }
        .bh_first h1 {
            color: white;
            font-family: 'Avenir Ultra Light', lighter;
            font-weight: lighter;
            font-size: 4.946236559139785svh;
            text-transform: uppercase;
        }
        .bt_second p {
            color: white;
            width: 80%;
            font-family: 'Avenir Ultra Light', lighter;
            font-weight: light;
            text-align: center;
            font-size: 1.182795698924731svh;
        }
        .custom-product-grid {
            width: 90.69767441860465svw;
            margin: 2.150537634408602svh 4.651162790697674svw;
            padding:0px;
            display: flex;
            flex-wrap: wrap;
            flex-direction:column;
            justify-content: flex-start;
        }
        .open-popup {
            width: 100%;
            height: 40svh;
            position: relative;
            text-decoration: none;
            margin-bottom: 3svh;
        }
        .custom-product-item {
            width: 100%;
            height: 100%;
            position: relative;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0px;
        }
        .custom-product-name {
            position: relative;
            z-index: 2;
            margin: 0px;
            padding: 0px;
            font-family: 'Avenir Light', lighter;
            font-weight: lighter;
            font-size: 3.010752688172043svh;
            letter-spacing: .3svh;
            color: white;
            text-transform: uppercase;
        }
        .custom-product-item svg {
            width: 15.325581svw;
            height: 15.325581svw;
            position: absolute;
            right: 0%;
            bottom: 0%;
            opacity: 1;
            z-index: 3;
        }
        .popup-content {
            background: #2C4D7F;
            /* width: 95.83333333333333lvw; */
            width: 90.69767441860465svw;
            height: 70svh;
            display: flex;
            flex-direction:column;
            padding: 0px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
            border: 0px;
            box-sizing: border-box;
            position: relative;
        }
        #popup-product-image {
            flex: none;
            padding: 3svh 4.651162790697674svw;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #popup-product-name {
            flex: none;
            color: white;
            font-size: 3.193548svh;
            width: 100%;
            text-align: center !important;
            font-family: 'Avenir Ultra Light', lighter;
            font-weight: lighter;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            letter-spacing: .6lvh;
            text-transform: uppercase;
        }
        .close-popup {
            position: absolute;
            top: auto;
            bottom: 0px;
            right: 0px;
            font-size: 6svh;
            width: 100%;
            text-align: center;
            background: #94A4C1;
            color: white;
            cursor: pointer;
            height: 7.021505svh;
            overflow: hidden;
        }
    }
</style>

<?php

get_footer();
?>
