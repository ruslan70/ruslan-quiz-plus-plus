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
            <form <?php if  ($currentQuestionIndex +1 >= count($questions)) echo 'action="result.php" '; ?> id="questionForm" method="post">       
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
                                    <input type="hidden" id="lastQuestionIndex" name="lastQuestionIndex" value="<?php echo $currentQuestionIndex; ?>">
                                    <input type="hidden" id="nextQuestionIndex" name="nextQuestionIndex" value="<?php echo $currentQuestionIndex +1; ?>">
                                    <input type="hidden" name="maxPoints" value="<?php echo $maxPoints; ?>">
                                    <!-- End of the  update from lastPage to nextPage  -->
                                    <input type="submit" onclick="previousQuestion();" class="btn btn-outline-danger buttons" value="Zurück">
                                    <input type="submit" class="btn btn-outline-danger buttons" value= "Weiter">
                                </div>
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                </div>
            </form>
            <script>
                // Ersetelle eine Funktion, die für Zurück Taste veranwortlich ist
                function previousQuestion() {
                    // Calculate previous question index.
                    let element1 = document.getElementById("lastQuestionIndex");
                    let previousQuestionIndex = parseInt(element1.value) - 1;
                    if (previousQuestionIndex < 0) previousQuestionIndex = 0;

                    // Set the nextQuestionIndex to the previous question.
                    let element2 = document.getElementById("nextQuestionIndex");
                    element2.value = previousQuestionIndex;

                    /*
                        Remove the action from Form - otherwise submitting will
                        interfere and we land on the result.php,
                        instead of the previous page.
                    */
                    let element3 = document.getElementById("questionForm");
                    element3.action = '';
                }
            </script>
        
        </div>
    </div>
</main>
<?php include "includes/footer.php"; ?>