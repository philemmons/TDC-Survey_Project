<?php

/* sandbox function script */

/* get survey questions */
function getSurveyQuestions($dbConn){
    $sql = "SELECT * FROM survey_questions;";
    
    $statement = $dbConn -> prepare ($sql);
    $statement -> execute();
    $result = $statement -> fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($result);
     
}

?>