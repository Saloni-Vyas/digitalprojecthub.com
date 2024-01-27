<section id="team" class="text-gray-600 body-font my-20" style="background: rgb(161,54,130);
background: linear-gradient(344deg, rgba(161,54,130,1) 0%, rgba(88,48,179,1) 61%);">
  <div class="container px-5 mx-auto pb-20 pt-20">
    <div class="flex flex-col text-center w-full mb-20 text-white">
      <h3 class="mt-6 pb-3 text-center text-3xl font-bold leading-tight sm:text-4xl lg:text-5xl">Our <span>Team</span></h3>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Meet the brilliant minds behind the magic – our unstoppable team turning ideas into reality, one project at a time.</p>
    </div>
    <div class="flex justify-center flex-wrap -m-2">
      <?php
      $queryauthor = mysqli_query($con, "SELECT * FROM user LIMIT 2;");
      while ($row = mysqli_fetch_assoc($queryauthor)) {
      ?>
        <div class="p-2 lg:w-1/3 md:w-1/2 w-full">
          <div class="h-full flex items-center p-4 rounded-lg bg-white">
            <img alt="<?php echo $row['uname']; ?>" class="w-20 h-20 bg-gray-100 object-cover object-center flex-shrink-0 rounded-full mr-4" src="<?php echo weburl; ?>/images/team/<?php echo $row['uimg']; ?>" decoding="async" loading="lazy">
            <div class="flex-grow">
              <h2 class="text-gray-900 title-font font-medium mb-1"><?php echo $row['uname']; ?></h2>
              <p class="font-light"><?php echo $row['udescription']; ?></p>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
</section>