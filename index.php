<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
        }

        body {
            background: #000;
            font-family: 'Open Sans', sans-serif;
        }

        header {
            padding: 40px 50px;
        }

        header .logo {
            float: left;
        }

        header .menu {
            float: right;
        }

        header .menu ul li {
            display: inline-block;
            margin: 0 20px;
        }

        header .menu ul li:last-child {
            margin-right: 0;

        }

        header .menu ul li a {
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            transition: all ease 0.5s;
        }

        header .menu ul li a:hover {
            color: #fff700;
        }

        /*Header Button*/
        header .menu ul li.btn a {
            background-color: #fff700;
            color: #000;
            padding: 14px 27px;
            border-top-left-radius: 15px;
            border-bottom-right-radius: 15px;
        }

        header .menu ul li.btn a:hover {
            border-radius: 15px;
            border-top-left-radius: 0px;
            border-bottom-right-radius: 0px;
        }

        /*Container*/
        .home .container {
            max-width: 1266px;
            margin: 0 auto;
        }

        /*Ma geule en images*/
        .home .person {
            float: right;
            margin: 70px 180px 0;
            position: relative;
            border-radius: 70px 0 70px 0;
            overflow: hidden;
        }

        .home .person img {
            filter: brightness(1.5);
        }

        .home .person-overlay {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: #525252;
            z-index: 99;
        }

        /*Text*/
        .home-text {
            color: #fff;
            margin-top: 220px;
            position: absolute;
        }

        .home-text h6 {
            text-transform: uppercase;
            letter-spacing: 10px;
            font-size: 16px;
            color: #fff;
        }

        .home-text h1 {
            text-transform: uppercase;
            font-size: 100px;
            color: #fff;
        }

        .home-text p {
            max-width: 500px;
            font-size: 16px;
            margin-top: 230px;
            color: #fff;
        }

        .home-text .name span {
            margin-right: 130px;
            display: inline-block;
        }

        .home-text .name span:last-child {
            margin-right: 0;
        }

        /*Default State Hide */
        .home .person img,
        .student span,
        .name span {
            opacity: 0;
        }
    </style>

</head>

<body>

    <div class="wrapper">
        <header>

            <div class="menu">
                <ul>
                    <li><a href="projects.php">Mes Projets</a></li>
                    <li><a href="skills.php">Mes compétences</a></li>
                    <li><a href="contact.php">Contact</a></li>
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