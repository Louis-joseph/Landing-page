<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="wrapper">
        <header>
            <div class="logo">
                <!-- <img src="img/Krabs.png" alt=""> -->
            </div>

            <div class="menu">
                <ul>
                    <li><a href="projects.php">Mes Projets</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="skills.php">Mes compétences</a></li>
                    <li class="btn"><a href="./Espace admin/login.php">Admin</a></li>
                </ul>
            </div>
        </header>
        <div class="home">
            <div class="container">
                <div class="person">
                    <span class="person-overlay"></span>
                    <img src="img/Id.jpg" alt="">
                </div>
                <div class="home-text">
                    <h6 class="student">Dévellopeur Web</h6>
                    <h1 class="name">Louis'Jo</h1>
                    <!-- <h1 class="name" id="uis">uis</h1>
                    <h1 class="name">Jo</h1> -->
                    <p class="small-intro"> Hello, je suis Louis-Joseph Nonone<br />
                        j'ai 28 ans et j'ai la chance d'être passionné par mon métier, mais je laisse aussi mon attention graviter autour de l'espace, du sport et des aventures entrepreunariales. </p>
                </div>
            </div>
        </div>
    </div>


    <!-- JQuery Link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Lettering js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.min.js"></script>
    <!-- Anime js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".name, .student, .small-intro").lettering();

            // IMAGES OVERLAY EFFECT
            anime({
                targets: '.home .person-overlay',
                translateX: 1300,
                delay: 1000,
                duration: 1500,
                easing: 'easeInSine'
            })
            anime({
                targets: '.home .person img',
                opacity: 1,
                delay: 1500,
                duration: 1500,
                easing: 'easeInSine'
            })

            //STUDENT
            anime({
                targets: '.student span',
                opacity: 1,
                duration: 1500,
                easing: 'easeInSine',
                delay: anime.stagger(100, {
                    start: 3000
                })
            })

            //Name - FADE IN
            anime({
                targets: '.name span',
                opacity: 1,
                duration: 3000,
                easing: 'easeInSine',
                delay: anime.stagger(100, {
                    start: 4500
                })
            })

            //ANIMATION UP AND DOWN LETTERS
            anime({
                targets: '.name .char2, .name .char4, .name .char6',
                keyframes: [{
                    translateY: 100,
                    duration: 1500
                }],
                easing: 'esaseInOutExpo',
                delay: 8000,
            })
            anime({
                targets: '.name .char3, .name .char5',
                keyframes: [{
                    translateY: -100,
                    duration: 1500
                }],
                easing: 'esaseInOutExpo',
                delay: 8000,
            })
            //LOGO
            anime({
                targets: '.logo',
                opacity: 1,
                duration: 3000,
                delay: 9500
            })
            //MENU
            anime({
                targets: '.menu li',
                opacity: 1,
                duration: 3000,
                delay: anime.stagger(150, {
                    start: 10500
                })
            })
            //INTRO
            anime({
                targets: '.small-intro span',
                opacity: 1,
                duration: 1000,
                easing: 'easeInSine',
                delay: anime.stagger(50, {
                    start: 11000
                })
            })

        });
    </script>
</body>

</html>