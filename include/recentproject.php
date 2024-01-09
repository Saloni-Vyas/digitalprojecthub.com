<section class="text-gray-600 body-font">
  <h3 class="mt-40 pb-3 text-center text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Recent <span style="color: rgb(161,54,130);
color: linear-gradient(344deg, rgba(161,54,130,1) 0%, rgba(88,48,179,1) 61%);">Projects</span></h3>
  <div class="container px-5 py-7 mx-auto">
    <div class="flex flex-wrap -m-4 justify-center">
      <?php

      $query = mysqli_query($con, "SELECT project.*, category.cname FROM project,category WHERE project.category_id = category.cid LIMIT 8");
      while ($row = mysqli_fetch_assoc($query)) {
      ?>
        <div class="lg:w-1/5 md:w-1/2 p-0 w-full shadow-lg m-2 mt-4 rounded-lg">
          <a href="project.php?pid=<?php echo $row['pid']; ?>" class="block relative rounded overflow-hidden">
            <img alt="ecommerce" class="object-cover object-center w-full h-full block" decoding="async" loading="lazy" src="images/banner/<?php echo $row['image']; ?>">

            <div class="mt-4 p-3">
              <div class="flex flex-row justify-between">
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1"><?php echo $row['cname']; ?></h3>
                <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Posted on <?php echo date('F jS, Y', strtotime($row['date'])); ?></h3>
              </div>
              <h2 class="text-gray-900 title-font text-sm font-medium"><?php echo $row['title']; ?></h2>
              <div class="flex flex-row mt-2 justify-end">
                <button type="button" class="inline-flex items-center justify-center rounded-md bg-green-500 mx-2 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-black/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">


                  <span class="block text-xs">₹ <?php echo $row['price']; ?> INR</span>
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
    <div class="flex flex-row mt-10 justify-center ">
    <a href="/projects.php?technology=&search=" class="block relative rounded overflow-hidden">
                <button type="button" class="inline-flex items-center justify-center rounded-md bg-black px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-black/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black">

                  <span class="block text-xs">View More Projects</span>  <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
    </a>
              </div>
  </div>
</section>