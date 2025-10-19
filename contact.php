<?php
/*
Template Name: Contact
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
                <h1>NA KONTAKTO</h1>
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
    .contact_us{
        margin: 3.703703703703704lvh 2.083333333333333lvw;
        width: 95.83333333333333lvw;
        background: #31487D;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    .wpcf7{
        margin: 3%;
        width: 94%;
    }
    .wpcf7 form{
        width: 100%;
    }
    .contact_one, .contact_two, .contact_three{
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-bottom:3.703703703703704lvh;
    }
    .contact_one div{
        width: 24%;
    }
    .co_2{
        margin-left:1%;
        margin-right:1%;
    }
    .co_3{
        margin-left:1%;
        margin-right:1%;
    }
    .contact_two div{
        width: 24%;
    }
    .contact_one div p{
        margin:0px;
        padding:0px;
    }
    .contact_two div p{
        margin:0px;
        padding:0px;
    }
    .contact_one input{
        width: 94%;
        padding: 2.037037037037037lvh 0px 2.037037037037037lvh 0.8333333333333333lvw;
        background: transparent;
        border: 0;
        border-bottom: .15lvh solid #D6DCE7;
        outline: none;
        transition: border-bottom 0.4s ease;
        color: white;
        font-size: 2.037037037037037lvh;
        font-family: 'Avenir Book', lighter;
        font-weight: bold;
    }
    .contact_one input::placeholder{
        color: #D6DCE7;
        transition: color 0.4s ease, font-weight .4s ease; 
        font-size:1.737037037037037lvh;
        font-family:'Avenir Book', lighter;
        font-weight:light;
        text-transform:uppercase;
    }
    .contact_one input:focus::placeholder{
        color: white;
        font-weight:bold; 
    }
    .contact_one input:focus{
        border-bottom: .22lvh solid white; 
    }


    .contact_two input{
        width: 94%;
        padding: 2.037037037037037lvh 0px 2.037037037037037lvh 0.8333333333333333lvw;
        background: transparent;
        border: 0;
        border-bottom: .15lvh solid #D6DCE7;
        outline: none;
        transition: border-bottom 0.4s ease;
        color: white;
        font-size: 2.037037037037037lvh;
        font-family: 'Avenir Book', lighter;
        font-weight: bold;
    }
    .contact_two input::placeholder{
        color: #D6DCE7;
        transition: color 0.4s ease, font-weight .4s ease; 
        font-size:1.737037037037037lvh;
        font-family:'Avenir Book', lighter;
        font-weight:light;
        text-transform:uppercase;
    }
    .contact_two input:focus::placeholder{
        color: white;
        font-weight:bold; 
    }
    .contact_two input:focus{
        border-bottom: .22lvh solid white; 
    }
    .contact_three p{
        margin:0px;
        padding:0px;
        width: 100%;
    }

    .contact_three textarea{
        width: 98%;
        padding: 2.037037037037037lvh 0px 2.037037037037037lvh 2%;
        background: transparent;
        border: 0;
        border-bottom: .15lvh solid #D6DCE7;
        outline: none;
        transition: border-bottom 0.4s ease;
        color: white;
        font-size: 2.037037037037037lvh;
        font-family: 'Avenir Book', lighter;
        font-weight: bold;
        height: 3lvh;
        margin-top: 15lvh;
        resize: none;
    }
    .contact_three textarea::placeholder{
        color: #D6DCE7;
        transition: color 0.4s ease, font-weight .4s ease; 
        font-size:1.737037037037037lvh;
        font-family:'Avenir Book', lighter;
        font-weight:light;
        text-transform:uppercase;
    }
    .contact_three textarea:focus::placeholder{
        color: white;
        font-weight:bold; 
    }
    .contact_three textarea:focus{
        border-bottom: .22lvh solid white; 
    }




    .contact_submit {
        position: relative;
        display: inline-block;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 7.7vh;
        margin-bottom: 3.7vh;
    }

    .cs_s {
        position: relative;
        overflow: hidden;
        display: flex;
        width: 12%;
        height: 2lvh;
        align-items: center;
        justify-content: center;
        padding: 2.314814814814815lvh 1.302083333333333lvw;
        background:#7084AE;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .cs_s input[type="submit"] {
        position: absolute;
        background: transparent;
        color: white;
        border: none;
        left: 0px;
        width: 100%;
        height: 100%;
        font-size: 2.037037037037037vh;
        font-family:'Avenir Book',lighter;
        text-transform:uppercase;
        font-weight: light;
        cursor: pointer;
        z-index: 1;
        transition:color .4s ease, font-weight .4s ease;
    }
    .cs_s::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: white;
        transform: translateX(-101%);
        transition: transform 0.45s ease-in-out;
        z-index: 0;
    }

    .cs_s:hover::before {
        transform: translateX(0%);
        left:0px;
    }

    .cs_s:hover input[type="submit"] {
        color: #31487D;
        font-weight:bolder;
    }
    .cs_s p{
        margin: 0px;
        width: 100%;
        position: absolute;
        height: 100%;
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }
    .wpcf7-not-valid-tip{
        font-family: 'Avenir Light';
        margin-top: 1lvh;
        color: #94A4C1;
    }
    .wpcf7-response-output{
        color: white !important;
        text-align: center !important;
        padding: 2lvh !important;
        background: #7084AE !important;
        border: .1lvh solid white !important;
        font-size: 2lvh;
        font-family: 'Avenir Light';
        margin-bottom: 0px;
    }
</style>



<div class="reveal contact_us">
    <?php echo do_shortcode('[contact-form-7 id="0476db9" title="OMGROUP"]');?>
</div>





<style>
    @media screen and (max-width:1000px) {
        .h_text h1 {
            margin-bottom: 0px;
        }
        .contact_us {
            width: 90.69767441860465svw;
            margin: 2.150537634408602svh 4.651162790697674svw;
            background: #31487D;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .wpcf7 {
            margin: 5%;
            width: 90%;
        }
        .contact_one, .contact_two, .contact_three {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-bottom: 0svh;
        }
        .contact_one div {
            width: 100%;
        }
        .contact_one input {
            width: 94%;
            padding: 2.037037037037037svh 0px 2.037037037037037svh 3.8333333333333333svw;
            background: transparent;
            border: 0;
            border-bottom: .15lvh solid #D6DCE7;
            outline: none;
            transition: border-bottom 0.4s ease;
            color: white;
            font-size: 1.935483870967742svh;
            font-family: 'Avenir Book', lighter;
            font-weight: bold;
        }
        .contact_one input::placeholder{
            
            font-size:1.935483870967742svh;
        }
        .contact_two input {
            width: 94%;
            padding: 2.037037037037037svh 0px 2.037037037037037svh 3.8333333333333333svw;
            background: transparent;
            border: 0;
            border-bottom: .15lvh solid #D6DCE7;
            outline: none;
            transition: border-bottom 0.4s ease;
            color: white;
            font-size: 1.935483870967742svh;
            font-family: 'Avenir Book', lighter;
            font-weight: bold;
        }
        .contact_two input::placeholder{
            
            font-size:1.935483870967742svh;
        }
        .contact_two div {
            width: 100%;
        }
        .contact_three textarea {
            width: 94%;
            padding: 2.037037037037037svh 0px 2.037037037037037svh 3.8333333333333333svw;
            background: transparent;
            border: 0;
            border-bottom: .15lvh solid #D6DCE7;
            outline: none;
            transition: border-bottom 0.4s ease;
            color: white;
            font-size: 1.935483870967742svh;
            font-family: 'Avenir Book', lighter;
            font-weight: bold;
            height: 3lvh;
            margin-top: 15lvh;
            resize: none;
        }
        .contact_three textarea::placeholder{
            
            font-size:1.935483870967742svh;
        }
        .cs_s {
            position: relative;
            overflow: hidden;
            display: flex;
            width: 80%;
            height: 2lvh;
            align-items: center;
            justify-content: center;
            padding: 2.314814814814815lvh 1.302083333333333lvw;
            background: #7084AE;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .contact_submit {
            position: relative;
            display: inline-block;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 4svh;
            margin-bottom: 2.5svh;
        }
        .cs_s input[type="submit"] {
            position: absolute;
            background: transparent;
            color: white;
            border: none;
            left: 0px;
            width: 100%;
            height: 100%;
            font-size: 2.150537634408602svh;
            font-family: 'Avenir Book', lighter;
            text-transform: uppercase;
            font-weight: light;
            cursor: pointer;
            z-index: 1;
            transition: color .4s ease, font-weight .4s ease;
        }
    }
</style>






<?php 
get_footer();
?>