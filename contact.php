<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <div class="contact"></div>
    <div class="container">
        <!-- <div class="logo">
            <img src="" alt="logo" />
        </div> -->
            <header>
                <div class="menu">
                    <ul>
                        <li><a href="index.php">À propos</a></li>
                        <li><a href="projects.php">Mes projets</a></li>
                        <li><a href="skills.php">Mes compétences</a></li>
                        <li class="btn"><a href="#">Admin</a></li>
                    </ul>
                </div>
            </header>

        <div class="box-container">
            <h1>Me contacter</h1> <br /><span>11 places des vignes <br />
                58320 Parigny les vaux <br />
                (+33) 6 67 88 05 25
            </span>
            <p>
                Merci de me contacter via le formulaire pour toute demande. Si besoin, vous pouvez me joindre directement par téléphone..🤗 
            </p>
            
            <form>
                <label for="nom"></label>
                <input class="input-form"
                 type="text"
                 id="nom"
                 name="nom"
                 placeholder="Sujet"
                 />
            </form>
            <form>
                <label for="email"></label>
                <input class="input-form"
                 type="email"
                 id="email"
                 name="email"
                 placeholder="adresse mail (sans faute,hein)">
                 <button>envoyer</button>
            </form>
            <div class="container-platform">
                 <a href="https://www.linkedin.com/in/louis-joseph-nonone-5825bb210/"
                    target="_blank">
                  <img src="Ressources/linkedin.png" alt="linkedin logo">
                </a>
                <a href="https://github.com/Louis-joseph" 
                    target="_blank">
                    <img src="Ressources/silhouette-de-logo-github-dans-un-carre.png" alt="github logo">
                </a>
                <img src="" alt="">
            </div> 
        </div>

        <div class="img-container">
            <img src="img/folio1.jpg" alt="" />
        </div>
    </div>
</body>
</html>