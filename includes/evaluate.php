<?php

// printResult();

function printResult() {
    
    $totalPoints = evaluateQuestions();
    
   if ($totalPoints < 9) {
        echo "<h2>" . "Du musst noch viel nachholen..." . "</h2>";

    }
    elseif ($totalPoints < 13) {
        echo "<h2>" . "Gut, Du weisst schon viel!" . "</h2>";
 
    }
    elseif ($totalPoints > 13) {
        echo "<h2>Super! Bist du aus der Schweiz?</h2>";

    }
}

function evaluateQuestions() {
    $questionPageNames = [
    
   
        "question-01",
        "question-02",
        "question-03",
        "question-04",
        "question-05",
        "question-06",
        "question-07",
        "question-08",
        "question-09",
        "question-10",
        "question-11",
        "question-12",
        "question-13",
        "question-14",
        "question-15"
    ];

    /*echo "<pre>";
    print_r($_SESSION);
    echo "</pre>"; */
    
    $totalPoints = 0;
    $pageNum = count($questionPageNames);
    
    for ($i = 0; $i < $pageNum; $i++) {
        $lastPageID = $questionPageNames[$i];
    
        if (isset($_SESSION[$lastPageID])) {
            // Wir holen die Daten zu $lastPageID aus $_SESSION.
            // data-collector.php: $_SESSION[$lastPageID] = $_POST;
            $pageData = $_SESSION[$lastPageID];
            $achievedPoints = $pageData["achievedPoints"];
    
            // zu $totalPoints zusammenrechnen.
            $totalPoints = $totalPoints + intval($achievedPoints);
        }
    }
    
    // DEVONLY
    
    // echo "TotalPoints = $totalPoints<br>";
  

    return $totalPoints;
    
}



?>