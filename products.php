<?php
/*
Template Name: Products
*/
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
    .products{
        background:#94A4C1;
        padding:3.703703703703704lvh 2.083333333333333lvw;
        width: 95.83333333333333lvw;
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
    }
    .sc-p{
        color:white;
        font-family:'Avenir Light',lighter;
        font-weight:lighter;
        font-size:8.703703703703704lvh;
        margin:0px;
        padding:3.703703703703704lvh 0px;

    }
    .__line{
        height:.5lvh;
        background:white;
        width: 25%;
        content: ' ';
        border-radius:1lvh;
    }
    .___line{
        height:.5lvh;
        background:white;
        width: 15%;
        content: ' ';
        border-radius:1lvh;
        margin-top:3.703703703703704lvh;
    }
    .cat_{
        width: 100%;
        display:flex;
        justify-content:center;
        align-items: flex-start;
        margin-top:14.803703703703704lvh;
    }
    .cat_1{
        width: 67%;
        margin-right:3%;

    }
    .cat_2{
        width: 26%;
        background:#31487D;
        padding:3.703703703703704lvh 2%;
    }
    .cat_2 img{
        width:100%;
        margin-bottom:3.703703703703704lvh;
    }
    .cat_2 p{
        font-family:'Avenir Light',lighter;
        font-weight:lighter;
        font-size:1.851851851851852lvh;
        color:white;
        line-height: 3lvh;
        padding:0px;
        margin:0px;
        margin-bottom:3.703703703703704lvh;
    }
    .cat_btn{
       margin:0px;
        
    }
    .cat-button {
        color: white;
        text-decoration: none;
        display: block;
        padding: 1.851851851851852vh 1.383333333333333lvw;
        width: 10.5lvw;
        border: .1lvh solid white;
        overflow: hidden;
        transition: background-color 0.3s;
        position:relative;
    }
    .catc_text {
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size:2.088888888888889lvh;
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
    .category{
        padding:3.703703703703704lvh 2%;
        width: 98%;
        background:#31487D;
        margin-bottom:3.703703703703704lvh;
        display:flex;
        justify-content:center;
        align-items:flex-start;
        height:28.51851851851852lvh;
        flex-direction:column;
        position:relative;
        background-position:center;
        background-size:cover;
        background-repeat:no-repeat;
        overflow:hidden;
    }
    .category h1{
        margin:0px;
        padding:0px;
        color:white;
        font-family:'Avenir Light',lighter;
        font-weight:lighter;
        font-size:6.018518518518519lvh;
        margin-bottom:1lvh;
    }
    .category p{
        color:white;
        font-family:'Avenir Light',lighter;
        font-weight:lighter;
        font-size:1.851851851851852lvh;
        width: 55%;
        margin:0px;
        padding:0px;
    }
    .category svg{
        width: 10.333333333333333lvh;
        height:10.333333333333333lvh;
        position:absolute;
        right:-10%;
        bottom:0%;
        opacity:0;
        transition:right .5s ease-in-out, opacity .6s ease;
    }
    .cat_1 a{
        text-decoration:none;
    }
    .cat_1 a:hover .category svg{
        right:0%;
        opacity:1;
    }



</style>

<div class="products">
    <h1 data-aos="fade-up" class="sc-p">ZGJEDH KATEGORIN</h1>
    <div data-aos="fade-up" class="__line"></div>
    <div data-aos="fade-up" class="___line"></div>

    <div class="cat_">
        <div class="cat_1">
            <a href="products-all/?product_cat=category-four">
            <div style="background:url('<?php echo get_template_directory_uri();?>/assets/uploads/olti-m.png')" class="reveal category">
                <h1>MARKAT TONA</h1>
                <p>
                OM Group prezanton me krenari markat më të mira higjienike si AREX, OSSI dhe DUFFYS, secila duke ofruar produkte të besuara dhe cilësore të krijuara për të plotësuar nevojat tuaja.
                </p>
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
            <a href="products-all/?product_cat=category-one">
            <div style="background:url('<?php echo get_template_directory_uri();?>/assets/uploads/p_cat1-f.png')" class="reveal category">
                <h1>PRODUKTE HIGJENIKE</h1>
                <p>
                Produktet tona higjienike në OM Group sigurojnë pastërti dhe kujdes për nevojat personale dhe shtëpiake. Nga thelbësorët miqësorë me lëkurën deri te zgjidhjet e fuqishme për pastrim.
                </p>
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
            <a href="products-all/?product_cat=category-two">
            <div style="background:url('<?php echo get_template_directory_uri();?>/assets/uploads/p_cat2-f.png')" class="reveal category">
                <h1>USHQIM DHE PIJE</h1>
                <p>
                OM Group ju sjell një gamë të këndshme me ëmbëlsira, nga çokollatat e pasura deri te karamelet e shijshme. Të krijuara me përbërësit më të mirë, produktet tona të konfetarisë janë perfekte.
                </p>
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
            <a href="products-all/?product_cat=category-three">
            <div style="background:url('<?php echo get_template_directory_uri();?>/assets/uploads/p_cat3-f.png')" class="reveal category">
                <h1>AMBALLAZH I USHQIMIT</h1>
                <p>
                OM Group ofron zgjidhje të qëndrueshme dhe të besueshme për të mbajtur ushqimin tuaj të freskët dhe të sigurt. Nga enët miqësore me mjedisin deri te mbështjellësit e përshtatshëm.
                </p>
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
            
        </div>
        <div data-aos="fade-left" class="cat_2">
            <img  src="<?php echo get_template_directory_uri();?>/assets/uploads/cat_c.png" alt="">
            <p >Në OM Group, ne jemi të përkushtuar për t’ju ofruar produktet më të mira që plotësojnë nevojat tuaja. Nëse keni pyetje rreth produkteve tona, dëshironi të kërkoni informacione shtesë, ose keni nevojë për ndihmë në zgjedhjen e produkteve që ju nevojiten, ju lutemi mos ngurroni të na kontaktoni.
Ekipi ynë i specializuar është i gatshëm të ofrojë mbështetje dhe informacion të detajuar mbi çdo produkt që ofrojmë. Ne kuptojmë se çdo klient ka nevoja të veçanta dhe jemi këtu për t'ju udhëhequr në procesin e blerjes, duke siguruar që të merrni atë që ju nevojitet për të arritur suksesin në biznesin tuaj.
Ju lutemi, për të na kontaktuar, përdorni formularin e kontaktit më poshtë. Plotësoni të dhënat tuaja dhe ne do t’ju përgjigjemi sa më shpejt të jetë e mundur. Nëse preferoni, mund të na telefononi ose na dërgoni një email për pyetje të menjëhershme. Ne e vlerësojmë çdo mundësi për të bashkëpunuar me ju dhe për t'ju ndihmuar në çdo hap të udhëtimit tuaj me OM Group.
Faleminderit që zgjodhët OM Group si partnerin tuaj të besueshëm për furnizime. Ne mezi presim të dëgjojmë nga ju dhe të ndihmojmë në plotësimin e kërkesave tuaja për produkte</p>
            <div class="cat_btn">
                <a class="cat-button" href="contact-us/">
                        <div class="catc_text">
                            NA KONTAKTONI
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
</div>



<style>
    @media screen and (max-width:1000px) {
        .h_text h1 {
            margin-bottom: 0px;
        }
        .products {
            background: #94A4C1;
            width: 90.69767441860465svw;
            padding: 2.150537634408602svh 4.651162790697674svw;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .sc-p {
            color: white;
            font-family: 'Avenir Ultra Light', lighter;
            font-weight: lighter;
            font-size: 4.301075268817204svh;
            text-align: center;
            margin: 0px;
            padding: 3svh 0px;
        }
        .__line {
            display: none;
        }
        .___line {
            display: none;
        }
        .cat_ {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            margin-top: 3svh;
            flex-direction: column;
        }
        .cat_1 {
            width: 100%;
            margin-right: 0px;
            overflow: hidden;
        }
        .category {
            padding: 3svh 7%;
            width: 86%;
            margin-bottom: 3svh;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            height: 21.50537634408602svh;
            flex-direction: column;
            position: relative;
            overflow: hidden;
        }
        .category h1 {
            margin: 0px;
            padding: 0px;
            color: white;
            font-family: 'Avenir Light', lighter;
            font-weight: lighter;
            font-size: 3.763440860215054svh;
            margin-bottom: 1svh;
        }
        .category p {
            color: white;
            font-family: 'Avenir Light', lighter;
            font-weight: lighter;
            font-size: 1.182795698924731svh;
            width: 80%;
            margin: 0px;
            padding: 0px;
        }
        .category svg {
            width: 15.55814svw;
            height: 15.55814svw;
            position: absolute;
            right: 0% !important;
            bottom: 0%;
            opacity: 1 !important;
            transition: right .5s ease-in-out, opacity .6s ease;
        }
        .cat_2 {
            width: 86%;
            background: #31487D;
            padding: 3svh 7%;
        }
        .cat_2 img {
            width: 100%;
            margin-bottom: 3svh;
        }
        .cat_2 p {
            font-family: 'Avenir Light', lighter;
            font-weight: lighter;
            font-size: 1.612903225806452svh;
            color: white;
            line-height: 3svh;
            padding: 0px;
            margin: 0px;
            margin-bottom: 3svh;
        }
        .cat-button {
            color: white;
            text-decoration: none;
            display: block;
            padding: 1.851852svh 4.383333svw;
            width: 54%;
            border: .1lvh solid white;
            overflow: hidden;
            transition: background-color 0.3s;
            position: relative;
        }
        .catc_text {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 1.8150538svh;
            font-family: 'Avenir Book', lighter;
            font-weight: lighter;
            position: relative;
            z-index: 2;
            white-space: nowrap;
            tracking: 0.1em;
            transition: color 0.35s, font-weight 0.35s;
        }
        .catc_text svg {
            width: 5.45814svw;
        }
    }
</style>

<?php 
get_footer();
?>