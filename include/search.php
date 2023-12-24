 <!-- banner start -->
 <section class="banner text-gray-600 body-font" style="background: #6366F1; color: #fff">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white" style="font-weight: 700; font-size: 2.5em">Search Your Project 😀</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Unlocking Innovation, One Line of Code at a Time – Your Gateway to Next-Gen Solutions!</p>
    </div>

    <form name="search" action="projects.php" class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
      <div class="relative flex-grow w-full">
        <select style="height:42px" id="full-name" name="technology" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 text-base outline-none text-white py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          <option style="color: #000" value="">Select Technology</option>
          <option style="color: #000" value="Computer Science">Computer Science</option>
        </select>
      </div>
      <div class="relative flex-grow w-full">
        <input type="search" id="email" name="search" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200 text-base outline-none text-white py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
      </div>
      <button type="submit" class="text-white bg-indigo-500 border-2 border-white py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Search</button>
</form>

  </div>
</section>
        <!-- banner end -->