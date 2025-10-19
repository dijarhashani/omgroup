<?php
/*
Template Name: Home Page
*/
get_header(); 
?>

<style>
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
		<h1 class="reveal">MIRËSEVINI NË OM GROUP</h1>
		<p class="reveal">OM Group është një furnizues i besuar i një gamë të gjerë produktesh, duke i siguruar bizneseve mallrat që u nevojiten për të lulëzuar.
        Ne specializohemi në gjetjen, ruajtjen dhe shpërndarjen e produkteve cilësore për kompanitë në industri të ndryshme.
        Qoftë nëse jeni duke kërkuar furnizime me shumicë ose artikuj të specializuar, OM Group ofron një shërbim të thjeshtë dhe efikas për të përmbushur kërkesat tuaja.</p>
			<div class="reveal scroll-wrapper shrink-0 w-fit mx-auto cursor-pointer group" id="scroll-element">
		<div class="line w-[1px] h-[115px] 2xl:h-[90px] xl:h-[75px] lg:h-[60px] md:h-[45px] sm:h-[30px] bg-white/20 mx-auto mb-[30px] md:mb-[15px] overflow-hidden isolate">
			<div class="fill w-full h-[50%] bg-white"></div>
		</div>
		<div class="text uppercase text-white/75 tracking-[0.2em] text-[13px] sm:text-[11px] duration-350 group-hover:text-white group-hover:tracking-[0.4em] text-center ease-manidar">
            EKSPORO
		</div>
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


<style>
    .bottom-head{
        width: 100lvw;
        display:flex;
        position: absolute;
        bottom: 0px;
        left: 0px;
        height:13%;
        z-index:3;
    }
    .bh_first{
        width: 60%;
        display:flex;
        justify-content:center;
        align-items:center;
        background:#31487D;
    }
    .bhf-one ,.bhf-two ,.bhf-three{
        width: 33.3333333333%;
        display:flex;
        align-items:center;
        justify-content:center;
    }
    .bhf-one h1 ,.bhf-two h1 ,.bhf-three h1{
        color:white;
        font-size:2.777777777777778lvh;
        font-family:'Avenir Book', lighter;
        font-weight:lighter;
        letter-spacing:0.284375lvw;
    }
    .bhf-two{
        border-left: .1vh solid white;
        border-right: .1vh solid white;
    }
    .bt_second{
        width: 40%;
        display:flex;
        justify-content:center;
        align-items:center;
        background:#94A4C1;
    }
    
    .cc_text{
        color:white;
        font-size:2.314814814814815lvh;
        font-family:'Avenir Book', lighter;
        font-weight:lighter;
        letter-spacing:0.104375lvw;
        position: relative;
        z-index: 2;
        white-space: nowrap;
        tracking: 0.1em;
        transition: color 0.35s, font-weight 0.35s;
    }
    
    .button {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration:none;
        padding:1.611111111111111lvh 7.03125lvw;
        background:#C0CCDC;
        color: white;
        text-decoration: none;
        overflow: hidden;
        transition: background-color 0.3s;
    }

    

    .button::before {
        content: '';
        position: absolute;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: white; 
        transform: scaleX(0);
        transition: transform 0.45s ease-in-out;
        transform-origin: left;
        z-index: 1;
    }

    .button:hover::before {
        transform: scaleX(1);
    }


    .button:hover .cc_text {
        color: #31487D; 
        font-weight:bolder;
    }

    .icon {
        position: relative;
        z-index: 2;
        font-size: 9px;
        transition: color 0.35s;
    }

    .button:hover .icon {
        color: white; 
    }



    @media screen and (max-width:1000px) {
        .bottom-head {
			width: 100lvw;
			display: flex;
			position: absolute;
			flex-direction: column;
			bottom: 0px;
			left: 0px;
			height: 22%;
            z-index: 0;
		}
		.scroll-wrapper {
			display: none;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			cursor: pointer;
			margin-top: 8lvh;
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
		.bhf-one, .bhf-two, .bhf-three {
			width: 50%;
			display: flex;
			align-items: center;
			height: 10svh;
			justify-content: center;
		}
        .bhf-one h1, .bhf-two h1, .bhf-three h1 {
            color: white;
            font-size: 2.150537634408602svh;
            font-family: 'Avenir Book', lighter;
            font-weight: lighter;
            letter-spacing: 0.284375lvw;
        }
        .bt_second {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #94A4C1;
        }
        .button {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            padding: 1.611111111111111lvh 23.03125lvw;
            background: #C0CCDC;
            color: white;
            text-decoration: none;
            overflow: hidden;
            transition: background-color 0.3s;
        }
        .cc_text {
            color: white;
            font-size: 2.088172043010753svh;
            font-family: 'Avenir Book', lighter;
            font-weight: lighter;
            letter-spacing: 0.104375lvw;
            position: relative;
            z-index: 2;
            white-space: nowrap;
            tracking: 0.1em;
            transition: color 0.35s, font-weight 0.35s;
        }
    }
</style>
<div class="reveal bottom-head">
    <div class="bh_first">
        <div class="bhf-one">
            <h1>+2000 produkte</h1>
        </div>
        <div class="bhf-two">
            <h1>+500 klientë</h1>
        </div>
        <div class="bhf-three">
            <h1>4 kategori</h1>
        </div>
    </div>
    <div class="bt_second">
        <a class="button group" href="contact-us/">
            <div class="cc_text">NA KONTAKTO</div>
        </a>
    </div>
</div>

</div>



<style>
    .logos{
        width: 95.83333333333333lvw;
        padding: 3.703703703703704lvh 2.083333333333333lvw;
        position:relative;
    }
    .logos img{
        width: 100%;
    }

   
</style>


<div class="logos">
    <img class="reveal" src="<?php echo get_template_directory_uri();?>/assets/uploads/logos-f.png" alt="">
</div>


<script>
    function updateImageSource() {
    const img = document.querySelector('.logos img');

        
        if (window.matchMedia("(max-width: 768px)").matches) {
            img.src = '<?php echo get_template_directory_uri();?>/assets/uploads/res_logos-f.png'; 
        } else {
            img.src = '<?php echo get_template_directory_uri();?>/assets/uploads/logos-f.png'; 
        }
    }

   
    updateImageSource();

   
    window.addEventListener('resize', updateImageSource);
</script>

<style>
    .categories{
        width: 91.67333333333333lvw;
        padding: 3.703703703703704lvh 4.163333333333333lvw;
        position:relative;
        background:#94A4C1;
    }
    .categories h1{
        color:white;
        font-size:7.12962962962963lvh;
        font-family:'Avenir Book',lighter;
        font-weight:lighter;
        margin:0px;
        margin-bottom:3.703703703703704lvh;
        margin-top:3.703703703703704lvh;
    }
    .categories p{
        color:white;
        font-size:2.037037037037037lvh;
        font-family:'Avenir Book',lighter;
        font-weight:lighter;
        margin:0px;
        margin-bottom:3.703703703703704lvh;
        
    }
    .c_line{
        content: ' ';
        background:white;
        height:.3lvh;
        width: 11.66666666666667lvw;
        margin-bottom:3.703703703703704lvh;
    }
    .category-wrap{
        display:flex;
        justify-content:flex-start;
        align-items:center;
        width: 100%;
        margin-bottom:3.703703703703704lvh;
    }
    .category{
        background: #31487D;
        width: 23%;
        margin-right: 1.3333333333%;
    }
    .cat_img{
        width: 100%;
        background: url('<?php echo get_template_directory_uri();?>/assets/uploads/category.png');
        background-repeat: no-repeat !important;
        background-position: center !important;
        background-size: cover !important;
        height: 26.57407407407407lvh;
    }
    .cat_txt{
        height:20lvh;
        overflow:hidden;
    }
    .cat_txt h1{
        font-size: 2.962962962962963lvh;
        margin: 0px;
        padding-top: 2.314814814814815lvh;
        padding-left: 2.083333333333333lvw;
    }
    .cat_txt p{
        padding-left: 2.083333333333333lvw;
        padding-top: 1.5lvh;
        font-size: 1.566666666666667lvh;
        margin: 0px;
        padding-right: 2.083333333333333lvw;
    }
    .cat_btn{
        margin-top: 3.7lvh;
        margin-left: 2.083333333333333lvw;
        margin-bottom: 3.714814814814815lvh;
        
    }
    .cat-button {
        color: white;
        text-decoration: none;
        display: block;
        padding: 1.851851851851852vh 1.383333333333333lvw;
        width: 8.5lvw;
        border: .1lvh solid white;
        overflow: hidden;
        transition: background-color 0.3s;
        position:relative;
    }
    .catc_text {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size:1.588888888888889lvh;
        font-family:'Avenir Book', lighter;
        font-weight:lighter;
        position: relative;
        z-index: 2;
        white-space: nowrap;
        tracking: 0.1em;
        transition: color 0.35s, font-weight 0.35s;
    }
    .catc_text svg{
        width: 1.041666666666667lvw;
    }
    .cat-button::before {
        content: '';
        position: absolute;
        left: 0;
        width: 100%;
        top:0px;
        height: 100%;
        background-color: white;
        transform: scaleX(0);
        transition: transform 0.45s ease-in-out;
        transform-origin: left;
        z-index: 1;
    }
    .cat-button:hover::before {
        transform: scaleX(1);
    }


    .cat-button:hover .catc_text  {
        color: #31487D; 
        font-weight:bolder;
    }
    .catc_text svg line{ 
        stroke:white;
        white-space: nowrap;
        tracking: 0.1em;
        transition: stroke .3s ease;
    }
    .cat-button:hover .catc_text svg line{ 
        stroke:#31487D;

    }
</style>


<div class="categories">
    <h1 data-aos="fade-up">PRODUKTET TONA</h1>
    <div data-aos="fade-up" class="c_line"></div>
    <p data-aos="fade-up">OM GROUP OFRON PRODUKTE CILËSORE PËR BIZNESET NË INDUSTRI TË NDRYSHME.</p>
    <div class="category-wrap">
    <div class=" reveal category">
            <div style="background: url('<?php echo get_template_directory_uri();?>/assets/uploads/category-four.png');" class="cat_img"></div>
            <div class="cat_txt">
                <h1>MARKAT TONA</h1>
                <p> OM Group prezanton me krenari markat më të mira higjienike si AREX, OSSI dhe DUFFYS, secila duke ofruar produkte të besuara dhe cilësore të krijuara për të plotësuar nevojat tuaja.</p>
            </div>
            <div class="cat_btn">
                <a class="cat-button" href="products-all/?product_cat=category-four">
                    <div class="catc_text">
                        SHIKO PRODUKTET
                        <svg xmlns="http://www.w3.org/2000/svg" width="22.832" height="22.832" viewBox="0 0 22.832 22.832">
                        <g id="Group_24" data-name="Group 24" transform="translate(1.414 1.414)">
                            <line id="Line_16" data-name="Line 16" y1="20.003" x2="20.003" transform="translate(0 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
                            <line id="Line_17" data-name="Line 17" y1="17.146" transform="translate(20.003 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
                            <line id="Line_18" data-name="Line 18" x2="17.146" transform="translate(2.858 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
                        </g>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
        <div class="reveal category">
            <div style="background: url('<?php echo get_template_directory_uri();?>/assets/uploads/category-one.png');" class="cat_img"></div>
            <div class="cat_txt">
                <h1>PRODUKTE HIGJENIKE</h1>
                <p>Produktet tona higjienike në OM Group sigurojnë pastërti dhe kujdes për nevojat personale dhe shtëpiake. Nga thelbësorët miqësorë me lëkurën deri te zgjidhjet e fuqishme për pastrim.</p>
            </div>
            <div class="cat_btn">
                <a class="cat-button" href="products-all/?product_cat=category-one">
                    <div class="catc_text">
                        SHIKO PRODUKTET
                        <svg xmlns="http://www.w3.org/2000/svg" width="22.832" height="22.832" viewBox="0 0 22.832 22.832">
                        <g id="Group_24" data-name="Group 24" transform="translate(1.414 1.414)">
                            <line id="Line_16" data-name="Line 16" y1="20.003" x2="20.003" transform="translate(0 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
                            <line id="Line_17" data-name="Line 17" y1="17.146" transform="translate(20.003 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
                            <line id="Line_18" data-name="Line 18" x2="17.146" transform="translate(2.858 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
                        </g>
                        </svg>
                    </div>

                </a>
            </div>
        </div>
        <div class="reveal category">
            <div style="background: url('<?php echo get_template_directory_uri();?>/assets/uploads/category-two.png');" class="cat_img"></div>
            <div class="cat_txt">
            <h1>USHQIM DHE PIJE</h1>
            <p>OM Group ju sjell një gamë të këndshme me ëmbëlsira, nga çokollatat e pasura deri te karamelet e shijshme. Të krijuara me përbërësit më të mirë, produktet tona të konfetarisë janë perfekte.</p>
            </div>
            <div class="cat_btn">
                <a class="cat-button" href="products-all/?product_cat=category-two">
                    <div class="catc_text">
                        SHIKO PRODUKTET
                        <svg xmlns="http://www.w3.org/2000/svg" width="22.832" height="22.832" viewBox="0 0 22.832 22.832">
                        <g id="Group_24" data-name="Group 24" transform="translate(1.414 1.414)">
                            <line id="Line_16" data-name="Line 16" y1="20.003" x2="20.003" transform="translate(0 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
                            <line id="Line_17" data-name="Line 17" y1="17.146" transform="translate(20.003 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
                            <line id="Line_18" data-name="Line 18" x2="17.146" transform="translate(2.858 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
                        </g>
                        </svg>
                    </div>
                </a>
            </div>
        </div>
        <div class="reveal category">
            <div style="background: url('<?php echo get_template_directory_uri();?>/assets/uploads/category-three.png');" class="cat_img"></div>
            <div class="cat_txt">
                <h1>AMBALLAZH I USHQIMIT</h1>
                <p> OM Group ofron zgjidhje të qëndrueshme dhe të besueshme për të mbajtur ushqimin tuaj të freskët dhe të sigurt. Nga enët miqësore me mjedisin deri te mbështjellësit e përshtatshëm.</p>
            </div>
            <div class="cat_btn">
                <a class="cat-button" href="products-all/?product_cat=category-three">
                    <div class="catc_text">
                        SHIKO PRODUKTET
                        <svg xmlns="http://www.w3.org/2000/svg" width="22.832" height="22.832" viewBox="0 0 22.832 22.832">
                        <g id="Group_24" data-name="Group 24" transform="translate(1.414 1.414)">
                            <line id="Line_16" data-name="Line 16" y1="20.003" x2="20.003" transform="translate(0 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
                            <line id="Line_17" data-name="Line 17" y1="17.146" transform="translate(20.003 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
                            <line id="Line_18" data-name="Line 18" x2="17.146" transform="translate(2.858 0)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="2"/>
                        </g>
                        </svg>
                    </div>
                </a>
            </div> 
        </div>
        

    </div>
    <p data-aos="fade-up">NE MBAJMË NJË GAMË TË GJERË PRODUKTESH TË CILAT <br>
        PLOTËSOJNË NEVOJAT E KLIENTËVE TANË DHE KONTRIBUOJNË <br>
        NË SUKSESIN E TYRE.</p>
</div>



<style>
    .section2{
        width: 100%;
        height:72.77777777777778lvh;
        display:flex;
        justify-content:center;
        align-items:center;
        background:#31487D;
    }
    .s2_first{
        width: 35%;
        padding-left:10%;
        padding-right:5%;
    }
    .s2_first h1{
        color: white;
        text-transform: uppercase;
        font-family: 'Avenir Ultra Light';
        font-weight: 400;
        font-size: 7.12962962962963lvh;
        margin: 0px;
        margin-bottom: 5.555555555555556lvh;
    }
    .s2_first p{
        margin: 0px;
        font-family: 'Avenir Light';
        font-weight: lighter;
        color: white;
        font-size: 1.851851851851852lvh;
    }
    .s2_second{
        width: 50%;
        
    }
    .s2_second img{
        width: 50lvw;
    }
</style>


<div class="section2">
    <div class="s2_first">
        <h1 data-aos="fade-up">RRETH NESH</h1>
        <p data-aos="fade-up">OM Group është një lider i njohur në furnizimin e produkteve cilësore për biznese në industri të ndryshme. Me një gamë të gjerë produktesh që përfshin higjienikë, ushqime, pijë dhe amballazhe, ne angazhohemi për të ofruar zgjidhje të besueshme dhe efikase për klientët tanë.
        Ekipi ynë i ekspertëve punon me përkushtim për të siguruar që çdo produkt që ofrojmë është i krijuar me përbërësit më të mirë dhe teknologjitë më të fundit. Ne besojmë se cilësia dhe inovacioni janë thelbësore për suksesin e çdo biznesi, dhe jemi këtu për të mbështetur rritjen tuaj.
        Me një fokus në shërbimin ndaj klientit dhe kënaqësinë e konsumatorëve, OM Group është partneri ideal për çdo nevojë që keni. Bashkohuni me ne në këtë udhëtim për të përmirësuar cilësinë dhe përvojën tuaj në tregun modern.
        </p>
    </div>
    <div class="s2_second">
        <img class="reveal" src="<?php echo get_template_directory_uri();?>/assets/uploads/section22.png" alt="">
    </div>
</div>


<style>
    .ss-first {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }
    .ss-first .a-big{
        text-decoration: none;
        width: 59%;
        position: relative;
        overflow: hidden;
    }
    .ssf-big {
        height: 44.44444444444444lvh;
        position: relative;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    .ssfb-img img {
        position: absolute;
        top: 0px;
        width: 100%;
        left: 0px;
        object-fit: cover;
        height: 100%;
        z-index: 0;
        transition: transform 0.5s ease;
    }
    .ssf-big h1 {
        position: relative;
        z-index: 2;
        width: 100%;
        margin: 0px;
        text-align: center;
        text-transform: uppercase;
        font-size: 6.018518518518519lvh;
        color: white;
        font-family: 'Avenir Book', lighter;
        font-weight: lighter;
        transition: opacity 0.5s ease;
    }
    .ss-over {
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 4;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    .sso-bg {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 0%;
        background: #31487D;
        z-index: -1;
        opacity: 70%;
        transition: height 0.5s ease;
    }
    .sso-d {
        width: 60%;
        color: white;
        font-size: 2lvh;
        font-family: 'Avenir Light';
        text-align: center;
        margin: 0px;
        padding: 0px 20%;
        opacity: 0;
        transition: opacity 0.5s ease;
    }
    .ss-button {
        position: absolute;
        left: -5.635416666666667lvw;
        bottom: 0px;
        display: flex;
        opacity:0;
        justify-content: center;
        align-items: center;
        transition: left 0.6s ease, opacity 0.6s ease;
    }
    .ss-button svg {
        height: 8.240740740740741lvh;
        max-width: 8.240740740740741lvh;
    }
    .ss-button p {
        color: white;
        font-size: 1.8lvh;
        font-family: 'Avenir Light';
        text-transform: uppercase;
        line: strict;
        letter-spacing: .2lvw;
        margin-left: 2lvw;
    }
    
    .ss-first .a-big:hover h1 {
        opacity: 0;
    }
    .ss-first .a-big:hover .sso-bg {
        height: 100%;
    }
    .ss-first .a-big:hover .sso-d {
        opacity: 1;
    }
    .ss-first .a-big:hover .ss-button {
        left: 0px;
        opacity:1;
    }
    .ss-first .a-big:hover .ssfb-img img {
        transform: scale(1.1);
    }
    .section-supermenu{
        padding:3.703703703703704lvh 2.083333333333333lvw;
        width: 95.83333333333333lvw;
    }





    .ss-first .a-small{
        text-decoration: none;
        width: 39%;
        position: relative;
        overflow: hidden;
    }
    .ssf-small {
        height: 44.44444444444444lvh;
        position: relative;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .ssfs-img img {
        position: absolute;
        top: 0px;
        width: 100%;
        left: 0px;
        object-fit: cover;
        height: 100%;
        z-index: 0;
        transition: transform 0.5s ease;
    }
    .ssf-small h1 {
        position: relative;
        z-index: 2;
        width: 100%;
        margin: 0px;
        text-align: center;
        text-transform: uppercase;
        font-size: 6.018518518518519lvh;
        color: white;
        font-family: 'Avenir Book', lighter;
        font-weight: lighter;
        transition: opacity 0.5s ease;
    }
    .sss-over {
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 4;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    .ssso-bg {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 100%;
        height: 0%;
        background: #31487D;
        z-index: -1;
        opacity: 70%;
        transition: height 0.5s ease;
    }
    .ssso-d {
        width: 60%;
        color: white;
        font-size: 2lvh;
        font-family: 'Avenir Light';
        text-align: center;
        margin: 0px;
        padding: 0px 20%;
        opacity: 0;
        transition: opacity 0.5s ease;
    }
    .sss-button {
        position: absolute;
        left: -5.635416666666667lvw;
        bottom: 0px;
        display: flex;
        opacity:0;
        justify-content: center;
        align-items: center;
        transition: left 0.6s ease, opacity 0.6s ease;
    }
    .sss-button svg {
        height: 8.240740740740741lvh;
        max-width: 8.240740740740741lvh;
    }
    .sss-button p {
        color: white;
        font-size: 1.8lvh;
        font-family: 'Avenir Light';
        text-transform: uppercase;
        line: strict;
        letter-spacing: .2lvw;
        margin-left: 2lvw;
    }
    .ss-first .a-small:hover h1 {
        opacity: 0;
    }
    .ss-first .a-small:hover .ssso-bg {
        height: 100%;
    }
    .ss-first .a-small:hover .ssso-d {
        opacity: 1;
    }
    .ss-first .a-small:hover .sss-button {
        left: 0px;
        opacity:1;
    }
    .ss-first .a-small:hover .ssfs-img img {
        transform: scale(1.1);
    }
</style>




<div class="section-supermenu">
    <div class="ss-first">
        <a class="a-big" href="about-us">
            <div class="ssf-big">
                <div class="ssfb-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/link_a.png" alt="">
                </div>
                <h1>RRETH NESH</h1>
                <div class="ss-over">
                    <div class="sso-bg"></div>
                    <p class="sso-d">Mësoni rreth historisë sonë, misionit dhe vlerave që na udhëheqin në ofrimin e produkteve dhe shërbimeve të shkëlqyera. </p>
                    <div class="ss-button">
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

                        <p>Klikoni për të Shikuar</p>
                    </div>
                </div>
            </div>
        </a>
        <a class="a-small" href="services">
            <div class="ssf-small">
                <div class="ssfs-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/link_b.png" alt="">
                </div>
                <h1>SHËRBIMET</h1>
                <div class="sss-over">
                    <div class="ssso-bg"></div>
                    <p class="ssso-d">Eksploroni shërbimet tona të personalizuara që janë dizajnuar për të plotësuar nevojat e biznesit tuaj. </p>
                    <div class="sss-button">
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

                        <p>Klikoni për të Shikuar</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div style="padding-top:3.703703703703704lvh" class="ss-first">
        <a class="a-small" href="contact-us">
            <div class="ssf-small">
                <div class="ssfs-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/link_c.png" alt="">
                </div>
                <h1>NA KONTAKTO</h1>
                <div class="sss-over">
                    <div class="ssso-bg"></div>
                    <p class="ssso-d">Na kontaktoni për çdo pyetje ose informacion, dhe ne do të jemi të lumtur t'ju ndihmojmë. </p>
                    <div class="sss-button">
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

                        <p>Klikoni për të Shikuar</p>
                    </div>
                </div>
            </div>
        </a>
        <a class="a-big" href="products">
            <div class="ssf-big">
                <div class="ssfb-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/link_d.png" alt="">
                </div>
                <h1>PRODUKTET</h1>
                <div class="ss-over">
                    <div class="sso-bg"></div>
                    <p class="sso-d">Shikoni gamën tonë të gjerë të produkteve cilësore, të krijuara për të siguruar cilësinë dhe kënaqësinë tuaj. </p>
                    <div class="ss-button">
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

                        <p>Klikoni për të Shikuar</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>












<style>
.image-field {
      position: relative;
      height: 82.5lvh;
      width: 100%;
      overflow: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    #scrollImage{
      position: absolute;
      top: 50%;
      left: 50%;
      min-height: 100%;
      min-width: 100%;  
      object-fit: cover;
      object-fit: cover;
      transform: translate(-50%, -50%);
      transition: transform 0.1s ease-out;
    }

    .content-wrapper {
        position: relative;
        z-index: 10;
        text-align: center;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
      
    }
    .content-wrapper h1{
        font-family:'Avenir Ultra Light', lighter;
        font-weight:lighter;
        color:white;
        font-size:8.703703703703704lvh;
        margin:0px;
        padding:0px;
        margin-bottom:5.185185185185185lvh;
    }
    .content-wrapper p{
        font-family:'Avenir Light', lighter;
        font-weight:lighter;
        color:white;
        font-size:1.851851851851852vh;
        width: 54.27083333333333lvw;
        margin:0px;
        padding:0px;
        margin-bottom:5.185185185185185lvh;
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      
    }

   
    .scroll-content {
      height: 200vh;
      background-color: #f4f4f4;
      padding: 50px;
    }

</style>


<section class="image-field">
  <img id="scrollImage" src="<?php echo get_template_directory_uri();?>/assets/uploads/section3333.png" alt="Scrolling Image">
  <div class="overlay"></div>
  <div class="content-wrapper">
    <h1 data-aos="fade-up">CILËSI DHE BESUESHMËRI NË ÇDO PRODUKT.</h1>

    <div class="logo">
        

            <img data-aos="fade" data-aos-delay="600" src="<?php echo get_template_directory_uri(); ?>/assets/uploads/logo.svg" alt="SVG Image" />
    
    </div>
  </div>
</section>







<script>

	
document.getElementById("scroll-element").addEventListener("click", function() {
    const targetElement = document.querySelector(".section-supermenu"); 
    const elementPosition = targetElement.offsetTop; 

    window.scrollTo({
        top: elementPosition,
        behavior: "smooth" 
    });
});
</script>


<style>
     @media screen and (max-width:1000px) {
        .logos {
            width: 90.69767441860465svw;
            padding: 2.150537634408602svh 4.651162790697674svw;
            position: relative;
        }
        .categories {
            width: 90.69767441860465svw;
            padding: 2.150537634408602svh 4.651162790697674svw;
            position: relative;
            background: #94A4C1;
        }
        .categories h1 {
            color: white;
            font-size: 4.516129032258065svh;
            font-family: 'Avenir Book', lighter;
            font-weight: lighter;
            margin: 0px;
            margin-bottom: 0px;
            margin-top: 2.703703703703704svh;
        }
        .c_line {
            content: ' ';
            background: white;
            height: .3lvh;
            width: 40.23255813953488svw;
            margin-bottom: 1.612903225806452svh;
            margin-top: 1.612903225806452svh;
        }
        .categories p {
            color: white;
            font-size: 1.290322580645161svh;
            font-family: 'Avenir Book', lighter;
            font-weight: lighter;
            margin: 0px;
            margin-bottom: 4.703703703703704lvh;
        }
        .category-wrap {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-direction: column;
            width: 100%;
            margin-bottom: 3.703703703703704lvh;
        }
        .category {
            background: #31487D;
            width: 100%;
            margin-right: 1.3333333333%;
            margin-bottom: 2.150537634408602svh;
        }
        .cat_img {
            width: 100%;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            height: 27.63440860215054svh;
        }
        .cat_txt h1 {
            font-size: 3.225806451612903svh !important;
            margin: 0px !important;
            padding-top: 3.714814814814815svh;
            padding-left: 8.083333svw;
        }
        .cat_txt p {
            
            padding-left: 8.083333svw;
            padding-top: 0.5svh;
            font-size: 1.935483870967742svh !important;
            margin: 0px !important;
            opacity: .7;
            width: 85%;
            padding-right: 2.083333333333333lvw;
        }
        .cat_btn {
            margin-top: 3.7svh;
            margin-left: 8.083333svw;
            margin-bottom: 3.714814814814815svh;
        }
        .cat-button {
            color: white;
            text-decoration: none;
            display: block;
            padding: 1.651852svh 5.383333svw;
            width: 45.5svw;
            border: .1lvh solid white;
            overflow: hidden;
            transition: background-color 0.3s;
            position: relative;
        }
        .catc_text {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 1.505376344086022svh;
            font-family: 'Avenir Book', lighter;
            letter-spacing: 0.5svw;
            font-weight: lighter;
            position: relative;
            z-index: 2;
            white-space: nowrap;
            tracking: 0.1em;
            transition: color 0.35s, font-weight 0.35s;
        }
        .catc_text svg {
            width: 4.425581395348837svw;
        }
        .section2 {
            width: 90.69767441860465svw;
            padding: 2.150537634408602svh 4.651162790697674svw;
            height: auto;
            display: flex;
            flex-direction: column-reverse;
            justify-content: center;
            align-items: center;
            background: #31487D;
        }
        .s2_second {
            width: 100%;
        }
        .s2_second img {
            width: 100%;
        }
        .s2_first {
            width: 100%;
            padding-left: 0%;
            padding-right: 0%;
        }
        .s2_first h1 {
            color: white;
            text-transform: uppercase;
            font-family: 'Avenir Ultra Light';
            font-weight: 400;
            font-size: 3.825806451612903svh;
            margin-top: 3.225806451612903svh !important;
            margin: 0px;
            margin-bottom: 2.225806451612903svh;
        }
        .s2_first p {
            margin: 0px;
            font-family: 'Avenir Light';
            font-weight: lighter;
            color: white;
            font-size: 1.482795698924731svh;
            width: 95%;
        }
        .section-supermenu {
            
            width: 90.69767441860465svw;
            padding: 2.150537634408602svh 4.651162790697674svw;
        }
        .ss-first {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 0px !important;
        }
        .ss-first .a-big {
            text-decoration: none;
            width: 100%;
            position: relative;
            overflow: hidden;
            padding-bottom: 2.150537634408602svh;
        }
        .ssf-big {
            height: 27.09677419354839svh;
            position: relative;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .ssf-big h1 {
            position: relative;
            z-index: 2;
            width: 100%;
            margin: 0px;
            text-align: center;
            text-transform: uppercase;
            font-size: 3.870967741935484svh;
            color: white;
            font-family: 'Avenir Book', lighter;
            font-weight: lighter;
            transition: opacity 0.5s ease;
        }
        .sso-d {
            width: 80%;
            color: white;
            font-size: 1.182795698924731svh;
            font-family: 'Avenir Light';
            text-align: center;
            margin: 0px;
            padding: 0px 20%;
            opacity: 0;
            transition: opacity 0.5s ease;
        }
        .ss-button svg {
            height: 4.516129032258065svh;
            max-width: 4.516129032258065svh;
        }
        .ss-button p {
            color: white;
            font-size: 1.290322580645161svh;
            font-family: 'Avenir Light';
            text-transform: uppercase;
            line: strict;
            letter-spacing: .2lvw;
            margin-left: 2lvw;
        }
        .ss-first .a-small {
            text-decoration: none;
            width: 100%;
            position: relative;
            overflow: hidden;
            padding-bottom: 2.150537634408602svh;
        }
        .ssf-small {
            height: 27.09677419354839svh;
            position: relative;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        .ssf-small h1 {
            position: relative;
            z-index: 2;
            width: 100%;
            margin: 0px;
            text-align: center;
            text-transform: uppercase;
            font-size: 3.870967741935484svh;
            color: white;
            font-family: 'Avenir Book', lighter;
            font-weight: lighter;
            transition: opacity 0.5s ease;
        }
        .ssso-d {
            width: 80%;
            color: white;
            font-size: 1.182795698924731svh;
            font-family: 'Avenir Light';
            text-align: center;
            margin: 0px;
            padding: 0px 20%;
            opacity: 0;
            transition: opacity 0.5s ease;
        }
        .sss-button svg {
            height: 4.516129032258065svh;
            max-width: 4.516129032258065svh;
        }
        .sss-button p {
            color: white;
            font-size: 1.290322580645161svh;
            font-family: 'Avenir Light';
            text-transform: uppercase;
            line: strict;
            letter-spacing: .2lvw;
            margin-left: 2lvw;
        }
        .content-wrapper p {
            font-family: 'Avenir Light', lighter;
            font-weight: lighter;
            color: white;
            font-size: 1.851851851851852vh;
            width: 54.27083333333333lvw;
            margin: 0px;
            padding: 0px;
            margin-bottom: 5.185185185185185lvh;
            display: none;
        }
        .content-wrapper .logo {
            padding-top: 2lvh;
            position: relative;
            display: none;
        }
        .image-field {
            position: relative;
            height: 43.516129svh;
            width: 100%;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: -2.150537634408602svh;
        }
        .content-wrapper h1 {
            font-family: 'Avenir Ultra Light', lighter;
            font-weight: lighter;
            color: white;
            font-size: 4.838709677419355svh;
            width: 80%;
            margin: 0px;
            padding: 0px;
            margin-bottom: 0px;
        }
    }
</style>




<script>
	






window.addEventListener('scroll', function() {
    const scrollPosition = window.scrollY;
    const scrollImage = document.getElementById('scrollImage');
    const translateValue = scrollPosition / 10;
    
    scrollImage.style.transform = `translate(-50%, calc(-100% + ${translateValue}px))`;
  });


</script>






<?php 
get_footer();
?>