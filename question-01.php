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
            <form <?php if  ($currentQuestionIndex +1 >= count($questions)) echo 'action="result.php" '; ?> method="post">       
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10" id="answerPanel">
                        <?php
                            $answers = $questions[$currentQuestionIndex ]['QuizAnswers'];
                            $Type = $questions[$currentQuestionIndex ]['Type'];
                            $maxPoints = 0;

                            for ($a = 0; $a < count($answers); $a++)  {
                                echo '<div class="form-check">';
                                $IsCorrectAnswer = $answers[$a]['IsCorrectAnswer'];
                                
                                if ($Type == "MultiChoice") {
                                    // Multiple Choice (checkbox).
                                    echo '<input class="form-check-input" type="checkbox"  id="i-' . $a . '" name="a-' . $a . '" value="' . $IsCorrectAnswer . '">';
                                }
                                else {
        
                                    // Single Choice (radio)
                                    echo '<input class="form-check-input" type="radio"  id="i-' . $a . '" name="a-0" value="' . $IsCorrectAnswer . '">';
                                }   
                                
                                $maxPoints += $IsCorrectAnswer; // same as : $maxPoints = $maxPoints + $IsCorrectAnswer;
                                                                    
                                
                                                                    
                                echo '<label class="form-check-label" for="i-' . $a . '">';
                                echo $answers[$a]['Text'];                                    
                                echo '</label>';
                                echo '</div>';

                            }                               
                                

                        ?>
                        
                        
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
                                    <!-- Hiden Fields for update from lastPage to nextPage  -->
                                    <input type="hidden" name="lastQuestionIndex" value="<?php echo $currentQuestionIndex; ?>">
                                    <input type="hidden" name="nextQuestionIndex" value="<?php echo $currentQuestionIndex +1; ?>">
                                    <input type="hidden" name="maxPoints" value="<?php echo $maxPoints; ?>">
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