<?php
session_start();
if(!$_SESSION['mdp']){
    header('location:login.php');
}

$Serveur="localhost";
$NomBdd="portfolio";
$login="root";
$pass="";

try {   
    $BasePDO = new PDO("mysql:host=".$Serveur.";dbname=".$NomBdd.";port=3306",$login,$pass);

    if(isset($_POST["Projetsubmit"])){
        if(!empty($_POST["Projetname"]) && !empty($_POST["Projetlink_name"]) && !empty($_POST["Projetdescription"])){

            $Projetname = $_POST["Projetname"];
            $Projetlink_name = $_POST["Projetlink_name"];
            $Projetdescription = $_POST["Projetdescription"];

            $req ="INSERT INTO `projet` ( `name`, `link_name`, `description`) VALUES ('".$Projetname."','".$Projetlink_name."','".$Projetdescription."')";
            $RequetStatement = $BasePDO->query($req);

            if($RequetStatement){

                if( $RequetStatement->errorCode()=='00000'){
                }else{
                    echo "Erreur N°".$RequetStatement->errorCode()."lors de l'insertion";
                }
            }else{
                echo "Erreur dans le format de la requête";
            }
        }

        $req = "SELECT * FROM `projet` ORDER BY `projet`.`IdProjet` DESC";
        $RequetStatement = $BasePDO->query($req);
        if($RequetStatement){
            ?>

            <?php
            while($Tab=$RequetStatement->fetch()){
                ?>

                <?php
            }
            ?>
            <?php
        }
    }
}catch(Exception $e){
    echo $e->getMessage();
}
?>