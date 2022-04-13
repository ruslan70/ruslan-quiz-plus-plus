<?php session_start();
      session_destroy(); //um den cache zu leeren  
        
?>     
<?php include "includes/select.php"; ?>

<?php include "includes/head.php"; ?>



<?php include "includes/header.php"; ?>


<main>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="container col-10">
                    <h1 id="introductionTitle"> Einführung</h1>
                    <p id="introductionWording">
                        In diesem Quest wird dein Wissen in Dialekt vs.
                        Hochdeutsch geprüft. Für Schweizer werden die Fragen
                        einfach zu lösen sein, während nur Deutschsprechende etwas
                        an ihre Grenzen kommen und Deutschlernende wohl ins Schwitzen.
                        Der Quest beinhaltet 15 Fragen und dauert 10 bis 15 Minuten.
                        Danach kommt gleich dein Ergebnis.
                        <br><br>
                        Sprichst du Dialekt?
                        <br>
                        Teste dich jetzt.
                    </p>
                    <form action="question-01.php" method="post">
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
</main>
<?php include "includes/footer.php"; ?>