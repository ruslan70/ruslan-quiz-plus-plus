<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qestions</title>
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

    
    <div class="container-fluid bg-warning text-dark mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <h1 id="questionTitle">Frage 1</h1>
                        <p id="questionWording">Du bist neu in der Schweiz und hast Papierkram zu erledigen. 
                            Wonach erkundigt sich das Amt, wenn es fragt: "Werden Sie betrieben?"<p>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
    </div>

    <div class="container">
            <form action="result.php" method="post">       
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10" id="answerPanel">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="single-choice-1" name="single-choice" value="1">
                            <label class="form-check-label" for="single-choice-1"><p>Haben Sie Schulden?</p></label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="single-choice-2"name="single-choice" value="0">
                            <label class="form-check-label" for="single-choice-2"><p>Sind Sie selbstständig?</p></label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="single-choice-3" name="single-choice" value="0">
                            <label class="form-check-label" for="single-choice-3"><p>Haben Sie eine Festanstellung?</p></label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="single-choice-4" name="single-choice" value="0">
                            <label class="form-check-label" for="single-choice-4"><p>Sind sie haftpflichtversichert?</p></label>
                        </div>
                        </div> 
                        <div class="col-1"></div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-10">
                                <div>
                                    <input type="hidden" name="lastPageID" value="questions">
                                    <input type="hidden" id="achievedPoints" name="achievedPoints">
                                    <p id="validation-warning" class="warning"></p>
                                    <button type="submit" class="btn btn-outline-danger buttons">Weiter</button>
                                </div>
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                </div>
            </form>
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