


<style>
    .newsletter{
        width: 95.83333333333333lvw;
        margin: 3.703703703703704lvh 2.083333333333333lvw;
    }
    .n_three-p{
        display:flex;
        width: 100%;
        justify-content:center;
        align-items:center;
    }
    .nth-section{
        width: 33.33333333%;
        height:28.24074074074074lvh;
        position:relative;
        background-repeat:no-repeat;
        background-position:center;
        background-size:cover;

    }
    .nth-section p{
        font-family:'Avenir Light',lighter;
        font-weight:light;
        color:white;
        font-size:1.851851851851852lvh;
        margin: 3.703703703703704lvh 2.083333333333333lvw;
    }
    .nth-section h1{
        font-family:'Avenir Ultra Light',lighter;
        font-weight:lighter;
        color:white;
        font-size:4.166666666666667lvh;
        position:absolute;
        bottom:3.703703703703704lvh;
        left:2.083333333333333lvw;
        margin:0px;
    }
    .nth-section-n{
        width: 33.33333333%;
        height:28.24074074074074lvh;
        position:relative;
        border-top:.1lvh solid black;
        border-right:.1lvh solid black;

    }
    .nth-section-n p{
        font-family:'Avenir Light',lighter;
        font-weight:light;
        color:black;
        font-size:1.851851851851852lvh;
        margin: 3.703703703703704lvh 2.083333333333333lvw;
    }
    .nth-section-n h1{
        font-family:'Avenir Ultra Light',lighter;
        font-weight:lighter;
        color:black;
        font-size:4.166666666666667lvh;
        position:absolute;
        bottom:3.703703703703704lvh;
        left:2.083333333333333lvw;
        margin:0px;
    }
    .nn_form{
        width: 100%;
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
        background:#94A4C1;
        position:relative;
        margin-top:-1lvh;
        z-index:10;

    }
    .nn_form h1{
        font-family:'Avenir Book',lighter;
        font-weight:lighter;
        font-size:2.314814814814815lvh;
        color:white;
        margin-top:3.703703703703704lvh;
        padding:0px;
        margin-bottom:7.407407407407407lvh;
    }
    .mc4wp-form {
    width: 95%;
}

.mc4wp-form .form {
    display: flex;
    width: 100%;
    justify-content: center;
    align-items: center;
}

.mc4wp-form .form .name,
.mc4wp-form .form .surname,
.mc4wp-form .form .email {
    width: 33.333333%;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative; 
}

.mc4wp-form .form .name input,
.mc4wp-form .form .surname input,
.mc4wp-form .form .email input {
    width: 94%;
    padding: 2.037037037037037lvh 0px 2.037037037037037lvh 0.8333333333333333lvw;
    background: transparent;
    border: 0;
    border-bottom: .15lvh solid #D6DCE7;
    outline: none;
    transition: border-bottom 0.4s ease; 
    color:white;
    font-size:2.037037037037037lvh;
    font-family:'Avenir Book', lighter;
    font-weight:bold;
}


.mc4wp-form .form .name input:focus,
.mc4wp-form .form .surname input:focus,
.mc4wp-form .form .email input:focus {
    border-bottom: .22lvh solid white; 
}


.mc4wp-form .form .name input::placeholder,
.mc4wp-form .form .surname input::placeholder,
.mc4wp-form .form .email input::placeholder {
    color: #D6DCE7;
    transition: color 0.4s ease, font-weight .4s ease; 
    font-size:2.037037037037037lvh;
    font-family:'Avenir Book', lighter;
    font-weight:light;
}

.mc4wp-form .form .name input:focus::placeholder,
.mc4wp-form .form .surname input:focus::placeholder,
.mc4wp-form .form .email input:focus::placeholder {
    color: white;
    font-weight:bold; 
}


.submit {
    position: relative;
    display: inline-block;
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 7.7vh;
    margin-bottom: 3.7vh;
}

.sign-up-button {
    position: relative;
    overflow: hidden;
    display: flex;
    width: 12%;
    height: 2lvh;
    align-items: center;
    justify-content: center;
    padding: 2.314814814814815lvh 1.302083333333333lvw;
    border: .2lvh solid white;
    cursor: pointer;
    transition: all 0.3s ease;
}

.sign-up-button input[type="submit"] {
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
.sign-up-button::before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: white;
    
    transform: translateX(-100%);
    transition: transform 0.45s ease-in-out;
    z-index: 0;
}

.sign-up-button:hover::before {
    transform: translateX(0%);
    left:0px;
}

.sign-up-button:hover input[type="submit"] {
    color: #31487D;
    font-weight:bolder;
}

.icon {
    width: 1.5lvh;
    height: 1.5lvh;
    border-right: .3lvh solid white;
    border-top: .3lvh solid white;
    transform: rotate(45deg); /* Creates the arrow */
    margin-left: 1lvw;
    transition: transform 0.35s ease;
    z-index: 1;
}

.sign-up-button:hover .icon {
    transform: rotate(45deg) translate(5px, -5px); /* Moves the arrow on hover */
}


.mc4wp-alert{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 1vh;
}
.mc4wp-alert p{
    font-size: 2lvh;
    margin: 0px;
    font-family: 'Avenir Book';
    color: white;
}
.maqivenanen{
    position: absolute;
    left: 3%;
    bottom: 3.7vh;
    margin: 0px;
    color: white;
    font-size: 1.574074074074074lvh;
    font-family: 'Avenir Light';
}
</style>

<div class="reveal newsletter">
    <div class="n_three-p">
        <div style="background:url('<?php echo get_template_directory_uri();?>/assets/uploads/newsletter.png')" class="nth-section">
                <p>REGJISTROHU TANI!</p>
                <h1>MERR LAJMET E FUNDIT!</h1>
        </div>
        <div class="nth-section-n">
                <p>OFERTA SPECIKA PËR JU!</p>
                <h1>MOS I HUMBNI!</h1>
        </div>
        <div class="nth-section-n">
                <p>BASHKOHU ME NE!</p>
                <h1>NA NDIQNI NË RRJETET SOCIALE!</h1>
        </div>
    </div>
    <div class="nn_form">
        <h1>REGJISTROHU PËR NEWSLETTER</h1>
    <?php echo do_shortcode('[mc4wp_form id=6]');?>

    <p class="maqivenanen">BASHKOHUNI ME NE PËR OFERTAT EKSKLUZIVE DHE INFORMACIONE TË REJA! <br>
REGJISTROHUNI TANI DHE MOS E HUMBNI ASNJË ZHVILLIM! <br>
NE JEMI KËTU PËR TË JU OFRUAR PËRMBATJE TË VLEFSHME.</p>
    </div>
</div>


<style>
	footer{
		width: 95.83333333333333lvw;
		background: radial-gradient(circle at center, #E7EEF2, #F3F3F3);
		margin-top:-3.703703703703704lvh;
		padding:3.703703703703704lvh 2.083333333333333lvw;
		position:relative;
	}
	.f_links{
		display: flex;
	}
	.f_links div h1{
		font-family: 'Avenir Book';
		font-size: 2.777777777777778lvh;
		margin-top: 7.407407407407407lvh;
		margin-bottom: 2.037037037037037lvh;
		color: #1F2F3D;
	}
	.fl_first a{
		color: #1F2F3D;
		text-decoration: none;
		font-size: 1.851851851851852lvh;
		margin-bottom: 1.851851851851852lvh;
		font-family: 'Avenir Book';
		font-weight: 700;
		margin-left: .5lvh;
		transition:text-shadow .3s ease;
	}
	.fl_first a:hover{
		text-shadow: 0px .4vh 1vh rgba(0, 0, 0, 0.2)
	}
	.fl_second a{
		color: #1F2F3D;
		text-decoration: none;
		font-size: 1.851851851851852lvh;
		margin-bottom: 1.851851851851852lvh;
		font-family: 'Avenir Book';
		font-weight: 700;
		margin-left: .5lvh;
		transition:text-shadow .3s ease;
	}
	.fl_second a:hover{
		text-shadow: 0px .4vh 1vh rgba(0, 0, 0, 0.2)
	}
	.fl_first{
		display: flex;
		flex-direction: column;
		margin-right: 16lvw;
		margin-left:2.083333333333333lvh;
		margin-bottom:15.18518518518519lvh;
	}
	.fl_second{
		display: flex;
		flex-direction: column;
		margin-right: 16lvw;
		margin-left:2.083333333333333lvh;
		margin-bottom:15.18518518518519lvh;
	}
	.f_cop{
		position:absolute;
		left:2.083333333333333lvw;
		bottom:3.703703703703704lvh;
		font-size: 1.851851851851852lvh;
		font-family: 'Avenir Book';

		 
	}
	.f_logo{
		position:absolute;
		right:2.083333333333333lvw;
		bottom:3.703703703703704lvh;
	}
	.f_logo img{
		width: 3.791666666666667lvw;
	}
	.country-selector.weglot-default {
		position: fixed;
		bottom: 3vh;
		left: 2lvw;
		right:auto !important
	}

    .mc4wp-alert p {
            font-size: 2lvh;
            margin: 0px;
            font-family: 'Avenir Book';
            color: white;
            margin-bottom: 3svh;
        }
    @media screen and (max-width:1000px) {
        .newsletter {
            width: 90.69767441860465svw;
            padding: 2.150537634408602svh 4.651162790697674svw;
            margin:0px;
        }
        .nth-section-n {
            width: 33.33333333%;
            height: 28.24074074074074lvh;
            position: relative;
            display: none;
            border-top: .1lvh solid black;
            border-right: .1lvh solid black;
        }
        .nth-section {
            width: 100%;
            height: 20.86021505376344svh;
            position: relative;
            background-repeat: no-repeat !important;
            background-position: center !important;
            background-size: cover !important;
        }
        .nth-section p {
            font-family: 'Avenir Light', lighter;
            font-weight: lighter;
            color: white;
            font-size: 1.290322580645161svh;
            margin: 2.150537634408602svh 4.651162790697674svw;
        }
        .nth-section h1 {
            font-family: 'Avenir Ultra Light', lighter;
            font-weight: lighter;
            color: white;
            font-size: 3.010752688172043svh;
            position: absolute;
            bottom: 2.150537634408602svh;
            left: 4.651162790697674svw;
            margin: 0px;
        }
        .nn_form {
            width: 90%;
            padding: 0px 5%;
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
            flex-direction: column;
            background: #94A4C1;
            position: relative;
            margin-top: -1lvh;
            z-index: 10;
        }
        .nn_form h1 {
            font-family: 'Avenir Ultra Light', lighter;
            font-weight: lighter;
            letter-spacing: 0.3svw;
            font-size: 2.150537634408602svh;
            color: white;
            margin-top: 3.703703703703704svh;
            padding: 0px;
            margin-bottom: 11.407407svh;
        }
        .maqivenanen {
            left: 5%;
            position: absolute;
            bottom: auto;
            top: 8.854241svh;
            margin: 0px;
            color: white;
            font-size: 1.290322580645161svh;
            font-family: 'Avenir Ultra Light';
        }
        .mc4wp-form {
            width: 100%;
        }
        .mc4wp-form .form {
            display: flex;
            width: 100%;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .mc4wp-form .form .name input, .mc4wp-form .form .surname input, .mc4wp-form .form .email input {
            width: 100%;
            padding: 2.037037037037037lvh 0px 2.037037037037037lvh 0.8333333333333333lvw;
            background: transparent;
            border: 0;
            border-bottom: .15lvh solid #D6DCE7;
            outline: none;
            transition: border-bottom 0.4s ease;
            color: white;
            font-size: 1.8037037037037037lvh;
            font-family: 'Avenir Book', lighter;
            font-weight: bold;
        }
        .mc4wp-form .form .name, .mc4wp-form .form .surname, .mc4wp-form .form .email {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        .submit {
            position: relative;
            display: inline-block;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 3svh;
            margin-bottom: 4.7vh;
        }
        .sign-up-button {
            position: relative;
            overflow: hidden;
            display: flex;
            width: 54%;
            height: 2lvh;
            align-items: center;
            justify-content: center;
            padding: 1.714814814814815lvh 1.302083333333333lvw;
            border: .2lvh solid white;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .sign-up-button input[type="submit"] {
            position: absolute;
            background: transparent;
            color: white;
            border: none;
            left: 0px;
            width: 100%;
            height: 100%;
            font-size: 1.697849462365591svh;
            font-family: 'Avenir Book', lighter;
            text-transform: uppercase;
            font-weight: light;
            cursor: pointer;
            z-index: 1;
            transition: color .4s ease, font-weight .4s ease;
        }
        footer {
            width: 90.69767441860465svw;
            padding: 2.150537634408602svh 4.651162790697674svw;
            background: radial-gradient(circle at center, #E7EEF2, #F3F3F3);
            margin-top: -3.703703703703704lvh;
            position: relative;
        }
        .f_links {
            display: flex;
            width: 90%;
            margin: 0px 5%;
        }
        .fl_first {
            display: flex;
            flex-direction: column;
            width: 50%;
            margin-right: 0vw;
            margin-left: 0vh;
            margin-bottom: 15.18518518518519lvh;
        }
        .fl_second {
            display: flex;
            flex-direction: column;
            margin-right: 0vw;
            width: 50%;
            margin-left: 0vh;
            margin-bottom: 15.18518518518519lvh;
        }
        .f_links div h1 {
            font-family: 'Avenir Book';
            font-size: 2.312903225806452svh;
            margin-top: 2.407407lvh;
            margin-bottom: 2.037037037037037lvh;
            color: #1F2F3D;
        }
        .fl_first a {
            color: #1F2F3D;
            text-decoration: none;
            font-size: 1.3svh;
            margin-bottom: 1.51851851851852lvh;
            font-family: 'Avenir Book';
            font-weight: 700;
            margin-left: .5lvh;
            transition: text-shadow .3s ease;
        }
        .fl_second a {
            color: #1F2F3D;
            text-decoration: none;
            font-size: 1.3svh;
            margin-bottom: 1.51851851851852lvh;
            font-family: 'Avenir Book';
            font-weight: 700;
            margin-left: .5lvh;
            transition: text-shadow .3s ease;
        }
        .f_cop {
            position: absolute;
            left: 4.651162790697674svw;
            bottom: 2.150537634408602svh;
            font-size: 1.075268817204301svh;
            font-family: 'Avenir Book';
        }
        .f_logo {
            position: absolute;
            right: 4.651162790697674svw;
            bottom: 2.150537634408602svh;
        }
        .f_logo img {
            width: 10.44186svw;
        }
    }
</style>

<footer>
	<div class="f_links">
		<div class="fl_first">
			<h1 class="reveal">OM GROUP</h1>
			<a class="reveal" href="home">BALLINA</a>
			<a class="reveal" href="about-us">RRETH NESH</a>
			<a class="reveal" href="products">PRODUKTET</a>
			<a class="reveal" href="services">SHËRBIMET</a>
		</div>
		<div class="fl_second">
			<h1 class="reveal">BURIMET</h1>
			<a class="reveal" href="contact-us">NA KONTAKTO</a>
			<a class="reveal" href="<?php echo get_template_directory_uri(); ?>/assets/resources/terms.pdf" download="om-group-terms&conditions.pdf">KUSHTET DHE RREGULLAT</a>
			<a class="reveal" href="<?php echo get_template_directory_uri(); ?>/assets/resources/privacy.pdf" download="om-group-privacy&policy.pdf">PRIVATËSIA DHE POLITIKAT</a>
		</div>
	</div>
	<div class="reveal f_cop">COPYRIGHT © OM GROUP 2024</div>
	<div class="reveal f_logo">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/uploads/logo.svg" alt="SVG Image" />
	</div>
</footer>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

		<?php wp_footer(); ?>
	</body>
</html>
