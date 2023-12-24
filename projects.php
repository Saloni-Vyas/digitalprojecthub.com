<?php 
ini_set('session.cache_limiter','public');
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


<!--	Css Link
	========================================================-->
<link rel="stylesheet" type="text/css" href="css/style.css">

<!--	Title
	=========================================================-->
<title>DigitalProjectHub.com</title>
</head>
<body>
<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
		<?php include("include/header.php");?>
        <!--	Header end  -->

    <!-- search start  -->
		<?php include("include/search.php");?>
    <!-- search end -->

<section style="margin-top: 20px" class="text-gray-600 body-font">
          <h1 align="center" class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900" style="font-size: 2em"><?php echo $search=$_REQUEST['search'];?> related projects</h1>
          <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4 justify-center">
    <?php 

    if(isset($_REQUEST['search'])){
        $techology = $_REQUEST['technology'];
        $search = $_REQUEST['search'];
        $query=mysqli_query($con,"SELECT * FROM project WHERE title LIKE '%$search%'");
    }else{

        $query=mysqli_query($con,"SELECT * FROM project");
    }
         while($row=mysqli_fetch_assoc($query))
         {
             ?>
      <div class="lg:w-1/4 md:w-1/2 p-0 w-full shadow-lg m-3 mt-4">
        <a class="block relative h-48 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="images/banner/<?php echo $row['image'];?>">
        </a>
        <div class="mt-4 p-3">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1"><?php echo $row['pid'];?></h3>
          <h2 class="text-gray-900 title-font text-lg font-medium"><?php echo $row['title'];?></h2>
          <div class="flex flex-row justify-between">
            <p class="mt-1">Rs: <?php echo $row['price'];?></p>
            <Button class="rounded-sm" style="color: #fff;background: #6366F1; padding: 1px 20px;">Buy</Button>
          </div>
        </div>
      </div>
      <?php }?>
    </div>
  </div>
</section>
    <!--	Footer   start-->
		<?php include("include/footer.php");?>
		<!--	Footer   start-->
        
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-success text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<script src="js/custom.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>