<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Project 001 - Survey</title>
  <meta name="description" content="Starter Template">
  <meta name="author" content="Gregry Pike">
  <link rel="stylesheet" href="css/styles.css?v=1.0">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
  <div class='wrapOverall'>
    <div class= 'header'><h2>Survey 2021</h2></div><!--end header -->
      <div class='wrapContent'>

          <div class='sideNav'>
            <ul>
              <li><a href="#">Survey 1</a></li>
              <li><a href="#">Survey 1</a></li>
            </ul>
          </div>

          <div class= 'content'>
            <h2>Survey Name</h2>
            <h3>Survey Name</h3>
            <form action="index.php" method="post">
                <input type="text" name="answer" size="30" />
                <input type="submit" value="Submit" name="submit" />
                <input type="hidden" value="questionid" value="questionid" />
                <input type="hidden" value="submitted" value="1" />
            </form>
          </div><!--end content -->
      </div><!--end wrapContent -->
<div class= 'footer'><p><a href=admin/index.php>Admin Panel</a></p></div><!--end footer -->
</div><!--end wrapOverall -->

  <script src="js/scripts.js"></script>
</body>
</html>