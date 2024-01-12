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
  <link rel="shortcut icon" href="images/favicon.ico">

  <!-- Primary Meta Tags -->
  <title>DigitalProjectHub</title>
  <meta name="title" content="DigitalProjectHub" />
  <meta name="description" content="digital project hub is online digital project selling website for learning and study purpose" />

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://digitalprojecthub.com/" />
  <meta property="og:title" content="DigitalProjectHub" />
  <meta property="og:description" content="digital project hub is online digital project selling website for learning and study purpose" />
  <!-- <meta property="og:image" content="https://metatags.io/images/meta-tags.png" /> -->

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="https://digitalprojecthub.com/" />
  <meta property="twitter:title" content="DigitalProjectHub" />
  <meta property="twitter:description" content="digital project hub is online digital project selling website for learning and study purpose" />
  <!-- <meta property="twitter:image" content="https://metatags.io/images/meta-tags.png" /> -->

  <!--	Css Link
	========================================================-->
  <link rel="stylesheet" href="css/style.css">
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


      <!-- project catgory start  -->
      <?php include("include/catagory.php"); ?>
      <!-- project catgory end -->

      <?php include("include/status.php"); ?>

      <!-- recent project  -->
      <?php include("include/recentproject.php"); ?>
      <!-- recent project  -->

      <!-- statisc start  -->

      <!-- statisc end  -->

      <!-- team start -->
      <?php include("include/team.php"); ?>
      <!-- team start end -->

      <!-- contact start -->
      <?php include("include/contact.php"); ?>
      <!-- contact end -->

      <!-- contact start -->
      <?php include("include/teami.php"); ?>
      <!-- contact end -->


      <!-- testinomial start  -->
      <section class="px-2 md:px-0">
        <div class="mx-auto text-center">
          <h2 class="mt-6 text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">
            Client & Digital<span style="color: rgb(161,54,130);
color: linear-gradient(344deg, rgba(161,54,130,1) 0%, rgba(88,48,179,1) 61%);">ProjectHub</span>
          </h2>
          <p class="mt-4 text-base leading-relaxed text-gray-600">
            Empowering Dreams, Inspiring Success – Hear what our satisfied users have to say about their journey with us.<br> Real stories, real results, real testimonials that speak louder than words.
          </p>
        </div>
        <div class="mx-auto max-w-4xl mt-10">
          <div class="md:flex md:items-center md:justify-center md:space-x-14">
            <div class="relative h-48 w-48 flex-shrink-0">
              <img class="relative h-48 w-48 rounded-full object-cover" src="images/team/divyansh.jpg" decoding="async" loading="lazy" alt="" />
            </div>
            <div class="mt-10 md:mt-0">
              <blockquote>
                <p class="text-xl text-black">
                  “DigitalProjectHub has truly been a game-changer for my academic journey. The variety and quality of projects available on the website surpassed my expectations. The user-friendly interface made it easy for me to find and purchase the perfect project for my computer science course.”
                </p>
              </blockquote>
              <p class="mt-7 text-lg font-semibold text-black">Rahul Verma</p>
              <p class="mt-1 text-base text-gray-600">Pursuing BTech</p>
            </div>
          </div>
        </div>
      </section>

      <!-- testinomial end -->
      <!--	Footer   start-->
      <?php include("include/footer.php"); ?>
      <!--	Footer   start-->


      <!-- Scroll to top -->
      <a href="#" class="bg-success text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a>
      <!-- End Scroll To top -->
    </div>
  </div>
  <!-- Wrapper End -->

  <!--	Js Link
============================================================-->
</body>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
  google.load('visualization', '1', {
    packages: ['annotatedtimeline']
  });
</script>

</html>