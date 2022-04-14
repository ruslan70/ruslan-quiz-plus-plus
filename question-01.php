<?php include "includes/data-collector.php";?>
<?php include "includes/select.php"; ?>
<?php include "includes/head.php"; ?>

<?php include "includes/header.php";?>

<main>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <div class="progress">
                    <div class="progress-bar" style="width:7%">7%</div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>   
    </div>   

    <div>
        <div class="container-fluid bg-warning text-dark mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <h1 id="questionTitle">Frage: <?php echo $currentQuestionIndex; ?></h1>
                        <p id="questionWording"><?php echo $questions[$currentQuestionIndex]['Text']; ?><p>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <form method="post" onsubmit="return validateQuestion();">       
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10" id="answerPanel">
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="single-choice-1" name="single-choice" value="1">
                            <label class="form-check-label" for="single-choice-1">
                                <?php 
                                    $answers = $questions[$currentQuestionIndex ]['QuizAnswers'];
                                    $answer = $answers[0];
                                    echo $answer['Text'];
                                ?>
                            </label>
                        </div>
                           

                        
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="single-choice-2"name="single-choice" value="0">
                            <label class="form-check-label" for="single-choice-2">
                                <?php 
                                    $answers = $questions[$currentQuestionIndex ]['QuizAnswers'];
                                    $answer = $answers[1];
                                    echo $answer['Text'];
                                ?>
                            </label>
                        </div>
                            

                        
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="single-choice-3" name="single-choice" value="0">
                            <label class="form-check-label" for="single-choice-3">
                                <?php 
                                    $answers = $questions[$currentQuestionIndex ]['QuizAnswers'];
                                    echo $answers[2]['Text'];
                                ?>
                            </label>

                        </div> 

                        
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="single-choice-4" name="single-choice" value="0">
                            <label class="form-check-label" for="single-choice-4">
                                <?php 
                                    $answers = $questions[$currentQuestionIndex ]['QuizAnswers'];
                                    echo $answers[3]['Text'];
                                ?>
                            </label>

                        </div>  

                        
                        </div> 
                        <div class="col-1"></div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-10">
                                <div>
                                   <!-- <input type="hidden" name="lastPageID" value="question-01">
                                    <input type="hidden" id="achievedPoints" name="achievedPoints">
                                    <p id="validation-warning" class="warning"></p>-->
                                    <!-- Hideb Fields for update from lastPage to nextPage  -->
                                    <input type="hidden" name="lastQuestionIndex" value="<?php echo $currentQuestionIndex; ?>">
                                    <input type="hidden" name="nextQuestionIndex" value="<?php echo $currentQuestionIndex +1; ?>">
                                    <!-- End of the  update from lastPage to nextPage  -->
                                    <a class="btn btn-outline-danger buttons" href="index.php" role="button">< Zurück</a>
                                   <button type="submit" class="btn btn-outline-danger buttons">Weiter ></button>
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