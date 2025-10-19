<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fonts.css" type="text/css" media="all" />
	<title><?php wp_title( '-', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
	<?php wp_head(); ?>
</head>
	<body <?php body_class(); ?>>


	<style>
        /* Loading Screen Styling */
        #loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: linear-gradient(135deg, #31487D, #576FA7); /* semi-transparent background */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 99999999;
        }

        /* Custom Spinner */
        .spinner {
            width: 60px;
            height: 60px;
            background-color: white;
            border-radius: 50%;
            opacity: 0;
            animation: grow-shrink 1s infinite ease-in-out;
        }

        /* Animation for growing and shrinking effect */
        @keyframes grow-shrink {
            0% {
                transform: scale(0.3);
                opacity: 0.7;
            }
            50% {
                transform: scale(1.2);
                opacity: 0;
            }
			70%{
				transform: scale(0.6);
				opacity: 0;
			}
            100% {
                transform: scale(0.3);
                opacity: 0.7;
            }
        }
    </style>
</head>
<body>

<div id="loading-screen">
    <div class="spinner"></div>
</div>

<script>
    
    window.addEventListener('load', function() {
        const loadingScreen = document.getElementById('loading-screen');
        loadingScreen.style.transition = 'opacity 0.5s ease';
		setTimeout(() => {
			loadingScreen.style.opacity = '0'; 
		}, 2000);
        
        setTimeout(() => {
            loadingScreen.style.display = 'none'; // Remove loading screen after fading out
        }, 4000);
    });
</script>


	
<style>
	::-webkit-scrollbar {
    display: none;
	}

	
	html {
		scrollbar-width: none;
	}

	
	body {
		-ms-overflow-style: none; 
	}
	html, body{
		margin: 0;
		padding: 0;
		background: #F3F3F3;
		overflow-x:hidden;
	}

	.headhead{
		width: 100lvw;
		position:relative;
		height:98.5lvh;
		padding-top:1.5lvh;
	}
	header {
		display: flex;
		justify-content: space-between;
		align-items: center;
		margin: 0px 2.083333333333333lvw 1.703703703703704lvh 2.083333333333333lvw;
		z-index:3;
		position:relative;
	}

	.nav1, .nav2 {
		flex: 1; 
	}

	.logo {
		display: flex;
		justify-content: center; 
		flex: 0; 
	}

	.nav1 nav, .nav2 nav {
		margin: 0;
		padding: 0;
	}

	.nav1 ul, .nav2 ul {
		display: flex;
		justify-content: center;
		align-items: center;
		margin: 0;
		padding: 0;
	}
	.nav1 ul{
		display: flex;
		align-items: flex-start;
		justify-content: flex-start;
	}

	.nav2 ul{
		display: flex;
		align-items: flex-end;
		justify-content: flex-end;
	}
	.nav1 li {
		margin: 0;
		padding: 0;
		list-style: none;
		margin-right: 2.604166666666667vw;
	}

	.nav2 li {
		margin: 0;
		padding: 0;
		list-style: none;
		margin-left: 2.604166666666667vw;
	}

	.nav1 a, .nav2 a {
		color: white;
		text-decoration: none;
		font-family: 'Mundial Thin';
		font-size: 2.314814814814815lvh;
		position: relative; 
	}

	.nav1 .current-menu-item a, .nav2 .current-menu-item a {
		color: white; 
	}

	.nav1 .current-menu-item a::after, .nav2 .current-menu-item a::after{
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


	.nav1 .current-menu-item a::before, .nav2 .current-menu-item a::before{
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



	.nav1 a, .nav2 a {
    position: relative;
    overflow: hidden; 
}

.nav1 a::after,.nav2 a::after {
    content: '';
    position: absolute;
	left:0px;
    bottom: -1lvh; 
    width: 0; 
    height: 0.2lvh; 
    background: lightgray;
    border-radius: 1lvh;
    transition: width 0.3s ease-in-out, opacity 0.3s ease-in-out; 
    opacity: 0; 
}


.nav1 a::before ,.nav2 a::before{
	content: '';
    position: absolute;
	left:0px;
    bottom: -1.7lvh; 
    width: 0; 
    height: 0.2lvh; 
    background: lightgray;
    border-radius: 1lvh;
    transition: width 0.3s ease-in-out, opacity 0.3s ease-in-out; 
    opacity: 0; 
}

.nav1 a:hover::before, 
.nav2 a:hover::before {
    width: 80%; 
    opacity: 0.5;
	bottom: -1.7lvh;
}

.nav1 a:hover::after, 
.nav2 a:hover::after {
    width: 120%;
    opacity: 1; 
    bottom: -1lvh;
	left:0px;
}


.nav1 a::before, .nav1 a::after,
.nav2 a::before, .nav2 a::after {
    transition: width 0.3s ease-in-out, opacity 0.3s ease-in-out; 
    opacity: 0; 
	left:0px;
}




	.logo img{
		width: 4.739583333333333lvw;
	}
	.logo{
		padding-top:2lvh;
		position: relative;

	}
	.video{
		width: 101lvw;
		height:87%;
		position: absolute;
		top:0px;
		left:0px;
		z-index: 0;
		overflow:hidden;
		background-image:url('<?php echo get_template_directory_uri(); ?>/assets/uploads/head-photo.png');
		background-position:center;
		background-size:cover;
	}
	.in-vid{
		width: 100lvw;
		height:85.90740740740741lvh;
		position:absolute;
		top:0px;
		left:0px;
		overflow:hidden;
		z-index:0;
		display: flex;
		align-items: flex-start;
		justify-content: flex-end;
	}
	.in-vid img{
		width: 100lvw;
	}
	.h_text{
		z-index:10;
		position:relative;
		width:100lvw;
		display:flex;
		justify-content:center;
		align-items:center;
		flex-direction:column;
		height:100%;
	}
	.h_text h1{
		font-size:9.703703703703704lvh;
		color:white;
		font-family:'Avenir Ultra Light', lighter;
		font-weight:lighter;
		margin-top:0px;
		text-align:center;
		margin-bottom:3.1851852lvh;
		padding:0px;
		cursor:normal;
		margin-top:12%;
	}
	.h_text p{
		font-size:1.851851851851852lvh;
		color:white;
		font-family:'Avenir Ultra Light', lighter;
		font-weight:lighter;
		margin:0px;
		padding:0px;
		cursor:normal;
		width: 54.270833lvw;
		text-align:center;
	}
	

	

	
	.scroll-wrapper {
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		cursor: pointer;
		margin-top:8lvh;
	}

	
	.line {
		position: relative;
		width: .1lvh;
		height: 11.5lvh; 
		background-color: rgba(255, 255, 255, 0.2);
		margin-bottom: 3lvh;
		overflow: hidden;
	}

	.fill {
		width: 100%;
		height: 50%;
		background-color: white;
		transform: translateY(100%);
		transition: transform 0.5s ease-in-out; 
	}

	
	.scroll-wrapper:hover .fill {
		transform: translateY(0); 
	}

	.text {
		text-transform: uppercase;
		color: rgba(255, 255, 255, 0.75);
		letter-spacing: 0.2em;
		font-size: 1.3lvh;
		font-family:'Avenir Light', lighter;
		font-weight:lighter;
		text-align: center;
		transition: color 0.35s ease-in-out, letter-spacing 0.35s ease-in-out;
	}

	.group:hover .text {
		color: white;
		letter-spacing: 0.4em;
	}



	@media screen and (max-width:1000px) {
		.nav1, .nav2 {
			flex: 1;
			display: none;
		}
		header {
			display: flex;
			justify-content: center;
			align-items: center;
			margin: 0px 2.083333333333333lvw 1.703703703703704lvh 2.083333333333333lvw;
			z-index: 1000;;
			position: relative;
		}
		.logo img {
			width: 16.41860465116279svw;
		}
		.h_text h1 {
			font-size: 5.301075268817204svh;
			color: white;
			font-family: 'Avenir Ultra Light', lighter;
			font-weight: lighter;
			margin-top: 0px;
			text-align: center;
			margin-bottom: 3.1851852lvh;
			padding: 0px;
			cursor: normal;
			margin-top: 0%;
			width: 78%;
		}
		.h_text p {
			font-size: 1.290322580645161svh;
			color: white;
			font-family: 'Avenir Ultra Light', lighter;
			font-weight: lighter;
			margin: 0px;
			padding: 0px;
			cursor: normal;
			width: 65.34883720930233svw;
			text-align: center;
			
		}
		
	}	


</style>

<div class="headhead">
<header>
    <div class=" reveal nav1">
        <?php
            wp_nav_menu( array(
                'theme_location' => 'primary', 
                'container'      => 'nav',     
                'menu_class'     => 'primary-menu',
            ) );
        ?>
    </div>
    <div class="reveal logo">
        <a href="home">

            <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/logo.svg" alt="SVG Image" />
        </a>
    </div>
    <div class="reveal nav2">
        <?php
            wp_nav_menu( array(
                'theme_location' => 'secondary',
                'container'      => 'nav',       
                'menu_class'     => 'secondary-menu', 
            ) );
        ?>
    </div>



	<style>

		.r_nav{
			display:none;
		}
		.menu-icon-r{
			display:none;
		}
		@media screen and (max-width:1000px) {
		body {
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
		}

		.site-content {
		max-width: 1100px;
		height: 100vh;
		margin-left: auto;
		margin-right: auto;
		display: flex;
		align-items: center;
		justify-content: center;
		}

		.site-content__headline {
		font-weight: 200;
		color: #ffffff;
		font-size: calc(2vw + 10px);
		}

		/* default state */
		.menu-icon-r {
			width: 6.225806svh;
			height: 6.225806svh;
			position: absolute;
			z-index: 2;
			right: 6svw;
			top: 4.5svh;
			cursor: pointer;
			display:block;
			
		}

		.menu-icon-r__line {
			height: .4vh;
			width: 13svw;
			display: block;
			background-color: #ffffff;
			margin-bottom: 1.4svh;
			transition: transform 0.2s ease, background-color 0.5s ease;
		} 

		.menu-icon-r__line-left {
			width: 6.5vw;
		}

		.menu-icon-r__line-right {
			width: 6.5vw;
			float: right;
		}

		.r_nav {
			position: fixed;
			z-index: -11111111;
			top: 0;
			left: 0;
			display:block;
			
		}

		.r_nav:before,
		.r_nav:after {
		content: "";
		position: fixed;
		width: 100vw;
		height: 100vh;
		background: rgba(234, 234, 234, 0.2);
		z-index: -1;
		transition: transform cubic-bezier(0.77, 0, 0.175, 1) 0.8s;
		transform: translateX(0%) translateY(-100%);
		}

		.r_nav:after {
		background: rgba(49, 72, 125, 1);
		transition-delay: 0s;
		}

		.r_nav:before {
		transition-delay: 0.1s;
		}

		.r_nav__content {
		position: fixed;
		top: -100%;
		transform: translate(0%, -50%);
		width: 100%;
		text-align: center;
		font-size: calc(2vw + 10px);
		font-weight: 200;
		cursor: pointer;
		margin-top: 5svh;
		}
		.r_nav__list{
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			padding:0px;
			margin:0px;
		}
		.r_nav__list-item {
		position: relative;
		display: inline-block;
		opacity: 0;
		transform: translate(0%, 100%);
		transition: opacity 0.2s ease, transform 0.3s ease;
		margin-right: 0px;
		}

		.r_nav__list-item:before {
		content: "";
		position: absolute;
		background: #000000;
		width: 20px;
		height: 1px;
		top: 100%;
		transform: translate(0%, 0%);
		transition: all 0.3s ease;
		z-index: -1;
		}

		.r_nav__list-item:hover:before {
		width: 100%;
		}

		/* active state */

		body.nav-active .menu-icon-r{
			position: fixed;
			z-index: 2;
			right: 8svw;
    		top: 6svh;
		}
		body.nav-active .menu-icon-r__line {
		background-color: white;
		transform: translateX(0px) rotate(-45deg);
		}

		body.nav-active .menu-icon-r__line-left {
		transform: translateX(1px) rotate(45deg);
		}

		body.nav-active .menu-icon-r__line-right {
		transform: translateX(-2px) rotate(45deg);
		}

		body.nav-active .r_nav {
		visibility: visible;
		z-index: 1;
		}

		body.nav-active .r_nav:before,
		body.nav-active .r_nav:after {
		transform: translateX(0%) translateY(0%);
		}

		body.nav-active .r_nav:after {
		transition-delay: 0.1s;
		}

		body.nav-active .r_nav:before {
		transition-delay: 0s;
		}

		body.nav-active .r_nav__list-item {
		opacity: 1;
		transform: translateX(0%);
		transition: opacity 0.3s ease, transform 0.3s ease, color 0.3s ease;
		}
		body.nav-active .r_nnac_logo{
			display:flex;
			opacity:1;
		}
		body.nav-active .r_nnac_logo img{
			opacity:1;
			transition-delay: 1.3s;
		}
		body.nav-active .r_nav__content{
			top: 50%;
		}

		body.nav-active .r_nav__list-item:nth-child(1) {
		transition-delay: 0.9s;
		}

		body.nav-active .r_nav__list-item:nth-child(2) {
		transition-delay: 1s;
		}

		body.nav-active .r_nav__list-item:nth-child(3) {
		transition-delay: 1.1s;
		}

		body.nav-active .r_nav__list-item:nth-child(4) {
		transition-delay: 1.2s;
		}
		body.nav-active .r_nav__list-item:nth-child(5) {
		transition-delay: 1.3s;
		}
		.r_nav__list-item:before{
			display:none !important;
		}
		.r_menu_item__{
			width: 90.69767441860465svw;
			height: 12.58064516129032svh;
			display: flex;
			justify-content: center;
			align-items: center;
			position: relative;
			background-repeat:no-repeat !important;
			background-size:cover !important;
			background-position:center !important;
			margin-bottom:3svh;
		}
		.r_menu_item__ h1{
			font-weight: lighter;
			width: 93%;
			text-align: left;
			padding-left: 7%;
			font-family: 'Avenir Light', lighter;
		}
		.r_menu_item__ svg{
			position: absolute;
			right: 0px;
			bottom: 0px;
			height: 6.623656svh;
			width: 6.623656svh;

		}
		.r_nav__list-item a{
			color:white;
			text-decoration:none;
		}
		.r_nnac_logo{
			position:absolute;
			padding-top:3.5svh;
			width: 100svw;
			display:none;
			justify-content:center;
			align-items:center;
			left:0px;
			top:0px;
			opacity:0;
			transition:opacity 1.5s ease;

		}
		.r_nnac_logo img{
			opacity:0;
			transition:opacity 1.5s ease;
			width: 16.41860465116279svw;
		}
	}
	</style>

	<div class="menu-icon-r">
		<span class="menu-icon-r__line menu-icon-r__line-left"></span>
		<span class="menu-icon-r__line"></span>
		<span class="menu-icon-r__line menu-icon-r__line-right"></span>
	</div>

	<div class="r_nav">
		<div class="r_nnac_logo">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/logo.svg" alt="SVG Image" />
		</div>
		<div class="r_nav__content">
			<ul class="r_nav__list">
				<li class="r_nav__list-item">
					<a href="home">
						<div style="background:url('<?php echo get_template_directory_uri();?>/assets/uploads/r_m_1-f.png')" class="r_menu_item__">
							<h1>Home</h1>
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
				</li>
				<li class="r_nav__list-item">
					<a href="about-us">
						<div style="background:url('<?php echo get_template_directory_uri();?>/assets/uploads/r_m_2.png')" class="r_menu_item__">
							<h1>About Us</h1>
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
				</li>
				<li class="r_nav__list-item">
					<a href="services">
						<div style="background:url('<?php echo get_template_directory_uri();?>/assets/uploads/r_m_3.png')" class="r_menu_item__">
							<h1>Services</h1>
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
				</li>
				<li class="r_nav__list-item">
					<a href="products">
						<div style="background:url('<?php echo get_template_directory_uri();?>/assets/uploads/r_m_4.png')" class="r_menu_item__">
							<h1>Products</h1>
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
				</li>
				<li class="r_nav__list-item">
					<a href="contact-us">
						<div style="background:url('<?php echo get_template_directory_uri();?>/assets/uploads/r_m_5.png')" class="r_menu_item__">
							<h1>Contact Us</h1>
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
				</li>
			</ul>
		</div>
	</div>





	<script>
		console.clear();

var app = (function () {
  var body;
  var menu;
  var logo;
  var menuItems;

  var init = function () {
    body = document.querySelector('body');
    menu = document.querySelector('.menu-icon-r');
	logo = document.querySelector('.r_nnac_logo');
    menuItems = document.querySelectorAll('.r_nav__list-item');

    applyListeners();
  };

  var applyListeners = function () {
    menu.addEventListener('click', function () {
      toggleClass(body, 'nav-active');
    });
  };

  var toggleClass = function (element, stringClass) {
    if (element.classList.contains(stringClass)) {
      element.classList.remove(stringClass);
    } else {
      element.classList.add(stringClass);
    }
  };

  init();
})();

	</script>

	
</header>


	
