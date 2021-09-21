<?php

/* sandbox function script */

/* pull list of questions questions */
function getSurveyQuestions($dbConn){
    $sql = "SELECT * FROM survey_questions;";
    
    $statement = $dbConn -> prepare ($sql);
    $statement -> execute();
    $results = $statement -> fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($results);

    if($results){
        foreach($results as $result){
            echo'
            <div class="entry">
              <h3 class="questionTitle">'.$result['question_body'].':</h3>
              <form action="index.php" method="post">
                  <input type="text" name="answer" size="85" />
                  <br>
                  <input type="submit" name="submit" value="Submit" class="button" />
                  
                  <input type="hidden" name="questionid" value="questionid" />
                  <input type="hidden" name="submitted" value="1" />
              </form>
            </div><!--end entry -->
            ';


        }
    }
     
}

?>