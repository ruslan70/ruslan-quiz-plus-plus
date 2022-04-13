 <?php include "includes/data-collector.php"; ?>

        
<?php include "includes/evaluate.php";  ?>

   
   
  <!-- ruslan-->

<?php include "includes/head.php"; ?>

<?php include "includes/header.php";?>


<main>
    <div>
         
    </div>   
  
    <div>
        <div class="container-fluid bg-warning text-dark mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <h2 id="questionTitle">Dein Ergebnis:</h2>
                    <?php
                   
                        printResult();
                    
                    ?>  
                   
                    <h3>Vielen Dahk fürs Mitmachen!</h3>
                </div>

                
                    
                        <p id="questionWording"><p>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <form action="result.php" method="post" onsubmit="return validateQuestion();">       
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