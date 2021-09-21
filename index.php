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
      <div class= 'header'><h2 class="siteTitle">Survey 2021</h2></div><!--end header -->
        <div class='wrapContent'>

            <div class='sideNav'>
              <ul>
                <li><a href="#">Survey 1</a></li>
                <li><a href="#">Survey 2</a></li>
              </ul>
            </div>

            <div class= 'content'>
              <h2 class="siteTitle">Survey Name</h2>
              <div class="entry">
                <h3 class="questionTitle">Question One:</h3>
                <form action="index.php" method="post">
                    <input type="text" name="answer" size="85" />
                    <br>
                    <input type="submit" name="submit" value="Submit" class="button" />
                    
                    <input type="hidden" name="questionid" value="questionid" />
                    <input type="hidden" name="submitted" value="1" />
                </form>
              </div><!--end entry -->
            </div><!--end content -->
        </div><!--end wrapContent -->
      <div class= 'footer'><p><a href=admin/index.php>Admin Panel</a></p></div><!--end footer -->
    </div><!--end wrapOverall -->

    <script src="js/scripts.js"></script>
  </body>
</html>