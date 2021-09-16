<?php 
session_start();                                    
if(!$_SESSION['mdp']){
    header('location:login.php');
}

$Serveur="localhost";
$NomBdd="portfolio";
$login="root";
$pass="";

if(isset($_GET["IdDelete"])){
    //si la variable existe je fait la modification
    $idProjet = $_GET["IdDelete"];
    echo "<h1>Suppression Projet N°".$idProjet."</h1>";

    ?>


    

    <?php

    try{
        $BasePDO = new PDO("mysql:host=".$Serveur.";dbname=".$NomBdd.";port=3306",$login,$pass);
    
        
    
                $req ="DELETE FROM `projet`
                WHERE IdProjet = '".$idProjet."'";

                $RequetStatement = $BasePDO->query($req);
    
                if($RequetStatement){
    
                    if( $RequetStatement->errorCode()=='00000'){
                        echo "Réussite de la suppression :";
                        echo  " Suppression effectué";
                    }else{
                        echo "Erreur N°" .$RequetStatement->errorCode()."lors de la modification";
                    }
                }
    }catch(Exception $e){
        echo $e->getMessage();
    }
}else{
    echo "Auncun projet a modifier";
}
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>