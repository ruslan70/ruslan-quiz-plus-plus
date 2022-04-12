<!-- ruslan-->

<?php include "includes/head.php"; ?>

<?php include "includes/header.php";?>


<main>
    <div>
         
    </div>   
    <!-- Hier kommt noch der Data-Collector-->
    <?php

        include "includes/data-collector.php";
        include "includes/evaluate.php";

    ?>
    <div>
        <div class="container-fluid bg-warning text-dark mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10">
                        <h1 id="questionTitle">Dein Ergebnis:</h1>
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
                                
                               
                                <a class="btn btn-outline-primary" href="index.php" role="button">Restart</a>
                                
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