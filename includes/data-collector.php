<?php session_start(); // Muss vor dem Gebrauch von $_SESSION ausgeführt werden.?> 
                            
<?php

// Hole den Namen der letzten Seite aus $_POST.

if (isset($_POST['lastQuestionIndex'])) {
    // get the index(string) of the last question.
    $lastQuestionIndex = $_POST['lastQuestionIndex']; // ohne intval

    // and create the key for the that question.
    $questionKey = 'q-' . $lastQuestionIndex;

    // ACHIEVED POINTS...................................

    /* 
        get the number of achieved points, checking all keys in $_POST for
        the head 'a-' , like 'a-0' , 'a-1'  etc.
     */
    $achievedPoints = 0;

    foreach ($_POST as $key => $value) {
        if (str_contains($key, 'a-')) {
            // same as: $achievedPoints = $achievedPoints + intval($value);
            $achievedPoints += intval($value);
        }
    }

     DEVONLY: 
     echo "achievedPoints =$achievedPoints<br>";

    // make sure the list of all achieved points exists in the $_SESSION.
    if (!isset($_SESSION['achievedPointsList'])) {
        $_SESSION['achievedPointsList'] = array();
    }

    /* 
        put the achieved points into the list, using a 'q-' headed key,
        which identifies the question in the list.
    */
    $_SESSION['achievedPointsList'][$questionKey] = $achievedPoints;

    // MAX POINTS.......................................................
    $maxPoints = intval($_POST['maxPoints']);

    // make sure the list of all max points exists in the $_SESSION.
    if (!isset($_SESSION['maxPointsList'])) {
        $_SESSION['maxPointsList'] = array();

    }

    /* 
        put the achieved points into the list, using a 'q-' headed key,
        which identifies the question in the list.
    */
    $_SESSION['maxPointsList'][$questionKey] = $maxPoints;
   


}

// Speichere alle Daten des letzen Posts mit den Name $lastPageID in der Session.


// DEVONLY: Gib die aktuelle $_SESSION in die Seite aus.
/*
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>'; 
*/
?>
