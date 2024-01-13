<section class="text-gray-600 body-font">
  <div class="mx-auto max-w-7xl py-24 px-4 sm:px-6 lg:px-8">
    <div class="mx-auto max-w-3xl text-center">
      <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-6xl">
      <?php echo $websitename;?> helps you build beautiful <span style="color: rgb(161,54,130);
color: linear-gradient(344deg, rgba(161,54,130,1) 0%, rgba(88,48,179,1) 61%);">projects</span>
      </h2>
      <p class="mt-4 text-base leading-relaxed text-gray-600">
        Elevate your journey through innovation – explore our project categories and embark on a seamless odyssey of creativity and learning!
      </p>
    </div>
    <div class="mt-12 grid grid-cols-1 gap-y-8 text-center sm:grid-cols-2 sm:gap-12 lg:grid-cols-4">
      <?php
      $query = mysqli_query($con, "SELECT * FROM category");
      while ($row = mysqli_fetch_assoc($query)) {
      ?>
        <div>
          <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-9 w-9 text-gray-700">
              <line x1="12" y1="2" x2="12" y2="22"></line>
              <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
            </svg>
          </div>
          <h3 class="mt-8 text-lg font-semibold text-black"><?php echo $row["cname"]; ?></h3>
          <p class="mt-4 text-sm text-gray-600">
            <?php echo $row["description"]; ?>
          </p>
        </div>
      <?php } ?>
      <div>
      </div>
    </div>
  </div>
</section>