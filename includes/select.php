<?php

function getQuestions() {
    $dbHost = getenv('DB_HOST');
    $dbName = getenv('DB_NAME');
    $dbUser = getenv('DB_USER');
    $dbPasswort = getenv('DB_PASSWORD');


    // ich möchte als resultat eine Datenbankverbindung haben: $dbConnection = 
    // dazu muss ich aurufen : new PDO(); . Dieser Auruf liefert mir die Verbindung zur DB.
    // new PDO() benötigt folgende Argumente: "mysql:host=$dbHost;dbname=$dbName;charset=utf8"
    $dbConnection = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPasswort);

    // Tell PDO to throw Exceptions for every error.
    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // get al question and answers -together.
    $query = $dbConnection->query("SELECT * FROM  QuizQuestions");

    $questions = $query->fetchAll(PDO::FETCH_ASSOC);

    // lopp through all the elements in the array $questions and use
    // each element of the array inside the loop as the new variable $question. (Durchlaufen Sie alle Elemente im Array 
    // $questions und verwenden Sie jedes Element des Arrays innerhalb der Schleife als neue Variable $question).

    for ($q = 0; $q < count($questions); $q++)  {
        $question = $questions[$q];
        // prepare an SQL statement with a placeholder ? the help of the db connection $dbConnection 
        // (Bereiten Sie eine SQL-Anweisung mit einem Platzhalter ? vor die Hilfe der db-Verbindung $dbConnection).
        $subQuery = $dbConnection->prepare("SELECT * From QuizAnswers where QuizAnswers.QuestionId = ?");
        // put the value of $question['ID'] to the place of the  first question mark ? in the sql statement above
        //(setze den Wert von $question['ID'] an die Stelle des ersten Fragezeichens ? in der sql-Anweisung oben.).
        $subQuery->bindValue(1, $question['ID']);
        // execute the query (die Abfrage ausführen).
        $subQuery->execute();
        // get all the rows received by the query and put them  into the new variable $answers
        // (Holen Sie sich alle Zeilen, die von der Abfrage empfangen wurden, und fügen Sie sie in die neue Variable $answers ein).
        $answers = $subQuery->fetchALL(PDO::FETCH_ASSOC);
        // create a new element 'QuizAnswers' in the $question-element and store the new array $answers in this element
        // (Erstellen Sie ein neues Element „answers“ im $question-Element und speichern Sie das neue Array $answers in diesem Element).
        $questions[$q]['QuizAnswers'] = $answers;

    }

    return $questions;

}


// get quiz data 
$questions = getQuestions();


    $currentQuestionIndex = 0;

    if (isset($_POST['lastQuestionIndex'])) {
        // get data from last post.
        $lastQuestionIndex = $_POST['lastQuestionIndex'];

        if (isset($_POST['nextQuestionIndex'])) {
            // define the index number of the next question.
            $currentQuestionIndex  = $_POST['nextQuestionIndex'];
        }
    }

// check if $_SESSION['questions'] exists.
if (isset($_SESSION['questions'])) {
echo 'questions data EXISTS in session.<br>';
    $questions = $_SESSION['questions'];


}
else {
echo 'questions data does NOT exists in session.<br>';
    // get questions data from database ...
    $questions = getQuestions();

    // ... and save that data in $_SESSION.
    $_SESSION['questions'] = $questions;


}


// and put question and answers data into PHP session.
$_SESSION['questions'] = $questions;


// DEVONLY: Debug output to see what is inside the array $question.
/*echo "<pre>";
print_r($_SESSION['questions']);
echo "</pre>";
*/





?>