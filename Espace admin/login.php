<?php
session_start();
if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        $pseudo_par_defaut = "Alnilam";
        $mdp_par_defaut = 'Epsilon';

        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);

        if($pseudo_saisi == $pseudo_par_defaut AND $mdp_saisi == $mdp_par_defaut) {
            $_SESSION['mdp'] = $mdp_saisi;
            header('location:uses.php');
        }else{
            echo "mot de passe ou pseudo incorrect";
        }
    }else{
        echo "Veuillez compléter tous les champs..";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="" type="text/css">
</head>
<body>
    
    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
            <div class="box">
                <div class="container">
                    <div class="form">
                        <h2>Login</h2>
                        <form method="Post" action="">
                            <div class="inputBox">
                                <input type="text" name="pseudo" autocomplete="off" placeholder="" required>
                                <br>
                            </div>
                            <div class="inputBox">
                                <input type="password" name="mdp" placeholder="" required>
                                <br><br>
                            </div>
                            <div class="inputBox">
                                <input type="submit" name="valider">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
    </section>
    
</body>
</html>