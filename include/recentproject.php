<section class="text-gray-600 body-font">
<h3 class="mt-40 pb-3 text-center text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Recent <span style="color: rgb(161,54,130);
color: linear-gradient(344deg, rgba(161,54,130,1) 0%, rgba(88,48,179,1) 61%);">projects</span></h3>
  <div class="container px-5 py-7 mx-auto">
    <div class="flex flex-wrap -m-4 justify-center">
    <?php 
    
         $query=mysqli_query($con,"SELECT project.*, category.cname FROM project,category WHERE project.category_id = category.cid LIMIT 6");
         while($row=mysqli_fetch_assoc($query))
         {
             ?>
      <div class="lg:w-1/4 md:w-1/2 p-0 w-full shadow-lg m-3 mt-4 rounded-lg">
        <a href="project.php?pid=<?php echo $row['pid'];?>" class="block relative rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" decoding="async"
                  loading="lazy" src="images/banner/<?php echo $row['image'];?>">
      
        <div class="mt-4 p-3">
          <div class="flex flex-row justify-between">
            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1"><?php echo $row['cname'];?></h3>
            <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">Posted on <?php echo date('F jS, Y',strtotime($row['date']));?></h3>
          </div>
          <h2 class="text-gray-900 title-font text-lg font-medium"><?php echo $row['title'];?></h2>
          <div class="flex flex-row justify-end">
          <button
                  type="button"
                  class="inline-flex items-center justify-center rounded-md bg-green-500 mx-2 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-black/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black"
                >

                  
                  <span class="block">Rs: <?php echo $row['price'];?></span>
                </button>
            <button
                  type="button"
                  class="inline-flex items-center justify-center rounded-md bg-black px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-black/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black"
                >
                 
                  <span class="block">View</span>
                </button>
          </div>
        </div>
        </a>
      </div>
      <?php }?>
    </div>
  </div>
</section>