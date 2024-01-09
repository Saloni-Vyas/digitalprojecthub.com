<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");
include("include/post.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DigitalProjectHub.com</title>
  <link rel="stylesheet" href="css/style.css">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <?php include("include/header.php"); ?>
  <!--	Header end  -->

  <!-- search start  -->
  <?php include("include/search.php"); ?>
  <!-- search end -->

  <div class="sp mx-auto max-w-7xl px-2 py-10 lg:px-0">
    <div class="overflow-hidden">
      <div class="mb-9 pt-4 md:px-6 md:pt-7 lg:mb-2 lg:p-8 2xl:p-10 2xl:pt-10">
        <?php
        $pid = $_GET['pid'];
        $query = mysqli_query($con, "SELECT project.*, category.cname FROM project,category WHERE project.category_id = category.cid AND pid=$pid");
        $row = mysqli_fetch_assoc($query); ?>
        <nav class="flex mb-5" aria-label="Breadcrumb">
          <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
              <a href="#" class="ml-1 inline-flex text-sm font-medium text-gray-800 hover:underline md:ml-2">
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
                <a href="projects.php?technology=&search=" class="ml-1 text-sm font-medium text-gray-800 hover:underline md:ml-2">
                  projects
                </a>
              </div>
            </li>
            <li aria-current="page">
              <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-4 w-4">
                  <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
                <a href="projects.php?technology=<?php echo $row['cname']; ?>" class="ml-1 inline-flex text-sm font-medium text-gray-800 hover:underline md:ml-2">
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
                <a href="project.php?pid=<?php echo $row['pid']; ?>" class="ml-1 inline-flex text-sm font-medium text-gray-800 hover:underline md:ml-2">
                  <span class="ml-1 text-sm font-medium text-gray-800 hover:underline md:ml-2">
                    <?php echo $row['title']; ?>
                  </span>
                </a>
              </div>
            </li>
          </ol>
        </nav>


        <div class="items-start justify-between lg:flex lg:space-x-8">
          <div class="mb-6 items-center justify-center overflow-hidden md:mb-8 lg:mb-0 xl:flex">
            <div class="w-full xl:flex xl:flex-row-reverse">
              <div class="relative mb-2.5 w-full shrink-0 overflow-hidden rounded-md border md:mb-3 xl:w-[480px] 2xl:w-[650px]">
                <div class="relative flex items-center justify-center">
                  <img alt="Product gallery 1" src="images/banner/tu1.png" width="650" height="590" decoding="async" loading="lazy" class="rounded-lg object-cover md:h-[300px] md:w-full lg:h-full" />
                </div>
                <div class="absolute px-2 top-2/4 z-10 flex w-full items-center justify-between">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white">
                    <polyline points="15 18 9 12 15 6"></polyline>
                  </svg>
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-white">
                    <polyline points="9 18 15 12 9 6"></polyline>
                  </svg>
                </div>
              </div>
              <!-- <div class="flex gap-2 xl:flex-col">
                <div class="border-border-base flex cursor-pointer items-center justify-center overflow-hidden rounded border transition hover:opacity-75 ">
                  <img alt="Product 0" src="images/banner/tu1.png" decoding="async" loading="lazy" class="h-20 w-20 object-cover md:h-24 md:w-24 lg:h-28 lg:w-28 xl:w-32" />
                </div>
                <div class="border-border-base flex cursor-pointer items-center justify-center overflow-hidden rounded border transition hover:opacity-75 ">
                  <img alt="Product 1" src="images/banner/" decoding="async" loading="lazy" class="h-20 w-20 object-cover md:h-24 md:w-24 lg:h-28 lg:w-28 xl:w-32" />
                </div>
                <div class="border-border-base flex cursor-pointer items-center justify-center overflow-hidden rounded border transition hover:opacity-75 ">
                  <img alt="Product 2" src="images/banner/" decoding="async" loading="lazy" class="h-20 w-20 object-cover md:h-24 md:w-24 lg:h-28 lg:w-28 xl:w-32" />
                </div>
              </div> -->
            </div>
          </div>
          <div class="flex shrink-0 flex-col lg:w-[430px] xl:w-[470px] 2xl:w-[480px]">
            <div class="pb-2">
              <button type="button" class="rounded-md bg-black px-3 py-2 mb-2 text-sm font-semibold text-white shadow-sm hover:bg-black/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">
                <?php echo $row['cname']; ?>
              </button>


              <h2 class="mt-2 text-2x1 font-semibold md:text-xl xl:text-2xl">
                <?php echo $row['title']; ?>
              </h2>
              <div>
                <span class="text-gray-600">Posted on <?php echo date('F jS, Y', strtotime($row['date'])); ?></span>
              </div>


              <h3 class="mt-3 text-xl font-bold leading-tight text-black sm:text-4xl lg:text-3xl"><span class="text-green-800">₹ </span><?php echo $row['price']; ?> INR</h3>
            </div>
            <div class="space-y-2.5 md:space-y-3.5 lg:pt-2 xl:pt-4">

              <div class="grid grid-cols-2 gap-2.5">

              <a href="checkout.php?pid=<?php echo $row['pid'];?>" class="block relative rounded overflow-hidden">
                <button type="submit" class="inline-flex items-center justify-center rounded-md bg-green-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">
                  <span class="block">Download</span>

                </button>
              </a>

             
                <div class="relative">
                  <!-- <button
                  type="button"
                  class="inline-flex w-full items-center justify-center rounded-md bg-black px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-black/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    class="mr-3"
                  >
                    <path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"></path>
                    <polyline points="16 6 12 2 8 6"></polyline>
                    <line x1="12" y1="2" x2="12" y2="15"></line>
                  </svg>
                  <span class="block">Share</span>
                </button> -->
                </div>
              </div>
            </div>
            <div class="pt-6 xl:pt-8">
              <h3 class="text-15px mb-3 font-semibold sm:text-base lg:mb-3.5">
                Product Details:
              </h3>
              <p class="text-sm">
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
        <div class="project">
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
                      <div class="text-sm text-gray-700">Title</div>
                    </div>
                  </div>
                </td>
                <td class="whitespace-nowrap px-12 py-4">
                  <div class="text-sm text-gray-700"><?php echo $row['title']; ?></div>
                </td>
              
              </tr>
             
              
              </tr>
              <tr>
                <td class="whitespace-nowrap px-4 py-4">
                  <div class="flex items-center">
                                      <div>
                      <div class="text-sm text-gray-700">Project Category</div>
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
                      <div class="text-sm text-gray-700">Price</div>
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
                      <div class="text-sm text-gray-700">Documentaion</div>
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
                      <div class="text-sm text-gray-700">Helpline</div>
                    </div>
                  </div>
                </td>
                <td class="whitespace-nowrap px-12 py-4">
                  <div class="text-sm text-gray-700">+91 8839178090</div>
                </td>
              
              </tr>
              <tr>
                <td class="whitespace-nowrap px-4 py-4">
                  <div class="flex items-center">
                                      <div>
                      <div class="text-sm text-gray-700">Note</div>
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
                      <div class="text-sm text-gray-700">Listed On</div>
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
                      <div class="text-sm text-gray-700">Download</div>
                    </div>
                  </div>
                </td>
                <td class="whitespace-nowrap px-12 py-4">
                <a href="checkout.php?pid=<?php echo $row['pid'];?>" class="block relative rounded overflow-hidden">
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

        <!-- project table end  -->
      </div>

    </div>
  </div>
  </div>

  <!--	Footer   start-->
  <?php include("include/footer.php"); ?>
  <!--	Footer   start-->


  <!-- Scroll to top -->
  <a href="#" class="bg-success text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a>
  <!-- End Scroll To top -->
</body>

</html>