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

    <script src="JavaScrit.js"></script>

    <script type="text/javascript">
        const slider = document.querySelector('.slider');

        const leftArrow = document.querySelector('.left');
        const rightArrow = document.querySelector('.right');

        var sectionIndex = 0;

        leftArrow.addEventListener('click', function () {
            sectionIndex = (sectionIndex > 0) ? sectionIndex - 1 : 0;
            slider.style.transform = 'translate(' + (sectionIndex) * -25 + '%)';
        });

        rightArrow.addEventListener('click', function () {
            sectionIndex = (sectionIndex < 3) ? sectionIndex + 1 : 3;
            slider.style.transform = 'translate(' + (sectionIndex) * -25 + '%)';
        });


    </script>

    <style>

.container {
    width: 20%;
    margin: 10px auto;
}

.carousel {
    border: 2px solid #ccc;
    height: 400px;
    position: relative;
    overflow: hidden;
}

.slider {
    height: 100%;
    display: flex;
    width: 400%;
    transition: all 0.3s;
    border: 1px blue solid;
}

.slider section {
    flex-basis: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.controls .arrow {
    position: absolute;
    top: 50%;
    cursor: pointer;
}

.arrow.left {
    left: 10px;
}

.arrow.right {
    right: 10px;
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

    <div id="Actualités" class="container">
       
       <div class="carousel">

           <div class="slider">

               <section>lorem ipsum 1</section>

               <section>lorem ipsum 2</section>

               <section>lorem ipsum 3</section>

               <section>lorem ipsum 4</section>

            </div>

           <div class="controls">
               <span class="arrow left carousel-control-prev-icon">left</span>
               <span class="arrow right carousel-control-next-icon">right</span>
           </div>

       </div>

   </div>

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

    <section id="Avis" style="background-color: orange;">



    </section>

    <section id="Horaires">
        <h2>Horaires</h2>
        <p>⁜ Lundi, Mardi, Mercredi : 9 heures à 18 heures</p>
        <p>⁜ Jeudi, Vendredi : 9 heures à 16 heures</p>
        <p>⁜ Samedi, Dimanche : Fermé</p>
    </section>

    <section id="Map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126885.37650423532!2d2.326137673188036!3d6.372297877913875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x102354e509f894f7%3A0xc8fde921f89849f6!2sCotonou!5e0!3m2!1sfr!2sbj!4v1665985819260!5m2!1sfr!2sbj" style="border:0; width:100%; height:600px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </section>

    <?php
    include("includes/footer.php");
    ?>
    
</body>

</html>