<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");
// TODO all this to index.php

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php

  // echo "<pre>";
  // print_r(array($_REQUEST));
  // echo "</pre>";

  if (isset($_REQUEST['p'])) {
    $slug = $_REQUEST['p'];
    $query = mysqli_query($con, "SELECT project.*, category.cname FROM project,category WHERE project.category_id = category.cid AND slug='$slug';");
    $row = mysqli_fetch_assoc($query);

    if ($slug == (isset($row['slug']))) {
      $uid = $row['author'];
      $queryauthor = mysqli_query($con, "SELECT project.author,user.* FROM project RIGHT JOIN user ON project.author = user.uid WHERE project.author = $uid;");
      $user = mysqli_fetch_assoc($queryauthor);
  ?>
      <!-- code here  -->
      <!-- code here  -->
      <title><?php echo $row['title']; ?></title>
      <meta name="title" content="<?php echo $row['title']; ?>" />
      <meta name="description" content="<?php echo $row['description']; ?>" />
      <meta name="keyword" content="<?php echo $row['keyword']; ?>">
      <meta property="article:published_time" content="<?php echo $row['date']; ?>">
      <meta property="article:modified_time" content="<?php echo $row['date']; ?>">
      <meta name='url' content='<?php echo $website ?>/project?p=<?php echo $row['slug']; ?>'>
      <meta http-equiv="content-language" content="en-us">
      <meta name="author" content="<?php echo $user['uname']; ?>">
      <meta name="owner" content="Rohit Bhure">
      <meta name='category' content='<?php echo $row['cname']; ?>'>
      <meta name='reply-to' content='<?php echo $user['email']; ?>'>
      <!-- Open Graph / Facebook -->
      <meta property="og:locale" content="en_US">
      <meta property="og:site_name" content="<?php echo webname; ?>">
      <meta property="og:type" content="article" />
      <meta property="og:url" content="<?php echo weburl; ?>/project?p=<?php echo $row['slug']; ?>" />
      <meta property="og:title" content="<?php echo $row['title']; ?>b" />
      <meta property="og:description" content="<?php echo $row['description']; ?>" />
      <meta property="og:image" content="<?php echo weburl; ?>/images/project/<?php echo $row['image']; ?>" />
      <meta name='og:email' content='<?php echo $user['email']; ?>'>
      <meta name='og:phone_number' content='<?php echo $user['phone']; ?>'>

      <!-- Twitter -->
      <meta property="twitter:card" content="summary_large_image" />
      <meta property="twitter:url" content="<?php echo weburl; ?>/project?p=<?php echo $row['slug']; ?>" />
      <meta property="twitter:title" content="<?php echo $row['title']; ?>" />
      <meta property="twitter:description" content="<?php echo $row['description']; ?>" />
      <meta property="twitter:image" content="<?php echo weburl; ?>/images/project/<?php echo $row['image']; ?>" />


      <link rel="stylesheet" href="css/style.css">
      <!-- slick slider CSS library files -->
      <script type="text/javascript" src="js/cdntailwindcss.js"></script>
      <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
      <script type="application/ld+json">
        {
          "@context": "https://schema.org/",
          "@type": "Person",
          "name": "<?php echo $user['uname']; ?>",
          "url": "<?php echo $user['url']; ?>",
          "image": "<?php echo weburl; ?>/images/user/<?php echo $user['uimg']; ?>",
          "jobTitle": "<?php echo $user['type']; ?>",
          "worksFor": {
            "@type": "Organization",
            "name": "<?php echo webname; ?>"
          }
        }
      </script>
      <script type="application/ld+json">
        {
          "@context": "https://schema.org/",
          "@type": "BreadcrumbList",
          "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "/"
          }, {
            "@type": "ListItem",
            "position": 2,
            "name": "projects",
            "item": "<?php echo weburl; ?>/projects?technology=&search="
          }, {
            "@type": "ListItem",
            "position": 3,
            "name": "<?php echo $row['cname']; ?>",
            "item": "<?php echo weburl; ?>/projects?technology=<?php echo $row['cname']; ?>"
          }, {
            "@type": "ListItem",
            "position": 4,
            "name": "<?php echo $row['title']; ?>",
            "item": "<?php echo weburl; ?>/project?p=<?php echo $row['slug']; ?>"
          }]
        }
      </script>
      <script type="application/ld+json">
        {
          "@context": "https://schema.org/",
          "@type": "Product",
          "name": "<?php echo $row['title']; ?>",
          "image": "images/project/<?php echo $row['image']; ?>",
          "description": "<?php echo $row['description']; ?>",
          "brand": {
            "@type": "Brand",
            "name": "<?php echo webname; ?>"
          },
          "offers": {
            "@type": "Offer",
            "url": "<?php echo weburl; ?>/project?p=<?php echo $row['slug']; ?>",
            "priceCurrency": "INR",
            "price": "<?php echo $row['price']; ?>",
            "availability": "https://schema.org/OnlineOnly"
          },
          "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "<?php echo $row['ratingvalue']; ?>",
            "ratingCount": "<?php echo $row['ratingcount']; ?>"
          }
        }
      </script>
      <style>
        .project p {
          padding-bottom: 1rem;
          font-size: 1.125rem;
          line-height: 1.875rem;
        }

        .project ol {
          padding-left: 1.125rem;
          font-size: 1.125rem;
          margin-bottom: 1.4rem;
        }

        .project ul {
          padding-left: 1.125rem;
          font-size: 1.125rem;
          margin-bottom: 1.4rem;
        }

        .project li {
          list-style-type: disc;
          padding-bottom: 0.2rem;
          display: list-item;
        }

        .project pre {
          padding: 1rem;
          margin-bottom: 1rem;
          background-color: #e6e6e6d4;
        }

        .project code {
          margin-bottom: 1rem;
        }
        .project a{
          color: #0094fe;
        }
        .project h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
          padding-bottom: 1rem;
          line-height: 2rem;
        }

        .project h1 {
          font-weight: 600;
          font-size: 2.25rem;
        }

        .project h2 {
          font-weight: 600;
          font-size: 1.875rem;
        }

        .project h3 {
          font-weight: 600;
          font-size: 1.5rem;
        }

        .project h4 {
          font-weight: 600;
          font-size: 1.25rem;
        }

        .project h5 {
          font-weight: 600;
          font-size: 1rem;
        }

        .project h6 {
          font-weight: 600;
          font-size: 0.875rem;
        }

        @media only screen and (max-width: 600px) {
          .ptitle {
            font-size: 1.7rem;
          }

          .prw {
            width: 90vw;
          }
        }
      </style>
</head>

<body>
  <?php include("include/header.php"); ?>
  <!--	Header end  -->

  <!-- search start  -->
  <?php include("include/search.php"); ?>
  <!-- search end -->

  <div class="sp mx-auto max-w-7xl px-2 py-0 lg:px-0 prw">
    <div class="overflow-hidden">
      <div class="mb-9 pt-2 md:px-6 md:pt-7 lg:mb-2 lg:p-8 2xl:p-10 2xl:pt-10">
        <nav class="flex mb-5" aria-label="Breadcrumb">
          <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
              <a href="<?php echo weburl; ?>" class="ml-1 inline-flex text-sm font-medium text-gray-800 hover:underline md:ml-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-4 h-4 w-4">
                  <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                  <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                Home
              </a>
            </li>
            <li>
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                  <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
                <a href="<?php echo weburl; ?>/projects?technology=&search=" class="ml-1 text-sm font-medium text-gray-800 hover:underline md:ml-2">
                  projects
                </a>
              </div>
            </li>
            <li aria-current="page">
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                  <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
                <a href="<?php echo weburl; ?>/projects?technology=<?php echo $row['cname']; ?>" class="ml-1 inline-flex text-sm font-medium text-gray-800 hover:underline md:ml-2">
                  <span class="ml-1 text-sm font-medium text-gray-800 hover:underline md:ml-2">
                    <?php echo $row['cname']; ?>
                  </span>
                </a>
              </div>
            </li>
            <li aria-current="page">
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                  <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
                <a href="<?php echo weburl; ?>/project?pid=<?php echo $row['pid']; ?>" class="ml-1 inline-flex text-sm font-medium text-gray-800 hover:underline md:ml-2">
                  <span class="ml-1 text-sm font-medium text-gray-800 hover:underline md:ml-2">
                    <?php echo $row['title']; ?>
                  </span>
                </a>
              </div>
            </li>
          </ol>
        </nav>

        <div class="items-start justify-between lg:flex lg:space-x-8">
          <!-- <div class="mb-6 items-center justify-center overflow-hidden md:mb-8 lg:mb-0 xl:flex"> -->
          <div class="mb-6 mx-auto w-full overflow-hidden">
            <div id="default-carousel" class="relative" data-carousel="static">
              <!-- Carousel wrapper -->
              <div class="overflow-hidden relative h-56 rounded-lg sm:h-64 xl:h-80 2xl:h-96">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <span class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First Slide</span>
                  <img src="<?php echo weburl; ?>/images/project/<?php echo $row['image']; ?>" decoding="async" loading="lazy" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="<?php echo $row['title']; ?>">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img src="<?php echo weburl; ?>/images/project/<?php echo $row['image_1']; ?>" decoding="async" loading="lazy" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="<?php echo $row['title']; ?>">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img src="<?php echo weburl; ?>/images/project/<?php echo $row['image_2']; ?>" decoding="async" loading="lazy" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="<?php echo $row['title']; ?>">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img src="<?php echo weburl; ?>/images/project/<?php echo $row['image_3']; ?>" decoding="async" loading="lazy" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="<?php echo $row['title']; ?>">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                  <img src="<?php echo weburl; ?>/images/project/<?php echo $row['image_4']; ?>" decoding="async" loading="lazy" class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="<?php echo $row['title']; ?>">
                </div>
              </div>
              <!-- Slider indicators -->
              <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
              </div>
              <!-- Slider controls -->
              <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
                <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                  <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                  </svg>
                  <span class="hidden">Previous</span>
                </span>
              </button>
              <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
                <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                  <svg class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                  </svg>
                  <span class="hidden">Next</span>
                </span>
              </button>
            </div>
          </div>

          <div class="flex shrink-0 flex-col lg:w-[430px] xl:w-[470px] 2xl:w-[480px]">
            <div class="pb-2">
              <button type="button" class="rounded-md bg-black px-3 py-2 mb-2 text-sm font-semibold text-white shadow-sm hover:bg-black/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">
                <?php echo $row['cname']; ?>
              </button><button type="button" class="ml-2 rounded-md bg-black px-3 py-2 mb-2 text-sm font-semibold text-white shadow-sm hover:bg-black/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">
                Views: <?php echo $row['views']; ?>
              </button>

              <div>
                <span class="text-gray-600">Posted on <?php echo date('F jS, Y', strtotime($row['date'])); ?></span>
              </div>
              <h2 class="mt-2 text-2x1 font-semibold md:text-xl xl:text-2xl ptitle">
                <?php echo $row['title']; ?>
              </h2>
              <div class="flex items-center">
                <?php echo $row['ratingvalue']; ?> <svg class="ml-1 w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                  </path>
                </svg>
                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                  </path>
                </svg>
                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                  </path>
                </svg>
                <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                  </path>
                </svg>
                <svg class="mr-1 w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                  </path>
                </svg> <?php echo $row['ratingcount'] . ' ratings'; ?>
              </div>



              <h3 class="mt-3 text-xl font-bold leading-tight text-black sm:text-4xl lg:text-2xl"><span class="text-xl">₹ </span><?php echo $row['price']; ?> INR</h3>
            </div>
         
                <a href="<?php echo weburl; ?>/checkout?pid=<?php echo $row['pid']; ?>" class="block relative rounded overflow-hidden">
                  <button type="submit" class="inline-flex items-center justify-center rounded-md bg-green-500 px-6 py-3 text-lg font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">
                    <span class="block">Download</span>
                  </button>
                </a>
          
            <div class="pt-1 xl:pt-3">
              <h3 class="font-semibold sm:text-base">
                Product Details:
              </h3>
              <p class="text-base">
                <?php echo $row['description']; ?>
              </p>
            </div>
            <div class="pt-2 xl:pt-2">
              <b class="text-15px mb-3 mt-4 font-semibold sm:text-base lg:mb-3.5">
                note:
              </b>
              <span class="text-sm">
                These Softwares are not suitable for any of the business requriements.
              </span>
            </div>
          </div>
        </div>
        <hr class="m-10">

        <!-- video embed    -->

        <div class="project">

          <!-- video embed    -->
          <h1 class="text-4xl font-semibold"><?php echo $row['title']; ?></h1>

          <?php echo $row['content']; ?>
         
        </div>
        <!-- project table start  -->
        <section class="mx-auto w-full max-w-7xl py-4">
          <div class="flex flex-col space-y-4 md:flex-row md:items-center md:justify-between md:space-y-0">
            <div>
              <h2 class="text-lg font-semibold">Project Details:</h2>
              <p class="mt-1 text-sm text-gray-700">
                This is a list of Project Details.
              </p>
            </div>
          </div>
          <div class="mt-6 flex flex-col">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden border border-gray-200 md:rounded-lg">
                  <table class="min-w-full divide-y divide-gray-200">
                    <tbody class="divide-y divide-gray-200 bg-white">
                      <tr>
                        <td class="whitespace-nowrap px-4 py-4">
                          <div class="flex items-center">
                            <div>
                              <div class="text-sm text-gray-700"><b>Title</b></div>
                            </div>
                          </div>
                        </td>
                        <td class="whitespace-nowrap px-12 py-4">
                          <div class="text-sm text-gray-700"><?php echo $row['title']; ?></div>
                        </td>
                      </tr>
                      <tr>
                        <td class="whitespace-nowrap px-4 py-4">
                          <div class="flex items-center">
                            <div>
                              <div class="text-sm text-gray-700"><b>ratings</b></div>
                            </div>
                          </div>
                        </td>
                        <td class="whitespace-nowrap px-12 py-4">
                          <div class="text-sm text-gray-700">
                            <div class="flex items-center">
                              <?php echo $row['ratingvalue']; ?> <svg class="ml-1 w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                              </svg>
                              <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                              </svg>
                              <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                              </svg>
                              <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                              </svg>
                              <svg class="mr-1 w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                              </svg> <?php echo $row['ratingcount'] . ' ratings'; ?>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td class="whitespace-nowrap px-4 py-4">
                          <div class="flex items-center">
                            <div>
                              <div class="text-sm text-gray-700"><b>Project Category</b></div>
                            </div>
                          </div>
                        </td>
                        <td class="whitespace-nowrap px-12 py-4">
                          <div class="text-sm text-gray-700"><?php echo $row['cname']; ?></div>
                        </td>
                      </tr>
                      <tr>
                        <td class="whitespace-nowrap px-4 py-4">
                          <div class="flex items-center">
                            <div>
                              <div class="text-sm text-gray-700"><b>Price</b></div>
                            </div>
                          </div>
                        </td>
                        <td class="whitespace-nowrap px-12 py-4">
                          <div class="text-sm text-gray-700">₹ <?php echo $row['price']; ?> INR</div>
                        </td>
                      </tr>
                      <tr>
                        <td class="whitespace-nowrap px-4 py-4">
                          <div class="flex items-center">
                            <div>
                              <div class="text-sm text-gray-700"><b>Documentation</b></div>
                            </div>
                          </div>
                        </td>
                        <td class="whitespace-nowrap px-12 py-4">
                          <div class="text-sm text-gray-700">We don't take any extra charges for any project</div>
                        </td>
                      </tr>
                      <tr>
                        <td class="whitespace-nowrap px-4 py-4">
                          <div class="flex items-center">
                            <div>
                              <div class="text-sm text-gray-700"><b>Helpline</b></div>
                            </div>
                          </div>
                        </td>
                        <td class="whitespace-nowrap px-12 py-4">
                          <a href="https://www.instagram.com/rohitbhure65/" target="_blank" class="block relative rounded overflow-hidden">
                            <div class="text-sm text-gray-700"><button type="submit" class="inline-flex items-center justify-center rounded-md bg-blue-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">
                                <span class="block">Chat with Us</span>
                              </button></div>
                        </td>
                      </tr>
                      <tr>
                        <td class="whitespace-nowrap px-4 py-4">
                          <div class="flex items-center">
                            <div>
                              <div class="text-sm text-gray-700"><b>Note</b></div>
                            </div>
                          </div>
                        </td>
                        <td class="whitespace-nowrap px-12 py-4">
                          <div class="text-sm text-gray-700">These Softwares are not suitable for any of the business requriements.</div>
                        </td>
                      </tr>
                      <tr>
                        <td class="whitespace-nowrap px-4 py-4">
                          <div class="flex items-center">
                            <div>
                              <div class="text-sm text-gray-700"><b>Listed On</b></div>
                            </div>
                          </div>
                        </td>
                        <td class="whitespace-nowrap px-12 py-4">
                          <div class="text-sm text-gray-700"><?php echo date('F jS, Y', strtotime($row['date'])); ?></div>
                        </td>
                      </tr>
                      <tr>
                        <td class="whitespace-nowrap px-4 py-4">
                          <div class="flex items-center">
                            <div>
                              <div class="text-sm text-gray-700"><b>Download</b></div>
                            </div>
                          </div>
                        </td>
                        <td class="whitespace-nowrap px-12 py-4">
                          <a href="<?php echo weburl; ?>/checkout?pid=<?php echo $row['pid']; ?>" class="block relative rounded overflow-hidden">
                            <div class="text-sm text-gray-700"><button type="submit" class="inline-flex items-center justify-center rounded-md bg-green-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">
                                <span class="block">Download</span>
                              </button></div>
                          </a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>

        <iframe class="mx-auto w-full mb-10 mt-10" src="http://www.youtube.com/embed/<?php echo $row['video']; ?>?yt:stretch=16:9&vq=hd1080p&loop=0&color=red&iv_load_policy=3&rel=0&showinfo=0&autohide=0&controls=1" decoding="async" loading="lazy" height="600" allowtransparency="true" frameborder="0"></iframe>

        <div class="mt-4">
          <b>Tags: </b>
          <strong class="rounded-md align-left px-3 py-2 mb-2 text-sm">
            <?php echo $row['keyword']; ?>
          </strong>
        </div>
        <!-- team -->
        <h5 class="mt-10 mb-10 font-semibold text-2xl">About Author:</h5>
        <div class="p-2 rounded-2xl shadow-lg mx-auto">
          <div class="flex flex-row p-2 items-center mx-auto">
            <img class="border-4 border-white" style="
            /* border-radius: 50%; */
            box-shadow:  11px 11px 21px #cccccc,
             -11px -11px 21px #ffffff;" src="<?php echo weburl; ?>/images/user/<?php echo $user['uimg'] ?>" alt="<?php echo $user['uname'] ?>" width="130" height="130" itemprop="image" decoding="async" loading="lazy">
            <div class="ml-6">

              <a href="<?php echo weburl; ?>" rel="author"><span class="text-xl font-semibold"><?php echo $user['uname']; ?></span></a>
              <div class=" mt-2 ">

                <?php echo $user['udescription'] ?>
                <div class="mt-4 text-gray-700">

                  <em><a href="<?php echo $user['url'] ?>" target="_blank"><?php echo $user['url'] ?></a></em>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- team -->
      </div>
    </div>

  </div>
  </div>
  </section>

  <!-- project table end  -->
  </div>
  </div>
  </div>
  </div>

  <?php
      $viewsplus = $row["views"];
      ++$viewsplus;
      mysqli_query($con, "UPDATE project SET views=$viewsplus WHERE slug='$slug';");
  ?>
  <!-- code here  -->
<?php
    } else {
?>
  <!-- code here  -->
  <!-- code here  -->
  <title>Page not Fount</title>
  <meta name="title" content="Page not Fount" />
  <!-- Open Graph / Facebook -->

  <link rel="stylesheet" href="css/style.css">
  <!-- slick slider CSS library files -->
  <script type="text/javascript" src="js/cdntailwindcss.js"></script>
  </head>

  <body>
    <?php include("include/header.php"); ?>
    <!--	Header end  -->

    <!-- search start  -->
    <?php include("include/search.php"); ?>
    <!-- search end -->

    <?php include("include/404.php"); ?>
    <!-- code here  -->
  <?php
    }


  ?>


  <!-- code here  -->

<?php
  } else {
?>
  <!-- code here  -->
  <title>Page not Fount</title>
  <meta name="title" content="Page not Fount" />
  <!-- Open Graph / Facebook -->

  <link rel="stylesheet" href="css/style.css">
  <!-- slick slider CSS library files -->
  <script type="text/javascript" src="js/cdntailwindcss.js"></script>
  </head>

  <body>
    <?php include("include/header.php"); ?>
    <!--	Header end  -->

    <!-- search start  -->
    <?php include("include/search.php"); ?>
    <!-- search end -->

    <?php include("include/404.php"); ?>


  <?php
  }
  ?>

  <?php include("include/footer.php"); ?>

  </body>
  <script type="text/javascript" src="js/custom.js"></script>
  <!-- slick slider JS library file -->

  <!-- <script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
  google.load('visualization', '1', {
    packages: ['annotatedtimeline']
  });
</script> -->

</html>