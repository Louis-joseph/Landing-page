<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uses</title>
    <link rel="stylesheet" href="" type="text/css">
</head>
<body>

    <form action="" method="POST" class="formAjout">

        <fieldset>
            <!-- <legend>Psd to html with Quentin</legend> -->
            <table>
                <tr>
                    <td>name</td><td><input type="text" name="Projetname" id="Projetname"></td>
                    </tr>
                    <td>Description</td><td><textarea name="publication" cols="45" rows="8"></textarea></td>
                    <tr>
                    <td>link_name</td><td><input type="text" name="Projetlink_name" id="Projetlink_name"></td>
                    </tr>
                    <tr>
                    <td>images</td><td><input type="file" name="Projetimages" id="Projetimages" accept="image/png, image/jpeg"></td>
                    </tr>
                    <tr>
                    <td><input type="submit" name="Projetsubmit" value="Ajouter projet" class="btnModifier"></td>
                    </tr>
            </table>
        </fieldset>
    </form>


</body>
</html>

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
        //on verifie avant que les champs ne sont pas vide
        if(!empty($_POST["Projetname"]) && !empty($_POST["Projetlink_name"]) && !empty($_POST["Projetimages"])){

            $Projetname = $_POST["Projetname"];
            $Projetlink_name = $_POST["Projetlink_name"];
            $Projetimages = $_POST["Projetimages"];
            

            $req ="INSERT INTO `projet` ( `name`, `link_name`, `images`) VALUES ('".$Projetname."','".$Projetlink_name."','".$Projetimages."')";
            $RequetStatement = $BasePDO->query($req);

            if($RequetStatement){

                if( $RequetStatement->errorCode()=='00000'){
                }else{
                    echo "Erreur N°".$RequetStatement->errorCode()."lors de l'insertion : ";
                    echo $Projetname." ".$Projetimages." est bien modifié ";
                }
            }else{
                echo "Erreur dans le format de la requête";
            }
        }

        $req = "SELECT * FROM `projet` ORDER BY `IdProjet` DESC";
        $RequetStatement = $BasePDO->query($req);
        if($RequetStatement){
            ?>
            <table>
                <?php
                //tant que le$RequetStatement me retourne un tuple qui est placé ds la variable $Tab
                while($Tab=$RequetStatement->fetch()){
                    ?>
                        <tr>
                            <td><a href="update.php?IdUpdate=<?php echo $Tab["IdProjet"]?>"><?php echo $Tab["name"]?></a></td>
                            <td><a href="update.php?IdUpdate=<?php echo $Tab["IdProjet"]?>"><?php echo $Tab["link_name"]?></a></td>
                            <td><a href="update.php?IdUpdate=<?php echo $Tab["IdProjet"]?>"><?php echo $Tab["images"]?></a></td>
                            <td><a href="delete.php?IdDelete=<?php echo $Tab["IdProjet"]?>"><button id="myBtn" class="BtnDelete">
                            <i class ="">delete</i></button></a></td>
                        </tr>

                    <?php
                }
                ?>
            </table>
            <?php
        }
    }
}catch(Exception $e){
    echo $e->getMessage();
}
?>
