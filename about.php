<?php
/*
Template Name: About
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
    .bottom-head{
        width: 100lvw;
        display:flex;
        position:relative;
        height:21.5lvh;
        z-index:3;
    }
    .bh_first{
        width: 50%;
        display:flex;
        justify-content:center;
        align-items:center;
        background:#31487D;
        border-right:.1lvh solid white;
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
                <h1>RRETH NESH</h1>
        </div>
    </div>

    

</div>
<div class="reveal bottom-head">
        <div class="bh_first">
            <h1>OM GROUP</h1>
        </div>
        <div class="bt_second">
            <p>OM Group është një furnizues i besuar i një gamë të gjerë produktesh, duke i siguruar bizneseve mallrat që u nevojiten për të lulëzuar.
                Ne specializohemi në gjetjen, ruajtjen dhe shpërndarjen e produkteve cilësore për kompanitë në industri të ndryshme.
                Qoftë nëse jeni duke kërkuar furnizime me shumicë ose artikuj të specializuar, OM Group ofron një shërbim të thjeshtë dhe efikas për të përmbushur kërkesat tuaja.</p>
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
    .a_section1{
        width: 100lvw;
        height:100lvh;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .as_first{
        width: 60%;
        height:100%;
        background:url('<?php echo get_template_directory_uri(); ?>/assets/uploads/as_1.png');
        background-size:cover;
        background-repeat:no-repeat;
        background-position:center;
    }
    .as_second{
        width: 40%;
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
    }
    .as_second h1{
        color:#31487D;
        font-size:7.12962962962963lvh;
        font-family:'Avenir Ultra Light',lighter;
        font-weight:lighter;
        margin:0px;
        margin-bottom:3lvh;
    }
    .as_second p{
        width: 85%;
        color:#31487D;
        font-size:1.851851851851852lvh;
        font-family:'Avenir Book',lighter;
        font-weight:lighter;
        text-align:center;
        margin:0px;

    }
</style>


<div class="a_section1">
    <div class="reveal as_first"></div>
    <div class="as_second">
        <h1 data-aos="fade-up">DEPOJA JONË</h1>
        <p data-aos="fade-up">Depoja jonë përmban një sipërfaqe prej 3000 m² (32,300 sqft), duke ofruar hapësirë të mjaftueshme për ruajtjen dhe menaxhimin e produkteve tona. E ndërtuar sipas standardeve më të larta, depoja jonë garanton kushte optimale për ruajtjen e produkteve, duke siguruar që ato të mbeten në gjendje të shkëlqyer.</p>
    </div>
</div>


<style>
    .a_section2{
        width: 95.83333333333333lvw;
        background:#31487D;
        padding:3.703703703703704lvh 2.083333333333333lvw;
    }
    .as2_first{
        width: 100%;
        display:flex;
        justify-content:center;
        align-items:center;
        margin-bottom:3.703703703703704lvh;
    }
    .as2_second{
        width: 100%;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .as2f-2{
        width: 60%;
        overflow:hidden;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .as2f-2 img{
        width: 100%;
    }
    .as2f-1{
        width: 36%;
        margin:0px 3%;
        display:flex;
        justify-content:flex-start;
        align-items:flex-start;
        flex-direction:column;
    }
    .as2f-1 h1{
        color:white;
        font-size:7.12962962962963lvh;
        font-family:'Avenir Ultra Light',lighter;
        font-weight:lighter;
        margin:0px;
        margin-bottom:3lvh;
    }
    .as2f-1 p{
        color:white;
        font-size:1.851851851851852lvh;
        font-family:'Avenir Book',lighter;
        font-weight:lighter;
        text-align:left;
        margin:0px;
    }
</style>

<div class="a_section2">
    <div class="as2_first">
        <div class="as2f-1">
            <h1 data-aos="fade-right">MISIONI YNË</h1>
            <p data-aos="fade-right">
            Misioni ynë në OM Group është të ofrojmë produkte dhe shërbime cilësore që ndihmojnë bizneset të rriten dhe të zhvillohen. Ne besojmë se çdo klient meriton zgjidhje të besueshme dhe inovative, prandaj ne angazhohemi për të ofruar një gamë të gjerë produktesh që përmbushin nevojat e tyre specifike.
            </p>
        </div>
        <div class="as2f-2">
            <img data-aos="fade-left" src="<?php echo get_template_directory_uri();?>/assets/uploads/as_2.png" alt="">
        </div>
    </div>
    <div class="as2_second">
        <div class="as2f-2">
            <img data-aos="fade-right" src="<?php echo get_template_directory_uri();?>/assets/uploads/as_3.png" alt="">
        </div>
        <div class="as2f-1">
            <h1 data-aos="fade-left">VIZIONI YNË</h1>
            <p data-aos="fade-left">
            Vizioni ynë në OM Group është të bëhemi lider në industrinë e furnizimeve dhe shërbimeve, duke ofruar zgjidhje të avancuara dhe të qëndrueshme për bizneset e të gjitha madhësive. Ne dëshirojmë të jemi partneri i preferuar për klientët tanë, duke iu ofruar atyre produkte që jo vetëm plotësojnë nevojat e tyre, por gjithashtu i ndihmojnë të arrijnë qëllimet e tyre afatgjata.
            </p>
        </div>
    </div>
</div>


<style>
    .a_section3{
        width: 95.83333333333333lvw;
        padding:3.703703703703704lvh 2.083333333333333lvw 0px 2.083333333333333lvw;
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
    }
    .a_section3 h1{
        color:black;
        font-size:7.12962962962963lvh;
        font-family:'Avenir Ultra Light',lighter;
        font-weight:lighter;
        margin:0px;
        margin-bottom:3.703703703703704lvh;
    }
    .as3f, .as3s{
        width: 100%;
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .as3f{
        margin-bottom:3.703703703703704lvh;
    }
    .as33-1{
        width: 57%;
        overflow:hidden;
        position: relative;
        height:50lvh;
    }
    .as33-2{
        width: 40%;
        overflow:hidden;
        position: relative;
        height:50lvh;
    }
    .as33-1 img{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .as33-2 img{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>



<div class="a_section3">
    <h1 data-aos="fade-up">GALERIA</h1>
    <div class="as3f">
        <div class="as33-1">
            <img class="reveal" src="<?php echo get_template_directory_uri(); ?>/assets/uploads/g1-f.png" alt="">
        </div>
        <div style="margin-left:3%;" class="as33-2">
            <img class="reveal" src="<?php echo get_template_directory_uri(); ?>/assets/uploads/g_2.png" alt="">
        </div>
    </div>
    <div class="as3s">
        <div style="margin-right:3%;" class="as33-2">
            <img class="reveal" src="<?php echo get_template_directory_uri(); ?>/assets/uploads/g_3.png" alt="">
        </div>
        <div class="as33-1">
            <img class="reveal" src="<?php echo get_template_directory_uri(); ?>/assets/uploads/g2-f.png" alt="">
        </div>
    </div>
</div>




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
            height: 30svh;
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
            height: 70svh;
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
        .a_section1 {
            width: 100svw;
            height: 65svh;
            flex-direction: column-reverse;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .as_second {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .as_second h1 {
            color: #31487D;
            font-size: 4.946236559139785svh;
            margin-top: 3svh;
            font-family: 'Avenir Ultra Light', lighter;
            font-weight: lighter;
            margin: 0px;
            margin-bottom: 3svh;
            margin-top: 3svh;
        }
        .as_second p {
            width: 85%;
            color: #31487D;
            font-size: 1.182795698924731svh;
            font-family: 'Avenir Book', lighter;
            font-weight: lighter;
            text-align: center;
            margin: 0px;
            margin-bottom: 5svh;
        }
        .as_first {
            width: 100%;
            height: 100%;
        }
        .a_section2 {
            width: 90.69767441860465svw;
            padding: 2.150537634408602svh 4.651162790697674svw;
        }
        .as2_first {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-bottom: 3svh;
        }
        .as2f-1 {
            width: 100%;
            margin: 3svh 0px 6svh 0px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .as2f-1 h1 {
            color: white;
            font-size: 4.946236559139785svh;
            font-family: 'Avenir Ultra Light', lighter;
            font-weight: lighter;
            margin: 0px;
            margin-bottom: 3lvh;
        }
        .as2f-1 p {
            color: white;
            font-size: 1.182795698924731svh;
            font-family: 'Avenir Book', lighter;
            font-weight: lighter;
            text-align: center;
            margin: 0px;
        }
        .as2f-2 img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .as2f-2 {
            width: 100%;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 29.13978494623656svh;
        }
        .as2_second {
            width: 100%;
            display: flex;
            flex-direction: column-reverse;
            justify-content: center;
            align-items: center;
        }
        .a_section3 {
            width: 90.69767441860465svw;
            padding: 2.150537634408602svh 4.651162790697674svw 0px 4.651162790697674svw;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .a_section3 h1 {
            color: black;
            font-size: 4.946236559139785svh;
            font-family: 'Avenir Ultra Light', lighter;
            font-weight: lighter;
            margin: 0px;
            margin-bottom: 6svh;
            margin-top: 3svh;
        }
        .as3f {
            margin-bottom: 0svh;
        }
        .as3f, .as3s {
            width: 100%;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }
        .as33-1 {
            width: 100%;
            overflow: hidden;
            position: relative;
            height: 35svh;
            margin-bottom: 3svh;
        }
        .as33-1 img {
            position: relative;
            top: 0px;
            left: 0px;
            transform:none;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .as33-2 {
            width: 100%;
            overflow: hidden;
            position: relative;
            height: 35lvh;
            margin-left: 0px !important;
            margin-right: 0px !important;
            margin-bottom:3svh;
        }
        .as33-2 img {
            position: relative;
            top: 0px;
            left: 0px;
            transform:none;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
    }
    </style>
<?php 
get_footer();
?>