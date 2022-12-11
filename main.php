<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABIDJANAISE Coiffure</title>

    <link rel="stylesheet" href="css/main_style.css">

    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <script type="text/javascript" src="JavaScript.js"></script>

    <style>
        @media screen and (min-width: 1003px) {


            .slider {
                width: 1000px;
                height: 500px;
                border-radius: 10px;
                overflow: hidden;
            }

            .slides {
                width: 500%;
                height: 500px;
                display: flex;
            }

            .slides input {
                display: none;
            }

            .slide {
                width: 20%;
                transition: 2s;
            }

            .slide p {
                width: 1000px;
                font-size: 150%;
                text-align: center;
                position: relative;
                top: 30%;
            }

            .navigation-manual {
                position: absolute;
                width: 1000px;
                margin-top: -40px;
                display: flex;
                justify-content: center;
            }

            .manual-btn {
                border: 2px solid #14ee38;
                padding: 5px;
                border-radius: 10px;
                cursor: pointer;
                transition: 1s;
            }

            .manual-btn:not(:last-child) {
                margin-right: 40px;
            }

            .manual-btn:hover {
                background-color: #14ee38;
            }

            #radio1:checked~.first {
                margin-left: 0;
            }

            #radio2:checked~.first {
                margin-left: -20%;
            }

            #radio3:checked~.first {
                margin-left: -40%;
            }

            #radio4:checked~.first {
                margin-left: -60%;
            }

            .navigation-auto {
                position: absolute;
                display: flex;
                width: 1000px;
                margin-top: 460px;
                justify-content: center;
            }

            .navigation-auto div {
                border: 2px solid #14ee38;
                padding: 5px;
                border-radius: 10px;
                transition: 1s;
            }

            .navigation-auto div:not(:last-child) {
                margin-right: 40px;
            }

            #radio1:checked~.navigation-auto .auto-btn1 {
                background: #14ee38;
            }

            #radio2:checked~.navigation-auto .auto-btn2 {
                background: #14ee38;
            }

            #radio3:checked~.navigation-auto .auto-btn3 {
                background: #14ee38;
            }

            #radio4:checked~.navigation-auto .auto-btn4 {
                background: #14ee38;
            }





            .pop {
                align-items: center;
                justify-content: center;
                text-align: center;
            }

            .btnPopup {
                background-color: #eea814;
                padding: 5px;
                font-size: 14pt;
                color: black;
                border-radius: 12px;
                cursor: pointer;
                margin: 10px;
            }

            .btnPopup:hover {
                background-color: green;
                color: #eea814;
                opacity: 0.5;
                font-weight: 600;
            }

            .overlay {
                background-color: rgba(0, 0, 0, 0.9);
                opacity: 1;
                position: fixed;
                left: 0px;
                top: 0px;
                width: 100%;
                height: 100%;
                display: none;
                z-index: 200;
            }

            .popup {
                margin: 5% auto;
                width: 70%;
                background-color: rgb(222, 228, 222);
                border-radius: 5px;
                box-shadow: 15px 20px 0 rgba(0, 0, 0, 0.8);
                padding: 1em;
            }

            .btnClose {
                float: right;
                cursor: pointer;
            }







            .pop1 {
                align-items: center;
                justify-content: center;
                text-align: center;
            }

            .btnPopup1 {
                background-color: #eea814;
                padding: 5px;
                font-size: 14pt;
                color: black;
                border-radius: 12px;
                cursor: pointer;
                margin: 10px;
            }

            .btnPopup1:hover {
                background-color: green;
                color: #eea814;
                opacity: 0.5;
                font-weight: 600;
            }

            .overlay1 {
                background-color: rgba(0, 0, 0, 0.9);
                opacity: 1;
                position: fixed;
                left: 0px;
                top: 0px;
                width: 100%;
                height: 100%;
                display: none;
                z-index: 200;
            }

            .popup1 {
                margin: 5% auto;
                width: 70%;
                background-color: rgb(222, 228, 222);
                border-radius: 5px;
                box-shadow: 15px 20px 0 rgba(0, 0, 0, 0.8);
                padding: 1em;
            }

            .btnClose1 {
                float: right;
                cursor: pointer;
            }





            .pop2 {
                align-items: center;
                justify-content: center;
                text-align: center;
            }

            .btnPopup2 {
                background-color: #eea814;
                padding: 5px;
                font-size: 14pt;
                color: black;
                border-radius: 12px;
                cursor: pointer;
                margin: 10px;
            }

            .btnPopup2:hover {
                background-color: green;
                color: #eea814;
                opacity: 0.5;
                font-weight: 600;
            }

            .overlay2 {
                background-color: rgba(0, 0, 0, 0.9);
                opacity: 1;
                position: fixed;
                left: 0px;
                top: 0px;
                width: 100%;
                height: 100%;
                display: none;
                z-index: 200;
            }

            .popup2 {
                margin: 5% auto;
                width: 70%;
                background-color: rgb(222, 228, 222);
                border-radius: 5px;
                box-shadow: 15px 20px 0 rgba(0, 0, 0, 0.8);
                padding: 1em;
            }

            .btnClose2 {
                float: right;
                cursor: pointer;
            }







            @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');

            * {
                box-sizing: border-box;
                font-family: 'Montserrat', sans-serif;
            }

            .wrapper {
                max-width: 500px;
                width: 100%;
                background: #fff;
                margin: 50px auto;
                box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.125);
                padding: 30px;
            }

            .wrapper .title {
                font-size: 24px;
                font-weight: 700;
                margin-bottom: 25px;
                color: #fec107;
                text-transform: uppercase;
                text-align: center;
            }

            .wrapper .form {
                width: 100%;
            }

            .wrapper .form .inputfield {
                margin-bottom: 15px;
                display: flex;
                align-items: center;
            }

            .wrapper .form .inputfield label {
                width: 200px;
                color: #757575;
                margin-right: 10px;
                font-size: 14px;
            }

            .wrapper .form .inputfield .input,
            .wrapper .form .inputfield .textarea {
                width: 100%;
                outline: none;
                border: 1px solid #d5dbd9;
                font-size: 15px;
                padding: 8px 10px;
                border-radius: 3px;
                transition: all 0.3s ease;
            }

            .wrapper .form .inputfield .textarea {
                width: 100%;
                height: 125px;
                resize: none;
            }


            .wrapper .form .inputfield .input:focus,
            .wrapper .form .inputfield .textarea:focus,
            .wrapper .form .inputfield .custom_select select:focus {
                border: 1px solid #fec107;
            }

            .wrapper .form .inputfield p {
                font-size: 14px;
                color: #757575;
            }

            .wrapper .form .inputfield .check {
                width: 15px;
                height: 15px;
                position: relative;
                display: block;
                cursor: pointer;
            }

            .wrapper .form .inputfield .check input[type="checkbox"] {
                position: absolute;
                top: 0;
                left: 0;
                opacity: 0;
            }

            .wrapper .form .inputfield .check .checkmark {
                width: 15px;
                height: 15px;
                border: 1px solid #fec107;
                display: block;
                position: relative;
            }

            .wrapper .form .inputfield .check .checkmark:before {
                content: "";
                position: absolute;
                top: 1px;
                left: 2px;
                width: 5px;
                height: 2px;
                border: 2px solid;
                border-color: transparent transparent #fff #fff;
                transform: rotate(-45deg);
                display: none;
            }

            .wrapper .form .inputfield .check input[type="checkbox"]:checked~.checkmark {
                background: #fec107;
            }

            .wrapper .form .inputfield .check input[type="checkbox"]:checked~.checkmark:before {
                display: block;
            }

            .wrapper .form .inputfield .btn {
                width: 100%;
                padding: 8px 10px;
                font-size: 15px;
                border: 0px;
                background: #fec107;
                color: #fff;
                cursor: pointer;
                border-radius: 3px;
                outline: none;
            }

            .wrapper .form .inputfield .btn:hover {
                background: #ffd658;
            }

            .wrapper .form .inputfield:last-child {
                margin-bottom: 0;
            }

            @media (max-width:420px) {
                .wrapper .form .inputfield {
                    flex-direction: column;
                    align-items: flex-start;
                }

                .wrapper .form .inputfield label {
                    margin-bottom: 5px;
                }

                .wrapper .form .inputfield.terms {
                    flex-direction: row;
                }
            }

        }






        


        


    </style>

</head>


<body>

    <nav id="nav-set">

        <img src="img/logo.png" alt="abidjanaise_logo" id="LOGO">

        <div class="nav-button">
            <ul class="row">
                <li class="col-3">
                    <a href="#">Accueil</a>
                </li>

                <li class="col-3">
                    <a href="produits.php">Produits</a>
                </li>

                <li class="col-3">
                    <a href="#Services">Services</a>
                </li>

                <li class="col-3">
                    <a href="#Contact">Contact</a>
                </li>
            </ul>
        </div>

    </nav>
    <header class="row justify-content-between">




    </header>

    <section id="bannière">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec,
        ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor,
        orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque
        vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum
        augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante
        ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque
        fermentum. Maecenas adipiscing ante non diam sodales hendrerit.
    </section>

    <section id="about">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec,
        ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor,
        orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque
        vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum
        augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante
        ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque
        fermentum. Maecenas adipiscing ante non diam sodales hendrerit.

        <div class="pop2">

            <button id="btnPopup2" class="btnPopup2"> Prenez Rendez-vous </button>
            <div id="overlay2" class="overlay2">
                <div id="popup2" class="popup2">

                    <div class="wrapper">

                        <div class="title">
                            Formulaire de contact
                            <span id="btnClose2" class="btnClose2">&times;</span>
                        </div>
                        <div class="form">

                            <?php
                            include("includes/formulaire.php");
                            ?>

                            <div class="inputfield">
                                <input type="submit" value="Envoyez" class="btn send2" id="send2">
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </section>

    <section id="Services" style=" border-radius:10px;">
        <div>

            <h2>Nos Services</h2>

            <div class="row" style="text-align: center; align-items: center; text-align: center ;">

                <div class="col-lg-6 col-md-4">
                    <a href="Services/tresses.php">
                        <img src="img/comments-6.jpg" alt="">
                    </a>
                </div>

                <div class="col-lg-6 col-md-4">
                    <a href="Services/traitement_cheveux.php">
                        <img src="img/comments-6.jpg" alt="">
                    </a>
                </div>

                <div class="col-lg-6 col-md-4">
                    <a href="Services/Confect_perruq.php">
                        <img src="img/comments-6.jpg" alt="">
                    </a>
                </div>

                <div class="col-lg-6 col-md-4">
                    <a href="Services/attaché_foulard.php">
                        <img src="img/comments-6.jpg" alt="">
                    </a>
                </div>

            </div>

            <div class="pop">

                <button id="btnPopup" class="btnPopup"> Prenez Rendez-vous </button>
                <div id="overlay" class="overlay">
                    <div id="popup" class="popup">

                        <div class="wrapper">

                            <div class="title">
                                Formulaire de contact
                                <span id="btnClose" class="btnClose">&times;</span>
                            </div>
                            <div class="form">

                                <?php
                                include("includes/formulaire.php");
                                ?>

                                <div class="inputfield">
                                    <input type="submit" value="Envoyez" class="btn send" id="send">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section>

    <section id="Actualités" style=" border-radius:10px; display: flex; justify-content: center; align-items: center; margin: 30px 0px 30px 0px; background-color: #eea814;">
        <div class="slider">

            <div class="slides">

                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">

                <div class="slide first">
                    <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam quis iusto, doloremque cupiditate
                        totam est eius officiis, perferendis harum aperiam odit iure officia unde perspiciatis earum numquam
                        aspernatur nobis laudantium.</p>
                </div>

                <div class="slide">
                    <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi debitis ipsa optio maiores porro
                        maxime dolorum sequi animi consequuntur, modi mollitia incidunt deleniti unde possimus, assumenda
                        enim ea magni nemo.</p>
                </div>

                <div class="slide">
                    <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi debitis ipsa optio maiores porro
                        maxime dolorum sequi animi consequuntur, modi mollitia incidunt deleniti unde possimus, assumenda
                        enim ea magni nemo.</p>
                </div>

                <div class="slide">
                    <p> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi debitis ipsa optio maiores porro
                        maxime dolorum sequi animi consequuntur, modi mollitia incidunt deleniti unde possimus, assumenda
                        enim ea magni nemo.</p>
                </div>

                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>

            </div>

            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
            </div>

        </div>
    </section>

    <section id="Contact" style=" border-radius:10px; background-color:#eea814;">

        <p> N'hésitez surtout pas à nous contacter </p>

        <a href="">
            <i></i>
            Whatsapp
        </a>

        <span>
            <i></i>
            XXX XXXXXXXX / XX XXXXXXXXX
        </span>

        <a href="mailto:caerysvaenys@gmail.com">
            <i></i>
            Nous écrire
        </a>
    </section>

    <section id="Avis" style=" border-radius:10px; background: #eea814 ;">



    </section>

    <section id="Horaires" style=" border-radius:10px;">
        <h2>Horaires</h2>
        <p>⁜ Lundi, Mardi, Mercredi : 9 heures à 18 heures</p>
        <p>⁜ Jeudi, Vendredi : 9 heures à 16 heures</p>
        <p>⁜ Samedi, Dimanche : Fermé</p>
    </section>

    <div class="pop1">

        <button id="btnPopup1" class="btnPopup1"> Prenez Rendez-vous </button>
        <div id="overlay1" class="overlay1">
            <div id="popup1" class="popup1">

                <div class="wrapper">

                    <div class="title">
                        Formulaire de contact
                        <span id="btnClose1" class="btnClose1">&times;</span>
                    </div>
                    <div class="form">

                        <?php
                        include("includes/formulaire.php");
                        ?>

                        <div class="inputfield">
                            <input type="submit" value="Envoyez" class="btn send1" id="send1">
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <section id="Map" class="container" style=" border-radius:10px;">
        <!--   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126885.37650423532!2d2.326137673188036!3d6.372297877913875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102354e509f894f7%3A0xc8fde921f89849f6!2sCotonou!5e0!3m2!1sfr!2sbj!4v1665985819260!5m2!1sfr!2sbj" style="border:0; width:100%; height:600px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe> -->
    </section>

    <?php
    include("includes/footer.php");
    ?>

    <script type="text/javascript">
        var btnPopup = document.getElementById('btnPopup');
        var overlay = document.getElementById('overlay');
        var btnClose = document.getElementById('btnClose');
        var send = document.getElementById('send');

        btnPopup.addEventListener(
            'click',
            function() {
                overlay.style.display = 'block';
            }
        );

        btnClose.addEventListener(
            'click',
            function() {
                overlay.style.display = 'none';
            }
        );

        send.addEventListener(
            'click',
            function() {
                overlay.style.display = 'none';
            }
        );



        var btnPopup1 = document.getElementById('btnPopup1');
        var overlay1 = document.getElementById('overlay1');
        var btnClose1 = document.getElementById('btnClose1');
        var send1 = document.getElementById('send1');

        btnPopup1.addEventListener(
            'click',
            function() {
                overlay1.style.display = 'block';
            }
        );

        btnClose1.addEventListener(
            'click',
            function() {
                overlay1.style.display = 'none';
            }
        );

        send1.addEventListener(
            'click',
            function() {
                overlay1.style.display = 'none';
            }
        );



        var btnPopup2 = document.getElementById('btnPopup2');
        var overlay1 = document.getElementById('overlay2');
        var btnClose2 = document.getElementById('btnClose2');
        var send2 = document.getElementById('send2');

        btnPopup2.addEventListener(
            'click',
            function() {
                overlay2.style.display = 'block';
            }
        );

        btnClose2.addEventListener(
            'click',
            function() {
                overlay2.style.display = 'none';
            }
        );

        send2.addEventListener(
            'click',
            function() {
                overlay2.style.display = 'none';
            }
        );
    </script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>

</body>

</html>