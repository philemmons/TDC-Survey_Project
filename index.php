<?php
  include('config/config.php'); // add configuration file
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project 001 - Survey</title>
    <meta name="description" content="HTML5 Broilerplate">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>
    <div class='wrapOverall'>
      <div class= 'header'>
        <?php head(); // template: header function ?>
      </div><!--end header -->
      <div class='wrapContent'>

          <div class='sideNav'>
            <?php sideNav($dbConn); // template: side navigation function ?>
          </div>

          <div class= 'content'>
            <h2 class="siteTitle">Survey Name</h2>
            <?php getSurveyQuestions($dbConn); // sandbox: pull list of questions?>
          </div><!--end content -->
      </div><!--end wrapContent -->
      <div class= 'footer'>
        <?php footer(); // template: footer function?>
      </div><!--end footer -->
    </div><!--end wrapOverall -->

    <script src="js/scripts.js"></script>
  </body>
</html>

            <!--<div class="entry">
              <h3 class="questionTitle">Question One:</h3>
              <form action="index.php" method="post">
                  <input type="text" name="answer" size="85" />
                  <br>
                  <input type="submit" name="submit" value="Submit" class="button" />
                  
                  <input type="hidden" name="questionid" value="questionid" />
                  <input type="hidden" name="submitted" value="1" />
              </form>
            </div>end entry -->