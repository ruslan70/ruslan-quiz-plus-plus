<?php
        echo "Hello"; 

      // display  the first question (index i array = 0), the corresponding image and possible  answers.
      $firstQuestion = $question[0];

      echo "<div>" . $firstQuestion['Text'] . "</div>";
      if (array_key_exists('ImageBlob',$firstQuestion)) {
            echo '<img src="data:image/jepg;base64,'.base64_encode($firstQuestion['ImageBlob']).'"/>';
      } elseif ($firstQuestion['Image']) {
            echo '<img src="images/' . $firstQuestion['Image'] . '"/>';
      } 

    if ($firstQuestion['Type'] == 'SINGLE') {
        // It's a question with only ONE possible answer. We use the radio button or an html select.
        // print an html radio button for each element in $firstQuestion['answers'] array
        // OR: print an html select with an option for each answer.
    } else {
        // It's  a question with  SEVERAL possible answers. We can use the checkboxes.
        // print an html checkbox button for each element in $firstQuestion['answers'] array.
    }

        
      
      
    ?>

    <?php
    for ($a = 0; $a < count($answers); $a++)  {
       
        echo 

    }

    ?>