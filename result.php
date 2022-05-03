<?php include "includes/data-collector.php"; ?>
<?php include "includes/head.php"; ?>
<?php include "includes/header.php";?>       

<?php 
    // get the lists with the achieved and maximum points (listed per question).
    if (isset($_SESSION['achievedPointsList'])) {
        $achievedPointsList = $_SESSION['achievedPointsList'];
    }
    else {
        // lands here if result.php is opened in the browser before visiting any question before.
        $achievedPointsList = array();
    }

    if (isset($_SESSION['maxPointsList'])) {
        $maxPointsList = $_SESSION['maxPointsList'];
    }
    else {
        // lands here if result.php is opened in the browser before visiting any question before.
        $maxPointsList = array();
    }

    // get total of achieved points.
    $total = 0;

    foreach ($achievedPointsList as $key => $value) {
        $total += $value;  // same as: $total = $total + $value;
    }

    // get total of maximum points.
    $maxTotal = 0;

    foreach ($maxPointsList as $key => $value) {
        $maxTotal += $value; // same as: $maxTotal = $maxTotal + $value;
    }


    // depending on the achieved points, set a feedback exclamation.
    if ($total / $maxTotal >=0.8) {
        $exclamation = "Super! Bist du aus der Schweiz?";
    }
    elseif ($total / $maxTotal >=0.4) {
        $exclamation = "Gut, Du weisst schon viel!";
    }
    else {
        $exclamation = "Du musst noch viel nachholen...";
    }
?>


<main>
    <div>
         
    </div>   
  
    <div>
        <div class="container-fluid bg-warning text-dark mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <h2 id="questionTitle"><?php echo $exclamation; ?><br> Dein Ergebnis: <?php echo $total; ?> von <?php echo $maxTotal; ?> Punkten.</h2>
                  
                   
                    <h3>Vielen Dahk fürs Mitmachen!</h3>
                </div>

                
                    
                        <p id="questionWording"><p>
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
                        
                        </div> 
                        <div class="col-1"></div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-10">
                                <div>
                                <input type="hidden" name="lastPageID" value="result">
                                <p id="validation-warning" class="warning"></p>
                                
                                <a class="btn btn-outline-danger buttons" href="question-01.php" role="button">< Zurück</a>
                                <a class="btn btn-outline-primary buttons" href="index.php" role="button">Restart</a>
                                
                                </div>
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include "includes/footer.php"; ?>