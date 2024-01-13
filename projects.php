<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");

if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = 1;
}

$post_per_page = 8;
$result = ($page - 1) * $post_per_page;

$techology = $_REQUEST['technology'];
$search = $_REQUEST['search'];
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

  <title><?php echo $_REQUEST['technology'] . ' | '; ?>Projects</title>
  <meta name="title" content="<?php echo $_REQUEST['technology'] . ' | '; ?>Projects" />
  <meta name="description" content="<?php echo $_REQUEST['technology']; ?>" />
  <meta name='url' content='http://localhost:80/project?technology=<?php echo $techology; ?>&search=<?php echo $search; ?>&page=<?php echo $page; ?>'>
  <meta http-equiv="content-language" content="en-us">
  <meta name="author" content="Rohit Bhure">
  <meta name="owner" content="Rohit Bhure">
  <meta name='category' content='<?php echo $_REQUEST['technology'] ?>'>
  <meta name='reply-to' content='rohitbhure.cse@gmail.com'>

  <!-- Open Graph / Facebook -->
  <meta property="og:locale" content="en_US">
  <meta property="og:site_name" content="Digitalprojecthub">
  <meta property="og:type" content="article" />
  <meta property="og:url" content="http://localhost:80/project?technology=<?php echo $techology; ?>&search=<?php echo $search; ?>&page=<?php echo $page; ?>" />
  <meta property="og:title" content="<?php echo $_REQUEST['technology'] . ' | '; ?>Projects" />
  <meta property="og:description" content="<?php echo $_REQUEST['technology']; ?>" />
  <meta name='og:email' content='rohitbhure.cse@gmail.com'>
  <meta name='og:phone_number' content='8839178090'>

  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image" />
  <meta property="twitter:url" content="http://localhost:80/project?technology=<?php echo $techology; ?>&search=<?php echo $search; ?>&page=<?php echo $page; ?>" />
  <meta property="twitter:title" content="<?php echo $_REQUEST['technology'] . ' | '; ?>Projects" />
  <meta property="twitter:description" content="<?php echo $_REQUEST['technology']; ?>" />
  <!--	Css Link
	========================================================-->
  <link rel="stylesheet" href="css/style.css">
  <script type="text/javascript" src="js/cdntailwindcss.js"></script>
  <!--	Title
	=========================================================-->
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
      <section class="text-gray-600 body-font">
        <h5 class="mt-20 mb-10 text-center text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl"><?php echo $_REQUEST['search']; ?> Realated <span style="color: rgb(161,54,130);
color: linear-gradient(344deg, rgba(161,54,130,1) 0%, rgba(88,48,179,1) 61%);">Projects</span></h5>
        <div class="container px-5 py-7 mx-auto">
          <div class="flex flex-wrap -m-4 justify-center">
            <?php
            if (isset($_REQUEST['search'])) {
              $query = mysqli_query($con, "SELECT project.*, category.cname FROM project,category WHERE project.category_id = category.cid AND title LIKE '%$search%' LIMIT $result,$post_per_page;");
            } else {

              $query = mysqli_query($con, "SELECT project.*, category.cname FROM project,category WHERE project.category_id = category.cid LIMIT $result,$post_per_page;");
            }
            $total_posts = mysqli_num_rows($query);
            $total_pages = ceil($post_per_page / $total_posts);
            while ($row = mysqli_fetch_assoc($query)) {
            ?>
              <div class="lg:w-1/5 md:w-1/2 p-0 w-full shadow-lg m-2 mt-4 rounded-lg">
                <a href="project?pid=<?php echo $row['pid']; ?>" class="block relative rounded overflow-hidden">
                  <img alt="ecommerce" class="object-cover object-center w-full h-full block" decoding="async" loading="lazy" src="images/project/<?php echo $row['image']; ?>">
                  <div class="mt-4 p-3">
                    <div class="flex flex-row justify-between">
                      <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1"><?php echo $row['cname']; ?></h3>
                      <h3 class="text-gray-500 text-xs text-right tracking-widest title-font mb-1">Posted on <?php echo date('F jS, Y', strtotime($row['date'])); ?></h3>
                    </div>
                    <h2 class="text-gray-900 text-base font-bold"><?php echo $row['title']; ?></h2>
                    <div class="flex flex-row mt-2 justify-end">
                      <button type="button" class="inline-flex items-center justify-center rounded-md bg-green-500 mx-2 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-black/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">
                        <span class="block text-sm">₹ <?php echo $row['price']; ?> INR</span>
                      </button>
                      <button type="button" class="inline-flex items-center justify-center rounded-md bg-black px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-black/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">
                        <span class="block text-xs">View</span>
                      </button>
                    </div>
                  </div>
                </a>
              </div>
            <?php } ?>
          </div>
        </div>
      </section>
      <!-- pagination -->

      <?php
      if ($page > 1) {
        $switch = "";
      } else {
        $switch = "display:none;";
      }
      if ($page < $total_posts) {
        $nswitch = "";
      } else {
        $nswitch = "display:none;";
      }
      ?>
      <div class="flex justify-center mt-10 items-center">
        <a href="?technology=<?php echo $techology; ?>&search=<?php echo $search; ?>&page=<?php echo $page - 1 ?>" style="<?php echo $switch; ?>" class="mx-1 text-sm font-semibold text-gray-900">
          ← Previous
        </a>

        <?php
        for ($opage = 1; $opage <= $total_posts; $opage++) {
        ?>
          <a href="?technology=<?php echo $techology; ?>&search=<?php echo $search; ?>&page=<?php echo $opage; ?>" class="mx-1 flex items-center rounded-md border border-gray-400 px-3 py-1 text-gray-900 hover:scale-105">
            <?php echo $opage; ?>
          </a>
        <?php }; ?>
        <!-- pagination -->

        <a href="?technology=<?php echo $techology; ?>&search=<?php echo $search; ?>&page=<?php echo $page + 1 ?>" style="<?php echo $nswitch; ?>" class="mx-2 text-sm font-semibold text-gray-900">
          Next →
        </a>
      </div>
      <!--	Footer   start-->
      <?php include("include/footer.php"); ?>
      <!--	Footer   start-->
      <!-- Scroll to top -->
      <a href="#" class="bg-success text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a>
      <!-- End Scroll To top -->
    </div>
  </div>
</body>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
  google.load('visualization', '1', {
    packages: ['annotatedtimeline']
  });
</script>

</html>