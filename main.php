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
    </style>
</head>
<body>
<div id="header">
    <h1>Ma Voiture</h1>
</div>
<div id="content">
    <div id="infos">
        <?php
        echo '<li>'.$_SESSION['voiture']->printContact().'</li>';
        echo '<li>'.$_SESSION['voiture']->printVitesse().'</li>';
        ?>
    </div>
    <div id="tableau">
        <div id="speedometer">
            <img src="img/speedometer2.png">
            <div id="aiguille">
                <img src="img/aiguille2.png">
            </div>
        </div>
        <form id="contact" action="post.php" method="post">
            <input type="image" src="img/contact.png" name="contact" onclick="form.submit()">
        </form>
    </div>
    <form action="post.php" method="post">
        <div id="pedales">
            <input type="image" class="pedale" id="pedale1" name="frein" src="img/pedalefrein.png" onclick="form.submit()"/>
            <input type="image" class="pedale" id="pedale2" name="embrayage" src="img/pedaleembrayage.png" onclick="form.submit()"/>
            <input type="image" class="pedale" id="pedale3" name="accelerateur" src="img/pedaleaccelerateur.png" onclick="form.submit()"/>
        </div>
    </form>
</div>
<div id="footer">
    <p>Miguel Forget Production</p>
    <p>Tous droits réservés ©</p>
</div>
</body>
</html>

