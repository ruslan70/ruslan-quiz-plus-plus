<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
<header>
    <nav class="navbar sticky-top navbar-light style="background-color: #ffffff;>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <a class="navbar-brand" href="#">
                            <img src="/images/logo_schoolquest.png" alt="" width="288" height="92">
                        </a>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </div>
    </nav>


</header>



    <?php
        
    ?>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="container col-10">
                    <h1 id="introductionTitle"> Einführung</h1>
                    <p id="introductionWording">
                        In diesem Quest wird dein Wissen in Dialekt vs.
                        Hochdeutsch geprüft.<br> Für Schweizer werden die Fragen
                        einfach zu lösen sein,<br> während nur Deutschsprechende etwas
                        an ihre Grenzen kommen und Deutschlernende wohl ins Schwitzen.<br> 
                        Der Quest beinhaltet 15 Fragen und dauert 10 bis 15 Minuten.<br> 
                        Danach kommt gleich dein Ergebnis.
                        <br><br>
                        Sprichst du Dialekt?
                        <br>
                        Teste dich jetzt.
                    </p>
                    <form action="questions.php" method="post">
                        <div class="col-10">
                            <button type="submit" class="btn btn-outline-danger buttons">Start</button>
                        </div>
                    </form>  
                    <div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </div>

    
    <div class="impressum">
        <footer class="fixed-bottom">
            <div class=".container pt-3 border">
                <div class="text-center sm fw-light text-black"style="background-color: #fffff;">
                    <p class="small">© Copyright <?= date('Y') ?> | SchoolQuest - 8048 Zürich - Switzerland | All Rights Reserved</p>
                </div>
            </div>

        </footer>
    </div>
    
</body>
</html>