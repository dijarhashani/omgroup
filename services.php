<?php
/*
Template Name: Services
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
                <h1>SHËRBIMET</h1>
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
    .services{
        margin: 3.703703703703704lvh 2.083333333333333lvw;
        width: 95.83333333333333lvw;
    }
    .service-one{
        width: 100%;
        height:50lvh;
        background:url('<?php echo get_template_directory_uri(); ?>/assets/uploads/link_s1.png');
        background-size:cover;
        background-repeat:no-repeat;
        background-position:center;
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
        margin-bottom:3.703703703703704lvh;
    }
    .service-one h1{
        font-size:8.703703703703704lvh;
        font-family:'Avenir Ultra Light', lighter;
        font-weight:light;
        color: white;
        margin:0px;
        margin-bottom:2lvh;

    }
    .service-one p{
        width: 70%;
        font-size:1.851851851851852lvh;
        font-family:'Avenir Light', lighter;
        font-weight:light;
        text-align: center;
        color:white;
    }

    .service-two{
        width: 100%;
        height:50lvh;
        background:url('<?php echo get_template_directory_uri(); ?>/assets/uploads/link_s2.png');
        background-size:cover;
        background-repeat:no-repeat;
        background-position:center;
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
       
    }
    .service-two h1{
        font-size:8.703703703703704lvh;
        font-family:'Avenir Ultra Light', lighter;
        font-weight:light;
        color: white;
        margin:0px;
        margin-bottom:2lvh;

    }
    .service-two p{
        width: 70%;
        font-size:1.851851851851852lvh;
        font-family:'Avenir Light', lighter;
        font-weight:light;
        text-align: center;
        color:white;
    }
</style>

<div class="services">
    <div class="reveal service-one">
        <h1 data-aos="fade-up">TRANSPORTI</h1>
        <p data-aos="fade-up">Transporti është një shërbim thelbësor që ofrohet nga OM Group, i cili siguron që produktet tona të arrijnë te klientët në kohën e duhur dhe në gjendje optimale. Ne bashkëpunojmë me partnerë të besueshëm të transportit për të garantuar një proces efikas dhe të sigurt të shpërndarjes. Ekipi ynë i specializuar monitoron çdo hap të procesit të transportit, duke siguruar që çdo dërgesë të përmbushë standardet tona të cilësisë. Ne jemi të angazhuar për të ofruar shërbime transporti që i përgjigjen kërkesave të klientëve tanë, pavarësisht nga madhësia apo kompleksiteti i porosisë.</p>
    </div>
    <div class="reveal service-two">
        <h1 data-aos="fade-up">PAKETIMI</h1>
        <p data-aos="fade-up">Paketimi është një nga aspektet kyçe të ofrimit të shërbimeve tona në OM Group. Ne kuptojmë rëndësinë e ruajtjes dhe mbrojtjes së produkteve tona gjatë procesit të transportit dhe ruajtjes. Ekipi ynë siguron që çdo produkt të paketizohet në mënyrë të sigurt dhe efektive, duke përdorur materiale të cilësisë së lartë që mbrojnë integritetin e artikujve. Ne ofrojmë zgjidhje të personalizuara për paketimin, që plotësojnë nevojat e veçanta të klientëve tanë, duke garantuar që çdo produkt arrin në destinacion në gjendje të shkëlqyer.</p>
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
        .services {
            width: 90.69767441860465svw;
            margin: 2.150537634408602svh 4.651162790697674svw;
        }
        .service-one {
            width: 100%;
            height: 30.6989247311828svh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-bottom: 2.150537634408602svh;
        }
        .service-one h1 {
            font-size: 4.301075268817204svh;
            font-family: 'Avenir Ultra Light', lighter;
            font-weight: light;
            color: white;
            margin: 0px;
            margin-bottom: 1svh;
        }
        .service-one p {
            width: 80%;
            font-size: 1.182795698924731svh;
            font-family: 'Avenir Light', lighter;
            font-weight: light;
            text-align: center;
            color: white;
        }

        .service-two {
            width: 100%;
            height: 30.6989247311828svh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-bottom: 2.150537634408602svh;
        }
        .service-two h1 {
            font-size: 4.301075268817204svh;
            font-family: 'Avenir Ultra Light', lighter;
            font-weight: light;
            color: white;
            margin: 0px;
            margin-bottom: 1svh;
        }
        .service-two p {
            width: 80%;
            font-size: 1.182795698924731svh;
            font-family: 'Avenir Light', lighter;
            font-weight: light;
            text-align: center;
            color: white;
        }
        
            
    }
</style>
<?php 
get_footer();
?>