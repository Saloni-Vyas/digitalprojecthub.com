<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Meta Tags -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="<?php echo weburl;?>/images/favicon.ico">

  <!-- Primary Meta Tags -->
  <title><?php echo webname;?></title>
  <meta name="title" content="<?php echo webname;?>" />
  <meta name="description" content="digital project hub is online digital project selling website for learning and study purpose" />
  <meta http-equiv="content-language" content="en-us">
  <meta name="author" content="Rohit Bhure">
  <meta name="owner" content="Rohit Bhure">
  <meta name='reply-to' content='rohitbhure.cse@gmail.com'>
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?php echo weburl;?>" />
  <meta property="og:title" content="<?php echo webname;?>" />
  <meta property="og:description" content="digital project hub is online digital project selling website for learning and study purpose" />
  <!-- <meta property="og:image" content="https://metatags.io/images/meta-tags.png" /> -->
  <meta name='og:email' content='rohitbhure.cse@gmail.com'>
  <meta name='og:phone_number' content='8839178090'>

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="<?php echo weburl;?>" />
  <meta property="twitter:title" content="<?php echo webname;?>" />
  <meta property="twitter:description" content="digital project hub is online digital project selling website for learning and study purpose" />
  <!-- <meta property="twitter:image" content="https://metatags.io/images/meta-tags.png" /> -->

  <!--	Css Link
	========================================================-->
  <script type="text/javascript" src="js/cdntailwindcss.js"></script>
</head>

<body>

  <div id="page-wrapper">
    <div class="row">
      <!--	Header start  -->
      <?php include("include/header.php"); ?>
      <!--	Header end  -->
      <!-- search start  -->
      <?php include("include/search.php"); ?>
      <!-- search end -->

      <?php
      if (isset($_SERVER['PATH_INFO'])) {   
        $slugurl = $_SERVER['PATH_INFO'];
        $query1 = mysqli_query($con, "SELECT * FROM project WHERE slug='$slugurl';");
        $row1 = mysqli_fetch_assoc($query1);
      } else {
      ?>
        <!-- project catgory start  -->
        <?php include("include/catagory.php"); ?>
        <!-- project catgory end -->

        <?php include("include/status.php"); ?>

        <!-- recent project  -->
        <?php include("include/recentproject.php"); ?>
        <!-- recent project  -->

        <!-- team start -->
        <?php include("include/team.php"); ?>
        <!-- team start end -->

        <!-- contact start -->
        <?php include("include/contact.php"); ?>
        <!-- contact end -->

        <!-- contact start -->
        <?php include("include/teami.php"); ?>
        <!-- contact end -->

        <!-- testinomail start -->
        <?php include("include/testinomial.php"); ?>
        <!-- testinomail end -->
      <?php } ?>

      <!--	Footer   start-->
      <?php include("include/footer.php"); ?>
      <!--	Footer   start-->

    </div>
  </div>
  <!-- Wrapper End -->

  <!--	Js Link
============================================================-->
</body>
<script type="text/javascript" src="js/custom.js"></script>
<link rel="stylesheet" href="css/style.css">

<!-- <script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
  google.load('visualization', '1', {
    packages: ['annotatedtimeline']
  }); -->
</script>

</html>