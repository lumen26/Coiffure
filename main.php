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
        .slider {
            width: 800px;
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
            width: 800px;
            font-size: 150%;
            text-align: center;
            position: relative;
            top: 30%;
        }

        .navigation-manual {
            position: absolute;
            width: 800px;
            margin-top: -40px;
            display: flex;
            justify-content: center;
        }

        .manual-btn {
            border: 2px solid #40d3dc;
            padding: 5px;
            border-radius: 10px;
            cursor: pointer;
            transition: 1s;
        }

        .manual-btn:not(:last-child) {
            margin-right: 40px;
        }

        .manual-btn:hover {
            background-color: #40d3dc;
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
            width: 800px;
            margin-top: 460px;
            justify-content: center;
        }

        .navigation-auto div {
            border: 2px solid #40d3dc;
            padding: 5px;
            border-radius: 10px;
            transition: 1s;
        }

        .navigation-auto div:not(:last-child) {
            margin-right: 40px;
        }

        #radio1:checked~.navigation-auto .auto-btn1 {
            background: #40d3dc;
        }

        #radio2:checked~.navigation-auto .auto-btn2 {
            background: #40d3dc;
        }

        #radio3:checked~.navigation-auto .auto-btn3 {
            background: #40d3dc;
        }

        #radio4:checked~.navigation-auto .auto-btn4 {
            background: #40d3dc;
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
    </section>

    <section id="Services">
        <div>

            <h2>Nos Services</h2>

            <div class="row">

                <div class="col-lg-6 col-md-4">
                    <a href="Services/tresses.php">
                        <img src="img/e.png" alt="">
                    </a>
                </div>

                <div class="col-lg-6 col-md-4">
                    <a href="Services/traitement_cheveux.php">
                        <img src="img/f.png" alt="">
                    </a>
                </div>

                <div class="col-lg-6 col-md-4">
                    <a href="Services/Confect_perruq.php">
                        <img src="img/g.png" alt="">
                    </a>
                </div>

                <div class="col-lg-6 col-md-4">
                    <a href="Services/attaché_foulard.php">
                        <img src="img/h.png" alt="">
                    </a>
                </div>

            </div>

            <div>
                <a href="">Prendre rendez-vous</a>
            </div>

        </div>

    </section>

    <section id="Actualités" style="display: flex; justify-content: center; align-items: center; margin: 30px;">
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

    <section id="Contact">
        <p> N'hésitez surtout pas à nous contacter </p>

        <a href="">
            <i></i>
            Whatsapp
        </a>

        <a href="">
            <i></i>
            Nous appeler
        </a>

        <a href="mailto:">
            <i></i>
            Nous écrire
        </a>
    </section>

    <section id="Avis">

        
    </section>

    <section id="Horaires">
        <h2>Horaires</h2>
        <p>⁜ Lundi, Mardi, Mercredi : 9 heures à 18 heures</p>
        <p>⁜ Jeudi, Vendredi : 9 heures à 16 heures</p>
        <p>⁜ Samedi, Dimanche : Fermé</p>
    </section>

    <section id="Map">
        <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126885.37650423532!2d2.326137673188036!3d6.372297877913875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102354e509f894f7%3A0xc8fde921f89849f6!2sCotonou!5e0!3m2!1sfr!2sbj!4v1665985819260!5m2!1sfr!2sbj" style="border:0; width:100%; height:600px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe> -->
    </section>

    <?php
    include("includes/footer.php");
    ?>

</body>

</html>