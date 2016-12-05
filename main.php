<?php
require_once "Voiture.php";
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>
    <style>
        #aiguille {transform: rotate(<?php echo $_SESSION['voiture']->getVitesse()*1.348?>deg)}
        #lumiereimg {opacity:
        <?php
        if($_SESSION['voiture']->getContact()==true){
            switch ($_SESSION['voiture']->positionPhare)
            {
                case 0:
                    echo '0';
                    break;
                case 1:
                    echo '0.4';
                    break;
                case 2:
                    echo '0.6';
                    break;
                default:
                    echo '0';
            }
        }
        else{
            echo '0';
        }
            ?>
        }
    </style>
</head>
<body>
<div id="header">
    <h1>Ma Voiture</h1>
</div>
<div id="lumiere">
    <img id="lumiereimg" src="img/lumiere.png"/>
    <div id="content">
        <div id="tableau">
            <div id="tableau_gauche">
            <div id="voyant">
                <div><img src="img/contact_voyant.png"/></div>
                <div><img src="img/parking_voyant.png"/></div>
            </div>
            <div id="phare">
                <map name="pharemap">
                    <area shape="circle" alt="phare1" href="post.php?phare=0" coords="99,22,20">
                    <area shape="circle" alt="phare2" href="post.php?phare=1"coords="136,32,20">
                    <area shape="circle" alt="phare3" href="post.php?phare=2" coords="164,60,20">
                </map>

                <!-- Choisis l'image du bouton phare tournant en fonction de la position du Phare-->
                <?php switch ($_SESSION['voiture']->positionPhare)
                {
                    case 0:
                        echo '<img src="img/lightswitch.png" width="200" height="189" usemap="#pharemap"/>';
                        break;
                    case 1:
                        echo '<img src="img/lightswitch2.png" width="200" height="189" usemap="#pharemap"/>';
                        break;
                    case 2:
                        echo '<img src="img/lightswitch3.png" width="200" height="189" usemap="#pharemap"/>';
                        break;
                    default:
                        echo '<img src="img/lightswitch.png" width="200" height="189" usemap="#pharemap"/>';
                }?>
            </div>
            </div>

            <div id="tableau_milieu">
                <img src="img/speedometer2.png">
                <div id="aiguille">
                    <img src="img/aiguille2.png">
                </div>
            </div>

            <div id="tableau_droit">
                <!-- Formulaire contenant les boutons de parking ainsi que de contact -->
                <form action="post.php" method="post">
                    <input type="image" src="img/parking.png" name="parking" onclick="form.submit()">
                    <input type="image" src="img/contact.png" name="contact" onclick="form.submit()">
                </form>
            </div>

        </div>

        <!-- Formulaire contenant les pédales -->
        <form action="post.php" method="post">
            <div id="pedales">
                <input type="image" class="pedale" name="embrayage" src="img/pedaleembrayage.png" onclick="form.submit()"/>
                <input type="image" class="pedale" name="frein" src="img/pedalefrein.png" onclick="form.submit()"/>
                <input type="image" class="pedale" name="accelerateur" src="img/pedaleaccelerateur.png" onclick="form.submit()"/>
            </div>
        </form>
    </div>

</div>
<div id="footer">
    <p>Miguel Forget Production</p>
    <p>Tous droits réservés ©</p>
</div>
</body>
</html>

