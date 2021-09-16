<?php 
session_start();                                    
if(!$_SESSION['mdp']){
    header('location:login.php');
}

$Serveur="localhost";
$NomBdd="portfolio";
$login="root";
$pass="";

if(isset($_GET["IdUpdate"])){
    //si la variable existe je fait la modification
    $idUpdate = $_GET["IdUpdate"];
    echo "<h1>Modifier Projet N°".$idUpdate."</h1>";

    ?>


    <form action="" method="POST" class="formAjout">

    <fieldset>
        <legend>Psd to html with Quentin</legend>
        <table>
            <tr>
                <td>name</td><td><input type="text" name="Projetname" id="Projetname"></td>
                </tr>
                <tr>
                <td>link_name</td><td><input type="text" name="Projetlink_name" id="Projetlink_name"></td>
                </tr>
                <tr>
                <td>description</td><td><input type="file" name="Projetdescription" id="Projetdescription" accept="image/png, image/jpeg"></td>
                </tr>
                <tr>
                <td><input type="submit" name="Projetsubmit" value="Modifier le projet N°<?php echo $idUpdate?>" class="btnModifier"></td>
                </tr>
        </table>
    </fieldset>

    <fieldset>
    <legend>Psd to html/css Departement</legend>
    <table>
        <tr>
            <td>name</td><td><input type="text" name="Projetname" id="Projetname"></td>
            </tr>
            <tr>
            <td>link_name</td><td><input type="text" name="Projetlink_name" id="Projetlink_name"></td>
            </tr>
            <tr>
            <td>description</td><td><input type="file" name="Projetdescription" id="Projetdescription"></td>
            </tr>
            <tr>
            <td><input type="submit" name="Projetsubmit" value="Modifier le projet N°<?php echo $idUpdate?>" class="btnModifier"></td>
            </tr>
        </tr>
    </table>
    </fieldset>

    <fieldset>
    <legend>Dashboard Ampoule</legend>
    <table>
        <tr>
            <td>name</td><td><input type="text" name="Projetname" id="Projetname"></td>
            </tr>
            <tr>
            <td>link_name</td><td><input type="text" name="Projetlink_name" id="Projetlink_name"></td>
            </tr>
            <tr>
            <td>description</td><td><input type="file" name="Projetdescription" id="Projetdescription"></td>    
            </tr>
            <tr>
            <td><input type="submit" name="Projetsubmit" value="Modifier le projet N°<?php echo $idUpdate?>" class="btnModifier"></td>
            </tr>
        </tr>
    </table>
    </fieldset>


    </form>

    <?php

    try{
        $BasePDO = new PDO("mysql:host=".$Serveur.";dbname=".$NomBdd.";port=3306",$login,$pass);
    
        if(isset($_POST["Projetsubmit"])){
            if(!empty($_POST["Projetname"]) && !empty($_POST["Projetlink_name"]) && !empty($_POST["Projetdescription"])){
                
                $Projetname = $_POST["Projetname"];
                $Projetlink_name = $_POST["Projetlink_name"];
                $Projetdescription = $_POST["Projetdescription"];
    
                $req ="UPDATE `projet` set `name` ='".$Projetname."', `link_name`='".$Projetlink_name."', `description`='".$Projetdescription."'
                WHERE IdProjet = '".$idUpdate."'";
                $RequetStatement = $BasePDO->query($req);
    
                if($RequetStatement){
    
                    if( $RequetStatement->errorCode()=='00000'){
                        echo "Modification Réussite :";
                        echo  $Projetname." ".$Projetdescription." changement effectué";
                    }else{
                        echo "Erreur N°" .$RequetStatement->errorCode()."lors de la modification";
                    }
                }
            }
    
            $req = "SELECT * FROM `projet` ORDER BY `projet`.`IdProjet` DESC";
            $RequetStatement = $BasePDO->query($req);
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