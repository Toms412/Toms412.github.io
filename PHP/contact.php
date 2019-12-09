<?php

session_start();

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Crypto-Money - Contact</title>
        <link rel="stylesheet" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../CSS/Commonly.css">
        <link rel="stylesheet" type="text/css" href="../CSS/Economie.css">
        <link rel="shortcut icon" href="../IMG/logo_site.png">
    </head>

    <body>

        <div class="header">
            <nav class="navbar  navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button id="nav-toggle-button" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="Accueil.php" title="Crypto-Money"><img src="../IMG/logo_site_navbar.png" class="logo3" alt="logo site">rypto-Money</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="navbutt"><a href="Accueil.php" title="Accueil"><img class="logo2" src="../IMG/accueil.png" alt="logo Accueil" height="20" width="20" />Accueil</a></li>
                            <li class="navbutt"><a href="Histoire.php"  title="Histoire"><img class="logo2" src="../IMG/H.png" alt="logo H" height="20" width="20" />Histoire</a></li>
                            <li class="navbutt"><a href="Mining.php" title="Blockchain / Minage"><img class="logo2" src="../IMG/minage.png" alt="logo Minage"  height="20" width="20" />Blockchain / Minage</a></li>
                            <li class="navbutt"><a href="Economie.php" title="Enjeux économiques"><img class="logo2" src="../IMG/economie.png" alt="logo Economie "  height="20" width="20" />Enjeux économiques</a></li>
                            <li class="navbutt"><a href="Droit.php" title="Enjeux juridiques"><img class="logo2" src="../IMG/droits.png" alt="logo Quizz" height="20" width="20"/>Enjeux juridiques</a></li>
                            <li class="navbutt"><a href="Quizz.php" title="Quizz"><img class="logo2" src="../IMG/quizz.png" alt="logo Quizz" height="20" width="20"/>Quiz</a></li>
                            <li class="active navbutt"><a href="contact.php" title="Contact"><img class="logo2" src="../IMG/mail.png" alt="logo Contact" height="20" width="20"/>Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <style>
            .container1{
                margin-top:100px;
                margin-bottom:100px;
            }
        </style>
        <div class="container1">
            <div class="starter-template">
                <?php if (array_key_exists("errors", $_SESSION)): ?>
                    <div class="alert alert-danger">
                        <?php echo implode("<br>", $_SESSION["errors"]); ?>

                    </div>
                <?php endif; ?>

                <?php if (array_key_exists("success", $_SESSION)): ?>
                    <div class="alert alert-success">
                        Votre message a  été envoyé avec succès.
                    </div>
                <?php endif; ?>


                <form action="traitement_mail.php" method="POST">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">

                                <label for="input_name">Votre nom </label>
                                <input type="text" name="name" class="form-control" id="input_name" value="<?php echo isset($_SESSION["champs"]["name"]) ? $_SESSION["champs"]["name"]:"";?>">
                                                        
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">

                                <label for="input_mail">Votre adresse mail</label>
                                <input type="email" name="mail" class="form-control" id="input_mail" value="<?php echo isset($_SESSION["champs"]["mail"]) ? $_SESSION["champs"]["mail"]:"";?>">
                                                        
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">

                                <label for="input_content">Votre message</label>
                                <textarea type="text" name="message" class="form-control" id="input_content"><?php echo isset($_SESSION["champs"]["message"]) ? $_SESSION["champs"]["message"]:"";?></textarea>
                            
                            </div>
                            <button type="submit" class="btn btn-primary">Envoyer</button>

                        </div>
                    </div>
            
                </form>
            
            </div>
        </div>
        <?php
        include("footer.php");
    ?>

        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>


<?php 

unset($_SESSION["errors"]);
unset($_SESSION["success"]);
unset($_SESSION["champs"]);
